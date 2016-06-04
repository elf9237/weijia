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
	public function actionDetial($id,$userid){
             $infoModel=  Info::model();
               $userModel= User::model();
            $cyinfo=$infoModel->findByPk($id);
           
             $useinfo=$userModel->find("id=$userid");
            
		$this->render('detial',array('cyinfo'=>$cyinfo,'useinfo'=>$useinfo));
	}
         public function actionToFuKuang($infoid){
          $infoModel=  Info::model();
          $cyInfo=$infoModel->findByPk($infoid);
	
		$this->render('pay',array("cyInfo"=>$cyInfo));	
	}
      
}