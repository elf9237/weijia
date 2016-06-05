<?php
class BaseController extends CController
{
	
	public $layout=null;
	public $wechat = true;

	protected $key = 'z+Y4N{FdU4vNkXIf*tiKFF-odDRM,I88';

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
		return 100;
	}

	public function getAccessToken(){

		$wxAccessToken = Yii::app()->cache->get('WxAccessToken');
		if(! empty($wxAccessToken)){
			return $wxAccessToken;
		}

		$appid = "wx10b693027f09c60e";
		$appsecret = "de65cc8eb382c86d6ed2483a0c8f1d70";
		$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		$jsoninfo = json_decode($output, true);
		$access_token = $jsoninfo["access_token"];
		Yii::app()->cache->set('WxAccessToken', $access_token, 7000);
		return $access_token;
	}

	public function getJsApiTicket(){
		$wxJsApiTicket = Yii::app()->cache->get('wxJsApiTicket');
		if(! empty($wxJsApiTicket)){
			return $wxJsApiTicket;
		}

		$wxAccessToken = $this->getAccessToken();
		$url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=$wxAccessToken&type=jsapi";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);
		$jsoninfo = json_decode($output, true);
		$jsapi_ticket = $jsoninfo["ticket"];
		Yii::app()->cache->set('wxJsApiTicket', $jsapi_ticket, 7000);
		return $jsapi_ticket;
	}

	protected function createNonceStr($length = 16) {
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$str = "";
		for ($i = 0; $i < $length; $i++) {
			$str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
		}
		return $str;
	}

	public function getAuthSignStr($arrInput, $authkey = '') {
		if (empty($authkey)) {
			$token = $this->key;
		} else {
			$token = trim($authkey);
		}
		$arrTrans = array_change_key_case(array_filter($arrInput, function($arrInput){return $arrInput !== '';}), CASE_LOWER);
		$strTrans = '';
		// 按key值升序排序
		if (ksort($arrTrans)) {
			foreach ($arrTrans as $key => $value) {
				if ($key == 'sign') {
					continue;
				}
				$strTrans .= $key . $value;
			}
			$strSign = md5($strTrans . $token);
		}
		return strtoupper($strSign);
	}

	/**
	 * 通过分享链接获取分享用户ID
	 * @param array $arrParam
	 * @return int
	 */
	public function getUserIdByShareUrl($arrParam = []){
		if(empty($arrParam)){
			$arrParam = $_GET;
		}

		$sign = $this->getAuthSignStr($arrParam);
		if($arrParam['sign'] != $sign){
			return 0;
		}

		/*if(isset($arrParam['timestamp']) && time() - (int)$arrParam['timestamp'] > 6 * 60 * 60){
			return 0;
		}*/

		$securityManager = Yii::app()->getSecurityManager();
		$nPid = $securityManager->decrypt(base64_decode($arrParam['pid']), $this->key);
		return (int)$nPid;
	}


	 
}	