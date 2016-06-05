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
            <div style="background-color:#FF7E00">
                <div class="div-center">
                    <div style="height:20px"></div>
                    <div class="bzp_title" style="font-size:16px">奖励规则&nbsp;&nbsp;<font style="font-size:10px">INCENTIVE RULES</font></div>
                    <div class="bzp_line" id="linediv"></div>
                </div>
                <div class="div-center" id="rulediv">
                    <table cellpadding="0" cellspacing="0" width="100%" style="color:#fff;margin-top:10px;">
                        <tbody><tr>
                            <td><div class="bzp_title_num">1</div></td>
                            <td><div class="bzp_title_con">获取专属链接</div></td>
                        </tr>
                        <tr>
                            <td class="bzp_dot"></td>
                            <td class="bzp_content">
                                关注“微家在线”微信服务号，<br>点击“微家在线”，获取你的专属链接。
                            </td>
                        </tr>
                        <tr>
                            <td><div class="bzp_title_num">2</div></td>
                            <td><div class="bzp_title_con">转发获取租客</div></td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td class="bzp_content">
                                转发你的专属链接，任何经你转发而关注微家的用户，成为你的租客。<br>
                                你的租客成功签约微家房源(房源设置了佣金)，你即得佣金回报。
                            </td>
                        </tr>
<!--                        <tr>-->
<!--                            <td><div class="bzp_title_num">3</div></td>-->
<!--                            <td><div class="bzp_title_con">现金奖励</div></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td class="bzp_dot"></td>-->
<!--                            <td class="bzp_content">-->
<!--                                房东签约一套房，你即得<font class="imbzp_price2">1000元</font>现金。<br>-->
<!--                                租客签约一间房，你即得<font class="imbzp_price2">500元</font>现金。-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><div class="bzp_title_num">4</div></td>-->
<!--                            <td><div class="bzp_title_con">更多奖励</div></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td></td>-->
<!--                            <td class="bzp_content">-->
<!--                                房东签约每满10套，额外奖励<font class="imbzp_price2">1000元</font>。<br>-->
<!--                                租客签约每满10间，额外奖励<font class="imbzp_price2">500元</font>。-->
<!--                            </td>-->
<!--                        </tr>-->
                        </tbody></table>
                </div>
            </div>
            <div id="rulediv2" style="background-color:#FF7E00">
                <img src="img/qrbzp2.png?v=1" class="images" style="padding-top:50px;padding-bottom:30px;">
            </div>
            <div class="div-center0">
                <div style="position:absolute;top:0;" id="rulediv3"><img src="img/chulai1.png" class="images"></div>
                <img src="img/qrhouse.jpg?v=1" class="images">
                <div style="position:absolute;bottom:0;"><img src="img/chulai2.png" class="images"></div>
            </div>

            <div class="div-center0" style="background-color:#FF7E00">
                <div class="div-center0" style="font-size:18px;color:#fff;font-weight:bold;padding-top:40px;">

                    扫描微信二维码关注微家
                </div>
                <img src="img/down2.png" style="height:26px;padding-top:16px;">
                <div class="div-center0 radius6" style="overflow:hidden;width:40%;margin-top:16px;">


                    <img src="img/weijia.jpg" class="images">

                </div>
                <div class="bzp_content" style="padding-top:16px;padding-bottom:50px;">
                    <div class="div-center0">
                        <div class="ui-btn-wrap">
                            <button class="ui-btn-lg ui-btn-danger" style="background: #eb0028;">
                               获取专属链接
                            </button>
                        </div>
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
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    wx.config({
        //debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: '<?php echo $package['appId'] ?>', // 必填，公众号的唯一标识
        timestamp: '<?php echo $package['timestamp'] ?>', // 必填，生成签名的时间戳
        nonceStr: '<?php echo $package['nonceStr'] ?>', // 必填，生成签名的随机串
        signature: '<?php echo $package['signature'] ?>',// 必填，签名，见附录1
        jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
    wx.ready(function(){
        wx.onMenuShareAppMessage({
            title: '人人都是包租婆', // 分享标题
            desc: '没房也能收房租', // 分享描述
            link: '<?php echo $shareurl ?>', // 分享链接
            imgUrl: '', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数

            },
            cancel: function () {
                // 用户取消分享后执行的回调函数

            }
        });
        wx.onMenuShareTimeline({
            title: '人人都是包租婆', // 分享标题
            link: '<?php echo $shareurl ?>', // 分享链接
            imgUrl: '', // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });
</script>

</body>
</html>
