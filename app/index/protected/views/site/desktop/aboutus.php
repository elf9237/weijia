<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459343370159 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>关于我们</title>
    <meta name="toTop" content="true">
  <meta name="description" content="">
  <meta name="sogou_site_verification" content="DvDFbTLWNb">
   
  <script src="public/desktop/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/desktop/js/toTop.js"></script>
  <script src="public/desktop/js/common.js"></script>
  <script src="public/desktop/js/webCommon.js"></script>
  <script type="text/javascript" src="public/desktop/js/scroller.js"></script>
  <script type="text/javascript" src="public/desktop/js/picEffect.js"></script>
  <script type="text/javascript" src="public/desktop/js/topbananer.js"></script>
  <script src="public/desktop/js/validate.js"></script>
  <script type="text/javascript" src="public/desktop/js/jquery.history.js"></script>
  <script src="public/desktop/js/WdatePicker.js"></script>
  <script src="public/desktop/js/style.js"></script>
  <link href="public/desktop/css/WdatePicker.css" rel="stylesheet" type="text/css">
  <script src="public/desktop/css/jquery.autogrowtextarea.min.js"></script>
  <link rel="stylesheet" href="public/desktop/css/main.css">
  <link rel="stylesheet" href="public/desktop/css/mainweb.css">
  <link rel="stylesheet" href="public/desktop/css/comment.css">
  <link rel="stylesheet" href="public/desktop/css/scroller.css">
  <link rel="stylesheet" href="public/desktop/css/style.css">
</head>
<body class="body-web" style="Overflow-y:scroll"><div style="position: absolute; z-index: 19700; top: -1970px; left: -1970px; display: none;"><iframe src="My97DatePicker.html" frameborder="0" border="0" scrolling="no" style="width: 186px; height: 199px;"></iframe></div>
<div class="header">
    <div class="logo"><img src="public/desktop/images/logo.png" alt=""></div>
    <div class="nav">
        <ul>
            <li><a href="index.php">首页</a></li>
            <li><a href="index.php?r=site/zufang">我要租房</a></li>
            <li><a href="index.php?r=site/guanjia">管家服务</a></li>
            <li><a href="index.php?r=site/myinfo">会员中心</a></li>
            <li><a href="index.php?r=site/jiameng">代理商加盟</a></li>
            <li><a href="index.php?r=site/about" class="active">关于我们</a></li>
        </ul>
    </div>
    <div class="login">
        <?php
          $user= Yii::app()->session['user'] ;
          if(!empty($user)){
              echo '<span>欢迎回来！'.$user->login_id.'</span>';
          }else{
              echo '<span><a href="index.php?r=site/login">登入</a></span>'; 
          }
        
        ?>
     
    </div>
</div>

  
  <div style="height:2px;overflow:hidden;" width="100%"></div>
  
  <div id="contentpar" style="width:100%">
  <div class="div-box" style="min-height: 300px; height: 1410px; background-color: rgb(255, 255, 255);" id="content">
<div id="regdiv" style="position:relative;background-color:#FFFFFF;">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr style="background-color:#ea6060;height:200px;"><td align="left">&nbsp;&nbsp;<img src="public/desktop/images/about-us.png"></td></tr>
  	<tr><td height="20px"></td></tr>
  	
  	<tr>
  		<td>
  			<img src="public/desktop/images/aboutus.png">
  		</td>
  	</tr>
  </tbody></table>
</div>

</div>
  </div>
  
 <div class="content" id="bottom">
    
<table class="table" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="background:url(/baozupo/public/desktop/images/bottom.png);height:4px;"><td colspan="10"></td></tr>
  <tr style="height:20px;"><td colspan="10"></td></tr>
  <tr style="height:86px;color:#FFF">
  <td>&nbsp;</td>
  <td align="center" width="500px">
     <table>
        <tbody><tr height="30px">
           <td style="font-size:14px;width:70px;"><a class="font_a" >关于我们</a>
           </td><td style="font-size:14px;width:70px;"><a class="font_a" >联系我们</a></td>
           <td style="font-size:14px;width:70px;"><a class="font_a" >版权声明</a></td>
           <td style="font-size:14px;width:70px;"><a class="font_a" >加入我们</a></td>
          
         </tr>
         <tr>
           <td colspan="5">
            <a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; color:#FFF;">
          <p style="float:left;height:20px;line-height:20px;margin: 0px;">榕ICP备35010402350208号</p>
          <img src="public/desktop/images/gongan.png" style="float:left;margin: 0px 0px 0px 26px;">
          <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">福州公网安备 35010402350208号</p>
        </a>
           </td>
         </tr>
         <tr>
           <td colspan="5">微家租房（福建）房地产经纪有限公司   版权所有</td>
         </tr>
     </tbody></table>
  </td>
  <td width="50px"></td>

  <td width="10px"></td>
  <td width="120px">
    <img src="public/desktop/images/phonebottom.png">
  </td>
  <td width="10px"></td>
  <td width="120px">
    <img src="public/desktop/images/weixin.jpg" width="86px">
  </td>
  <td width="70px"></td>
  <td>&nbsp;</td>
  </tr>
  <tr style="height:20px;color:#FFFFFF">
  <td colspan="3"></td>
  <td></td>
  <td>0591-8855-5353</td>
  <td></td>
  <td>微信扫一扫</td>
  <td colspan="2"></td>
  </tr>
  <tr style="height:5px;"><td colspan="10"></td></tr>
</tbody></table>
  </div>



<script type="text/javascript">
  function setContentHeight(height,color){
    $("#content").css("height",height);
    if(color){
    	$("#content").css("background-color",color);
    	$("#contentpar").css("background-color",color);
    }else{
    	$("#content").css("background-color","#FFFFFF");
    	$("#contentpar").css("background-color","");
    }
  }
  function prefindTop(bz){
  	var url="/web/houseDispatcher.do?method=showPrefind2";
   	showLogDiv(($(window).width()-502)/2,($(window).height()-380)/2);
   	$("#div_Log_Top").load(webroot+url);
  }
  
  var url= "";
  var openId="";
  
  
  if(openId==""){
	openId="firstpage";
  	url="null";
  }
  $(function(){
  	$.history.init(function (hash) {
  		if(historyFlag){
  			historyFlag=false;
  			return;
  		}
		var hisurl=url;
		var hisid=openId;
		if (hash){
			var obj=getHistory(hash);
			if(obj!=null){
				hisid=obj.id;
				hisurl=obj.url;
			}
		}
		changeTopTitle(hisid,hisurl,"false");
	});
  });
</script></body></html>