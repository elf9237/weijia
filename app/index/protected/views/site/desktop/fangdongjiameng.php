<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459343044548 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>房东加盟</title>

	<meta name="toTop" content="true">
  <meta name="description" content="">
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
  <link href="public/desktop/css/WdatePicker.css" rel="stylesheet" type="text/css">
  <script src="public/desktop/css/jquery.autogrowtextarea.min.js"></script>
  <link rel="stylesheet" href="public/desktop/css/main.css">
  <link rel="stylesheet" href="public/desktop/css/mainweb.css">
  <link rel="stylesheet" href="public/desktop/css/comment.css">
  <link rel="stylesheet" href="public/desktop/css/scroller.css">
  <link rel="stylesheet" href="public/desktop/css/style.css">
  <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
</head>
<body class="body-web" style="Overflow-y:scroll">
<div class="header">
	<div class="logo"><img src="public/desktop/images/logo.png" alt=""></div>
	<div class="nav">
		<ul>
			<li><a href="index.php">首页</a></li>
			<li><a href="index.php?r=site/zufang">我要租房</a></li>
			<li><a href="index.php?r=site/guanjia">管家服务</a></li>
			<li><a href="index.php?r=site/myinfo">会员中心</a></li>
			<li><a href="index.php?r=site/jiameng" class="active">代理商加盟</a></li>
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
  <div class="div-box" style="min-height: 300px;margin-bottom:200px;" id="content">
<div style="background-color:#FFFFFF;">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr style="background-color:#ea6060;height:200px;"><td colspan="5" align="left">&nbsp;&nbsp;<img src="public/desktop/images/subroom.png"></td></tr>

  	  </tbody></table>
</div>
<div id="regdiv" style="position:relative;margin-top:30px;">
  <input type="hidden" id="id" name="id" value="">
  <table cellpadding="0" cellspacing="0" class="table" width="100%">
  	<tbody><tr>
  		<td width="250px"><img src="public/desktop/images/leasel1.png"></td>
  		<td width="50px">&nbsp;</td>
  		<td width="700px">
  			<table cellpadding="0" cellspacing="0" class="table" width="100%">
  				<tbody><tr><td class="color_def break font_lease">您可以在下方表格中填写您的姓名、联系方式以及房源位置，提交后微家<br>会尽快与您联络。</td></tr>
  				<tr class="td_hsline"><td></td></tr>
  			</tbody></table>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"></td>
  		<td>
  			<table cellpadding="0" cellspacing="0" class="table">
  				<tbody><tr height="40px">
  					<td class="color_def font_lease" style="text-align:right">姓名&nbsp;&nbsp;</td>
  					<td>
  					<input type="text" id="name" name="name" onkeyup="limitInputLen(this,20)" value="" class="input7_reg">
  					</td>
  					<td width="200px"></td>
  				</tr>
  				<tr height="40px">
  					<td class="color_def font_lease" style="text-align:right">联系手机&nbsp;&nbsp;</td>
  					<td>
  					<input type="text" id="phone" name="phone" onkeypress="return checkInputNumber(event)" maxlength="20" value="" class="input7_reg">
  					</td>
  					<td></td>
  				</tr>
  				<tr height="40px">
                                   <td class="color_def font_lease" style="text-align:right">区域&nbsp;&nbsp;</td>
                                    <td style="width:50%">
  					 <div id="city_4">
                    <select id="prov" class="prov input" ></select> 
                    <select id="city" class="city input" disabled="disabled"></select>
                    <select id="dist" class="dist input" disabled="disabled"></select>
                    
                </div>
                                </td>
  				</tr>
                                <tr height="40px">
  					<td class="color_def font_lease" style="text-align:right">身份证号&nbsp;&nbsp;</td>
  					<td>
  					<input type="text" id="user_idno" name="phone"  maxlength="20" value="" class="input7_reg">
  					</td>
  					<td></td>
  				</tr>
                                 <tr height="40px">
  					<td class="color_def font_lease" style="text-align:right">金额&nbsp;&nbsp;</td>
  					<td>
  					<input type="text" id="price" name="phone"  maxlength="20" value="" class="input7_reg">
  					</td>
  					<td></td>
  				</tr>
                                
  				<tr height="60px"><td colspan="2"><input type="button" value="提  交" onclick="save()" class="button_reg" style="font-size:16px;width:100px"></td><td></td></tr>
  			</tbody></table>
  		</td>
  	</tr>
  	
	
	<tr>
  		<td><img src="public/desktop/images/leasel2.png"></td>
  		<td>&nbsp;</td>
  		<td>
  			<table cellpadding="0" cellspacing="0" class="table" width="100%">
  				<tbody><tr><td class="color_def break font_lease">微家会通过电话与您核实房子的基本信息，并向您介绍微家的租房模式。</td></tr>
  				<tr class="td_hsline"><td></td></tr>
  			</tbody></table>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"></td>
  		<td align="left">
  			<table cellpadding="0" cellspacing="0" class="table">
  				<tbody><tr>
  					<td><img src="public/desktop/images/leaser21.jpg"></td>
  					<td width="10px"></td>
  					<td><img src="public/desktop/images/leaser22.jpg"></td>
  				</tr>
  			</tbody></table>
  		</td>
  	</tr>
  	
  	
  	<tr>
  		<td><img src="public/desktop/images/leasel3.png"></td>
  		<td>&nbsp;</td>
  		<td>
  			<table cellpadding="0" cellspacing="0" class="table" width="100%">
  				<tbody><tr><td class="color_def break font_lease">如您了解微家的租房模式并有意向将房间出租，我们的工作人员和专业设计<br>师将会和您预约时间，实地查看房屋的具体情况。</td></tr>
  				<tr class="td_hsline"><td></td></tr>
  			</tbody></table>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"></td>
  		<td align="left">
  			<table cellpadding="0" cellspacing="0" class="table">
  				<tbody><tr>
  					<td><img src="public/desktop/images/leaser31.jpg"></td>
  					<td width="10px"></td>
  					<td><img src="public/desktop/images/leaser32.jpg"></td>
  				</tr>
  			</tbody></table>
  		</td>
  	</tr>
  	
  	<tr>
  		<td><img src="public/desktop/images/leasel4.png"></td>
  		<td>&nbsp;</td>
  		<td>
  			<table cellpadding="0" cellspacing="0" class="table" width="100%">
  				<tbody><tr><td class="color_def break font_lease">房屋查看完毕，通过我们的房屋评估后，我们将与您签订租赁合同。您只需稳<br>坐家中按时收租。</td></tr>
  				<tr class="td_hsline"><td></td></tr>
  			</tbody></table>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2"></td>
  		<td align="left">
  			<table cellpadding="0" cellspacing="0" class="table">
  				<tbody><tr>
  					<td><img src="public/desktop/images/leaser41.jpg"></td>
  					<td width="10px"></td>
  					<td><img src="public/desktop/images/leaser42.jpg"></td>
  				</tr>
  			</tbody></table>
  		</td>
  	</tr>
  	


  </tbody></table>
  
  <div id="tmpdiv" style="display:none;"></div>
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
    
    function save(){
          var param={
      phone:-1,
      user_name:0,
      price:10000,
      prov: "福建",
      city: "福州",
      dist: "仓山区",
      user_idno:""
  };
   param.prov= $("#prov option:selected").val();
      param.city= $("#city option:selected").val();
       param.dist= $("#dist option:selected").val();
  if($("#name").val()==""||$("#price").val()==""||$("#phone").val()==""||$("#user_idno").val()==""){
      alert("请完善信息");
      return;
  }
  
  param.phone=$("#phone").val();
   param.user_name=$("#name").val();
    param.price=$("#price").val();
     param.user_idno=$("#user_idno").val();
     
     $.ajax({
               url:"index.php?r=ajax/submitAgent",
               data:param,
               type:"POST",
               dataType:"json",
               success:function(data){
                   alert("提交成功！");
               }});
        
    }
    
    
      $(function(){
       $("#city_4").citySelect({
                    prov: "福建",
                    city: "福州",
                    dist: "仓山区",
                    nodata: "none"
                });
                queryFanyuans(1);
  })
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