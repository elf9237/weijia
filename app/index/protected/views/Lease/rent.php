<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>我要租房</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="css/house.css" rel="stylesheet">
       <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
        <script src="lib/pullTo/iscroll.js"></script>
        <script src="lib/pullTo/pullToRefresh.js"></script> -->
        <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="lib/area/area.js"></script>
        <link href="lib/area/area.css" rel="stylesheet" type="text/css"/>
         <script type="text/javascript" src="lib/searchDiv.js" charset="UTF-8"></script>
        
    </head>
    <body ontouchstart="">
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
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
                    <li class="nav-name icon down"><a href="javascript:;" id='ly' onclick="popCen(this,3)">个人</a></li>
                    </ul>
                    </div>
                </div>
            </section>
            <div class="ad-banner"> <a  href="" class="”ad-banner”"><img src="img/houseBanner5.png" style="width:100%; " alt="pic"></a> </div>
            <section>
            	<div id="wrapper">
                  <ul class="infoList">
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">佣金</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">佣金</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">置顶</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">置顶</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">置顶</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.php?r=store/detial">
                            <img src="img/01.jpg" alt="" class="item-thumb">
                            <dl class="item-info">
                                <dt class="info-title"><strong>【YOU+国际青年社区】向空旷孤独的房间say goodby</strong></dt>
                                <dd class="info-desc">
                                    <span class="info-desc-detail"><em>一室-宝龙广场</em>-菏泽小区32 </span>
                                    <span class="info-desc-tag info-desc-tag--right"> <em class="biz">置顶</em> </span>
                                </dd>
                                
                                <dd class="info-desc">
                                <span class="info-desc-price"> 1500<em class="priceunit"> 元</em></span><span class="info-desc-tag"><em class="time">今天</em></span><span class="info-desc-tag--right">  <em class="personal">个人</em>    </span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                  </ul>
                </div>
            </section>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="js/house.js"></script>
        
		<script>
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
　　　　		})
		}); 
		</script>
    </body>

</html>