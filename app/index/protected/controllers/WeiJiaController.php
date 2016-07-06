<?php
class WeiJiaController extends BaseController
{
	public $layout = "//layouts/main";
	public function actionIndex(){
		$this->render('weijia');
	}
	public function actionRedboot(){
		$this->render('redboot');
	}
        public function actionTest(){
            $payafter=new PayAfter();
            $payafter->zhiDingAfter(47, 1);
        }
}