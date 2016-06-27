<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>商铺出租</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="css/house.css" rel="stylesheet">
       <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
        <script src="lib/pullTo/iscroll.js"></script>
        <script src="lib/pullTo/pullToRefresh.js"></script> -->
        <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="lib/area/area.js"></script>
        <link href="lib/area/area.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body ontouchstart="">
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
            <ul class="ui-tiled ui-border-t">
                <li data-href="introduce.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="index.html" class="ui-border-r ui-rent"><div>首页</div></li>
                <li data-href="crent.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section class="ui-container">
            <section class="filter-wrap">
                <div class="filter_outer" id="filter">
                    <div class="list_filter">
                    <ul class="nav_filter">
                    <li class="nav-name icon down"><a href="javascript:;">
                        <div id="addAddress">
                            <div class="address_input"><input class="address_input1" type="text" placeholder="省市区" id="shengshi" onClick="getProvinceBuy()" readonly="readonly"></div>
                        </div>
                    </a></li>
                    <li class="nav-name icon down"><a href="javascript:;" id='zj' onclick="popCen(this,1)">租金</a></li>
                    <li class="nav-name icon down"><a href="javascript:;" id='hx' onclick="popCen(this,2)">户型室</a></li>
                    <li class="nav-name icon down"><a href="javascript:;" id='ly' onclick="popCen(this,3)">类别</a></li>
                    </ul>
                    </div>
                </div>
            </section>
            <div class="ad-banner"> <a  href="" class="”ad-banner”"><img src="img/houseBanner5.png" style="width:100%; " alt="pic"></a> </div>
            <section>
            	<div id="wrapper">
                  <ul class="infoList">
                  </ul>
                </div>
            </section>
        </section>
        <script src="lib/zepto.min.js"></script>
         <script src="lib/dropload.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="lib/searchDiv.js"></script>
        <script src="js/house.js"></script>
        <script>
            function getLocalTime(nS) {
                return new Date(parseInt(nS) * 1000).toLocaleString().substr(0,12)
}
  query();
		$(document).ready(function() { 
			$.ajax({
		　　　　　　url: 'index.php?r=basemenu/footmenu',
		　　　　　　type: 'POST',
		　　　　　　//data: { id: idValue },
		　　　　　　//timeout: 3000,
		　　　　　　success: function (data) {
						$("#foot").html(data);
					 },
		　　　　　　error: function (data) {
								 alert('===');},
　　　　		});
                
                query();
		}); 
//                 var page=1;//当前页
//    var pages=5;//总页数
    var ajax=!1;//是否加载中
     var param={
      rooms:-1,
      sprice:0,
      eprice:10000,
      info_type:'<?php echo $info_type;?>',
      prov: "福建",
      city: "福州",
      dist: "仓山区",
      page:0,
      totalPage:1,
  };
                
                 function query(){   Zepto(function($){
        $(window).scroll(function(){
       
            if(($(window).scrollTop() + $(window).height() > $(document).height()-30) && !ajax && param.totalPage >= param.page){
                //滚动条拉到离底40像素内，而且没ajax中，而且没超过总页数
                //json_ajax(cla,++page);
                param.page++;//当前页增加1
                ajax=!0;//注明开始ajax加载中
                $("#wrapper").append('<div class="loading"><img src="/template/mobile/loading.gif" alt="" /></div> ');//出现加载图片
                $.ajax({
                    type: 'POST',
                    url: "index.php?r=ajax/queryFangyu",
               data:param,
                    dataType: 'json',
                    success: function(data){
                        param.totalPage=data.totaPage;//更新总页数
                        param.page=data.currentPage;//更新当前页（js不太可靠）
                         var innerHtml=[];
                         $.each(data.pageList,function(n,value){
                              var type="个人";
                             if(value.type==0)
                                 type="微家";
                              var ding="";
                             if(value.orderno!=null)
                                 ding="置顶";
                              var yong="";
                             if(value.yong_jin!=0)
                                 yong="转发交易成功得佣金"+value.yong_jin*0.2+"元";
                             
                                 var lend_status='未租';
                             if(value.lend_status=='1'){
                                 lend_status='已租';
                             }
                                 innerHtml.push('<li class="item">'+
                        '<a onclick="showRoom('+value.id+')">'+
                            '<img src="upload/'+value.mian_url+'" alt="" class="item-thumb">'+
                            '<dl class="item-info">'+
                               ' <dt class="info-title"><strong>'+value.info_name+'</strong></dt>'+

                               ' <dd class="info-desc">'+
                                    '<span class="info-desc-detail"><em>'+value.house_type+'</em>'+value.city+'-'+value.zone+'-'+value.district+' </span>'+
                                   
            '<span class="info-desc-tag info-desc-tag--right"> <em class="biz">'+ding+'</em> </span>'+
                                '</dd>'+
                                
                                '<dd class="info-desc">'+
                                '<span class="info-desc-price"> '+value.price+'<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">'+getLocalTime(value.create_time)+'</em></span><span class="info-desc-tag--right">  <em class="personal">'+type+'</em>    </span></span><span class="info-desc-tag--right">  <em class="personal personal-type">'+lend_status+'</em>    </span>'+
                                '</dd>' +
                                 '<dd class="info-desc"><span class="info-desc-tag info-desc-tag--right"> <em class="biz">'+yong+'</em> </span></dd>'+
                                     '</dl> </a>  </li>');
                            
                       
                  
                             
                         
    });
    $(".infoList").append(innerHtml.join(""));
                        $(".loading").remove();//删除加载图片
                        ajax=!1;//注明已经完成ajax加载
                    },
                    error: function(xhr, type){
                        $(".loading").html("暂无内容！");
                    }
                });
            }
        }).scroll();
    })}
    function querySecond(){
    
     $.ajax({
                    type: 'POST',
                    url: "index.php?r=ajax/queryFangyu",
               data:param,
                    dataType: 'json',
                    success: function(data){
                        param.totalPage=data.totaPage;//更新总页数
                        param.page=data.currentPage;//更新当前页（js不太可靠）
                         var innerHtml=[];
                         $.each(data.pageList,function(n,value){
                             var type="个人";
                             if(value.type=='0')
                                 type="微家";
                              var ding="";
                             if(value.orderno!=null)
                                 ding="置顶";
                              var yong="";
                             if(value.yong_jin!=0)
                                 yong="佣："+value.yong_jin;
                             var lend_status='未租';
                             if(value.lend_status=='1'){
                                 lend_status='已租';
                             }
                              
                             
                                 innerHtml.push('<li class="item"><a onclick="showRoom('+value.id+')">'+
                            '<img src="upload/'+value.mian_url+'" alt="" class="item-thumb"/>'+
                            '<dl class="item-info">'+
                               ' <dt class="info-title"><strong>'+value.info_name+'</strong></dt>'+
                               ' <dd class="info-desc">'+
                                    '<span class="info-desc-detail"><em>'+value.house_type+'</em>'+value.city+'-'+value.zone+'-'+value.district+' </span>'+
                                    '<span class="info-desc-tag info-desc-tag--right"> <em class="biz">'+ding+'</em> </span>'+
                                    '<span class="info-desc-tag info-desc-tag--right"> <em class="biz">'+yong+'</em> </span>'+
                                '</dd>'+
                                
                                '<dd class="info-desc">'+
                                '<span class="info-desc-price"> '+value.price+'<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">'+getLocalTime(value.create_time)+'</em></span><span class="info-desc-tag--right">  <em class="personal">'+type+'</em>    </span></span><span class="info-desc-tag--right">  <em class="personal">'+lend_status+'</em>    </span>'+
                                '</dd></dl> </a>  </li>');
                            
                       
                  
                             
                         
    });
    $(".infoList").html(innerHtml.join(""));
                        $(".loading").remove();//删除加载图片
                        ajax=!1;//注明已经完成ajax加载
                    },
                    error: function(xhr, type){
                        $(".loading").html("暂无内容！");
                    }
                });
    }
    function showRoom(id){
     window.location.href='index.php?r=store/detial&id='+id;
    
    }
    
    
   
		</script>
    </body>

</html>