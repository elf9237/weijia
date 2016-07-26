<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459344318433 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>微家</title>
  
  
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
<!--        <span>|</span>-->
<!--        <span><a href="index.php?r=site/register">注册</a></span>-->
    </div>
</div>
  <div style="overflow:hidden;width:100%;height:2px;background:url(/baozupo/images/topline.gif);"></div>
  
  


  
  <div style="height:2px;overflow:hidden;" width="100%"></div>
  
  <div id="contentpar" style="width:100%">
  <div class="div-box" style="min-height: 300px; height: 670px; background-color: rgb(255, 255, 255);" id="content">

<div style="position:relative;background-color:#FFFFFF;">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr style="height:200px;">
  		<td colspan="8" style="background-color:#1ABC9C;" align="left">&nbsp;&nbsp;<img src="public/desktop/images/member_top.png"></td>
  	</tr>
  	
  </tbody></table>
  <div style="height:40px"></div>
  <div id="divSerachMain" class="table" style="width:100%;">


<div style="width:90%;" class="div-center0">
  <div style="position:absolute;left:50px;"><img src="public/desktop/images/editdata.png"></div>
  <form method="" name="formreg" id="formreg" action="http://www.baozupo.com/baozupo/web/memberRegDispatcher.do?method=saveMember" target="iframe">
  <div style="position:absolute;left:150px;top:3px;font-size:16px;"></div>
  <div id="name_car" style="position:absolute;left:585px;top:159px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>

  <div id="sex_car" style="position: absolute; left: 430px; top: 20px; display: block;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:120px;top:40px;"><img id="sex_img" src="public/desktop/images/dline1_y.gif"></div>
  
  <div style="position:absolute;left:180px;top:75px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;您的手机号(<font style="color:#FF0000">变更手机号需要验证</font>)：</td></tr>
      <tr>
        <td id="phone_td" class="num_reg">4</td>
        <td><input type="text" id="name" name="phone" onkeypress="return checkInputNumber(event)" maxlength="20" onblur="changeInput(&#39;phone&#39;,&#39;&#39;)" value="" class="input_reg"></td>
        <td>
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="phone_car" style="position:absolute;left:638px;top:316px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:210px;top:150px;"><img id="phone_img" src="public/desktop/images/dline4_h.gif"></div>

  
  <div style="position:absolute;left:180px;top:225px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;密码：</td></tr>
      <tr>
        <td id="vercode_td" class="num_reg">5</td>
        <td><input type="text" id="pwd" name="vercode" maxlength="20" onblur="changeInput(&#39;vercode&#39;,&#39;&#39;)" value="" class="input_reg"></td>
        
      </tr>
    </tbody></table>
  </div>
  <span id="cuo" style="display:none">*用户名或密码不正确</span>
                    <span id="kong" style="display:none">*用户名或密码不为空</span>
  <div id="vercode_car" style="position:absolute;left:588px;top:446px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:264px;top:843px;">
    
    <input type="hidden" id="picurl" name="picurl" value="mvip1.jpg">
  </div>
  <div id="dsc_car" style="position:absolute;left:635px;top:937px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  </form>
  
  <form method="POST" name="form" id="form" action="http://www.baozupo.com/baozupo/base/baseDispatcher.do?method=uploadFile" enctype="multipart/form-data" target="iframe">
  <div style="position:absolute;left:264px;top:1016px;">
  	<input type="hidden" id="fileSize" name="fileSize" value="2">
	<input type="hidden" id="fileType" name="fileType" value="img">
	<input type="hidden" id="maxWidth" name="maxWidth" value="960">
	<input type="hidden" id="maxHeight" name="maxHeight" value="960">

		
		</td>
	
      </tr>
      <tr>
        <td style="height:214px;">&nbsp;</td>
      </tr>
    </tbody></table>
  </div>
  <div id="dsc_car" style="position:absolute;left:635px;top:1130px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  </form>
  
  <div id="divbut" style="position:absolute;left:290px;top:350px;">
    <input id="but" onclick="login()" onmousemove="changeClass(&#39;but&#39;,&#39;button2_reg&#39;)" onmouseout="changeClass(&#39;but&#39;,&#39;button_reg&#39;)" class="button_reg" type="button" value="登入">
  </div>
  
  <div id="tmpdiv" style="display:none;"></div>
</div>

<iframe id="iframe" name="iframe" style="display:none"></iframe>

</div>
  
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
    
     function login(){
            var username=$("#name").val();
            var password=$("#pwd").val();
            if(username==""||password==null){
                $("#kong").show();
                return;
            }
             $.ajax({
            type:"POST",
            data:{
                password:password,
                username:username
               
            },
            dataType:"json",
            url:"index.php?r=site/login",
            success:function(data){
                if(data.status){
                    console.log(data);
                    window.location.href="index.php?r=site/index";
                }else{
                    $("#cuo").show();
                    
                }
            }
        })
            
            
        }
    
    
    
    
    
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