<?php 
class LeaseController extends BaseController
{
	
	public function  actionIndex(){
		
		$this->render('rent');
	}
	public function actionCrent(){
		
		$this->render('crent');
	}
	public function actionStorerent(){
		$this->render('storerent');

	}
	
}



?>