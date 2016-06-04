<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2016/6/4
 * Time: 18:40
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>我要佣金</title>
    <link rel="stylesheet" href="css/frozen.css">
    <link href="./public/css/iSlider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/common_pc.css" />
    <link href="css/house.css" rel="stylesheet">
    <style>
        /*ul wrapper*/
        #iSlider-wrapper {
            height: 90%;
            width: 100%;
            overflow: hidden;
            position: absolute;
        }
        #iSlider-wrapper ul {
            list-style: none;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        #iSlider-wrapper li {
            position: absolute;
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-pack: center;
            -webkit-box-align: center;
            list-style: none;
        }

        #iSlider-wrapper li img {
            max-width: 100%;
            max-height: 100%;
        }

        .islider-btn-outer {
            background-color: rgba(0, 0, 0, .5);
            border-radius: 99px;
        }

        .islider-btn-inner {
            height: 30%;
            width: 30%;
            margin-top: 34%;
        }
    </style>
</head>
<body ontouchstart="">
<section class="ui-container ewm">
    <div class="content" id="content_view">
        <table cellpadding="0" cellspacing="0" width="100%" style="padding-top:10px;">
            <tbody><tr>
                <td width="30px"></td>
                <td align="center" width="80px">
                    <div class="circle80_h"><img class="circleimg80" id="fileimg" src="img/vip1.jpg"></div>
                </td>
                <td>
                    <div class="bzp_title" style="margin-left:10px;">
                        <div>
                            小东<br>
                            <font style="font-size:14px;font-weight:normal;">ID:00105995</font>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody></table>

        <img src="img/qrrbzp.png" class="images" style="margin-top:40px;margin-bottom:60px;">

        <div>
            <div><img id="updown" src="img/up.png" class="images"></div>
            <div style="background-color:#fe2c55">
                <div class="div-center">
                    <div style="height:20px"></div>
                    <div class="bzp_title" style="font-size:16px">奖励规则&nbsp;&nbsp;<font style="font-size:10px">INCENTIVE RULES</font></div>
                    <div class="bzp_line" id="linediv"></div>
                </div>
                <div class="div-center" id="rulediv">
                    <table cellpadding="0" cellspacing="0" width="100%" style="color:#fff;margin-top:10px;">
                        <tbody><tr>
                            <td><div class="bzp_title_num">1</div></td>
                            <td><div class="bzp_title_con">获取专属二维码</div></td>
                        </tr>
                        <tr>
                            <td class="bzp_dot"></td>
                            <td class="bzp_content">
                                关注“微家在线”微信服务号，<br>点击“包租婆”，获取你的专属二维码。
                            </td>
                        </tr>
                        <tr>
                            <td><div class="bzp_title_num">2</div></td>
                            <td><div class="bzp_title_con">转发获取包租客</div></td>
                        </tr>
                        <tr>
                            <td class="bzp_dot"></td>
                            <td class="bzp_content">
                                转发你的专属二维码，任何经你转发而关注微家的用户，成为你的包租客。<br>
                                你的包租客签约包租婆(房源设置了佣金)，你即得现金回报。
                            </td>
                        </tr>
                        <tr>
                            <td><div class="bzp_title_num">3</div></td>
                            <td><div class="bzp_title_con">现金奖励</div></td>
                        </tr>
                        <tr>
                            <td class="bzp_dot"></td>
                            <td class="bzp_content">
                                房东签约一套房，你即得<font class="imbzp_price2">1000元</font>现金。<br>
                                租客签约一间房，你即得<font class="imbzp_price2">500元</font>现金。
                            </td>
                        </tr>
                        <tr>
                            <td><div class="bzp_title_num">4</div></td>
                            <td><div class="bzp_title_con">更多奖励</div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="bzp_content">
                                房东签约每满10套，额外奖励<font class="imbzp_price2">1000元</font>。<br>
                                租客签约每满10间，额外奖励<font class="imbzp_price2">500元</font>。
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <div id="rulediv2" style="background-color:#fe2c55">
                <img src="img/qrbzp2.png?v=1" class="images" style="padding-top:50px;padding-bottom:30px;">
            </div>
            <div class="div-center0">
                <div style="position:absolute;top:0;" id="rulediv3"><img src="img/chulai1.png" class="images"></div>
                <img src="img/qrhouse.jpg?v=1" class="images">
                <div style="position:absolute;bottom:0;"><img src="img/chulai2.png" class="images"></div>
            </div>

            <div class="div-center0" style="background-color:#FE2C55">
                <div class="div-center0" style="font-size:18px;color:#fff;font-weight:bold;padding-top:40px;">

                    扫描微信二维码关注微家
                </div>
                <img src="img/down2.png" style="height:26px;padding-top:16px;">
                <div class="div-center0 radius6" style="overflow:hidden;width:40%;margin-top:16px;">


                    <img src="https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=gQEB8ToAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3RVeGJiOWZtZUFRQjUyeW5ibUtyAAIE0aPqVgMEAI0nAA==" class="images">

                </div>
                <div class="bzp_content" style="padding-top:16px;padding-bottom:100px;">
                    <div class="div-center0">

                    </div>
                </div>
                <div class="bzp_content" style="padding-bottom:10px;">
                    <div class="div-center0">
                        最终解释权归微家所有
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>

</body>
</html>
