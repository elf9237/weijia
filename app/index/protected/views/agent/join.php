<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>提交审核</title>
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
<!-- <header class="ui-header ui-header-positive ui-border-b ui-header-positive-new">
   <ul class="ui-tiled ui-border-t">
        <li data-href="shopstore.html" class="ui-border-r ui-rentflow"><div>商铺出租</div></li>
        <li data-href="add.html" class="ui-border-r ui-joinflow"><div>加盟流程</div></li>
        <li data-href="bzp.html" class="ui-bzpo"><div>微家</div></li>
    </ul>
</header> -->
<footer id="foot" class="ui-footer ui-footer-btn ui-footer-new">
    <ul class="ui-tiled ui-border-t">
        <li data-href="introduce.html" class="ui-border-r ui-house">
            <div>微家</div>
        </li>
        <li data-href="rent.html" class="ui-border-r ui-rent">
            <div>我要租房</div>
        </li>
        <li data-href="crent.html" class="ui-rentout">
            <div>我要出租</div>
        </li>
    </ul>
</footer>
<section class="ui-container">
    <div class="ui-form ui-border-t">

        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'agent-form',
            'enableClientValidation' => false
        )); ?>

        <div class="ui-form-item ui-border-b">
            <label>
                <?php echo $form->label($model, 'user_idno'); ?>
            </label>
            <?php echo $form->textField($model, 'user_idno', array('class' => "text", 'placeholder' => "18位身份证号码")); ?>

            <a href="#" class="ui-icon-close">
            </a>
        </div>
        <div class="ui-form-item ui-border-b">
            <label>
                <?php echo $form->label($model, 'price'); ?>
            </label>
            <?php echo $form->textField($model, 'price', array('class' => "text", 'placeholder' => "加盟金额")); ?>

            <a href="#" class="ui-icon-close">
            </a>
        </div>
        <div class="ui-form-item ui-form-item-textarea ui-border-b">
            <label>
                <?php echo $form->label($model, 'jiamengzone'); ?>
            </label>
<!--            --><?php //echo $form->textField($model, 'jiamengzone', array('class' => "textarea", 'placeholder' => "区域地址")); ?>
            <div tabindex="0" class="tm_itemtext">
                <div id="city_4" style='float: right;margin-right:10%'>
                    <?php echo $form->dropDownList($model, 'province',array(), array('class' => "prov", 'id' => "prov")); ?>
                    <?php echo $form->dropDownList($model, 'city', array(),array('class' => "city", 'disabled' => "disabled","id"=>"city")); ?>
                    <?php echo $form->dropDownList($model, 'zone',array(),array('class' => "dist    ", 'disabled' => "disabled","id"=>"dist")); ?>
<!--                    <select id="prov" class="prov input" ></select>-->
<!--                    <select id="city" class="city input" disabled="disabled"></select>-->
<!--                    <select id="dist" class="dist input" disabled="disabled"></select>-->
                </div>
            </div>
        </div>
        <div class="ui-form-item ui-form-item-l ui-border-b">
            <label class="ui-border-r">
                中国 +86
            </label>
            <?php echo $form->textField($model, 'cellphone', array('class' => "text", 'placeholder' => "请输入手机号码")); ?>

            <a href="#" class="ui-icon-close">
            </a>
        </div>
        <p class="read-w">
            <label class="ui-checkbox-s">
                <input type="checkbox" name="checkbox" checked>
            </label>
            <a href="#">我已阅读协议并同意</a>
        </p>
        <div class="ui-notice-btn">
            <?php echo $form->errorSummary($model,'<p>错误如下：</p>');?>
            <?php echo CHtml::submitButton('提交', array('class' => 'ui-btn-primary ui-btn-lg link-btn', 'data-href' => 'sbt-error.html')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</section>

</body>
<script src="public/desktop/js/jquery.min.js"></script>
<script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>
<script src="js/house.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: 'index.php?r=basemenu/footmenu',
            type: 'POST',
            //data: { id: idValue },
            //timeout: 3000,
            success: function (data) {
                $("#foot").html(data);
            },
            error: function (data) {
               alert("请稍等加载中....");
            },
        })
    });
    $(function(){
        $("#city_4").citySelect({
            prov: "福建",
            city: "福州",
            dist: "仓山区",
            nodata: "none"
        });
        $('.select_all span').click(function(){
            $('.shebei').prop('checked',true);
        })
    })
</script>
</html>