<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PayAfter
 *
 * @author fanyouyong
 */
class PayAfter {
    /**
     * 付完钱调用的方法房租 房子id 房子类别 房子
     * @param type $infoid
     * @param type $type
     * @param type $days
     * @param type $sendid
     */
   public function zufangAfter($infoid,$type,$days,$sendid){
       
       $infoModel =Info::model();
       $rentInfoModel=  new Rentinfo();
       $userModel=  User::model();
       $userinfosend=$userModel->find('id='.$sendid);
       
       $cyInfo=$infoModel->findByPk($infoid);
       $rentInfoModel->status=1;
       $rentInfoModel->apply_time=time();
       $rentInfoModel->start_time=time();
       $rentInfoModel->info_id=$infoid;
       $rentInfoModel->sender=$sendid;
       if($type==1){
        $rentInfoModel->end_time=  time()+(3600*24*$days);
       }else{
           $rentInfoModel->end_time=  strtotime('+1 year');
       }
      $cyInfo->lend_status=1;
      
      
            if($cyInfo->yong_jin!=0){
                $userinfosend->yue=$userinfosend->yue+$cyInfo->yong_jin*0.5;
                 $message_model =new Message();
                  $message_model -> message='系统信息：你获得返现--'.$cyInfo->yong_jin*0.5.'元';
                  $message_model -> receiver=$userinfosend->id;
                    $message_model -> info_id=-1;
                       $message_model->sender=-1;  
                       $message_model->message_type=2;
                       $message_model->create_time=time();
                               $message_model->save();
                
                $userinfosendf=$userModel->find('id='.$userinfosend->inviter);
                if($userinfosendf){
                    $userinfosendf->yue=$userinfosendf->yue+$cyInfo->yong_jin*0.15;
                    $userinfosendff=$userModel->find('id='.$userinfosendf->inviter);
                     $message_modelf =new Message();
                  $message_modelf -> message='系统信息：你获得佣金--'.$cyInfo->yong_jin*0.15.'元';
                  $message_modelf -> receiver=$userinfosendf->id;
                    $message_modelf -> info_id=-1;
                       $message_modelf->sender=-1;  
                       $message_modelf->message_type=2;
                         $message_modelf->create_time=time();
                               $message_modelf->save();
                    if($userinfosendff){
                         $userinfosendff->yue=$userinfosendff->yue+$cyInfo->yong_jin*0.15;
                          $message_modelff =new Message();
                  $message_modelff -> message='系统信息：你获得佣金--'.$cyInfo->yong_jin*0.15.'元';
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
            
             
       $userinfosend->save();
       $rentInfoModel->save();
       $cyInfo->save();
       
      
      
       
   }
   /**
    * 佣金支付完成后
    * @param type $infoid
    * @param type $jine
    */
   public function yongJinAfter($infoid,$jine){
         $infoModel =Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
          $cyInfo->yong_jin=$cyInfo->yong_jin+$jine;
          $cyInfo->save();
   }
   /**
    * 置顶通过后
    * @param type $infoid
    * @param type $days
    */
    public function zhiDingAfter($infoid,$days){
         $infoModel = new Infotop();
         $infoModel->info_id=$infoid;
         $infoModel->start_time=time();
          $infoModel->end_time=time()+(3600*24*$days);
          $infoModel->zding_id=0;
            $infoModel->save();
   }
    
    
}
