
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

<footer class="ui-footer ui-footer-btn ui-footer-new">
    <ul class="ui-tiled ui-border-t">
        <li data-href="index.html" class="ui-border-r ui-house">
            <div>微家</div>
        </li>
        <li data-href="rent.html" class="ui-border-r ui-rent">
            <div>我要租房</div>
        </li>
        <li data-href="js.html" class="ui-rentout">
            <div>我要出租</div>
        </li>
    </ul>
</footer>
<section class="ui-container table-pay">
    <table style="width:380px" align="center" class="table font_td">
        <tbody>
        <tr>
            <td width="20%" align="right">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right">房子名称：</td>
            <td><?php echo $cyInfo->info_name; ?></td>
        </tr>
       
        <tr>
            <td align="right">日租金(元)：</td>
            <td id="yuezu"><?php echo $cyInfo->price; ?></td>
        </tr>
        <tr>
            <td align="right">租房天数：</td>
            <td>
                <select id="tianshu" name="style" onchange="heji()">
                    <option value="1">一天</option>
                    <option selected="" value="2">二天</option>
                    <option value="3">三天</option>
                    <option value="4">四天</option>
                    <option value="5">五天</option>
                    <option value="7">一星期</option>
                     <option value="30">一个月</option>
                    
                </select>
            </td>
        </tr>
       
        
        <tr>
            <td align="right">合计(元)：</td>
            <td id="hj">8800</td>
        </tr>
        <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a onclick="calljs()" style="cursor:pointer">
                    <img class="noborder" src="img/pay.gif">
                </a>
            </td>
        </tr>

        </tbody>
    </table>
</section>
<script src="lib/zepto.min.js"></script>
<script src="js/frozen.js"></script>
<script >
function heji(){
   var type= $("#tianshu option:selected").val();
  $("#hj").val(type*$("#yuezu").val());
    
}
$(function(){
    heji();
    
})
</script>
</body>
</html>