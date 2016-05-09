<?php
/**
 * 预约看房
 */
class MessController extends BaseController
{
    /**
     * 预约
     * @param type $userid
     * @param type $infoid
     */
	public function actionYu($userid,$infoid) {
          
		$this->render('yuyue',array("userid"=>$userid,"infoid"=>$infoid));
	}
        
	public function actionSaveyu($userid,$infoid) {
              $message_model =new Message();
              $ajaxReturn =  array('status'=>false,'content'=>'');
                   $message_model -> message='预约看房，姓名：'.$_POST['real_name'].',手机号：'.$_POST['phone_no'];
                  $message_model -> receiver=$userid;
                    $message_model -> info_id=$infoid;
//                      $sendid=yii::app()->user->getState('User')->id;
//                    if(!isset($sendid))
                        $sendid=2;
                       $message_model->sender=$sendid;  
                     $isSuccess = $message_model -> save();
                     $ajaxReturn['status']=$isSuccess;
                     if(!$isSuccess)
                $ajaxReturn['content']='系统异常！';
            echo  json_encode($ajaxReturn);

                
          
	}
        public function actionJubao($userid,$infoid) {
          
		$this->render('jubao',array("userid"=>$userid,"infoid"=>$infoid));
	}
        public function actionSavejubao($userid,$infoid) {
              $message_model =new Message();
              $ajaxReturn =  array('status'=>false,'content'=>'');
                   $message_model -> message='举报房源，信息：'.$_POST['message'].',手机号：'.$_POST['phone_no'];
                  $message_model -> receiver=$userid;
                    $message_model -> info_id=$infoid;
//                      $sendid=yii::app()->user->getState('User')->id;
//                    if(!isset($sendid))
                        $sendid=2;
                       $message_model->sender=$sendid;  
                       $message_model->message_type=1;
                     $isSuccess = $message_model -> save();
                     $ajaxReturn['status']=$isSuccess;
                     if(!$isSuccess)
                $ajaxReturn['content']='系统异常！';
            echo  json_encode($ajaxReturn);

                
          
	}
	
}
