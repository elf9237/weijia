<?php
class WeiJiaController extends BaseController
{
	public $layout = "//layouts/main";
	public function actionIndex(){
		$this->render('weijia');
	}
}