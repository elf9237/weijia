<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459342380133 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>管家服务</title>
  
  <meta name="description" content="">
  <meta name="sogou_site_verification" content="DvDFbTLWNb">
  <link rel="icon" href="http://www.baozupo.com/baozupo/images/ico.ico">
  <link rel="shortcut icon" href="http://www.baozupo.com/baozupo/images/ico.ico">
  
  
  <script src="public/desktop/js/jquery.min.js"></script>
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
            <li><a href="index.php" class="active">首页</a></li>
            <li><a href="index.php?r=site/zufang">我要租房</a></li>
            <li><a href="index.php?r=site/guanjia">管家服务</a></li>
            <li><a href="index.php?r=site/myinfo">会员中心</a></li>
            <li><a href="index.php?r=site/jiameng">房东加盟</a></li>
            <li><a href="index.php?r=site/about">关于我们</a></li>
        </ul>
    </div>
    <div class="login">
        <span><a href="index.php?r=site/login">登入</a></span>
        <span>|</span>
        <span><a href="index.php?r=site/register">注册</a></span>
    </div>
</div>
  <div style="overflow:hidden;width:100%;height:2px;background:url(/baozupo/images/topline.gif);"></div>
  
  


  <div style="display: none; background-color: rgb(255, 255, 255);" id="divbananer">
    <div style="height: 400px; width: 100%; opacity: 1;" id="divbananerBg">
    	<table class="table" cellpadding="0" cellspacing="0" width="100%">
    		<tbody><tr>
    			<td width="50%" id="tdbananerBg1" style="background-color: rgb(245, 209, 177);" onmousemove="showObj(&#39;leftpicTop&#39;)" onmouseout="hiddenObj(&#39;leftpicTop&#39;)" onclick="bananerFade(-1)" align="right">
					<div style="position:relative;">
						<img class="public/desktop/images/_nobord" style="display:none;position:absolute;right:10px;top:-30px;" id="leftpicTop" src="public/desktop/images//slideleft.png">
					</div>
				</td>
    			<td width="1000px" height="400px">
	    			<img class="public/desktop/images/_nobord" width="1000px" onmouseover="bananerStop()" onmouseout="bananerStart()" id="imgbananer" src="http://www.baozupo.com/baozupo/images/bananer3.jpg">
	    		</td>
    			<td width="50%" id="tdbananerBg2" style="background-color: rgb(245, 209, 177);" onmousemove="showObj(&#39;rightpictop&#39;)" onmouseout="hiddenObj(&#39;rightpictop&#39;)" onclick="bananerFade(1)" align="left">
					<div style="position:relative;">
						<img class="public/desktop/images/_nobord" style="display:none;position:absolute;left:10px;top:-30px;" id="rightpictop" src="public/desktop/images//slideright.png">
					</div>
				</td>
    		</tr>
    	</tbody></table>
  	</div>
  	<div style="text-align:center;margin-top:2px;">
	  <img id="banyuan1" src="public/desktop/images//yuan10_hui.png" class="handpoint" onclick="bananerFade(11)">
	  <img id="banyuan2" src="public/desktop/images//yuan10_hui.png" class="handpoint" onclick="bananerFade(12)">
	  <img id="banyuan3" src="public/desktop/images//yuan10_he.png" class="handpoint" onclick="bananerFade(13)">
	  <img id="banyuan4" src="public/desktop/images//yuan10_hui.png" class="handpoint" onclick="bananerFade(14)">
    </div>
  </div>
<script type="text/javascript">
  function showBananer(){
  	$("#divbananer").show();
  }
  function hideBananer(){
  	$("#divbananer").hide();
  }
  var topBananObj=null;
  function bananerStart(){
  	if(topBananObj){
  		topBananObj.start();
  	}
  }
  function bananerStop(){
  	if(topBananObj){
  		topBananObj.stop();
  	}
  }
  function bananerFade(index){
  	if(topBananObj){
  		topBananObj.banFade(index);
  	}
  }
  $(function(){
	var bananer_color1=["#e6006d","#f50c1e","#f5d1b1","-1"];
	var bananer_color2=["#e6006d","#f50c1e","#f5d1b1","-1"];
	var bananer_pici=[1,9,3,5];
	var imgtype=["jpg","png","jpg","jpg"];
	topBananObj=new topBananer(bananer_color1,bananer_color2,bananer_pici,imgtype,"bananer","banbg");
	bananerStart();
  });
</script>
  
  <div style="height:2px;overflow:hidden;" width="100%"></div>
  
  <div id="contentpar" style="width:100%">
  <div class="div-box" style="min-height: 300px; height: 1440px; background-color: rgb(255, 255, 255);" id="content">
<div id="regdiv" style="position:relative;background-color:#FFFFFF;">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr style="background-color:#FEC500;height:200px;"><td colspan="4" align="left">&nbsp;&nbsp;<img src="public/desktop/images//service.png"></td></tr>
  	<tr>
  		<td width="25%" height="170px" id="maintd" onmouseover="changeSerBk(&#39;main&#39;)" onclick="maintainclick()" style="border-right:1px solid #F1F1F1;border-bottom:1px solid #F1F1F1;cursor:pointer;" class="td_ser1" align="center">
  			<img id="mainimg" src="public/desktop/images//maintain_h.png"><br><br>
  			<div id="maindiv" class="div_ser1"></div>
  		</td>
  		<td width="25%" id="cleantd" onmouseover="changeSerBk(&#39;clean&#39;)" onclick="cleanclick()" class="td_ser2" style="border-right:1px solid #F1F1F1;border-bottom:1px solid #F1F1F1;cursor:pointer;" align="center">
  			<img id="cleanimg" src="http://www.baozupo.com/baozupo/images/clean_b.png"><br><br>
  			<div id="cleandiv" class="div_ser1"></div>
  		</td>
  		<td width="25%" id="suggesttd" onmouseover="changeSerBk(&#39;suggest&#39;)" onclick="suggestclick()" class="td_ser1" style="border-right:1px solid #F1F1F1;border-bottom:1px solid #F1F1F1;cursor:pointer;" align="center">
  			<img id="suggestimg" src="http://www.baozupo.com/baozupo/images/suggest_h.png"><br><br>
  			<div id="suggestdiv" class="div_ser1"></div>
  		</td>
  		<td width="25%" id="paytd" onmouseover="changeSerBk(&#39;pay&#39;)" onclick="questclick()" class="td_ser1" style="border-bottom:1px solid #F1F1F1;cursor:pointer;" align="center">
  			<img id="payimg" src="public/desktop/images//problem_h.png"><br><br>
  			<div id="paydiv" class="div_ser1"></div>
  		</td>
  	</tr>
  	<tr>
  		<td width="25%" height="250px" style="background-color:#34C4E6;"><img src="public/desktop/images//real.png"></td>
  		<td width="25%"><img src="public/desktop/images//do24.png"></td>
  		<td colspan="2" rowspan="2" style="background:url(&#39;images/serrm.jpg&#39;)">&nbsp;</td>
  	</tr>
  	<tr>
  		<td height="250px"><img src="public/desktop/images//day7.png"></td>
  		<td style="background-color:#55A3FF;"><img src="public/desktop/images//724.png"></td>
  	</tr>
  	<tr>
  		<td colspan="2" rowspan="2" class="handpoint" onclick="questclick()" style="background:url(images/question.png)">&nbsp;</td>
  		<td width="25%" height="250px" style="border-left:1px solid #F1F1F1;border-right:1px solid #F1F1F1;"><img src="public/desktop/images//sina.png"></td>
  		<td width="25%" style="border-right:1px solid #F1F1F1;"><img src="public/desktop/images//weixin.png"></td>
  	</tr>
  	<tr>
  		<td height="248px" style="background-color:#1ABC9C;"><img src="public/desktop/images//email2.png"></td>
  		<td style="background-color:#FDC600;"><img src="public/desktop/images//phone2.png"></td>
  	</tr>
  </tbody></table>
</div>

</div>
  </div>
  
<div class="content" id="bottom">
    
<table class="table" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr style="background:url(/baozupo/images/bottom.png);height:4px;"><td colspan="10"></td></tr>
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
          <p style="float:left;height:20px;line-height:20px;margin: 0px;">京ICP备14031269号</p>
          <img src="public/desktop/images//gongan.png" style="float:left;margin: 0px 0px 0px 26px;">
          <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">京公网安备 11010502030270号</p>
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
    <img src="public/desktop/images//phonebottom.png">
  </td>
  <td width="10px"></td>
  <td width="120px">
    <img src="public/desktop/images//weixin.jpg" width="86px">
  </td>
  <td width="70px"></td>
  <td>&nbsp;</td>
  </tr>
  <tr style="height:20px;color:#FFFFFF">
  <td colspan="3"></td>
  <td></td>
  <td>400-678-3666</td>
  <td></td>
  <td>微信扫一扫</td>
  <td colspan="2"></td>
  </tr>
  <tr style="height:5px;"><td colspan="10"></td></tr>
</tbody></table>
  </div>
  <div style="position:fixed;top:200px;right:20px;z-index:18000;"><img class="handpoint" onclick="prefindTop()" src="public/desktop/images//flowright.png"></div>


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