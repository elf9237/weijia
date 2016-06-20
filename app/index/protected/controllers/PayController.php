<?php
header("Content-Type:text/html;   charset=utf-8");
Yii::import('application.vendors.*');
require_once('WechatPay/WxPayApi.php');
require_once('WechatPay/PayNotifyCallBack.php');
require_once('WechatPay/WxPayException.php');

class PayController extends BaseController
{

	public function actionIndex(){
        $order_id = $_GET['order_id'];

        $openid = $this->getOpenID();

        $jsApiParameters = $this->doWechatpay($order_id,$openid);

        $this->render('wechatPay',array('jsApiParameters'=>$jsApiParameters));

	}

    public function doWechatpay($order_id,$openId){
        //①、获取用户openid
        //②、统一下单
        $orderModel = new Order();
        $order = Order::model()->find('id=:id',array(':id'=>$order_id));

        $input = new \WxPayUnifiedOrder();


        $input->SetBody("微家订单");
        $input->SetAttach("微家订单");
        //$input->SetOut_trade_no($pay_order['order_sn']);
        $pay_money = $order->pay_price * 100;
        $input->SetOut_trade_no($order->order_no);
        //$input->SetOut_trade_no(microtime(true));
        //$input->SetTotal_fee($pay_money);
        $input->SetTotal_fee(1);
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 24*60*60));
        $input->SetGoods_tag("微家商品");

        //$notify_url = 'http://'.$_SERVER['SERVER_NAME'].'/weixin.php/WechatPay/notify';
        $notify_url = 'http://'.$_SERVER['SERVER_NAME'].'/index.php?r=pay/notify';
        $input->SetNotify_url($notify_url);
        $input->SetTrade_type("JSAPI");


        $input->SetOpenid($openId);
        $order_para = \WxPayApi::unifiedOrder($input);

        $jsApiParameters = $this->GetJsApiParameters($order_para);

        return $jsApiParameters;
        //获取共享收货地址js函数参数
        //$editAddress = $this->GetEditAddressParameters();

    }

    /*public function notify(){
        $notify = new \PayNotifyCallBack();
        $notify->Handle(false);
    }*/

    public function actionNotify(){

        $notify = new PayNotifyController();
        $notify->Handle(false);

    }




    /**
     *
     * 获取jsapi支付的参数  Weiluoyuan520
     * @param array $UnifiedOrderResult 统一支付接口返回的数据
     * @throws WxPayException
     *
     * @return json数据，可直接填入js函数作为参数
     */
    public function GetJsApiParameters($UnifiedOrderResult)
    {
        if(array_key_exists('err_code',$UnifiedOrderResult)){
            if(!empty($UnifiedOrderResult['err_code'])){
                //$this->error($UnifiedOrderResult['err_code_des']);
                //throw new HttpException($UnifiedOrderResult['err_code_des']);
                echo $UnifiedOrderResult['err_code_des'];die;
                //$this->error($UnifiedOrderResult['err_code_desc']);
            }
        }

        if(!array_key_exists("appid", $UnifiedOrderResult)
            || !array_key_exists("prepay_id", $UnifiedOrderResult)
            || $UnifiedOrderResult['prepay_id'] == "")
        {
            echo '参数错误';die;
            //throw new HttpException('参数错误');
            //$this->error( '参数错误');
            //$this->error($UnifiedOrderResult['err_code_desc']);
        }
        $jsapi = new \WxPayJsApiPay();
        $jsapi->SetAppid($UnifiedOrderResult["appid"]);
        $timeStamp = time();
        $jsapi->SetTimeStamp("$timeStamp");
        $jsapi->SetNonceStr(\WxPayApi::getNonceStr());
        $jsapi->SetPackage("prepay_id=" . $UnifiedOrderResult['prepay_id']);
        $jsapi->SetSignType("MD5");
        $jsapi->SetPaySign($jsapi->MakeSign());
        $parameters = json_encode($jsapi->GetValues());
        return $parameters;
    }




    /**
     *
     * 获取地址js参数
     *
     * @return 获取共享收货地址js函数需要的参数，json格式可以直接做参数使用
     */
    public function GetEditAddressParameters()
    {
        $getData = $this->data;
        $data = array();
        $data["appid"] = \WxPayConfig::APPID;
        $data["url"] = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $time = time();
        $data["timestamp"] = "$time";
        $data["noncestr"] = "1234568";
        $data["accesstoken"] = $getData["access_token"];
        ksort($data);
        $params = $this->ToUrlParams($data);
        $addrSign = sha1($params);

        $afterData = array(
            "addrSign" => $addrSign,
            "signType" => "sha1",
            "scope" => "jsapi_address",
            "appId" => \WxPayConfig::APPID,
            "timeStamp" => $data["timestamp"],
            "nonceStr" => $data["noncestr"]
        );
        $parameters = json_encode($afterData);
        return $parameters;
    }

    //打印输出数组信息
    private function printf_info($data)
    {
        foreach($data as $key=>$value){
            echo "<font color='#00ff55;'>$key</font> : $value <br/>";
        }
    }


}