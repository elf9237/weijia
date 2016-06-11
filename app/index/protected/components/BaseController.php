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
//			echo '未登�?;
//		}elseif(!Yii::app()->user->checkAccess($name)){
//			echo '无权�?;
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
	public function getUserIdByShareUrl($arrParam = array()){
		if(empty($arrParam)){
			$arrParam = array(
				'r' => $_GET['r'],
				'timestamp' => $_GET['timestamp'],
				'pid' => $_GET['pid'],
				'sign' => $_GET['sign']
			);
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

	/**
	 * 执行此函数，商家打款给用户
	 * @param $strOpenId
	 * @param $nAmount
	 * @return bool
	 */
	public function doSharePay($strOpenId, $nAmount){
		$arrPayParams = array(
			'mch_appid' => 'wx10b693027f09c60e',
			'mchid' => '1340986601',
			'nonce_str' => $this->createNonceStr(32),
			'partner_trade_no' => $this->build_order_no(),
			'openid' => $strOpenId,
			'check_name' => 'NO_CHECK',
			'amount' => (int)$nAmount,
			'desc' => '分享分红',
			'spbill_create_ip' => gethostbyname($_SERVER['SERVER_NAME'])
		);

		$arrPayParams['sign'] = $this->getWxPaySign($arrPayParams);
		$xmlParams = $this->toXml($arrPayParams);

		$arrUrl = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';
		$arrRet = $this->postXmlCurl($xmlParams, $arrUrl, true);
		if('SUCCESS' == $arrRet['return_code'] && 'SUCCESS' == $arrRet['result_code']){
			return true;
		}
		return false;
	}

	/**
	 * 输出xml字符
	 * @throws WxPayException
	 **/
	public function toXml($arrParams)
	{
		if(!is_array($arrParams)
			|| count($arrParams) <= 0)
		{
			throw new Exception('数组数据异常！', 101);
		}

		$xml = "<xml>";
		foreach ($arrParams as $key=>$val)
		{
			if (is_numeric($val)){
				$xml.="<".$key.">".$val."</".$key.">";
			}else{
				$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
			}
		}
		$xml.="</xml>";
		return $xml;
	}

	protected function postXmlCurl($xml, $url, $useCert = false, $second = 30)
	{
		$ch = curl_init();
		//设置超时
		curl_setopt($ch, CURLOPT_TIMEOUT, $second);

		//如果有配置代理这里就设置代理
		/*if(WxPayConfig::CURL_PROXY_HOST != "0.0.0.0"
			&& WxPayConfig::CURL_PROXY_PORT != 0){
			curl_setopt($ch,CURLOPT_PROXY, WxPayConfig::CURL_PROXY_HOST);
			curl_setopt($ch,CURLOPT_PROXYPORT, WxPayConfig::CURL_PROXY_PORT);
		}*/
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,TRUE);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,2);//严格校验
		//设置header
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		//要求结果为字符串且输出到屏幕上
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

		if($useCert == true){
			//设置证书
			//使用证书：cert 与 key 分别属于两个.pem文件
			curl_setopt($ch,CURLOPT_SSLCERTTYPE,'PEM');
			curl_setopt($ch,CURLOPT_SSLCERT, '../cert/apiclient_cert.pem');
			curl_setopt($ch,CURLOPT_SSLKEYTYPE,'PEM');
			curl_setopt($ch,CURLOPT_SSLKEY, '../cert/apiclient_key.pem');
		}
		//post提交方式
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		//运行curl
		$data = curl_exec($ch);
		//返回结果
		if($data){
			curl_close($ch);
			//将XML转为array
			//禁止引用外部xml实体
			libxml_disable_entity_loader(true);
			$arrRet = json_decode(json_encode(simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
			return $arrRet;
		} else {
			$error = curl_errno($ch);
			curl_close($ch);
			throw new Exception("curl出错，错误码:$error", 102);
		}
	}

	public function build_order_no()
	{
		/* 选择一个随机的方案 */
		mt_srand((double) microtime() * 1000000);

		/* PHPALLY + 年月日 + 6位随机数 */
		return 'WJ' . date('Ymd') . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
	}

	public function getWxPaySign($arrParams){
		//签名步骤一：按字典序排序参数
		ksort($arrParams);
		$string = $this->ToUrlParams($arrParams);
		//签名步骤二：在string后加入KEY
		$string = $string . "&key=123";
		//签名步骤三：MD5加密
		$string = md5($string);
		//签名步骤四：所有字符转为大写
		$result = strtoupper($string);
		return $result;
	}

	public function ToUrlParams($arrParams)
	{
		$buff = "";
		foreach ($arrParams as $k => $v)
		{
			if($k != "sign" && $v != "" && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}

		$buff = trim($buff, "&");
		return $buff;
	}



	 
}	