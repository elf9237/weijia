<?php
class BaseController extends CController
{
	
	public $layout=null;
	public $wechat = false;

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

        $openid = $this->getOpenid();

        $session = YII::app()->session;

        echo $session['openid'];die;

//		$this->wechat = !(strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') == false);
//		return  true;
        $this->wechat==false;

	}

    public function getOpenid()
    {
        $session = Yii::app()->session;
        $openid = $session['openid'];
        if(empty($openid)){
            //通过code获得openid
            if (!isset($_GET['code'])){
                $baseUrl = urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                // echo $baseUrl;die;
                $url = $this->createOauthUrlForCode($baseUrl);
                Header("Location: $url");
                exit();
            } else {

                //获取code码，以获取openid
                $code = $_GET['code'];
                $token_code = $session['code'];
                if($code == $token_code) {
                    return $openid = $session['openid'];;
                }else{
                    $session['code'] = $code;
                    $openid = $this->getOpenidFromMp($code);
                    $session['openid'] = $openid;
                }
            }
        }
        return $openid;
    }

    /**
     *
     * 构造获取code的url连接
     * @param string $redirectUrl 微信服务器回跳的url，需要url编码
     *
     * @return 返回构造好的url
     */
    private function createOauthUrlForCode($redirectUrl)
    {
        $urlObj["appid"] = 'wx10b693027f09c60e';
        $urlObj["redirect_uri"] = "$redirectUrl";
        $urlObj["response_type"] = "code";
        $urlObj["scope"] = "snsapi_base";
        $urlObj["state"] = "STATE"."#wechat_redirect";
        $bizString = $this->ToUrlParams($urlObj);
        return "https://open.weixin.qq.com/connect/oauth2/authorize?".$bizString;
    }

    /**
     *
     * 拼接签名字符串
     * @param array $urlObj
     *
     * @return 返回已经拼接好的字符串
     */
    private function ToUrlParams($urlObj)
    {
        $buff = "";
        foreach ($urlObj as $k => $v)
        {
            if($k != "sign"){
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    /**
     *
     * 通过code从工作平台获取openid机器access_token
     * @param string $code 微信跳转回来带上的code
     *
     * @return openid
     */
    public function GetOpenidFromMp($code)
    {
        $url = $this->createOauthUrlForOpenid($code);
        //$res = R('Weixin/http_curl',array($url));
        $res = $this->http_curl($url);
        //取出openid
        $data = json_decode($res,true);
        //$this->data = $data;
        $openid = trim($data['openid']);
        return $openid;
    }

    /**
     *
     * 构造获取open和access_toke的url地址
     * @param string $code，微信跳转带回的code
     *
     * @return 请求的url
     */
    private function createOauthUrlForOpenid($code)
    {
        $urlObj["appid"] = 'wx10b693027f09c60e';
        $urlObj["secret"] = 'de65cc8eb382c86d6ed2483a0c8f1d70';
        $urlObj["code"] = $code;
        $urlObj["grant_type"] = "authorization_code";
        $bizString = $this->ToUrlParams($urlObj);
        return "https://api.weixin.qq.com/sns/oauth2/access_token?".$bizString;
    }

    /**
     * 发送HTTP请求方法，目前只支持CURL发送请求
     * @param  string $url    请求URL
     * @param  array  $params 请求参数
     * @param  string $method 请求方法GET/POST
     * @return array  $data   响应数据
     * @author LF
     */
    public function http_curl($url, $params='', $method = 'GET', $header = array(), $multi = false){
        $opts = array(
            CURLOPT_TIMEOUT        => 5,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER     => $header
        );
        /* 根据请求类型设置特定参数 */
        switch(strtoupper($method)){
            case 'GET':
                $param = is_array($params)?'?'.http_build_query($params):'';
                $opts[CURLOPT_URL] = $url . $param;
                break;
            case 'POST':
                //判断是否传输文件
                $opts[CURLOPT_URL] = $url;
                $opts[CURLOPT_POST] = 1;
                $opts[CURLOPT_POSTFIELDS] = $params;
                break;
            default:
                echo '不支持该格式';die;
        }

        /* 初始化并执行curl请求 */
        $ch = curl_init();
        curl_setopt_array($ch, $opts);
        $data  = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
        if($error){
            echo $error;die;
        }
        return  $data;
    }


}	