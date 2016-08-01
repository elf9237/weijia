<?php
/**
商铺出租	加盟流程	微家

微家	我要租房	我要出租

 */

?>
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
<header class="ui-header ui-header-positive ui-border-b ui-header-positive-new">
	<ul class="ui-tiled ui-border-t">
		<li data-href="index.html" class="ui-border-r ui-rentflow"><div>租房流程</div></li>
		<li data-href="ui.html" class="ui-border-r ui-joinflow"><div>加盟流程</div></li>
		<li data-href="js.html" class="ui-bzpo"><div>微家</div></li>
	</ul>
</header>
<footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
	<ul class="ui-tiled ui-border-t">
		<li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
		<li data-href="rent.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
		<li data-href="js.html" class="ui-rentout"><div>我要出租</div></li>
	</ul>
</footer>
<section class="ui-container">
	<div id="bzpjs2_div" style="" class="ng-scope">
		<?php echo $content;?>
	</div>
</section>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>
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
								 alert('请稍等加载中....');},
　　　　		})
		}); 
		</script>
</body>
</html>