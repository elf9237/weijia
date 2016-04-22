<?php
class BaseController extends CController
{
	
	public $layout=null;
	public $wechat = null;

	public function beforeAction()
	{
		setWechat();
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
	}
	public function init(){
		
		return  true;
	}

	private function setWechat()
	{
		$this->wechat = !(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') === false);
	}
}	