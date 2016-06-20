 <html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/> 
    <title>微信支付</title>
    <script type="text/javascript">
    window.onload=function(){
    	callpay();
    };
    
	//调用微信JS api 支付
	function jsApiCall()
	{
		
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			<?php echo $jsApiParameters;?>,
			function(res){
				WeixinJSBridge.log(res.err_msg);
				if(res.err_msg == "get_brand_wcpay_request:ok"){
					//window.location.href="http://test.caicai51.com/weixin.php/Center/sendWechatMsg?order_id={$order_id}";
					//window.location.href="http://test.caicai51.com/weixin.php/Center/sendWechatPayMsg?order_id={$order_id}";
					//window.location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/weixin.php/Center/sendWechatPayMsg?order_id={$order_id}";
					window.location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php?r=center/centerIndex";
                 }else if(res.err_msg == "get_brand_wcpay_request:cancel"){
                	 //window.location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/weixin.php/Center/allorder";
                 }else{
                     //返回跳转到订单详情页面
					alert('支付失败');
					//window.location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/weixin.php/Center/allorder";
					window.location.href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/index.php?r=center/centerIndex";
                       
                 }
				//alert(res.err_code+'  ####  '+res.err_desc + '    ####'+res.err_msg);
				//alert(res.err_desc);
			}
		);
		
		
	} 

	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}
	</script>
</head>
 
<body>
    
</body>
</html>