<?php
class BaseController extends CController
{
	
	public $layout=null;
	public $wechat = true;

	//分享链接
	public $strShareUrl = '';

//	public function beforeAction()
//	{
//		setWechat();
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
//		$this->wechat = !(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') == false);
//		return  true;
            $this->wechat==true;

		$this->strShareUrl = 'fdsfdsfds';
	}

	protected function getShareUrl(){

	}

	/**
	 * 获取当前用户OpenId
	 */
	public function getOpenID(){
		return '123';
	}

	/**
	 * 获取当前用户ID
	 */
	public function getUserId(){
		return 1;
	}

	/**
	 * 从URL中获取父级用户ID
	 */
	public function getParentUserIdFromUrl(){

	}

	public function getaa(){

	}

	 
}	