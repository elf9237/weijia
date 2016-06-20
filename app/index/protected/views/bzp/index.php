
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>微家</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="public/css/iSlider.css" rel="stylesheet">
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
    <body ontouchstart="" class="bzp">
        <section class="ui-container">
            <div class="header-bao clearfix">
                <div class="ui-avatar-lg">
                    <span style="background-image:url(http://placeholder.qiniudn.com/140x140)"></span>
                </div>
                <div class="name-id">
                    <h1>name</h1>
                    <p>ID:00105995</p>
                </div>
            </div>
            <div class="menu-bz">
                <ul class="ui-tiled">
                    <li><div><span class="erw"><img src="img/erw.png" alt=""></span></div><div class="no-text">0</div><i>我的二维码</i></li>
                    <li><div><span class="ui-home"><img src="img/home.png" alt=""></span></div><div>12</div><i>我的包租客</i></li>
                    <li><div><span class="ui-money"><img src="img/money.png" alt=""></span></div><div>15</div><i>收益余额</i></li>
                </ul>
            </div>
            <div class="exo">
                <h1>如何获得佣金</h1>
                <ul class="ui-list ui-list-pure ui-border-tb">
                    <li class="ui-border-t">
                       <h1>1 获取专属二维码</h1>
                        <h4>关注“微家”微信服务号</h4>
                           <h4>点击“我是微家”，获取你的专属二维码。</h4>
                    </li>
                    <li class="ui-border-t">
                        <h1>2 转发获取包租客</h1>
                        <h4>转发你的专属二维码，任何经你转发而关注微家的用户，成为你的包租客。</h4>
                        <h4>你的包租客签约微家，你即得现金回报。</h4>
                    </li>
                    <li class="ui-border-t">
                        <h1>3 获取佣金</h1>
                        <h4>获取房屋佣金奖励</h4>
                    </li>
                </ul>
            </div>
            <div class="erw-link">
                <span class="ui-icon-unfold"></span>
            </div>
            <div class="erw-link-to">
                <p>点击进入后 - 转发</p>
                <p>扫描“你的专属二维码”获取关注</p>
            </div>
        </section>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        
    </body>
</html>