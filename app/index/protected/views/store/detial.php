<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>租房详情</title>
        <link rel="stylesheet" href="css/frozen.css">       
       <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
        <script src="lib/pullTo/iscroll.js"></script>
        <script src="lib/pullTo/pullToRefresh.js"></script> -->
        <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="js/jquery.bxslider.js"></script>
       <script src="public/desktop/js/common.js"></script>
       <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
       <link href="css/house.css" rel="stylesheet">
       <style type="text/css">.BMap_mask{background:transparent url(about:blank);}.BMap_noscreen{display:none;}.BMap_button{cursor:pointer;}.BMap_zoomer{background-image:url(http://api.map.baidu.com/images/mapctrls1d3.gif);background-repeat:no-repeat;overflow:hidden;font-size:1px;position:absolute;width:7px;height:7px;}.BMap_stdMpCtrl div{position:absolute;}.BMap_stdMpPan{width:44px;height:44px;overflow:hidden;background:url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat;}.BMap_ie6 .BMap_stdMpPan{background:none;}.BMap_ie6 .BMap_smcbg{left:0;width:44px;height:464px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://api.map.baidu.com/images/mapctrls2d0.png');}.BMap_ie6 .BMap_stdMpPanBg{z-index:-1;}.BMap_stdMpPan .BMap_button{height:15px;width:15px;}.BMap_panN,.BMap_panW,.BMap_panE,.BMap_panS{overflow:hidden;}.BMap_panN{left:14px;top:0;}.BMap_panW{left:1px;top:12px;}.BMap_panE{left:27px;top:12px;}.BMap_panS{left:14px;top:25px;}.BMap_stdMpZoom{top:45px;overflow:hidden;}.BMap_stdMpZoom .BMap_button{width:22px;height:21px;left:12px;overflow:hidden;background-image:url(http://api.map.baidu.com/images/mapctrls2d0.png);background-repeat:no-repeat;z-index:10;}.BMap_ie6 .BMap_stdMpZoom .BMap_button{background:none;}.BMap_stdMpZoomIn{background-position:0 -221px;}.BMap_stdMpZoomOut{background-position:0 -265px;}.BMap_ie6 .BMap_stdMpZoomIn div{left:0;top:-221px;}.BMap_ie6 .BMap_stdMpZoomOut div{left:0;top:-265px;}.BMap_stdMpType4 .BMap_stdMpZoom .BMap_button{left:0;overflow:hidden;background:-webkit-gradient(linear,50% 0,50% 100%,from(rgba(255,255,255,0.85)),to(rgba(217,217,217,0.85)));z-index:10;-webkit-border-radius:22px;width:34px;height:34px;border:1px solid rgba(255,255,255,0.5);-webkit-box-shadow:0 2px 3.6px #CCC;display:-webkit-box;-webkit-box-align:center;-webkit-box-pack:center;-webkit-box-sizing:border-box;}.BMap_stdMpType4 .BMap_smcbg{position:static;background:url(http://api.map.baidu.com/images/mapctrls2d0_mb.png) 0 0 no-repeat;-webkit-background-size:24px 32px;}.BMap_stdMpType4 .BMap_stdMpZoomIn{background-position:0 0;}.BMap_stdMpType4 .BMap_stdMpZoomIn .BMap_smcbg{width:24px;height:24px;background-position:0 0;}.BMap_stdMpType4 .BMap_stdMpZoomOut{background-position:0 0;}.BMap_stdMpType4 .BMap_stdMpZoomOut .BMap_smcbg{width:24px;height:6px;background-position:0 -25px;}.BMap_stdMpSlider{width:37px;top:18px;}.BMap_stdMpSliderBgTop{left:18px;width:10px;overflow:hidden;background:url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat -23px -226px;}.BMap_stdMpSliderBgBot{left:19px;height:8px;width:10px;top:124px;overflow:hidden;background:url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat -33px bottom;}.BMap_ie6 .BMap_stdMpSliderBgTop,.BMap_ie6 .BMap_stdMpSliderBgBot{background:none;}.BMap_ie6 .BMap_stdMpSliderBgTop div{left:-23px;top:-226px;}.BMap_ie6 .BMap_stdMpSliderBgBot div{left:-33px;bottom:0;}.BMap_stdMpSliderMask{height:100%;width:24px;left:10px;cursor:pointer;}.BMap_stdMpSliderBar{height:11px;width:19px;left:13px;top:80px;overflow:hidden;background:url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat 0 -309px;}.BMap_stdMpSliderBar.h{background:url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat 0 -320px;}.BMap_ie6 .BMap_stdMpSliderBar,.BMap_ie6 .BMap_stdMpSliderBar.h{background:none;}.BMap_ie6 .BMap_stdMpSliderBar div{top:-309px;}.BMap_ie6 .BMap_stdMpSliderBar.h div{top:-320px;}.BMap_zlSt,.BMap_zlCity,.BMap_zlProv,.BMap_zlCountry{position:absolute;left:34px;height:21px;width:28px;background-image:url(http://api.map.baidu.com/images/mapctrls2d0.png);background-repeat:no-repeat;font-size:0;cursor:pointer;}.BMap_ie6 .BMap_zlSt,.BMap_ie6 .BMap_zlCity,.BMap_ie6 .BMap_zlProv,.BMap_ie6 .BMap_zlCountry{background:none;overflow:hidden;}.BMap_zlHolder{display:none;position:absolute;top:0;}.BMap_zlHolder.hvr{display:block;}.BMap_zlSt{background-position:0 -380px;top:21px;}.BMap_zlCity{background-position:0 -401px;top:57px;}.BMap_zlProv{background-position:0 -422px;top:81px;}.BMap_zlCountry{background-position:0 -443px;top:105px;}.BMap_ie6 .BMap_zlSt div{top:-380px;}.BMap_ie6 .BMap_zlCity div{top:-401px;}.BMap_ie6 .BMap_zlProv div{top:-422px;}.BMap_ie6 .BMap_zlCountry div{top:-443px;}.BMap_stdMpType1 .BMap_stdMpSlider,.BMap_stdMpType2 .BMap_stdMpSlider,.BMap_stdMpType3 .BMap_stdMpSlider,.BMap_stdMpType4 .BMap_stdMpSlider,.BMap_stdMpType2 .BMap_stdMpZoom,.BMap_stdMpType3 .BMap_stdMpPan,.BMap_stdMpType4 .BMap_stdMpPan{display:none;}.BMap_stdMpType3 .BMap_stdMpZoom{top:0;}.BMap_stdMpType4 .BMap_stdMpZoom{top:0;}.BMap_cpyCtrl a{font-size:11px;color:#7979CC;}.BMap_scaleCtrl{height:23px;overflow:hidden;}.BMap_scaleCtrl div.BMap_scaleTxt{font-size:11px;font-family:Arial,sans-serif;}.BMap_scaleCtrl div{position:absolute;overflow:hidden;}.BMap_scaleHBar img,.BMap_scaleLBar img,.BMap_scaleRBar img{position:absolute;width:37px;height:442px;left:0;}.BMap_scaleHBar{width:100%;height:5px;font-size:0;bottom:0;}.BMap_scaleHBar img{top:-437px;width:100%;}.BMap_scaleLBar,.BMap_scaleRBar{width:3px;height:9px;bottom:0;font-size:0;z-index:1;}.BMap_scaleLBar img{top:-427px;left:0;}.BMap_scaleRBar img{top:-427px;left:-5px;}.BMap_scaleLBar{left:0;}.BMap_scaleRBar{right:0;}.BMap_scaleTxt{text-align:center;width:100%;cursor:default;line-height:18px;}.BMap_omCtrl{background-color:#fff;overflow:hidden;}.BMap_omOutFrame{position:absolute;width:100%;height:100%;left:0;top:0;}.BMap_omInnFrame{position:absolute;border:1px solid #999;background-color:#ccc;overflow:hidden;}.BMap_omMapContainer{position:absolute;overflow:hidden;width:100%;height:100%;left:0;top:0;}.BMap_omViewMv{border-width:1px;border-style:solid;border-left-color:#84b0df;border-top-color:#adcff4;border-right-color:#274b8b;border-bottom-color:#274b8b;position:absolute;z-index:600;}.BMap_omViewInnFrame{border:1px solid #3e6bb8;}.BMap_omViewMask{width:1000px;height:1000px;position:absolute;left:0;top:0;background-color:#68c;opacity:.2;filter:progid:DXImageTransform.Microsoft.Alpha(opacity=20);}.BMap_omBtn{height:13px;width:13px;position:absolute;cursor:pointer;overflow:hidden;background:url(http://api.map.baidu.com/images/mapctrls1d3.gif) no-repeat;z-index:1210;}.anchorBR .BMap_omOutFrame{border-top:1px solid #999;border-left:1px solid #999;}.quad4 .BMap_omBtn{background-position:-26px -27px;}.quad4 .BMap_omBtn.hover{background-position:0 -27px;}.quad4 .BMap_omBtn.BMap_omBtnClosed{background-position:-39px -27px;}.quad4 .BMap_omBtn.BMap_omBtnClosed.hover{background-position:-13px -27px;}.anchorTR .BMap_omOutFrame{border-bottom:1px solid #999;border-left:1px solid #999;}.quad1 .BMap_omBtn{background-position:-39px -41px;}.quad1 .BMap_omBtn.hover{background-position:-13px -41px;}.quad1 .BMap_omBtn.BMap_omBtnClosed{background-position:-26px -41px;}.quad1 .BMap_omBtn.BMap_omBtnClosed.hover{background-position:0 -41px;}.anchorBL .BMap_omOutFrame{border-top:1px solid #999;border-right:1px solid #999;}.quad3 .BMap_omBtn{background-position:-27px -40px;}.quad3 .BMap_omBtn.hover{background-position:-1px -40px;}.quad3 .BMap_omBtn.BMap_omBtnClosed{background-position:-40px -40px;}.quad3 .BMap_omBtn.BMap_omBtnClosed.hover{background-position:-14px -40px;}.anchorTL .BMap_omOutFrame{border-bottom:1px solid #999;border-right:1px solid #999;}.quad2 .BMap_omBtn{background-position:-40px -28px;}.quad2 .BMap_omBtn.hover{background-position:-14px -28px;}.quad2 .BMap_omBtn.BMap_omBtnClosed{background-position:-27px -28px;}.quad2 .BMap_omBtn.BMap_omBtnClosed.hover{background-position:-1px -28px;}.anchorR .BMap_omOutFrame{border-bottom:1px solid #999;border-left:1px solid #999;border-top:1px solid #999;}.anchorL .BMap_omOutFrame{border-bottom:1px solid #999;border-right:1px solid #999;border-top:1px solid #999;}.anchorB .BMap_omOutFrame{border-top:1px solid #999;border-left:1px solid #999;border-right:1px solid #999;}.anchorT .BMap_omOutFrame{border-bottom:1px solid #999;border-right:1px solid #999;border-left:1px solid #999;}.anchorNon .BMap_omOutFrame,.withOffset .BMap_omOutFrame{border:1px solid #999;}.BMap_zoomMask0,.BMap_zoomMask1{position:absolute;left:0;top:0;width:100%;height:100%;background:transparent url(http://api.map.baidu.com/images/blank.gif);z-index:1000;}.BMap_contextMenu{position:absolute;border-top:1px solid #adbfe4;border-left:1px solid #adbfe4;border-right:1px solid #8ba4d8;border-bottom:1px solid #8ba4d8;padding:0;margin:0;width:auto;visibility:hidden;background:#fff;z-index:10000000;}.BMap_cmShadow{position:absolute;background:#000;opacity:.3;filter:alpha(opacity=30);visibility:hidden;z-index:9000000;}div.BMap_cmDivider{border-bottom:1px solid #adbfe4;font-size:0;padding:1px;margin:0 6px;}div.BMap_cmFstItem{margin-top:2px;}div.BMap_cmLstItem{margin-bottom:2px;}.BMap_shadow img{border:0 none;margin:0;padding:0;position:absolute;height:370px;width:1144px;}.BMap_pop .BMap_top{border-top:1px solid #ababab;background-color:#fff;}.BMap_pop .BMap_center{border-left:1px solid #ababab;border-right:1px solid #ababab;background-color:#fff;}.BMap_pop .BMap_bottom{border-bottom:1px solid #ababab;background-color:#fff;}.BMap_shadow,.BMap_shadow img,.BMap_shadow div{-moz-user-select:none;-webkit-user-select:none;}.BMap_checkbox{background:url(http://api.map.baidu.com/images/mapctrls1d3.gif);vertical-align:middle;display:inline-block;width:11px;height:11px;margin-right:4px;background-position:-14px 90px;}.BMap_checkbox.checked{background-position:-2px 90px;}.BMap_pop .BMap_top img,.BMap_pop .BMap_center img,.BMap_pop .BMap_bottom img{display:none;}@media print{.BMap_noprint{display:none;}.BMap_noscreen{display:block;}.BMap_mask{background:none;}.BMap_pop .BMap_top img,.BMap_pop .BMap_center img,.BMap_pop .BMap_bottom img{display:block;}}.BMap_vectex{cursor:pointer;width:11px;height:11px;position:absolute;background-repeat:no-repeat;background-position:0 0;}.BMap_vectex_nodeT{background-image:url(http://api.map.baidu.com/images/nodeT.gif);}.BMap_vectex_node{background-image:url(http://api.map.baidu.com/images/node.gif);}</style><style id="style-1-cropbar-clipper">
    
           .en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style>
           </head>
    <body ontouchstart="">
        <!-- <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>租房详情</h1><button class="ui-btn ui-back-index">回首页</button>
        </header> -->
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="ui.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
                <li data-href="js.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section class="ui-container">
            <div class="ui-tab">
                <ul class="ui-tab-nav ui-border-b">
                    <li class="current"><span><?php  ?></span></li>
                   <!--  <li>次卧<span>未租</span></li>
                    <li>次卧<span>未租</span></li> -->
                </ul>
                <ul class="ui-tab-content ui-tab-content-detail" style="width:300%">
                    <li class="current clearfix">
                        <div class="slide-wrap">
                            <h1>房源图片</h1>
                            <div class="slider6">
                                       <?php 
        $roomima= $cyinfo->room_url;
        $imgs=explode(',',$roomima);
         for($index=0;$index<count($imgs);$index++)
{
            
             echo '<div class="slide"><img  src="upload/'.$imgs[$index].'"></div>';
} 
        
        
        ?>
                                
                              
                            </div>
                        </div>
                        <div class="slide-wrap">
                            
                            
                            <h1>公共区域</h1>
                            <div class="slider6">
                                
                                <?php 
        $roomima= $cyinfo->public_url;
        $imgs=explode(',',$roomima);
         for($index=0;$index<count($imgs);$index++)
{
            
             echo '<div class="slide"><img  src="upload/'.$imgs[$index].'"></div>';
} 
        
        
        ?>
                                
                              
                             
                            </div>
                        </div>
                        <h1 class="detail-title">我们为你精心打造</h1>
                        <h1 class="detail-title">一个<span class="detail-title-b"> “有品质的家”</span></h1>
                        <div class="area" id="baidudiv">
                            
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">标准配置</a></strong></div>
                        </div>
                        <div class="list_item_div" style="background-color:#303133">
                          <table style="border:0;border-spacing:2px;" width="90%" align="center">
                            <tbody>
                            <tr>
                              <td align="left"><img src="img/2015010513142700011.png"></td>
                              <td align="left"><img src="img/2015010513144300011.png"></td>
                              <td align="left"><img src="img/2015010513145500011.png"></td>
                              <td align="left"><img src="img/2015010513153400011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513155200011.png"></td>
                              <td align="left"><img src="img/2015010513162200011.png"></td>
                              <td align="left"><img src="img/2015010513163900011.png"></td>
                              <td align="left"><img src="img/2015010513171000011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513173600011.png"></td>
                            </tr>
                          </tbody>
                          </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">热舞</a></strong></div>
                        </div>
                        <div class="detail-container">
                            <table id="list_detail">
                                <tbody>
                                <tr>
                                    <td class="td_point" align="left"><label>小区</label></td>
                                    <td><span><?php echo $cyinfo->district ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>户型</label></td>
                                    <td><span><?php echo $cyinfo->rooms ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>楼层</label></td>
                                    <td><span><?php echo $cyinfo->nfloor?>/ <?php echo $cyinfo->floors ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label style="width:36px">总面积</label></td>
                                    <td><span><?php echo $cyinfo->area ?></span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="td_point"><label>描述</label></td>
                                    <td><span><?php echo $cyinfo->detail ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>交通</label></td>
                                    <td><span>公交：<?php echo $cyinfo->bus ?>等公交</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td class="td_point"><label>购物</label></td>
                                    <td><span> <?php echo $cyinfo->market ?>
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>办公</label></td>
                                    <td><span>--</span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>银行</label></td>
                                    <td><span>建行，中行，北京银行，工商，农业，中信等。
                                </span></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">价格公式</a></strong></div>
                        </div>
                        <div align="center"><img class="images" src="img/price_formula.png"></div>
                        <div align="center">
                            <table align="center" class="table"><tbody><tr>
                            <td width="34px"><img align="right" src="img/eq.png" width="100%"></td>
                            <td width="4px">&nbsp;</td>
                            <td width="110px">
                                <div class="top_price">
                                    <font id="font_price" class="font_td">
                                       <?php echo $cyinfo->price ?>
                                    </font>
                                </div>
                                <img align="left" src="img/price.png" width="100%">
                            </td>
                            </tr>
<!--                            <tr style="color:#FFFFFF;height:30px;font-size:14px;"><td colspan="3">整租优惠价：
                                5130
                            </td></tr>-->
                            </tbody></table>
                        </div>
                        <div class="button_div">
                            <a href="index.php?r=mess/yu&userid=<?php echo $cyinfo->user_id;?>&infoid=<?php echo $cyinfo->id;?>"><img class="noborder" src="img/button_detail_contact.gif" width="100%"></a>
                            <a href="javascript:zufang()" class="mt10"><img class="noborder" src="img/crent.png" width="100%"></a>
                        </div>
                        <div class="police">
                            <a href="index.php?r=mess/jubao&userid=<?php echo $cyinfo->user_id;?>&infoid=<?php echo $cyinfo->id;?>">举报</a>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="slide-wrap">
                            <h1>房源图片</h1>
                            <div class="slider6">
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar1"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar2"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar3"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar4"></div> 
                            </div>
                        </div>
                        <div class="slide-wrap">
                            <h1>公共区域</h1>
                            <div class="slider6">
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar1"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar2"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar3"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar4"></div> 
                            </div>
                        </div>
                        <h1 class="detail-title">我们为你精心打造</h1>
                        <h1 class="detail-title">一个<span class="detail-title-b"> “有品质的家”</span></h1>
                        <div class="area">
                            
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">标准配置</a></strong></div>
                        </div>
                        <div class="list_item_div" style="background-color:#303133">
                          <table style="border:0;border-spacing:2px;" width="90%" align="center">
                            <tbody>
                            <tr>
                              <td align="left"><img src="img/2015010513142700011.png"></td>
                              <td align="left"><img src="img/2015010513144300011.png"></td>
                              <td align="left"><img src="img/2015010513145500011.png"></td>
                              <td align="left"><img src="img/2015010513153400011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513155200011.png"></td>
                              <td align="left"><img src="img/2015010513162200011.png"></td>
                              <td align="left"><img src="img/2015010513163900011.png"></td>
                              <td align="left"><img src="img/2015010513171000011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513173600011.png"></td>
                            </tr>
                          </tbody>
                          </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">热舞</a></strong></div>
                        </div>
                        <div class="detail-container">
                            <table id="list_detail">
                                <tbody>
                                <tr>
                                    <td class="td_point" align="left"><label>小区</label></td>
                                    <td><span>九棵树蓝调沙龙</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>户型</label></td>
                                    <td><span>三室一厅两卫</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>楼层</label></td>
                                    <td><span>2/6</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label style="width:36px">总面积</label></td>
                                    <td><span>21.3平米/98.0平米</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="td_point"><label>描述</label></td>
                                    <td><span>设计师以炽烈的红来引燃年轻人心中的梦想与激情。青春的热情似火与英伦风的优雅自然完美的糅合。如同在这城市邂逅另一个自己，低调而张扬，有着不可湮没的个性独然。</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>交通</label></td>
                                    <td><span>地铁：九棵树城铁<br>公交：582，通4，通12，通11，通15，通35等公交</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td class="td_point"><label>购物</label></td>
                                    <td><span>出门即到大型购物广场家乐福，京通罗斯福购物广场，小区旁边就有个菜市场，方便您的生活等。
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>办公</label></td>
                                    <td><span>瑞都国际写字楼，金成国际写字楼等。</span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>银行</label></td>
                                    <td><span>建行，中行，北京银行，工商，农业，中信等。
                                </span></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">价格公式</a></strong></div>
                        </div>
                        <div align="center"><img class="images" src="img/price_formula.png"></div>
                        <div align="center">
                            <table align="center" class="table"><tbody><tr>
                            <td width="34px"><img align="right" src="img/eq.png" width="100%"></td>
                            <td width="4px">&nbsp;</td>
                            <td width="110px">
                                <div class="top_price">
                                    <font id="font_price" class="font_td">
                                        1700
                                    </font>
                                </div>
                                <img align="left" src="img/price.png" width="100%">
                            </td>
                            </tr>
                            <tr style="color:#FFFFFF;height:30px;font-size:14px;"><td colspan="3">整租优惠价：
                                5130
                            </td></tr>
                            </tbody></table>
                        </div>
                        <div class="button_div">
                            <a href="#"><img class="noborder" src="img/button_detail_contact.gif" width="100%"></a>
                        </div>
                        <div class="police">
                            <a href="#">举报</a>
                        </div>
                    </li>
                    <li>
                        <div class="slide-wrap">
                            <h1>房源图片</h1>
                            <div class="slider6">
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar1"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar2"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar3"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar4"></div> 
                            </div>
                        </div>
                        <div class="slide-wrap">
                            <h1>公共区域</h1>
                            <div class="slider6">
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar1"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar2"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar3"></div>
                              <div class="slide"><img src="http://placehold.it/600x200&text=FooBar4"></div> 
                            </div>
                        </div>
                        <h1 class="detail-title">我们为你精心打造</h1>
                        <h1 class="detail-title">一个<span class="detail-title-b"> “有品质的家”</span></h1>
                        <div class="area">
                            
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">标准配置</a></strong></div>
                        </div>
                        <div class="list_item_div" style="background-color:#303133">
                          <table style="border:0;border-spacing:2px;" width="90%" align="center">
                            <tbody>
                            <tr>
                              <td align="left"><img src="img/2015010513142700011.png"></td>
                              <td align="left"><img src="img/2015010513144300011.png"></td>
                              <td align="left"><img src="img/2015010513145500011.png"></td>
                              <td align="left"><img src="img/2015010513153400011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513155200011.png"></td>
                              <td align="left"><img src="img/2015010513162200011.png"></td>
                              <td align="left"><img src="img/2015010513163900011.png"></td>
                              <td align="left"><img src="img/2015010513171000011.png"></td>
                            </tr>
                            <tr>
                              <td align="left"><img src="img/2015010513173600011.png"></td>
                            </tr>
                          </tbody>
                          </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">热舞</a></strong></div>
                        </div>
                        <div class="detail-container">
                            <table id="list_detail">
                                <tbody>
                                <tr>
                                    <td class="td_point" align="left"><label>小区</label></td>
                                    <td><span>九棵树蓝调沙龙</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>户型</label></td>
                                    <td><span>三室一厅两卫</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>楼层</label></td>
                                    <td><span>2/6</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label style="width:36px">总面积</label></td>
                                    <td><span>21.3平米/98.0平米</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="td_point"><label>描述</label></td>
                                    <td><span>设计师以炽烈的红来引燃年轻人心中的梦想与激情。青春的热情似火与英伦风的优雅自然完美的糅合。如同在这城市邂逅另一个自己，低调而张扬，有着不可湮没的个性独然。</span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>交通</label></td>
                                    <td><span>地铁：九棵树城铁<br>公交：582，通4，通12，通11，通15，通35等公交</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td class="td_point"><label>购物</label></td>
                                    <td><span>出门即到大型购物广场家乐福，京通罗斯福购物广场，小区旁边就有个菜市场，方便您的生活等。
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>办公</label></td>
                                    <td><span>瑞都国际写字楼，金成国际写字楼等。</span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>银行</label></td>
                                    <td><span>建行，中行，北京银行，工商，农业，中信等。
                                </span></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">价格公式</a></strong></div>
                        </div>
                        <div align="center"><img class="images" src="img/price_formula.png"></div>
                        <div align="center">
                            <table align="center" class="table"><tbody><tr>
                            <td width="34px"><img align="right" src="img/eq.png" width="100%"></td>
                            <td width="4px">&nbsp;</td>
                            <td width="110px">
                                <div class="top_price">
                                    <font id="font_price" class="font_td">
                                        1700
                                    </font>
                                </div>
                                <img align="left" src="img/price.png" width="100%">
                            </td>
                            </tr>
                            <tr style="color:#FFFFFF;height:30px;font-size:14px;"><td colspan="3">整租优惠价：
                                5130
                            </td></tr>
                            </tbody></table>
                        </div>
                        <div class="button_div">
                            <a href="#"><img class="noborder" src="img/button_detail_contact.gif" width="100%"></a>
                        </div>
                        <div class="police">
                            <a href="#">举报</a>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="ad-btn"><a href="#">佣</a></div>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
         <script>
             function zufang(){
                 var infoid="<?php echo $cyinfo->id;?>";
                 var userid="<?php echo $cyinfo->user_id;?>";
                 var infoType="<?php echo $cyinfo->info_type;?>";
                 var userType="<?php echo $useinfo->type;?>";
                 if(userType=="1"||userType=="2"){
                    $.ajax({
                        url:"index.php?r=store/rentFang&infoid="+infoid,
                        dataType:"json",
                        type:"POST",
                        success:function(data){
                            if(data.status){
                                alert("租房信息提交成功！");
                            }else{
                                alert("信息提交失败！");
                                
                            }
                        }
                        
                    })
                 }else{
                     if(infoType==1){
                          window.location.href="index.php?r=store/toFuKuangRi&infoid="+infoid; 
                     }else{
                    window.location.href="index.php?r=store/toFuKuang&infoid="+infoid; 
                }
                 }
                 
             }
             
             
              function initBaiDuMap(){
    var map= '<?php echo $cyinfo->map ?>';
 var jin='0';
 var wei='0';
 if(map!=null&&map!=''){
 var maps=map.split(',');
 if(maps.length>1){
    jin=maps[0];
    wei=maps[1];
    
 }
 }
  	loadBaiDuMap("baidudiv",jin,wei);
  }
        window.addEventListener('load', function(){

            var tab = new fz.Scroll('.ui-tab', {
                role: 'tab',
                autoplay: false,
                interval: 3000
            });

            /* 滑动开始前 */
            tab.on('beforeScrollStart', function(from, to) {
                // from 为当前页，to 为下一页
            })

            /* 滑动结束 */
            tab.on('scrollEnd', function(curPage) {
                // curPage 当前页
            });

        })
        </script>
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
        <script type="text/javascript">
        $(document).ready(function(){
               loadBaiDuMapAsy("initBaiDuMap");
          $('.slider6').bxSlider({
            mode: 'fade',
            slideWidth: 600, 
            slideMargin: 10
          });
        });
    </script>
    </body> 

</html>