<?php 
class LeaseController extends BaseController
{
	
	public function  actionIndex(){
		
		$this->render('rent');
	}
	public function actionCrent(){
		$loginuserid=-1;
            $userLogin= Yii::app()->session['user'] ;
            if(!empty($userLogin))
		$this->render('crent');
            else
                $this->redirect ("index.php?r=site/login");
	}
	public function actionStorerent(){
		$this->render('storerent');

	}
	
}



?>