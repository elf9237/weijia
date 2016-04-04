
<?php
class BasemenuController extends BaseController
{
	public function actionHeadmenu(){
		$this->renderPartial('headmenu');
	}
 	public function actionFootmenu(){
 		$this->renderPartial('footmenu');
 	}
	public  function actionchuzu(){
		$this->render('chuzu');
	}
}