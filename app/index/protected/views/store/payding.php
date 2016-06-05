
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
            <td>英伦之吻</td>
        </tr>
        <tr>
            <td align="right">房间名称：</td>
            <td>魅力</td>
        </tr>
        <tr>
            <td align="right">月租金(元)：</td>
            <td>2200</td>
        </tr>
        <tr>
            <td align="right">支付方式：</td>
            <td>
                <select id="style" name="style" onchange="heji()">
                    <option value="y">月付</option>
                    <option selected="" value="j">季付</option>
                    <option value="b">半年付</option>
                    <option value="n">年付</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">押金(元)：</td>
            <td id="yj">2200</td>
        </tr>
        <tr>
            <td align="right">折扣(%)：</td>
            <td id="zk">100</td>
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

</body>
</html>