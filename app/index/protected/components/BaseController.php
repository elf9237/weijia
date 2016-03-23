<?php
class BaseController extends CController
{
	
	public $layout=null;

//	public function beforeAction() {
//		
//		//权限配置规则 modul /controller/action
//		$name = '';
//		if(!$this->getModule()->id!=''&&!$this->getModule()->id!=null){
//			$name.=$this->getModule()->id.'/';
//		}
//		$name.=  $this->getId().'/'. $this->getAction()->id;  
//		if(Yii::app()->user->isGuest){
//			echo '未登录';
//		}elseif(!Yii::app()->user->checkAccess($name)){
//			echo '无权限';
//		}else{
//			return true;
//		}
//		
//	}
	public function init(){
		
		return  true;
	}
}	