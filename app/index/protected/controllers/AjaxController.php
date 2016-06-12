<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AjaxController
 *
 * @author fanyouyong
 */
class AjaxController extends BaseController {
    //put your code here
    public function actionQueryFangyu(){
        
         $page=$_POST['page'];
  
       $sql="select t.*,t2.orderno,t3.type from cy_info t left join (select t1.*,50 as orderno from cy_infotop t1 where t1.end_time>".time()." GROUP BY  t1.info_id) t2 on(t2.info_id = t.id) left join cy_user t3 on(t3.id=t.user_id) where 1=1 " ;

       if($_POST['rooms']!=-1){
          $sql.=" and t.rooms = ".$_POST['rooms']." ";
      }
       if($_POST['info_type']!=-1){
          $sql.=" and t.info_type = ".$_POST['info_type']." ";
      }
       if(!empty($_POST['prov'])){
          $sql.=" and t.province like '".$_POST['prov']."%'";
      }
       if(!empty($_POST['city'])){
          $sql.=" and t.city like '".$_POST['city']."%'";
      }
       if(!empty($_POST['dist'])){
          $sql.=" and t.zone like '".$_POST['dist']."%'";
      }
      
          $sql.=" and t.price >= ".$_POST['sprice']." and t.price<=".$_POST['eprice']." order by (t.yong_jin+t2.orderno) desc,t.create_time DESC ";
 $pagelist=new PageList($sql, $page, 10);

       echo json_encode($pagelist->pageAjax);
        
    } 
     public function actionMymess(){
         $this->render('mymess');
         
     }
      public function actionQuerymymess(){
         $page=$_POST['page'];
       $sql="select t.info_name,t1.* from cy_info t right join cy_message t1 on(t1.info_id=t.id) where 1=1 and t1.message_type in(0,2) and t1.receiver=123 " ;
   
 $pagelist=new PageList($sql, $page, 10);

       echo json_encode($pagelist->pageAjax);
         
     }
     public function actionBiaoji(){
         $id=$_POST['id'];
         $messModel=  Message::model();
         $messsinfo=$messModel->findByPk($id);
         $messsinfo->read_time=time();
         $ar=new AjaxReturn();
         $ar->status=$messsinfo->save();
         echo json_encode($ar);
         
     }
    
     public function actionDelMess(){
         $id=$_POST['ids'];
         $messModel=  Message::model();
         $count=$messModel->deleteAll('id in('.$id.')');
       
         $ar=new AjaxReturn();
         if($count>0)
         $ar->status=true;
         else
                 $ar->status=false;    
             
         echo json_encode($ar);
         
     }
     public function actionMyyuyue(){
         $this->render('myyuyue');
         
     }
     public function actionQueryyuyue(){
         $page=$_POST['page'];
       $sql="select t.*,t1.order_time from cy_info t join cy_message t1 on(t1.info_id=t.id) where 1=1 and t1.message_type=0 and t1.sender=2 " ;
   
 $pagelist=new PageList($sql, $page, 5);

       echo json_encode($pagelist->pageAjax);
         
     }
      public function actionMycoll(){
         $this->render('mycoll');
         
     }
     public function actionQueryColl(){
          $page=$_POST['page'];
       $sql="select t.* from cy_info t join cy_favorite t1 on(t1.info_id=t.id) where 1=1  and t1.user_id=2 " ;
   
 $pagelist=new PageList($sql, $page, 5);

       echo json_encode($pagelist->pageAjax);
     }
      public function actionMyhome(){
         $this->render('myhome');
         
     }
     /**
      * 我的房源
      */
     public function actionQuerymyhome(){
          $page=$_POST['page'];
       $sql="select t.* from cy_info t  where 1=1  and t.user_id=123 " ;
 $pagelist=new PageList($sql, $page, 5);
  echo json_encode($pagelist->pageAjax);
     }
     public function actionQuerymyrent(){
          $page=$_POST['page'];
       $sql="select t.*,t1.status as rstatus from cy_info t join cy_rentinfo t1 on(t1.info_id=t.id)  where 1=1  and t1.sender=123" ;
   
 $pagelist=new PageList($sql, $page, 5);
  echo json_encode($pagelist->pageAjax);
     }
         public function actionQuerymyShen(){
          $page=$_POST['page'];
       $sql="select t.*,t1.id as rid from cy_info t join cy_rentinfo t1 on(t1.info_id=t.id)  where 1=1  and t.user_id=123 and t1.status=0" ;
   
 $pagelist=new PageList($sql, $page, 5);
  echo json_encode($pagelist->pageAjax);
     }
     
      public function actionAddmyhome(){
         $this->render('addmyhome');
         
     }
      public function actionSavemyhome(){
     $ar=new     AjaxReturn();
     $info= new Info();
     $info->area=$_POST['area'];
     $info->bus=$_POST['bus'];
     $info->city=$_POST['city'];
     $info->create_time=time();
     $info->detail=$_POST['detail'];
     $info->direction=$_POST['direction'];
     $info->district=$_POST['district'];
     $info->floors=$_POST['floors'];
     $info->house_type=$_POST['house_type'];
     $info->info_name=$_POST['info_name'];
     $info->map=$_POST['map'];
     $info->nfloor=$_POST['nfloor'];
     $info->rooms=$_POST['rooms'];
     $info->public_url=$_POST['public_url'];
     $info->mian_url=$_POST['mian_url'];
     $info->room_url=$_POST['room_url'];
     $info->user_id=123;
     $info->price=$_POST['price'];
      $info->province=$_POST['prov'];
      $info->style='中等';
      $info->zone=$_POST['zone'];
      $info->audit_content="通过";
      $info->market="无";
      $info->yong_jin=0;
     
      $isSuccess=$info->save();
     
      if($isSuccess){
     $shebei=$_POST['shebei'];
     $shebeis = explode(',',$shebei);


   if(count($shebeis)>0){  
     $transaction=Yii::app()->db->beginTransaction();
try{
    for($index=0;$index<count($shebeis);$index++)
{
$roomeqip=new RoomEquip();
$roomeqip->info_id=$info->id;
 $roomeqip->equip_id=$shebeis[$index];
 $roomeqip->equiped=1;
 $roomeqip->room_id=-1;
 $roomeqip->save();
} 


  $transaction->commit();
} catch(Exception $e){
  $transaction->rollBack();
      }
   }
}
       $ar->status=$isSuccess;
       echo json_encode($ar);
     }
     public function actionColl(){
         $favorite=new Favorite();
         $favorite->info_id=$_POST['id'];
         $favorite->user_id=2;
         $favorite->create_time=time();
         $ar=new AjaxReturn();
         $ar->status=$favorite->save();
         echo json_encode($ar);
         
     }
     public function actionQuerymyshenhehome(){
          $page=$_POST['page'];
       $sql="select t.*,t1.id as rentid from cy_info t join cy_rentinfo t1 on(t1.info_id=t.id)  where 1=1  and t1.status=0 and t.lend_status=0 and t.user_id=123 " ;
 $pagelist=new PageList($sql, $page, 5);
  echo json_encode($pagelist->pageAjax);
     }
     
      public function actionZhuangxiu(){
         $this->render('zhuangxiu');
         
     }
     public function actionBanjia(){
         $this->render('banjia');
         
     }
     public function actionKanfang(){
         $this->render('kanfang');
         
     }
    
}
