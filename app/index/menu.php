<?php

//header("Content-type: text/html; charset=utf-8"); 
$myServerMenu = new servermenu();
//获取access_token
$access_token=$myServerMenu->getaccess_token();
//向服务器发送menu
//$access_token ="SkIR15fsl3Zu7Iezxzv3Ta5CmlqRw07oVKvFvCirjgu0HI8yixfcAcauAsv3CrdO_YhQObc9bHt6FczcCWVZx_62wOQQaRdccd-swQxiXpI"  ;
$myServerMenu->sendmenu($access_token);
class servermenu{
	//获取access_token
	public function getaccess_token(){
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
		return $access_token;
	}
	public function sendmenu($access_token){
		$access_token = $access_token;
		$jsonmenu = '{
			  "button":[
			  {
					"name":"微家",
				   "sub_button":[
					{
					   "type":"view",
					   "name":"微家",
					   "url":"http://www.weijiazx.com/app/index/"
					},
					]
			  

			   },
			  
			   ]
		 }';


		$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
		//echo $url;
		$result = $this->https_request($url, $jsonmenu);
		echo "<br/>";
		var_dump($result);
	}
	public	function https_request($url,$data = null){
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
			if (!empty($data)){
				curl_setopt($curl, CURLOPT_POST, 1);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			}
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($curl);
			curl_close($curl);
			return $output;
		}	
}



?>