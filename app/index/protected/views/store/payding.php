
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
            <td><?php echo $cyInfo->price; ?></td>
        </tr>
        <tr>
            <td align="right">置顶套餐：</td>
            <td>
                <select id="type" name="style" >
                    <option selected="" value="1,10">1天10元</option>
                    <option  value="2,19">2天19</option>
                    <option value="7,60">7天60</option>
                    <option value="15,120">半个月120</option>
                     <option value="30,240">包月240</option>
                </select>
            </td>
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
<script>
 function calljs(){
     var type=$("#type option:selected").val();
     var types=type.split(",");
     var price=types[1];
     var days=types[0];
     
     
      var url = 'index.php?r=store/zhiding';
        url = url + '&infoid=' + '<?php echo  $cyInfo->id ?>' + '&days='+days+'&price=' + price;
          window.location.href = url;
    }

</script>

</body>
</html>