<?php
class StoreController extends BaseController
{
	public $layout = '//layouts/main2';
	public function actionJiaMeng(){
	
		$this->render('jiameng');	
	}
	public function actionIndex(){
		$this->render('shopstore');
	}
	public function actionDetial($id){
             $infoModel=  Info::model();
               $userModel= User::model();
            $cyinfo=$infoModel->findByPk($id);
             $useinfo=$userModel->find("id=".$cyinfo->user_id);
		$this->render('detial',array('cyinfo'=>$cyinfo,'useinfo'=>$useinfo));
	}
         public function actionToFuKuang($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('pay',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangRi($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payri',array("cyInfo"=>$cyInfo));	
	}
        public function actionToFuKuangYong($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payyong',array("cyInfo"=>$cyInfo));	
	}
         public function actionToFuKuangDing($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('payding',array("cyInfo"=>$cyInfo));	
	}
        /**
         * 非平台用户用户租房
         * @param type $infoid
         */
        public function actionRentFang($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
          $ar = new AjaxReturn();
          $rentInfo = new Rentinfo();
          $rentInfo->apply_time=time();
          $rentInfo->info_id=$cyInfo->id;
          $rentInfo->status=0;
          /**
           * 请求者id到时候要设置
           */
          $rentInfo->sender=123;
           $rentInfo->start_time=time();
           $rentInfo->end_time=strtotime("+1 year");
           $ar->status=$rentInfo->save();
           echo json_encode($ar);
	}
      
}