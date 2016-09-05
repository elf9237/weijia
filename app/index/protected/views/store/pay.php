
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
            <div><a href="./index.php?r=weiJia/index">微家</a></div>
        </li>
        <li data-href="rent.html" class="ui-border-r ui-rent">
            <div><a href="./index.php?r=store/index&info_type=-1">我要租房</a></div>
        </li>
        <li data-href="js.html" class="ui-rentout">
            <div><a href="./index.php?r=lease/crent">我要出租</a></div>
        </li>
    </ul>
</footer>
<section class="ui-container table-pay">
    <table  align="center" class="table font_td">
        <tbody>
        <tr>
            <td width="20%" align="right">&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right">房子名称：</td>
            <td><span class="house-name"><?php echo $cyInfo->info_name; ?></span></td>
        </tr>
        <tr>
            <td align="right">月租金(元)：</td>
            <td id='yuezu'><?php echo $cyInfo->price; ?></td>
        </tr>
        <tr>
            <td align="right">支付方式：</td>
            <td>
                <select id="style" name="style" onchange="heji()">
                    <option value="y">月付</option>
                    <option selected value="j">季付</option>
                    <option value="b">半年付</option>
                    <option value="n">年付</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">押金(元)：</td>
            <td id="yj"><?php echo $cyInfo->price*2; ?></td>
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
<script >
    function calljs(){
        var price=$("#hj").text();


        var url = 'index.php?r=store/zufang';
        url = url + '&infoid=' + '<?php echo  $cyInfo->id ?>' + '&type=0&days=365&price=' + price;

        window.location.href = url;
    }
    
function heji(){
   var type= $("#style option:selected").val();
   if(type=="y"){
       $("#zk").text("100%");
       $("#hj").text(parseFloat($("#yj").text())+$("#yuezu").text()*1);
       
   }
    if(type=="j"){
       $("#zk").text("98%");
       $("#hj").text(parseFloat($("#yj").text())+$("#yuezu").text()*3*0.98);
       
   }
    if(type=="b"){
       $("#zk").text("95%");
       $("#hj").text(parseFloat($("#yj").text())+$("#yuezu").text()*6*0.95);
       
   }
    if(type=="n"){
       $("#zk").text("90%");
       $("#hj").text(parseFloat($("#yj").text())+$("#yuezu").text()*12*0.9);
       
   }
    
}
$(function(){
    heji();
    
})
</script>

</body>
</html>