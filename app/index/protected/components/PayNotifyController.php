<?php

Yii::import('application.vendors.*');
require_once('WechatPay/WxPayApi.php');
require_once('WechatPay/WxPayNotify.php');
require_once('WechatPay/WxPayData.php');


class PayNotifyController extends \WxPayNotify
{

    //查询订单

    public function Queryorder($transaction_id)
    {

        $input = new \WxPayOrderQuery();
        $input->SetTransaction_id($transaction_id);
        $result = \WxPayApi::orderQuery($input);
        if(array_key_exists("return_code", $result)
            && array_key_exists("result_code", $result)
            && $result["return_code"] == "SUCCESS"
            && $result["result_code"] == "SUCCESS")
        {

            $order_sn = trim($result['out_trade_no']);
            $weidan = trim($result['transaction_id']);
            $order = Order::model()->find('order_no=:order_sn and user_id !=:uid ',array(':order_sn'=>$order_sn,':uid'=>-1));
            $order->audit_status = 1;
            $order->weidan = $weidan;
            $order->pay_time = time();
            $order->save();
            
            
            $payafter = new PayAfter();//$type,$days,$sendid
            if($order->order_type=='房租')
            $payafter->zufangAfter($order->info_id,$order->type,$order->days,$order->user_id);
            if($order->order_type=='置顶')
               $payafter->zhiDingAfter ($order->info_id, $order->days) ;
             if($order->order_type=='佣金')
               $payafter->yongJinAfter ($order->info_id, $order->pay_price);

            return true;
        }
        return false;
    }

    //重写回调处理函数
    public function NotifyProcess($data, &$msg)
    {
        $notfiyOutput = array();
        if(!array_key_exists("transaction_id", $data)){
            $msg = "输入参数不正确";
            return false;
        }
        //查询订单，判断订单真实性
        if(!$this->Queryorder($data["transaction_id"])){
            $msg = "订单查询失败";
            return false;
        }

        return true;
    }



}