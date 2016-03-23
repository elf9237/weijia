<?php
class StoreController extends BaseController
{
	
	public function actionJiaMeng(){
	
		$this->render('jiameng');	
	}
	public function actionIndex(){
		$this->render('shopstore');
	}
	public function actionDetial(){
		$this->render('detial');
	}
}