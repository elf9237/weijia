<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author fanyouyong
 */
class AdminController extends CController{


  public function init(){
        if(!$this->is_login()){


            //$this->renderPartial('login');die;

            //header("Location: http://".$_SERVER['SERVER_NAME']."/app/index/index.php?r=admin/admin/login");
            //$this->redirect('index.php?r=admin/admin/login');
            $this->redirect(array('login/index'));
        }
    }

    public function is_login(){


        $session = Yii::app()->session;
        $adminUser = $session['userAdmin'];
        if($adminUser){
            return true;
        }else{
            return false;
        }

    }

    public function actionIndex(){
        //echo 1111;die;
        $this->render("index");
    }
    public function actionIntroduce(){
         $this->render("introduce");
    }
    /**
     * 跳转至用户页面
     */
    public function actionUser(){
        
       $this->render("user_list");
    }
    public  function actionQueryUser(){
         $page=$_POST['page'];
        
       $sql="select t.*,count(tt.id) as fans,ifnull(sum(tt.jubao),0) jubaos 
from cy_user t 
left join (
	select t1.user_id,t1.id,count(t2.id) as jubao  from cy_info t1 
	left join cy_message t2 
	on(t1.id = t2.info_id and t2.message_type=1) group by t1.id  ) 
as tt on(t.id = tt.user_id) where 1=1";
if(!empty($_POST['username'])){
          $sql.=" and t.username like '%".$_POST['username']."%'";
      }
       if(!empty($_POST['type'])){
          $sql.=" and t.type = '".$_POST['type']."'";
      }
       if(!empty($_POST['status'])){
           $sql.=" and t.status = ".$_POST['status']." ";
      }
 $sql.=" and t.type in ('1','0') GROUP BY t.id ";
       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
        
    }
    public function actionBiaojipt(){
        $ar= new AjaxReturn();
        $userinfo=  User::model()->find("id=".$_POST['id']);
        $userinfo->type='0';
        $userinfo->save();
        $ar->status=true;
        echo json_encode($ar);
    
    }
    
     public function actionDlsUser(){
        
       $this->render("dlsuser");
    }
    
     public  function actionQueryDlsUser(){
         $page=$_POST['page'];
        
       $sql="select t.* ,tt.create_time as ctime,tt.price,tt.zone as zone1
from cy_user t 
 join (select t1.* from cy_agentform t1 join  (select max(t2.create_time) as maxtime ,t2.user_id from cy_agentform t2 where t2.audit_status=2 GROUP BY t2.user_id) t2 on(t2.maxtime=t1.create_time and t2.user_id =t1.user_id)) tt 
  on(t.id = tt.user_id) where 1=1 ";
if(!empty($_POST['username'])){
          $sql.=" and t.username like '%".$_POST['username']."%'";
      }
       if(!empty($_POST['status'])){
           $sql.=" and t.status = ".$_POST['status']." ";
      }

       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
        
    }
    
    /**
     * 拉黑用户
     */
    public function actionLahei(){
        $ar=new AjaxReturn ();
        if(empty($_POST['id'])){
        $ar->status=false;
          $ar->content="参数不完整";
        echo json_encode($ar);
        }
        $id=$_POST['id'];
         $status=$_POST['status'];
         
        $userModel=User::model();
    
      
        $user_info=$userModel->find('id='.$id);
        if(!$status||$status==0)
        $user_info->status=1;
        else
        $user_info->status=0;
        $ar->status=$user_info->save($user_info);
        echo json_encode($ar);
        
    }
    /**
     * 添加用户
     */
    public function actionAdduser(){
        $this->render("add_user");
    }
    /**
     * 提醒用户
     */
    public function actionTixing(){
         $ar=new AjaxReturn ();
        if(empty($_POST['id'])){
            $ar->status=false;
            echo json_encode($ar);
        }else{
        $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$_POST['id'];
        $message->message_type=2;
        $message->message=$_POST['message'];
        $ar->status=$message->save();
        echo json_encode($ar);
        }
        
    }
    /**
     * 跳转至房源管理
     */
    public function actionTohouse(){
        $this->render("house_list");
    }
    /**
     * 查询房源
     */
     public  function actionQueryhouse(){
         $page=$_POST['page'];
  
       $sql="select t.*,count(t1.id) as cishu from cy_info t left join cy_message t1 on(t1.info_id=t.id and t1.message_type=1) where 1=1" ;

       if(!empty($_POST['lend_status'])){
          $sql.=" and t.lend_status = ".$_POST['lend_status']." ";
      }
       if(!empty($_POST['audit_status'])){
          $sql.=" and t.audit_status = ".$_POST['audit_status']."";
      }
      
          $sql.=" and t.price >= ".$_POST['bprice']." and t.price<=".$_POST['eprice']." ";
     
       if(!empty($_POST['rooms'])){
           if($_POST['rooms']!=4)
          $sql.=" and t.rooms = ".$_POST['rooms']." ";
      else {
           $sql.=" and t.rooms >= ".$_POST['rooms']." ";
      }
      }
       if(!empty($_POST['info_type'])){
           $sql.=" and t.info_type = ".$_POST['info_type']." ";
      }
       
 $sql.=" GROUP BY t.id ";

 $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
        
    }
    /**
     * 下架或者重新上线产品
     */
    public function  actionXiaJia(){
        $ar=new AjaxReturn();
        $id=$_POST['id'];
        $type=$_POST['audit_status'];
        
        if(empty($id)){
          $ar->status=false;
          $ar->content="参数不完整！";
          echo json_encode($ar);
        }else{
        
            if($type==0){
                    
       $infoModel=  Info::model();
       $fangzi=$infoModel->findByPk($id);
       $fangzi->audit_id=1;
       $fangzi->audit_status=1;
       $fangzi->audit_content='经平台验证本房源为虚假房源';
//       echo json_encode($fangzi);
       $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$fangzi->user_id;
        $message->message_type=2;
        $message->message='你所上传的房源系虚假房源已被下架，房源名称：'.$fangzi->info_name;
        if($fangzi->save()&&$message->save()){
        $ar->status=true;
        
        }else{
             $ar->status=false;
             $ar->content="系统异常";
        }
        echo json_encode($ar);
       
            }else{
              
       $infoModel=  Info::model();
       $fangzi=$infoModel->findByPk($id);
       $fangzi->audit_id=1;
       $fangzi->audit_status=0;
       $fangzi->audit_content='经复核你的房源已复核平台要求';
       $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$fangzi->user_id;
        $message->message_type=2;
        $message->message='经复核你的房源已重新上架，房源名称：'.$fangzi->info_name;
        if($message->save()&&$fangzi->save()){
        $ar->status=true;
        
        }else{
             $ar->status=false;
        }
        echo json_encode($ar);
       
              
                
            } 
        }
        
    }
     /**
     * 跳转至代理商
     */
    public function actionTodls(){
        $this->render("dls_list");
    }
     /**
     * 查询代理商信息
     */
     public  function actionQuerydls(){
         $page=$_POST['page'];
  
       $sql="select t.* from cy_agentform t  where 1=1 " ;

       if(!empty($_POST['audit_status'])){
          $sql.=" and t.audit_status = ".$_POST['audit_status']." ";
      }
 $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
        
    }
    public function actionShenhe(){
          $ar=new AjaxReturn();
          $ar->status=false;
        $type=$_POST['type'];
        $id=$_POST['id'];
        $mes=$_POST['message'];
        $agentModel=  Agentform::model();
        $agentInfo = $agentModel->findByPk($id);
        $agentInfo->audit_status=$type;
         $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$agentInfo->user_id;
        $message->message_type=2;
        if($type==2)
        $message->message='你的代理申请已通过，审批意见：'.$mes.'.具体事务请联系管理人员进行确认！！';
         if($type==1)
        $message->message='你的代理申请已驳回，审批意见：'.$mes;
         if($type==2){
         $userInfo =  User::model()->find('id='.$agentInfo->user_id);
         if($userInfo){
            $userInfo->type='2'; 
            $userInfo->save();
             
         }
         }     
        
    
    if($agentInfo->save()&&$message->save()){
              $ar->status=true;
    }
    echo json_encode($ar);
    }
    public function actionDelagent(){
          $ar=new AjaxReturn();
          $ar->status=false;
        $id=$_POST['id'];
         $agentModel=  Agentform::model();
        $agentInfo = $agentModel->findByPk($id);
        if($agentInfo->delete()){
            $ar->status=true; 
        }
        echo $ar;
    }
    
    public function actionTotixian(){
        $this->render("tixian_list");
        
    }
    /**
     * 提现查询
     */
    public function actionQueryTixian(){
        
        $page=$_POST['page'];
  
       $sql="select t.* from cy_tixian t  where 1=1 " ;

       if(!empty($_POST['status'])){
       $sql.=" and t.status = ".$_POST['status']." ";
       
       }
       $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
    }
    /**
     * 审核提现
     */

    public function actionShenHeTiXian(){
         $ar=new AjaxReturn();
          $ar->status=false;
        $type=$_POST['type'];
        $id=$_POST['id'];
        $mes=$_POST['message'];
        $agentModel= Tixian::model();
        $agentInfo = $agentModel->findByPk($id);
        $agentInfo->status=$type;
        
        $userInfo =  User::model()->find('id='.$agentInfo->user_id);
        
         $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$agentInfo->user_id;
        $message->message_type=2;
        if($type==1)
        $message->message='你的提现申请已通过，审批意见：'.$mes.'.具体事务请联系管理人员进行确认！！';
         if($type==2)
        $message->message='你的提现申请已驳回，审批意见：'.$mes;
         
         if($type==1){
             $paybase = new BaseController();
             $issuccess=$paybase->doSharePay($userInfo->openid, $agentInfo->jine*100);
             if(!$issuccess){
                 $agentInfo->status=3;
                 $userInfo->yue=$userInfo->yue+$agentInfo->jine;
                  $message->message='你的提现申请出现故障金额已退还到你的账户请查收！';
             }
         }else{
               $userInfo->yue=$userInfo->yue+$agentInfo->jine;
         }
         
         
       
             
        
    
    if($agentInfo->save()&&$message->save()&&$userInfo->save()){
              $ar->status=true;
    }
    echo json_encode($ar);
    }
    
    

    /**
     *
     */
   /* public function actionLogin(){

        $this->renderPartial('login');
    }*/
    
    public function actionToshouyi(){
         $this->render("shouyi");
        
    }
    
     public function actionQueryshouyi(){
        
        $page=$_POST['page'];
  
       $sql="select sum(case  when t.order_type='房租' then t.pay_price else 0 end) as fangzu,"
               . "sum(case  when t.order_type='置顶' then t.pay_price else 0 end) as zhiding,"
               . "sum(case  when t.order_type='佣金' then t.pay_price else 0 end) as yongjin "
               . "from cy_order t join cy_info t1 on(t1.id=t.info_id)  where 1=1 and t.audit_status =1 " ;

    
       if(isset($_POST['bTime'])&&isset($_POST['eTime'])){
          $sql.=" and t.create_time >= ".$_POST['bTime']."  and t.create_time<=".$_POST['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_POST['province']."' and t1.city='".$_POST['city']."' and t1.zone='".$_POST['zone']."'";
       
      
       
       $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
    }
    /**
     * 佣金退款
     */
     public function actionQueryZhichuyong(){
        $page=$_POST['page'];
       $sql="select "
               . "sum(case  when t.order_type='佣金' then t.pay_price else 0 end) as yongjin "
               . "from cy_order t join cy_info t1 on(t1.id=t.info_id)  where 1=1 and t.audit_status =4 " ;
       if(isset($_POST['bTime'])&&isset($_POST['eTime'])){
          $sql.=" and t.create_time >= ".$_POST['bTime']."  and t.create_time<=".$_POST['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_POST['province']."' and t1.city='".$_POST['city']."' and t1.zone='".$_POST['zone']."'";
       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
    }
    /**
     * 
     */
      public function actionQueryZhichuxian(){
        $page=$_POST['page'];
       $sql="select "
               . "sum(t.jine) as tixian "
               . "from cy_tixian t join cy_user t1 on(t1.id=t.user_id)  where 1=1 and t.status =1 " ;
       if(isset($_POST['bTime'])&&isset($_POST['eTime'])){
          $sql.=" and t.create_time >= ".$_POST['bTime']."  and t.create_time<=".$_POST['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_POST['province']."' and t1.city='".$_POST['city']."' and t1.zone='".$_POST['zone']."'";
       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
    }
    
    
     public function actionTotuikuan(){
         $this->render("tuikuan");
        
    }
    
     public function actionQuerytuikuan(){
        
        $page=$_POST['page'];
  
       $sql="select t1.info_name,t.* "
               . "from cy_order t join cy_info t1 on(t1.id=t.info_id)  where 1=1 and t.audit_status =3 and t1.lend_status =0 and t.order_type='佣金' " ;

    
      
       
      
       
       $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
    }
    /**
     * 退款审核
     */
    public function actionSureTui(){
        
        
         $ar=new AjaxReturn();
          $ar->status=false;
        $id=$_POST['id'];
        
        $agentModel= Order::model();
        $agentInfo = $agentModel->findByPk($id);
        $agentInfo->audit_status=4;
        $agentInfo->audit_time=time();
         $message=new Message();
        $message->info_id=-1;
        $message->sender=1;
        $message->receiver=$agentInfo->user_id;
        $message->message_type=2;
        $message->message='你的退款申请已通过，具体事务请联系管理人员进行确认！！';
        
    
    if($agentInfo->save()&&$message->save()){
              $ar->status=true;
    }
    echo json_encode($ar);
        
    }
    
     public function actionToliushui(){
         $this->render("liushui");
    }
    
    
      public function actionQuerytixianLiu(){
        $page=$_POST['page'];
       $sql="select "
               . "t.* ,t1.zone "
               . "from cy_tixian t join cy_user t1 on(t1.id=t.user_id)  where 1=1 and t.status =1 " ;
       if(isset($_POST['bTime'])&&isset($_POST['eTime'])){
          $sql.=" and t.create_time >= ".$_POST['bTime']."  and t.create_time<=".$_POST['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_POST['province']."' and t1.city='".$_POST['city']."' and t1.zone='".$_POST['zone']."'";
       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
    }
    
     public function actionQueryorder(){
        $page=$_POST['page'];
       $sql="select "
               . "t.*,t1.zone "
               . "from cy_order t join cy_info t1 on(t1.id=t.info_id)  where 1=1 and t.audit_status in(4,1) " ;
       if(isset($_POST['bTime'])&&isset($_POST['eTime'])){
          $sql.=" and t.create_time >= ".$_POST['bTime']."  and t.create_time<=".$_POST['eTime']." "; 
       }
       $sql.=" and  t1.province='".$_POST['province']."' and t1.city='".$_POST['city']."' and t1.zone='".$_POST['zone']."'";
       $pagelist=new PageList($sql, $page, 10);
       echo json_encode($pagelist->pageAjax);
    }
    function actionForget(){
        $userinfo=  User::model()->find('id='.$_POST['id']);
        $ar= new AjaxReturn();
        $userinfo->password=  md5($_POST['password']);
        $ar->status=$userinfo->save();
        echo json_encode($ar);
        
    }
    
    
}


