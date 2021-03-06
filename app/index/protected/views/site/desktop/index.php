<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>微家租房</title>
    <meta name="toTop" content="true" />
    <!--  <script src="public/desktop/js/WdatePicker.js"></script>-->
    <link rel="stylesheet" href="public/desktop/css/main.css" />
    <link rel="stylesheet" href="public/desktop/css/mainweb.css" />
    <link rel="stylesheet" href="public/desktop/css/comment.css" />
    <link rel="stylesheet" href="public/desktop/css/scroller.css" />
    <link href="public/desktop/css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/desktop/css/style.css" />
    <link rel="stylesheet" href="public/desktop/css/focusStyle.css" />
    <link rel="stylesheet" href="public/desktop/css/unslider.css" />
    <link rel="stylesheet" href="public/desktop/css/unslider-dots.css" />
</head>
<body class="body-web" style="Overflow-y:scroll">
<div class="header">
    <div class="logo">
        <img src="public/desktop/images/logo.png" alt="" />
    </div>
    <div class="nav">
        <ul>
            <li><a href="index.php" class="active">首页</a></li>
            <li><a href="index.php?r=site/zufang">我要租房</a></li>
            <li><a href="index.php?r=site/guanjia">管家服务</a></li>
            <li><a href="index.php?r=site/myinfo">会员中心</a></li>
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
        
<!--        <span>|</span>-->
<!--        <span><a href="index.php?r=site/register">注册</a></span>-->
    </div>
</div>
<div id="focus-banner">
    <ul id="focus-banner-list">
        <li> <a href="#" class="focus-banner-img"> <img src="public/desktop/images/img01.jpg" alt="" /> </a>
            <!--            <div class="focus-banner-text">-->
            <!--                <p>这是一句广告语</p>-->
            <!--            </div>--> </li>
        <li> <a href="#" class="focus-banner-img"> <img src="public/desktop/images/img02.jpg" alt="" /> </a>
            <!--            <div class="focus-banner-text">-->
            <!--                <p>这是二句广告语</p>-->
            <!--            </div>--> </li>
        <li> <a href="#" class="focus-banner-img"> <img src="public/desktop/images/img03.jpg" alt="" /> </a>
            <!--            <div class="focus-banner-text">-->
            <!--                <p>这是三句广告语</p>-->
            <!--            </div>--> </li>
        <li> <a href="#" class="focus-banner-img"> <img src="public/desktop/images/img04.jpg" alt="" /> </a>
            <!--            <div class="focus-banner-text">-->
            <!--                <p>这是四句广告语</p>-->
            <!--            </div>--> </li>
    </ul>
    <a href="javascript:;" id="next-img" class="focus-handle"></a>
    <a href="javascript:;" id="prev-img" class="focus-handle"></a>
    <ul id="focus-bubble" style="width: 100%;min-width: 100px;"></ul>
</div>
<div id="contentpar" style="width:100%;margin-bottom:100px;">
    <div class="div-box" style="min-height: 300px;background-color: rgb(255, 255, 255);" id="content">
        <div id="regdiv" style="position:relative;background-color:#FFFFFF;">
            <!-- 风格查询 -->
            <div style="width:100%">
                <table cellpadding="0" cellspacing="0" class="table" width="100%">
                    <tbody>
                    <tr height="250px">
                        <td width="250px"><img onclick="" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/main.jpg" /></td>
                        <td width="250px" align="center" style="position:relative;"> <img id="realmainimg" width="250px" height="250px" class="images_nobord" src="public/desktop/images/realmain_q.png" style="width: 250px; height: 250px;" />
                            <div class="div_over" style="width:250px;height:250px;top:0" onmouseover="" onmouseout=""></div> </td>
                        <td width="250px"><img onclick="" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/main(1).jpg" /></td>
                        <td width="250px" align="center" style="position:relative;"> <img id="freemainimg" width="250px" height="250px" class="images_nobord" src="public/desktop/images/freemain_q.png" style="width: 250px;" />
                            <div class="div_over" style="width:250px;height:250px;top:0" onmouseover="" onmouseout=""></div> </td>
                    </tr>
                    <tr height="250px">
                        <td width="250px" align="center" style="position:relative;"> <img id="24hmainimg" width="250px" height="250px" class="images_nobord" src="public/desktop/images/24hmain_q.jpg" style="width: 250px;" />
                            <div class="div_over" style="width:250px;height:250px;top:0" onmouseover="" onmouseout=""></div> </td>
                        <td><img onclick="" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/main(2).jpg" /></td>
                        <td width="250px" align="center" style="position:relative;"> <img id="wifimainimg" width="250px" height="250px" class="images_nobord" src="public/desktop/images/wifimain_q.png" style="width: 250px;" />
                            <div class="div_over" style="width:250px;height:250px;top:0" onmouseover="" onmouseout=""></div> </td>
                        <td><img onclick="" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/main(3).jpg" /></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="bannerTest">
                <ul>
                     <?php
                  foreach($starInfos as $_v){
                              ?>
                    <li><div class="divtxt_left" style="float: left; list-style: none; position: relative; width: 1000px; margin-right: 10px;">
                            <div class="div-align-left" style="width:750px;height:421px;">
                                <div style="position:relative;width:750px;height:421px;">
                                    <div style="position:absolute">
                                        <img class="images handpoint" onclick="showRoom(<?php echo $_v->id; ?>)" style="width: 750px; height: 421px; cursor: pointer;" src="upload/<?php echo $_v->mian_url; ?>">
                                    </div>
                                    <div style="position:absolute;margin-top:371px;line-height:50px;" class="div_eaves">
                                        <div id="roomdiv" style="position:absolute;left:10px;">
                                             <?php echo $_v->province.'-'.$_v->city.'-'.$_v->zone; ?>;&nbsp;&nbsp;
                                    <?php echo $_v->info_name; ?>;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php echo $_v->house_type; ?>;&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->area; ?>平米&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->nfloor; ?>/<?php echo $_v->floors; ?>&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->direction; ?>
                                        </div>
                                        <div id="pricediv" class="div_priceMain" style="width:100px;height:30px;line-height:30px;">￥  <?php echo $_v->price; ?> </div>
                                    </div>

                                    <img class="img_slideLeft div_top" style="display: block;" id="leftroom" src="public/desktop/images/slideleft.png">


                                    <img class="img_slideRight2 div_top" style="display: none;" id="rightroom" src="public/desktop/images/slideright.png">
                                    <div class="div_slideRight2" style="height:388px"  ></div>
                                </div>
                            </div>
                            <div class="div-align-right" style="height:421px;width:250px">
                                <div style="width:250px;height:250px;"><img id="sortimg" onclick="showRoom()" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/2015010515554000011.jpg"></div>
                                <div id="sortdiv" style="width: 250px; height: 171px; background-color: rgb(14, 186, 236);" onclick="showRoom()" class="handpoint">
                                    <div id="sortnamediv" style="text-align:right;font-size:28px;padding-top:100px;padding-right:20px;color:#FFFFFF;font-weight:bold;">蔚蓝天际</div>
                                    <div id="sortdscdiv" style="text-align:right;font-size:12px;padding-right:20px;color:#FFFFFF;">Blue Sky</div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div></li>
                     <?php

                              };
                              ?>
                    
                   
                   
                </ul>
            </div>


            <!-- 精品房源 -->
<!--            <div id="importantRoom">
                <?php
                  foreach($starInfos as $_v){
                              ?>
                <div class="divtxt_left" style="float: left; list-style: none; position: relative; width: 1000px; margin-right: 10px;">
                    <div class="div-align-left" style="width:750px;height:421px;">
                        <div style="position:relative;width:750px;height:421px;">
                            <div style="position:absolute">
                                <img class="images handpoint" onclick="showRoom(<?php echo $_v->id; ?>)" style="width: 750px; height: 421px; cursor: pointer;" src="upload/<?php echo $_v->mian_url; ?>" />
                            </div>
                            <div style="position:absolute;margin-top:371px;line-height:50px;" class="div_eaves">
                                <div id="roomdiv" style="position:absolute;left:10px;">
                                    <?php echo $_v->province.'-'.$_v->city.'-'.$_v->zone; ?>;&nbsp;&nbsp;
                                    <?php echo $_v->info_name; ?>;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php echo $_v->house_type; ?>;&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->area; ?>平米&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->nfloor; ?>/<?php echo $_v->floors; ?>&nbsp;&nbsp;|&nbsp;&nbsp;
                                    <?php echo $_v->direction; ?>
                                </div>
                                <div id="pricediv" class="div_priceMain" style="width:100px;height:30px;line-height:30px;">
                                    ￥
                                    <?php echo $_v->price; ?> 
                                </div>
                            </div>
                            <img class="img_slideLeft div_top" style="display: none;" id="leftroom" src="public/desktop/images/slideleft.png" />
                            <div class="div_slideLeft" onmousemove="" style="height:388px" onmouseout="" onclick="loadRoomPicClk(-1,1)"></div>
                            <img class="img_slideRight2 div_top" style="display: none;" id="rightroom" src="public/desktop/images/slideright.png" />
                            <div class="div_slideRight2" onmousemove="" style="height:388px" onmouseout="" onclick="loadRoomPicClk(1,1)"></div>
                        </div>
                    </div>
                    <div class="div-align-right" style="height:421px;width:250px">
                        <div style="width:250px;height:250px;">
                            <img id="sortimg" onclick="showRoom()" class="images handpoint" style="width:250px;height:250px;" src="public/desktop/images/2015010515554000011.jpg" />
                        </div>
                        <div id="sortdiv" style="width: 250px; height: 171px; background-color: rgb(14, 186, 236);" onclick="showRoom()" class="handpoint">
                            <div id="sortnamediv" style="text-align:right;font-size:28px;padding-top:100px;padding-right:20px;color:#FFFFFF;font-weight:bold;">
                                蔚蓝天际
                            </div>
                            <div id="sortdscdiv" style="text-align:right;font-size:12px;padding-right:20px;color:#FFFFFF;">
                                Blue Sky
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php

                              };
                              ?>
            </div>-->
            <div class="div-split30"></div>
<!--            最新房源-轮播新-->
            <div style="width:100%">
                    <div class="divtxt_left"><img src="public/desktop/images/roomnew.png"></div>
                    <div class="picMarquee-left">
                        <div class="bd">
                            <ul class="picList">
                                <?php
                                foreach($newInfos as $_t){
                                ?>
                                <li onclick="showRoom(<?php echo $_v->id; ?>)">
                                    <div class="scrollerImage handpoint" style="margin-left: 5px; margin-right: 5px; width: 240px; height: 240px; display: block;">
                                        <div style="position:absolute">
                                            <img class="images_nobord"  src="upload/<?php echo $_t->mian_url;  ?>" width="240px" height="240px">
                                        </div>
                                        <div class="div_eaves" style="margin-top:200px;height:40px;position:absolute;">
                                            <div style="position:absolute;left:10px;line-height:40px;"><?php echo $_t->province.'-'.$_t->city.'-'.$_t->zone;?></div>
                                            <div class="div_priceMain" style="width:62px;height:20px;line-height:20px;"> <?php echo $_t->price; ?></div>
                                        </div>
                                    </div>
                                </li>
                                    <?php

                                };
                                ?>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="div-split30"></div>
            <div>
                <table class="table" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td align="left"><font class="color_def" style="font-size:20px;font-weight:bolder;">微家租房，为你提供贴心管家服务</font><br /><br /></td>
                    </tr>
                    <tr height="15px">
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="public/desktop/images/carton.png" /></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="div-split30"></div>
            <div>
                <table cellpadding="0" cellspacing="0" class="table" width="100%">
                    <tbody>
                    <tr height="249px">
                        <td width="250px" style="background-color:#34C4E6"><img src="public/desktop/images/eavesactive.png" /></td>
                        <td width="250px" onclick="showparty('13')" class="handpoint" style="position:relative;"> <img src="public/desktop/images/picmain1.jpg" class="images" /> </td>
                        <td rowspan="2" width="250px" style="background:url(public/desktop/images/partym1.jpg)">&nbsp;</td>
                        <td rowspan="2" width="250px" style="background:url(public/desktop/images/partym2.jpg)">&nbsp;</td>
                    </tr>
                    <tr height="249px">
                        <td width="250px" onclick="showparty('11')" class="handpoint" style="position:relative;"> <img src="public/desktop/images/picmain1(1).jpg" class="images" /> </td>
                        <td width="250px" onclick="showparty('10')" class="handpoint" style="position:relative;"> <img src="public/desktop/images/picmain1(2).jpg" class="images" /> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="tmpdiv" style="display:none;"></div>
        </div>
    </div>
</div>
<div class="content" id="bottom">
    <table class="table" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        <tr style="height:4px;">
            <td colspan="10"></td>
        </tr>
        <tr style="height:20px;">
            <td colspan="10"></td>
        </tr>
        <tr style="height:86px;color:#FFF">
            <td>&nbsp;</td>
            <td align="center" width="500px">
                <table>
                    <tbody>
                    <tr height="30px">
                        <td style="font-size:14px;width:70px;"><a class="font_a">关于我们</a> </td>
                        <td style="font-size:14px;width:70px;"><a class="font_a">联系我们</a></td>
                        <td style="font-size:14px;width:70px;"><a class="font_a">版权声明</a></td>
                        <td style="font-size:14px;width:70px;"><a class="font_a">加入我们</a></td>
                    </tr>
                    <tr>
                        <td colspan="5"> <a target="_blank" href="#" style="display:inline-block;text-decoration:none;height:20px;line-height:20px; color:#FFF;"> <p style="float:left;height:20px;line-height:20px;margin: 0px;">榕ICP备35010402350208号</p> <img src="public/desktop/images/gongan.png" style="float:left;margin: 0px 0px 0px 26px;" /> <p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px;">福州公网安备 35010402350208号</p> </a> </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="color:#fff;">微家租房（福建）房地产经纪有限公司 版权所有</td>
                    </tr>
                    </tbody>
                </table> </td>
            <td width="50px"></td>
            <td width="10px"></td>
            <td width="120px"> <img src="public/desktop/images/phonebottom.png" /> </td>
            <td width="10px"></td>
            <td width="120px"> <img src="public/desktop/images/weixin.jpg" width="86px" /> </td>
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
        <tr style="height:5px;">
            <td colspan="10"></td>
        </tr>
        </tbody>
    </table>
</div>
<script src="public/desktop/js/jquery.min.js"></script>
<script src="public/desktop/js/common.js"></script>
<script src="public/desktop/js/webCommon.js"></script>
<script type="text/javascript" src="public/desktop/js/scroller.js"></script>
<script type="text/javascript" src="public/desktop/js/picEffect.js"></script>
<script type="text/javascript" src="public/desktop/js/topbananer.js"></script>
<script src="public/desktop/js/validate.js"></script>
<script type="text/javascript" src="public/desktop/js/jquery.history.js"></script>
<script src="public/desktop/js/carousel_focus.min.js" type="text/javascript"></script>
<script type="text/javascript" src="public/desktop/js/jquery.bxslider.js"></script>
<script src="public/desktop/js/style.js"></script>
<script type="text/javascript" src="public/desktop/js/jquery.SuperSlide.2.1.1.js"></script>
<script>
    $(function(){
        jQuery(".picMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50,trigger:"click"});
    })
</script>
<script>
    function showRoom(id){
        window.location.href='index.php?r=site/zufangdetail&id='+id;
    }

    var nav=$(".nav ul li a");
    $(nav).click(function(){
        $(this).addClass("active").parent().siblings().find("a").removeClass("active");
    });

    $(function(){


        var focusBanner=function(){
            var $focusBanner=$("#focus-banner"),
                $bannerList=$("#focus-banner-list li"),
                $focusHandle=$(".focus-handle"),
                $bannerImg=$(".focus-banner-img"),
                $nextBnt=$("#next-img"),
                $prevBnt=$("#prev-img"),
                $focusBubble=$("#focus-bubble"),
                bannerLength=$bannerList.length,
                _index=0,
                _timer="";

            var _height=$(".focus-banner-img").find("img").height();
            $focusBanner.height(_height);
            $bannerImg.height(_height);

            $(window).resize(function(){
                window.location.reload()
            });

            for(var i=0; i<bannerLength; i++){
                $bannerList.eq(i).css("zIndex",bannerLength-i);
                $focusBubble.append("<li></li>");
            }
            $focusBubble.find("li").eq(0).addClass("current");
            var bubbleLength=$focusBubble.find("li").length;
            $focusBubble.css({
                "width":bubbleLength*22,
                "marginLeft":-bubbleLength*11
            });//初始化

            $focusBubble.on("click","li",function(){
                $(this).addClass("current").siblings().removeClass("current");
                _index=$(this).index();
                changeImg(_index);
            });//点击轮换

            $nextBnt.on("click",function(){
                _index++
                if(_index>bannerLength-1){
                    _index=0;
                }
                changeImg(_index);
            });//下一张

            $prevBnt.on("click",function(){
                _index--
                if(_index<0){
                    _index=bannerLength-1;
                }
                changeImg(_index);
            });//上一张

            function changeImg(_index){
                $bannerList.eq(_index).fadeIn(250);
                $bannerList.eq(_index).siblings().fadeOut(200);
                $focusBubble.find("li").removeClass("current");
                $focusBubble.find("li").eq(_index).addClass("current");
                clearInterval(_timer);
                _timer=setInterval(function(){$nextBnt.click()},5000)
            }//切换主函数
            _timer=setInterval(function(){$nextBnt.click()},5000)
        };
        focusBanner();
    })
</script>
<script type="text/javascript" src="public/desktop/js/toTop.js"></script>
<script type="text/javascript" src="public/desktop/js/unslider.js"></script>
<script>
    $('.bannerTest').unslider({
        autoplay: true
    });
</script>
</body>
</html>