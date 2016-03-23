<?php
class ShowController extends BaseController
{
	public function actionAdd() {
		$this->render('add');
	}
	public function actionRentList(){
		$this->render('rentlist');
	}
}