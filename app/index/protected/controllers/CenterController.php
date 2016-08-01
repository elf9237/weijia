<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 17:35
 */
class CenterController extends BaseController{
//    个人中心首页
    public function actionCenterIndex(){
        $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin)){
                $loginuserid=$userLogin->id;
                $weidu=count(Message::model()->findAll('receiver='.$loginuserid.' and message_type in(0,2) and read_time=0 '));
                
            $this -> renderPartial('centerIndex',array("weidu"=>$weidu));
            
            }
    else {
    $this ->redirect ("index.php?r=site/login");
    
    }
    }
//    我的发布
    public function actionMydingdan(){
        $this -> renderPartial('dingdan');
    }
//    我的发布
    public function actionIssue(){
        $this -> renderPartial('issue');
    }
//    我的收藏
    public function actionCollect(){
        
        $this -> renderPartial('collect');
    }
//    我的预定
    public function actionReverse(){
        $this -> renderPartial('reverse');
    }
//    已租房源
    public function actionHasrent(){
        $this-> renderPartial('hasrent');
    }
//    我的租客
    public function actionMytenant(){
        $this -> renderPartial('mytenant');
    }
    
      public function actionMyfenxiao(){
        $this -> renderPartial('myfenxiao');
    }
//    我的佣金
    public function actionMybroker(){
        $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
         $userModel=  User::model();
           $userinfo=$userModel->find('id='.$loginuserid);
        
        $this -> renderPartial('mybroker',array("userinfo"=>$userinfo));
    }
     public function actionQueryTixian(){
         $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
        $page=$_POST['page'];
  
       $sql="select t.* from cy_tixian t  where 1=1 " ;

      
       $sql.=" and t.user_id = ".$loginuserid." ";
       
      
       $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
    }
    
     public function actionQueryfenxiao(){
         $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
                $loginuserid=$userLogin->id;
        $page=$_POST['page'];
  
       $sql="select t.* from cy_user t  where 1=1 " ;

      
       $sql.=" and t.inviter = ".$loginuserid." ";
       
      
       $pagelist=new PageList($sql, $page, 10);
 
       echo json_encode($pagelist->pageAjax);
    }
    
//    提现申请
    public function actionForward(){
        $ar= new AjaxReturn();
        $id=$_POST['id'];
        $jine=$_POST['jine'];
         $userModel=  User::model();
         $tixianModel = new Tixian();
           $userinfo=$userModel->find('id='.$id);
           $userinfo->yue=0;
           $tixianModel->user_id=$id;
           $tixianModel->jine=$jine;
           $tixianModel->create_time=time();
           $tixianModel->status=0;
           $transaction=Yii::app()->db->beginTransaction();
          try{
              if($tixianModel->save()&&$userinfo->save()){
                 $ar->status=true; 
                  
    }
              $transaction->commit();
          }  catch (Exception $e){
              $ar->status=false; 
              $transaction->rollback();
          }
       echo json_encode($ar);
    }
//    我要佣金
    public function actionWmoney(){
         $loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(empty($userLogin)){
               $this ->redirect ("index.php?r=site/login"); 
            }
        $jsapiTicket = $this->getJsApiTicket();
        $timestamp = time();
        $nonceStr = $this->createNonceStr(10);
        $url = Yii::app()->request->hostInfo.Yii::app()->request->getUrl();

        $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

        $signature = sha1($string);

        $signPackage = array(
            "appId"     => 'wx10b693027f09c60e',
            "nonceStr"  => $nonceStr,
            "timestamp" => $timestamp,
            "url"       => $url,
            "signature" => $signature
        );

        $nUid = $this->getUserId();
        $strBaseUri = 'Site/register';
        //$securityManager = Yii::app()->getSecurityManager();
        $arrUrlParam = array(
            'r' => $strBaseUri,
            'timestamp' => time(),
            'pid' => $nUid//base64_encode($securityManager->encrypt($nUid, $this->key)),
        );
        $arrUrlParam['sign'] = $this->getAuthSignStr($arrUrlParam);
        $strshareUrl = Yii::app()->request->hostInfo.$this->createUrl($strBaseUri, $arrUrlParam);
        $this -> renderPartial('wmoney', array('package' => $signPackage, 'shareurl' => $strshareUrl));
    }
//    出租审核
    public function actionShenhe(){
        $this -> renderPartial('shenhe');
    }
    //    我的消息
    public function actionMessage(){

        $this -> renderPartial('message');
    }
    //    我的消息详情
//    public function actionMessagedetail(){
//        $this -> renderPartial('messagedetail');
//    }
//消息详情展示
    public function actionShowdetail(){
        $id=$_POST['id'];
        $sql="select t.* from cy_message t where t.id=".$id ." ";
        $pagelist=new PageList($sql, 1, 1);
        echo json_encode($pagelist->pageAjax);
    }
    public function actionCheck(){
        $ar = new AjaxReturn();
        $id=$_POST['id'];
         $type=$_POST['type'];
          $rentModel= Rentinfo::model();
          $cyModel=  Info::model();
         
          $rentinfo = $rentModel->findByPk($id);
           $cyinfo=$cyModel->findByPk($rentinfo->info_id);
           $userModel=  User::model();
           $userinfo=$userModel->find('id='.$cyinfo->user_id);
           $userinfosend=$userModel->find('id='.$rentinfo->sender);
        if($type==2){
            $rentinfo->status=2;
          $ar->status=$rentinfo->save();
        }else{
            if($cyinfo->yong_jin!=0){
                $userinfosend->yue=$userinfosend->yue+$cyinfo->yong_jin*0.5;
                 $message_model =new Message();
                  $message_model -> message='系统信息：你获得返现--'.$cyinfo->yong_jin*0.5.'元';
                  $message_model -> receiver=$userinfosend->id;
                    $message_model -> info_id=-1;
                       $message_model->sender=-1;  
                       $message_model->message_type=2;
                         $message_model->create_time=time();
                               $message_model->save();
                 
                $userinfosendf=$userModel->find('id='.$userinfosend->inviter);
                if($userinfosendf){
                    $userinfosendf->yue=$userinfosendf->yue+$cyinfo->yong_jin*0.15;
                     $message_modelf =new Message();
                  $message_modelf -> message='系统信息：你获得佣金--'.$cyinfo->yong_jin*0.15.'元';
                  $message_modelf -> receiver=$userinfosendf->id;
                    $message_modelf -> info_id=-1;
                       $message_modelf->sender=-1;  
                       $message_modelf->message_type=2;
                         $message_modelf->create_time=time();
                               $message_modelf->save();
                    
                    $userinfosendff=$userModel->find('id='.$userinfosendf->inviter);
                    if($userinfosendff){
                         $userinfosendff->yue=$userinfosendff->yue+$cyinfo->yong_jin*0.15;
                          $message_modelff =new Message();
                  $message_modelff -> message='系统信息：你获得佣金--'.$cyinfo->yong_jin*0.15.'元';
                  $message_modelff -> receiver=$userinfosendff->id;
                    $message_modelff -> info_id=-1;
                       $message_modelff->sender=-1;  
                       $message_modelff->message_type=2;
                         $message_modelff->create_time=time();
                               $message_modelff->save();
                         $userinfosendff->save();
    }
                  $userinfosendf->save();
}
                
            }
             $rentinfo->status=1;
             $cyinfo->lend_status=1;
            
             if( $cyinfo->save()&&
             $userinfosend->save()&&
             $rentinfo->save()){
                 $ar->status=true;
             }else{
                   $ar->status=false;
             }
             
            
        }
        echo json_encode($ar);
    }
    //    登入
    public function actionLogin(){
        $this -> renderPartial('login');
    }
    //    注册
    public function actionAssign(){

        $this -> renderPartial('assign');
    }
    //    忘记密码
    public function actionForgetpsw(){
        $this -> renderPartial('forgetpsw');
    }
    //    修改用户密码
    public function actionModify(){

        $userLogin= Yii::app()->session['user'] ;
        $this->render('modify',array("userLogin"=>$userLogin));
    }
    public function actionModifynext(){
        $ar=new AjaxReturn();
      $loginuserid=-1;
       $userLogin= Yii::app()->session['user'] ;
      if(!empty($userLogin))
           $loginuserid=$userLogin->id;
        if($loginuserid==-1){
            $ar->status=false;
            $ar->content="请选登陆再修改密码";
            echo json_encode($ar);
            return;
        }
        $passwordnew = $_POST['passwordnew'];
        $passwordold=$_POST['passwordold'];
        $username=$_POST['username'];
        $userinfonew=User::model()->find("id=".$userLogin->id);
        if(!$userinfonew->password==md5($passwordold)){
            $ar->status=false;
            $ar->content="旧密码错误";
            echo json_encode($ar);
            return;
        }else{
            $userinfonew->password=md5($passwordnew);
            $userinfonew->username=$username;
            $ar->status=$userinfonew->save();
            Yii::app()->session['user']=$userinfonew;
            echo json_encode($ar);
        }


    }
    
    public function actionToUpdateMyhome($infoid){
        $cyinfo = Info::model()->findByPk($infoid);
         $this -> renderPartial('update_myhome',array("cyinfo"=>$cyinfo));
    }
    
    
      public function actionUpdateMyhome($infoid){
          $ar = new AjaxReturn();
        $cyinfo = Info::model()->findByPk($infoid);
         $cyinfo->price=$_POST["price"];
         $cyinfo->detail=$_POST["detail"];
         $cyinfo->info_name=$_POST["info_name"];
         $cyinfo->mian_url=$_POST["mian_url"];
         $cyinfo->public_url=$_POST["public_url"];
         $cyinfo->room_url=$_POST["room_url"];
         $ar->status=$cyinfo->save();
        echo json_encode($ar);
    }
//我的预约
    public function actionMyyuyue(){


        $this -> renderPartial('myyuyue');
    }
    // 网络电子协议
     public function actionXieyi(){


        $this -> renderPartial('xieyi');
    }
}