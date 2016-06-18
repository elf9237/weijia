<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459344318433 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>微家</title>
  
  
  <meta name="description" content="">
    <meta name="toTop" content="true">
  <meta name="sogou_site_verification" content="DvDFbTLWNb">
  <link rel="icon" href="http://www.baozupo.com/baozupo/images/ico.ico">
  <link rel="shortcut icon" href="http://www.baozupo.com/baozupo/images/ico.ico">
  
  
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
  <script src="public/desktop/js/myjs.js"></script>
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
            <li><a href="index.php?r=site/myinfo" class="active">会员中心</a></li>
            <li><a href="index.php?r=site/jiameng">代理商加盟</a></li>
            <li><a href="index.php?r=site/about">关于我们</a></li>
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
  <div class="div-box" style="min-height: 300px; height: 1816px; background-color: rgb(255, 255, 255);" id="content">

<div style="position:relative;background-color:#FFFFFF;">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr style="height:200px;">
  		<td colspan="8" style="background-color:#1ABC9C;" align="left">&nbsp;&nbsp;<img src="public/desktop/images/member_top.png"></td>
  	</tr>
  	<tr height="125px">
  		<td width="200px" class="tdbord_ser0 handpoint" onclick="changeSerBk(0)" id="mycolltd" style="background-color: rgb(255, 255, 255);"><img id="mycollimg" src="public/desktop/images/mycoll_y.png"></td>
  		<td width="200px" class="tdbord_ser1 handpoint" onclick="changeSerBk(1)" id="mybooktd" style="background-color: rgb(255, 255, 255);"><img id="mybookimg" src="public/desktop/images/mybook_y.png"></td>
  		<td width="200px" class="tdbord_ser1 handpoint" onclick="changeSerBk(2)" id="myhometd" style="background-color: rgb(255, 255, 255);"><img id="myhomeimg" src="public/desktop/images/myhome_y.png"></td>
  		<td width="200px" class="tdbord_ser1 handpoint" onclick="changeSerBk(3)" id="mydatatd" style="background-color: rgb(26, 188, 156);"><img id="mydataimg" src="public/desktop/images/mydata_b.png"></td>
  		<td width="200px" class="tdbord_ser1 handpoint" onclick="changeSerBk(4)" id="mylettertd" style="background-color: rgb(255, 255, 255);"><img id="myletterimg" src="public/desktop/images/myletter_y.png"></td>
  	</tr>
  </tbody></table>
  <div style="height:40px"></div>
  <div id="divSerachMain" class="table" style="width:100%;">


<div style="width:90%;" class="div-center0">
  <div style="position:absolute;left:50px;"><img src="public/desktop/images/editdata.png"></div>
  <div style="position:absolute;left:106px;top:49px;"><img src="public/desktop/images/dline1_y.gif"></div>
  
  <form method="POST" name="formreg" id="formreg" action="http://www.baozupo.com/baozupo/web/memberRegDispatcher.do?method=saveMember" target="iframe">
  <div style="position:absolute;left:150px;top:3px;font-size:16px;"></div>
  <div style="position:absolute;left:181px;top:72px;">
    <input type="hidden" id="usid" name="usid" value="108445">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;显示昵称：</td></tr>
      <tr>
        <td id="uscode_td" class="num2_reg">1</td>
        <td><input type="text" id="uscode" name="uscode" onkeyup="limitInputLen(this,20)" onblur="changeInput(&#39;uscode&#39;,&#39;&#39;)" value="<?php echo Yii::app()->session['user']->username;?>" class="input2_reg"></td>
      </tr>
    </tbody></table>
  </div>
  <div id="uscode_car" style="position: absolute; left: 495px; top: 77px; display: block;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:195px;top:132px;"><img id="uscode_img" src="public/desktop/images/dline1_y.gif"></div>
  
  <div style="position:absolute;left:270px;top:155px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;您的姓名：</td></tr>
      <tr>
        <td id="name_td" class="num_reg">2</td>
        <td><input type="text" id="name" name="name" onkeyup="limitInputLen(this,20)" onblur="changeInput(&#39;name&#39;,&#39;&#39;)" value="<?php echo Yii::app()->session['user']->username;?>" class="input_reg"></td>
      </tr>
    </tbody></table>
  </div>
  <div id="name_car" style="position:absolute;left:585px;top:159px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:195px;top:205px;"><img id="name_img" src="public/desktop/images/dline2_h.gif"></div>
  
  <div style="position:absolute;left:175px;top:255px;">
  	<input type="hidden" id="sex" name="sex" value="男">
    
  </div>
  <div id="sex_car" style="position: absolute; left: 286px; top: 230px; display: block;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:195px;top:293px;"><img id="sex_img" src="public/desktop/images/dline1_y.gif"></div>
  
  <div style="position:absolute;left:270px;top:313px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;您的手机号：</td></tr>
      <tr>
        <td id="phone_td" class="num_reg">4</td>
        <td><input type="text" id="phone" name="phone" onkeypress="return checkInputNumber(event)" maxlength="20" onblur="changeInput(&#39;phone&#39;,&#39;&#39;)" value="<?php echo Yii::app()->session['user']->login_id;?>" class="input_reg"></td>
        <td>
        	<div id="phoneflag_td" class="input_reg" style="width:50px;">
        		
        	</div>
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="phone_car" style="position:absolute;left:638px;top:316px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:283px;top:375px;"><img id="phone_img" src="public/desktop/images/dline4_h.gif"></div>
  <div style="position:absolute;left:295px;top:384px;">
  
  </div>
  
  <div style="position:absolute;left:270px;top:443px;">
    
  </div>
  <div id="vercode_car" style="position:absolute;left:588px;top:446px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:195px;top:496px;"><img id="vercode_img" src="public/desktop/images/dline2_h.gif"></div>
  
  <div style="position:absolute;left:175px;top:525px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;您的用户类别：</td></tr>
      <tr>
        <td id="email_td" class="num_reg">6</td>
        <td><input type="text" id="email" name="email" maxlength="20" onblur="changeInput(&#39;email&#39;,&#39;&#39;)" value="<?php $type= Yii::app()->session['user']->type;
        if($type=='admin'){
            echo '超级管理员';
        }
        if($type=='0'){
            echo '平台用户';
        }
         if($type=='1'){
            echo '个人用户';
        }
          if($type=='2'){
            echo '代理商';
        }
        ?>" readonly="true" class="input_reg"></td>
        <td>
        	<div id="emailflag_td" class="input_reg" style="width:50px;">
        		
        	</div>
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="email_car" style="position:absolute;left:540px;top:529px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:190px;top:585px;"><img id="email_img" src="public/desktop/images/dline1_h.gif"></div>
  
  <div style="position:absolute;left:264px;top:609px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;县：</td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;市：</td></tr>
      <tr>
        <td id="county_td" class="num2_reg">7</td>
        <td><input type="text" id="county" name="county" onkeyup="limitInputLen(this,20)" maxlength="20" onblur="changeInput(&#39;county&#39;,&#39;&#39;)" value="福建" class="input2_reg" style="width:135px"></td>
        <td><input type="text" id="city" name="city" onkeyup="limitInputLen(this,20)" maxlength="20" onblur="changeInput(&#39;county&#39;,&#39;&#39;)" value="福州" class="input2_reg" style="width:135px"></td>
        <td>
        	<div id="countyflag_td" class="input2_reg" style="width:50px;">
        		<select id="countyflag" name="countyflag" class="input2_log">
					<option value="0" selected="">保密</option>
        			<option value="1">公开</option>
				</select>
        	</div>
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="county_car" style="position: absolute; left: 637px; top: 613px; display: block;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:190px;top:659px;"><img id="county_img" src="public/desktop/images/dline2_y.gif"></div>
  
  <div style="position:absolute;left:175px;top:688px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;您的余额：</td></tr>
      <tr>
        <td id="birthday_td" class="num_reg">8</td>
        <td><input type="text" id="birthday" name="birthday" maxlength="20" onchange="changeInput(&#39;birthday&#39;,&#39;&#39;)" value="<?php echo Yii::app()->session['user']->yue;?>" class="input_reg" onclick="WdatePicker({dateFmt:&#39;yyyy-MM-dd&#39;})"></td>
        <td>
        	<div id="birthdayflag_td" class="input_reg" style="width:50px;">
        		<select id="birthdayflag" name="birthdayflag" class="input_log">
        			<option value="0" selected="">保密</option>
        			<option value="1">公开</option>
        		</select>
        	</div>
        </td>
      </tr>
    </tbody></table>
  </div>
  <div id="birthday_car" style="position:absolute;left:548px;top:692px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:190px;top:748px;"><img id="birthday_img" src="public/desktop/images/dline1_h.gif"></div>
  
 
  <div id="job_car" style="position:absolute;left:637px;top:773px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:279px;top:829px;"><img id="job_img" src="public/desktop/images/dline3_h.gif"></div>
  
  <div style="position:absolute;left:264px;top:843px;">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;自我介绍：</td></tr>
      <tr>
        <td id="dsc_td" class="num_reg" style="height:36px;">10</td>
        <td rowspan="2">
		<textarea style="width:324px;height:130px;" id="dsc" name="dsc" class="text_reg" onkeyup="statTxtFontNum(&#39;dsc&#39;,200)" onblur="changeInput(&#39;dsc&#39;,&#39;&#39;)"></textarea>
		</td>
      </tr>
      <tr>
        <td style="height:94px;">&nbsp;</td>
      </tr>
    </tbody></table>
    <input type="hidden" id="picurl" name="picurl" value="mvip1.jpg">
  </div>
  <div id="dsc_car" style="position:absolute;left:635px;top:937px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:279px;top:903px;"><img id="dsc_img" src="public/desktop/images/dline5_h.gif"></div>
  </form>
  
  <form method="POST" name="form" id="form" action="http://www.baozupo.com/baozupo/base/baseDispatcher.do?method=uploadFile" enctype="multipart/form-data" target="iframe">
  <div style="position:absolute;left:264px;top:1016px;">
  	<input type="hidden" id="fileSize" name="fileSize" value="2">
	<input type="hidden" id="fileType" name="fileType" value="img">
	<input type="hidden" id="maxWidth" name="maxWidth" value="960">
	<input type="hidden" id="maxHeight" name="maxHeight" value="960">
    <table class="table">
      <tbody><tr><td></td><td class="td_cont_find">&nbsp;&nbsp;&nbsp;&nbsp;我的头像(小于100k)：像素(250*250)</td><td></td></tr>
      <tr>
        <td id="dsc_td" class="num_reg" style="height:36px;">11</td>
        <td rowspan="2">
		<div style="height:250px;width:250px;background-color:#F1F1F1;">
			
			
			<img class="table" id="fileimg" style="height:250px;width:250px;" src="public/desktop/images/mvip1.jpg">
			
		</div>
		</td>
		<td rowspan="2">
			<a class="file_a" style="width:70px;height:34px;"><img src="public/desktop/images/upfile.png"><input type="file" id="file" name="file" class="file_hide" onchange="fileUpload()" value=""></a>
		</td>
      </tr>
      <tr>
        <td style="height:214px;">&nbsp;</td>
      </tr>
    </tbody></table>
  </div>
  <div id="dsc_car" style="position:absolute;left:635px;top:1130px;display:none;"><img src="public/desktop/images/cartooninput.gif"></div>
  <div style="position:absolute;left:279px;top:1076px;"><img id="dsc_img" src="public/desktop/images/dline6_h.gif"></div>
  </form>
  
  <div id="divbut" style="position:absolute;left:290px;top:1346px;">
<!--    <input id="but" onclick="saveClick()" onmousemove="changeClass(&#39;but&#39;,&#39;button2_reg&#39;)" onmouseout="changeClass(&#39;but&#39;,&#39;button_reg&#39;)" class="button_reg" type="button" value="保存">-->
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
          <p style="float:left;height:20px;line-height:20px;margin: 0px;">京ICP备14031269号</p>
          <img src="public/desktop/images/gongan.png" style="float:left;margin: 0px 0px 0px 26px;">
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