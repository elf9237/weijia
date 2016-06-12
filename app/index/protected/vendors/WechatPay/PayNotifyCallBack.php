<?php
require_once "WxPayApi.php";
require_once 'WxPayNotify.php';
//初始化日志

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
		    $order_sn = trim($result['out_trade_no']);
		    $wechat_pay_sn = trim($result['transaction_id']);
		    $order = $this->getOrderId($order_sn);
		    if(!empty($order) && $order['status'] == 1 && $order['ispay'] == 1){
		        $this->updateOrderStatus($order);
		        $this->insert_log($order,2,$wechat_pay_sn);
		        $this->add_sale_num($order);
		    }
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
	
	private function getOrderId($order_sn){
	    $conn = $this->getConnection();
	    $sql = 'SELECT * FROM yershop_order WHERE order_sn="'.$order_sn.'" LIMIT 1';
	    $result = mysql_query($sql);
	    $order = mysql_fetch_array($result);
	    $this->closeConnection($conn);
	    return $order;
	    
	}
	
	/**
	 * 插入支付日志
	 * @param arr $order
	 * @param int $type
	 * @author LF
	 */
	private function insert_log($order,$type,$alipay_order_sn="") {
	    $conn = $this->getConnection();
	    $sql = 'SELECT count(*) FROM yershop_pay WHERE order_id='.$order['id'];
	    $result = mysql_query($sql);
	    $count = mysql_fetch_array($result);
	    //if($count <= 0){
	        $sql = 'INSERT INTO yershop_pay '
	            .'(order_id,pay_type,pay_code,out_trade_no,money,status,type,uid,total,yunfee,addressid,create_time,alipay_order_sn)'
	                . 'VALUES ('.$order['id'].','.$order['pay_id'].',"'.$order['pay_code'].'","'.$order['tag'].'","'.$order['total_money'].'",'.$type.','.$order['pay_id'].','.$order['uid'].',"'.$order['total'].'","'.$order['ship_price'].'",'.$order['addressid'].','.time().',"'.$alipay_order_sn.'")';
	        mysql_query($sql);
	    /* }else{
	        $sql = 'UPDATE yershop_pay SET status = '.$type.' WHERE order_id='.$order['id'];
	        mysql_query($sql);
	    } */
	    $this->closeConnection($conn);
	}
	
	/**
	 * 增加商品销量
	 * @param arr $order
	 * @author LF
	 */
	private function add_sale_num($order){
	    $conn = $this->getConnection();
	    if(!empty($order)){
	        $sql = 'SELECT * FROM yershop_shoplist WHERE orderid='.$order['id'];
	        $result = mysql_query($sql);
	        while($row = mysql_fetch_array($result)){
	            $order_goods[] = $row;
	        }
	        foreach($order_goods as $key => $goods){
	            $sql = 'SELECT sale FROM yershop_suppliers_goods WHERE goods_id='.$goods['goodid'].' AND suppliers_id='.$goods['suppliers_id'].' LIMIT 1';
	            $result = mysql_query($sql);
	            $suppliers_goods = mysql_fetch_array($result);
	            $sale_sup_num = $suppliers_goods['sale'];
	            $sale_sup_num = $sale_sup_num + $goods['num'];
	            if($sale_sup_num>=0){
	                $sql = 'UPDATE yershop_suppliers_goods SET sale = '.$sale_sup_num.' WHERE goods_id='.$goods['goodid'].' AND suppliers_id='.$goods['suppliers_id'];
	                mysql_query($sql);
	            }
	            $sql = 'SELECT sale FROM yershop_document WHERE id='.$goods['goodid'];
	            $result = mysql_query($sql);
	            $goods = mysql_fetch_array($result);
	            $sale_num = $goods['sale'];
	            if($sale_num >= 0){
	                $sql = 'UPDATE yershop_document SET sale = '.$sale_num.' WHERE id='.$goods['goodid'];
	                mysql_query($sql);
	            }
	        }
	    }
	    $this->closeConnection($conn);
	}
	
	private function updateOrderStatus($order){
	    $conn = $this->getConnection();
	    if(!empty($order) && ($order['status'] == 1) && ($order['ispay'] == 1)){
	        $sql = 'UPDATE yershop_order SET status = 2,ispay = 2 WHERE id='.$order['id'];
	        mysql_query($sql);
	        $sql = 'SELECT id FROM yershop_order WHERE parent_order_id = '.$order['id'];
	        $child_order_list = mysql_query($sql);
	        while($child_order = mysql_fetch_array($child_order_list)){
	            $sql = 'UPDATE yershop_order SET status = 2,ispay = 2 WHERE id = '.$child_order['id'];
	            mysql_query($sql);
	        }
	    }
	    $this->closeConnection($conn);
	}
	
	private function closeConnection($conn){
	    mysql_close($conn);
	}
	
	//获取连接池
	private function getConnection(){
	    
	    $db_host = '114.215.240.222';
	    $db_user = 'root';
	    $db_pass = 'root_test';
	    $data_base = 'yershop_test';
	    $conn = mysql_connect($db_host,$db_user,$db_pass);
	    if (!$conn)
	    {
	        die('Could not connect: ' . mysql_error());
	    }
	
	    mysql_select_db($data_base,$conn);
	    return $conn;
	
	}
}

