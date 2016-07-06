
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>微家</title>
        <link rel="stylesheet" href="css/frozen.css">
        <link href="./public/css/iSlider.css" rel="stylesheet">
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
        <header id="head" class="ui-header ui-header-positive ui-border-b ui-header-positive-new">
<!--           <ul class="ui-tiled ui-border-t">-->
<!--                <li data-href="./index.php?r=store" class="ui-border-r ui-rentflow"><div>商铺出租</div></li>-->
<!--                <li data-href="./index.php?r=show/add" class="ui-border-r ui-joinflow"><div>加盟流程</div></li>-->
<!--                <li data-href="./index.php?r=bzp" class="ui-bzpo"><div>微家</div></li>-->
<!--            </ul>-->
        </header>
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
<!--            <ul class="ui-tiled ui-border-t">-->
<!--                <li data-href="./index.php?r=weijia" class="ui-border-r ui-house"><div>微家</div></li>-->
<!--                <li data-href="./index.php?r=lease" class="ui-border-r ui-rent"><div>我要租房</div></li>-->
<!--                <li data-href="./index.php?r=lease/crent" class="ui-rentout"><div>我要出租</div></li>-->
<!--            </ul>-->
        </footer>
        <section class="ui-container">
            <div id="iSlider-wrapper"></div>
			<div id="hidden-space" style="display:none">
			    <p style="font-size:3em;text-align: center;color:#04f512">A node in dom tree.</p>
			</div>
        </section>
        <script src="lib/jquery.min.js"></script>
        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="js/house.js"></script>
        <script src="lib/layer/layer.js"></script>
        <script type="text/javascript" src="./public/js/iSlider.js"></script>
		<script type="text/javascript" src="./public/js/iSlider.plugin.dot.js"></script>
        <script type="text/javascript">
            $(function(){
                $(window).on('load',function(){
                    // 加载皮肤
                    layer.config({
                        extend: ['skin/layerSkinExtend.css'], //加载新皮肤
                        skin: 'layerSkinWeb' //一旦设定，所有弹层风格都采用此主题。
                    });
                    indexMoney=layer.open({
                        type: 2,
                        title: false,
                        skin: 'layerSkinWeb',
                        area: ['925px', '950px'],
                        shade: 0.8,
                        time:2000,
                        closeBtn: 0,
                        shadeClose: true,
                        content: ['index.php?r=weijia/redboot','no']
                    });
                })
            })
        </script>
		<script id="show-code">
		    var list = [

		        // HTML String
		        {
		            content: './img/banner01.jpg'
		        },
		        // element
		        {
		            content: './img/banner02.jpg'
		        }
		        // fragment
		    ];

		    var S = new iSlider({
		        dom: document.getElementById('iSlider-wrapper'),
		        data: list,
		        isLooping: 1,
		        isOverspread: 1,
		        animateTime: 800, // ms
		        plugins: ['dot']
		    });
		</script>
		<script>
		$(document).ready(function() { 
			$.ajax({
		　　　　　　url: 'index.php?r=basemenu/headmenu',
		　　　　　　type: 'POST',
		　　　　　　//data: { id: idValue },
		　　　　　　//timeout: 3000,
		　　　　　　success: function (data) {
						$("#head").html(data);
					 },
		　　　　　　error: function (data) {
								 alert('===');},
　　　　		})
		}); 
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
    </body>
</html>