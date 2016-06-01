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
            $cyinfo=$infoModel->findByPk($id);
		$this->render('detial',array('cyinfo'=>$cyinfo));
	}
}