<!DOCTYPE html>
<!-- saved from url=(0051)http://www.baozupo.com/baozupo/web.do#1459339916728 -->
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>我要租房</title>
  <meta name="description" content="">
  <meta name="sogou_site_verification" content="DvDFbTLWNb">
  <link href="public/desktop/css/WdatePicker.css" rel="stylesheet" type="text/css">
    <script src="public/desktop/js/jquery.min.js"></script>
  
  <script src="public/desktop/css/jquery.autogrowtextarea.min.js"></script>
   <script type="text/javascript" src="public/admin/scripts/utils/util.js"></script>
     <script type="text/javascript" src="public/admin/scripts/layer/layer.js"></script>
  
  <link rel="stylesheet" href="public/desktop/css/main.css">
  <link rel="stylesheet" href="public/desktop/css/mainweb.css">
  <link rel="stylesheet" href="public/desktop/css/comment.css">
  <link rel="stylesheet" href="public/desktop/css/scroller.css">
  <link rel="stylesheet" href="public/desktop/css/style.css">
</head>
<body class="body-web" style="Overflow-y:scroll">
<div class="header">
	<div class="logo"><img src="public/desktop/images/logo.png" alt=""></div>
	<div class="nav">
		<ul>
			<li><a href="index.php" >首页</a></li>
			<li><a href="index.php?r=site/zufang" class="active">我要租房</a></li>
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
  <div class="banner">
            <div class="index_b_hero">
                <div class="hero-wrap">
                    <ul class="heros">
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img01.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img02.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img03.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img04.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img05.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img06.jpg" />
                            </a>
                        </li>
                        <li class="hero">
                            <a href="#">
                                <img class="thumb" src="public/desktop/images/img07.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="helper">
                    <div class="mask-left"></div>
                    <div class="mask-right"></div>
                    <a href="javascript:;" class="page_btn prev"></a>
                    <a href="javascript:;" class="page_btn next"></a>
                </div>
            </div>
            <div id="lt_ss_tus" class="little_img">
                <ul class="small_list">
                    <li class="on">
                        <img id="0" src="public/desktop/images/img01.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li>
                        <img id="1" src="public/desktop/images/img02.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li>
                        <img id="2" src="public/desktop/images/img03.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li>
                        <img id="3" src="public/desktop/images/img04.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li>
                        <img id="4" src="public/desktop/images/img05.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li>
                        <img id="5" src="public/desktop/images/img06.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                    <li class="last">
                        <img id="6" src="public/desktop/images/img07.jpg" height="65" width="162">
                        <div class="bg"></div>
                    </li>
                </ul>
            </div>
        </div>
  <div id="contentpar" style="width:100%">
  <div class="div-box" style="min-height: 300px; height: 2370px; background-color: rgb(255, 255, 255);" id="content">




<div class="div_main" style="position:relative;">
  <div>
    <table class="table_hs">
      <tbody><tr>
        <td><div class="td_hsTitle">所在区域：</div></td>
        <td class="td_hsCon" colspan="2">
           <div id="city_4">
                    <select id="prov" class="prov input" ></select> 
                    <select id="city" class="city input" disabled="disabled"></select>
                    <select id="dist" class="dist input" disabled="disabled"></select>
                    <input type="button" value="确定" onclick="selZone()" class="button_hs">
                </div>
        </td>
      </tr>
      
      <tr>
        <td><div class="td_hsTitle">房租价格：</div></td>
        <td class="td_hsCon" colspan="2">
          <a id="prices" class="font_sel" onclick="selPrices(this,0,10000)">不限</a>&nbsp;&nbsp;
          <a id="prices" class="font_nom" onclick="selPrices(this,0,2000)">2000元/月以下</a>&nbsp;&nbsp;
          <a id="prices" class="font_nom" onclick="selPrices(this,2000,2500)">2000~2500元/月</a>&nbsp;&nbsp;
          <a id="prices" class="font_nom" onclick="selPrices(this,2500,3000)">2500~3000元/月</a>&nbsp;&nbsp;
          <a id="prices" class="font_nom" onclick="selPrices(this,3000,3500)">3000~3500元/月</a>&nbsp;&nbsp;
          <a id="prices" class="font_nom" onclick="selPrices(this,3500,10000)">3500~4000元/月</a>&nbsp;&nbsp;
          
           自定义：<input type="text"  id="pricesst" value="" class="input_hs">-<input type="text" id="pricesed" value="" class="input_hs">&nbsp;&nbsp;
           <input type="button" value="确定" onclick="selPrices(this)" class="button_hs">
        </td>
      </tr>
      <tr class="td_hsline"><td colspan="3"></td></tr>
     
      <tr class="td_hsline"><td colspan="2"></td></tr>
      <tr>
        <td><div class="td_hsTitle">方式：</div></td>
        <td class="td_hsCon">
            <a name="flag" class="font_sel" onclick="setInfoType(this,-1)" >不限</a>&nbsp;&nbsp;
          <a name="flag" class="" onclick="setInfoType(this,0)">月租</a>&nbsp;&nbsp;
          <a name="flag" class="font_nom" onclick="setInfoType(this,1)">日租</a>&nbsp;&nbsp;
          <a name="flag" class="font_nom" onclick="setInfoType(this,2)" >商铺</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr class="td_hsline"><td colspan="2"></td></tr>
      <tr>
        <td><div class="td_hsTitle">居室：</div></td>
        <td class="td_hsCon">
          <a name="hold" class="font_sel" onclick="selHold(this,-1)">不限</a>&nbsp;&nbsp;
          <a name="hold" class="font_nom" onclick="selHold(this,1)">一居</a>&nbsp;&nbsp;
          <a name="hold" class="font_nom" onclick="selHold(this,2)">二居</a>&nbsp;&nbsp;
          <a name="hold" class="font_nom" onclick="selHold(this,3)">三居</a>&nbsp;&nbsp;
          <a name="hold" class="font_nom" onclick="selHold(this,4)">四居</a>&nbsp;&nbsp;
          <a name="hold" class="font_nom" onclick="selHold(this,5)">五居及以上</a>&nbsp;&nbsp;
        </td>
      </tr>
      <tr class="td_hsline"><td colspan="3"></td></tr>
    </tbody></table>
  </div>
  
  <div class="table" style="width:99%;">
  	<table class="table" width="100%">
  	  <tbody>
              <tr>
  	    <td width="810px" align="left">
	      <div class="color_def">共有 468 套符合要求的房源</div>
	    </td>
	    <td align="left"><img src="public/desktop/images/right_tri.gif"></td>
  	  </tr>
  	</tbody></table>
  </div>
  <div class="div-split"></div>
  
  <div id="divSerachMain" class="table" style="width:99%;">





<div style="width:100%">
<table cellpadding="0" cellspacing="0" class="table" width="100%">

  <tbody id="fangbody">

</tbody></table>
<div id="tmpdiv"></div>
</div>

 
</div>
  
  <div class="div-split"></div>
  <div id="divtoolhs">
  <div class="div-bottomline"></div>
  <div class="div-split"></div>
  <div>
	<div class="div-align-right">
		




<div style="height:32px;text-align:right;" id="turnPageBar">
	
</div>

	</div>
  </div>
  </div>
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
  <td>400-678-3666</td>
  <td></td>
  <td>微信扫一扫</td>
  <td colspan="2"></td>
  </tr>
  <tr style="height:5px;"><td colspan="10"></td></tr>
</tbody></table>
  </div>
  <div style="position:fixed;top:200px;right:20px;z-index:18000;"><img class="handpoint" onclick="prefindTop()" src="public/desktop/images/flowright.png"></div>


  <script src="public/desktop/js/common.js"></script>
  <script src="public/desktop/js/webCommon.js"></script>
  <script type="text/javascript" src="public/desktop/js/scroller.js"></script>
  <script type="text/javascript" src="public/desktop/js/picEffect.js"></script>
  <script type="text/javascript" src="public/desktop/js/topbananer.js"></script>
  <script type="text/javascript" src="public/desktop/js/jquery.history.js"></script>
 
  <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
  <script src="public/desktop/js/WdatePicker.js"></script>
<script src="public/desktop/js/carousel_focus.min.js" type="text/javascript"></script>
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
    var param={
      rooms:-1,
      sprice:0,
      eprice:10000,
      info_type:-1,
      prov: "福建",
      city: "福州",
      dist: "仓山区",
      page:1
  };
  function selPricesz(th){
      var sprice=$("pricesst").val().trim();
       var eprice=$("pricesed").val().trim();
       if(sprice==""||!eprice==""){
           return;
       }
      $(th).siblings().removeClass("font_sel");
      $(th).addClass("font_sel");
      param.sprice=sprice;
       param.eprice=eprice;
       queryFanyuans(1);
      
  }
  function selPrices(th,sprice,eprice ){
      $(th).siblings().removeClass("font_sel");
      $(th).addClass("font_sel");
      param.sprice=sprice;
       param.eprice=eprice;
       queryFanyuans(1);
      
  }
  function setInfoType(th,info_type){
       $(th).siblings().removeClass("font_sel");
      $(th).addClass("font_sel");
      param.info_type=info_type;
       
       queryFanyuans(1);
  }
  function selHold(th,rooms){
       $(th).siblings().removeClass("font_sel");
      $(th).addClass("font_sel");
      param.rooms=rooms;
       
       queryFanyuans(1);
  }
  function selZone(){
     param.prov= $("#prov option:selected").val();
      param.city= $("#city option:selected").val();
       param.dist= $("#dist option:selected").val();
        queryFanyuans(1);
      
  }
  
  function queryFanyuans(page){
      
            param.page=page;
            $.ajax({
               url:"index.php?r=ajax/queryFangyu",
               data:param,
               type:"POST",
               dataType:"json",
               success:function(data){
                        
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){ 
                    innerHtml.push('<tr>'+
	'<td width="600px" height="370px" class="handpoint" onclick="showRoom('+value.id+');" style="background-color:#00FF00">'+
	  '<div style="width:370px;height:370px;float:left;"><img width="370px" height="370px" src="upload/'+value.mian_url+'"></div>'+
  	  '<div style="width:230px;height:230px;float:left;"><img width="230px" height="230px" src="public/desktop/images/2015010416480700011.jpg"></div>'+
     ' <div style="width:230px;height:140px;float:left;background-color:#FFCC00;color:#FFFFFF;font-size:20px;">'+
      	'<div class="priceseaname">微家租房</div>'+
	    '<div class="priceseaeng">Sunshine Time</div>'+
     '</div>'+
	'</td>'+
	'<td width="20px">&nbsp;</td>'+
	'<td valign="top">'+
	 ' <table class="table_find" width="100%">'+
	   ' <tbody><tr height="8px"><td></td></tr>'+
	    '<tr class="td_title_find handpoint" onclick="showRoom(&#39;62&#39;,&#39;169&#39;);">'+
	    	'<td width="28px"><img src="public/desktop/images/hs_name.png"></td>'+
	    	'<td style="font-size:20px;color:#666666"><strong>'+value.info_name+'</strong></td>'+
	   ' </tr>'+
	    '<tr height="8px"><td></td></tr>'+
	   ' <tr>'+
	    	'<td><img src="public/desktop/images/hs_ad.png"></td>'+
	    	'<td style="font-size:16px;color:#666666"><strong>'+value.city+'-'+value.zone+'-'+value.district+'</strong></td>'+
	   ' </tr>'+
	   ' <tr height="8px"><td></td></tr>'+
	   ' <tr>'+
	    	'<td><img src="public/desktop/images/hs_home.png"></td>'+
	    	'<td class="td_cont_find">'+
	    		value.rooms+'&nbsp;|&nbsp;'+value.area+'平米&nbsp;|&nbsp;'+value.nfloor+'/'+value.floors+'&nbsp;|&nbsp;'+value.direction+
	    	'</td>'+
	   ' </tr>'+
	   ' <tr height="10px"><td></td></tr>'+
	   ' <tr class="td_hsline"><td colspan="2"></td></tr>'+
	    '<tr height="18px"><td></td></tr>'+
	    '<tr>'+
	    	'<td><img src="public/desktop/images/hs_y.png"></td>'+
	    	'<td align="left">'+
		      		'<font style="font-size:18px"><strong>'+value.price+'</strong></font>元/月'+
	      		
	    	'</td>'+
	   ' </tr>'+
	   ' <tr height="8px"><td></td></tr>'+
	    '<tr>'+
	    	'<td><img src="public/desktop/images/hs_hy.png"></td>'+
	    	'<td class="td_cont_find">'+
	    		'<table cellpadding="0" cellspacing="0" class="table" align="left">'+
	    			'<tbody><tr>'+
	    				'<td><img class="images_nobord" src="public/desktop/images/rentno.png"></td>'+
	    			'</tr>'+
	    		'</tbody></table>'+
	    	'</td>'+
	    '</tr>'+
	    '<tr height="8px"><td></td></tr>'+
	    '<tr>'+
	    	'<td><img src="public/desktop/images/hs_ttx.png"></td>'+
	    	'<td class="td_cont_find">'+value.district+'</td>'+
	    '</tr>'+
	    '<tr height="8px"><td></td></tr>'+
	   ' <tr>'+
	    	'<td><img src="public/desktop/images/hs_dt.png"></td>'+
	    	'<td class="td_cont_find">'+value.bus+'</td>'+
	    '</tr>'+
	  '</tbody></table>'+
	'</td>'+
  '</tr>'+
  '<tr><td colspan="3" height="20px">&nbsp;</td></tr>');
    });
                   
                       
                   }
                    $("#fangbody").html(innerHtml.join(""));
                   pageding($("#turnPageBar"),"queryFanyuans",data);
               }
            })
          
      
  }
  function showRoom(id){
  window.location.href='index.php?r=site/zufangdetail&id='+id;
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
</script>

</body></html>