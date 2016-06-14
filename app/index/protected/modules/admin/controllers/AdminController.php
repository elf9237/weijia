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
class AdminController extends BaseController{
    
    
    public function actionIndex(){
        echo 1111;die;
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
         $connection = Yii::app()->db;
         $usetModel = User::model();
         $cnt=$usetModel->count();
         $page=$_POST['page'];
      $pageAjax= new PageAjax($cnt,$page,2);    
       $sql="select t.*,count(tt.id) as fans,ifnull(sum(tt.jubao),0) jubaos 
from cy_user t 
left join (
	select t1.user_id,t1.id,count(t2.id) as jubao  from cy_info t1 
	left join cy_message t2 
	on(t1.id = t2.info_id and t2.message_type=1) group by t1.id  ) 
as tt on(t.login_id = tt.user_id) where 1=1";
if(!empty($_POST['username'])){
          $sql.=" and t.username like '%".$_POST['username']."%'";
      }
       if(!empty($_POST['type'])){
          $sql.=" and t.type = '".$_POST['type']."'";
      }
       if(!empty($_POST['status'])){
           $sql.=" and t.status = ".$_POST['status']." ";
      }
 $sql.=" GROUP BY t.login_id ";
       $sql.=$pageAjax->limit;
       
       $command = $connection->createCommand($sql);
       $rows=$command->queryAll();
       $pageAjax->pageList=$rows;
       echo json_encode($pageAjax);
        
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
        $userModel=User::model();
        $sql="select * from cy_user where id=$id";
        echo $sql;
        $user_info=$userModel->findBySql($sql);
        $user_info->status=1;
//        $ar->status=$userModel->save($user_info);
        echo json_encode($user_info);
        
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

 $pagelist=new PageList($sql, $page, 2);
 
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
        if($fangzi->save()&&$message.save()){
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
 $pagelist=new PageList($sql, $page, 2);
 
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
    public function actionLogin(){
        $this ->renderPartial('login');
    }
    
}
