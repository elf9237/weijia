 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>租房详情</title>
        <link rel="stylesheet" href="css/frozen.css">       
       <!-- <link rel="stylesheet" href="lib/pullTo/pullToRefresh.css"/>
        <script src="lib/pullTo/iscroll.js"></script>
        <script src="lib/pullTo/pullToRefresh.js"></script> -->
        <script type="text/javascript" src="lib/area/jquery-1.9.1.js"></script>
       <script type="text/javascript" src="js/jquery.bxslider.js"></script>
       <script src="public/desktop/js/common.js"></script>
       <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
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
        <!-- <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>租房详情</h1><button class="ui-btn ui-back-index">回首页</button>
        </header> -->
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r ui-house"><div>微家</div></li>
                <li data-href="ui.html" class="ui-border-r ui-rent"><div>我要租房</div></li>
                <li data-href="js.html" class="ui-rentout"><div>我要出租</div></li>
            </ul>
        </footer>
        <section>
            <div class="ui-tab">

                <ul class="ui-tab-content ui-tab-content-detail">
                    <li class="current clearfix">
                        <div class="slide-wrap">
                            <h1>房源图片</h1>
                            <div id="focus" class="focus">
                                <div class="hd">
                                    <ul><li class="on">1</li><li class="">2</li><li class="">3</li></ul>
                                </div>
                                <div class="bd">
                                    <ul>
                                        <?php
                                        $roomima= $cyinfo->room_url;
                                        $imgs=explode(',',$roomima);
                                        for($index=0;$index<count($imgs);$index++)
                                        {
                                            echo ' <li><a href="#" class="img-show"><img src="upload/'.$imgs[$index].'"></a></li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slide-wrap">
                            <h1>公共区域</h1>
                            <div id="focus2" class="focus">
                                <div class="hd">
                                    <ul><li class="on">1</li><li class="">2</li><li class="">3</li></ul>
                                </div>
                                <div class="bd">
                                    <ul>
                                        <?php
                                        $roomima= $cyinfo->public_url;
                                        $imgs=explode(',',$roomima);
                                        for($index=0;$index<count($imgs);$index++)
                                        {

                                            echo '<li><a href="#" class="img-show"><img src="upload/'.$imgs[$index].'"></a></li>';

                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h1 class="detail-title">我们为你精心打造</h1>
                        <h1 class="detail-title">一个<span class="detail-title-b"> “有品质的家”</span></h1>
                        <div class="area" id="baidudiv">
                            
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">标准配置</a></strong></div>
                        </div>
                        <div class="list_item_div" style="background-color:#303133">
                            <ul class="shebei clearfix">
                                <?php
                                if(isset($equi_infos)){
                                    foreach ($equi_infos as $eqinfo){
                                        foreach ($equis as $eq){
                                            if($eq->id==$eqinfo->equip_id){
                                                echo '<li><img src="'.$eq->img_url.'" alt=""></li>';
                                            }
                                        }

                                    }

                                }
                                ?>

                            </ul>

                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">热舞</a></strong></div>
                        </div>
                        <div class="detail-container">
                            <table id="list_detail">
                                <tbody>
                                <tr>
                                    <td class="td_point" align="left"><label>小区</label></td>
                                    <td><span><?php echo $cyinfo->district ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>户型</label></td>
                                    <td><span><?php echo $cyinfo->house_type ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>楼层</label></td>
                                    <td><span><?php echo $cyinfo->nfloor?>/ <?php echo $cyinfo->floors ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label style="width:36px">总面积</label></td>
                                    <td><span><?php echo $cyinfo->area ?></span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td class="td_point"><label>描述</label></td>
                                    <td><span><?php echo $cyinfo->detail ?></span></td>
                                </tr>
                                <tr>
                                    <td class="td_point"><label>交通</label></td>
                                    <td><span>公交：<?php echo $cyinfo->bus ?>等公交</span></td>
                                </tr>
                                </tbody>
                                <tbody>
                                  <tr>
                                    <td class="td_point"><label>购物</label></td>
                                    <td><span> <?php echo $cyinfo->market ?>
                                    </span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>办公</label></td>
                                    <td><span>--</span></td>
                                  </tr>
                                  <tr>
                                    <td class="td_point"><label>银行</label></td>
                                    <td><span>建行，中行，北京银行，工商，农业，中信等。
                                </span></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="title">
                            <div class="title_text" align="left"><strong><a style="color:#FFFFFF">价格公式</a></strong></div>
                        </div>
                        <div align="center"><img class="images" src="img/price_formula.png"></div>
                        <div align="center">
                            <table align="center" class="table"><tbody><tr>
                            <td width="34px"><img align="right" src="img/eq.png" width="100%"></td>
                            <td width="4px">&nbsp;</td>
                            <td width="110px">
                                <div class="top_price">
                                    <font id="font_price" class="font_td">
                                       <?php echo $cyinfo->price ?>
                                    </font>
                                </div>
                                <img align="left" src="img/price.png" width="100%">
                            </td>
                            </tr>
<!--                            <tr style="color:#FFFFFF;height:30px;font-size:14px;"><td colspan="3">整租优惠价：
                                5130
                            </td></tr>-->
                            </tbody></table>
                        </div>
                        <div class="button_div" id="lendstatusshow">
                            <a href="index.php?r=mess/yu&userid=<?php echo $cyinfo->user_id;?>&infoid=<?php echo $cyinfo->id;?>"><img class="noborder" src="img/button_detail_contact.gif" width="100%"></a>
                            <a href="javascript:zufang()" class="mt10"><img class="noborder" src="img/crent.png" width="100%"></a>
                        </div>
                        <div class="police">
                            <a href="index.php?r=mess/jubao&userid=<?php echo $cyinfo->user_id;?>&infoid=<?php echo $cyinfo->id;?>">举报</a>
                        </div>
                    </li>

                </ul>
            </div>
            <input type='hidden' value='<?php echo $useinfo->type;?>'/>
            <div class="ad-btn"><a href="index.php?r=center/wmoney">佣</a></div>
        </section>

    </body>
    <script src="lib/zepto.min.js"></script>
    <script src="js/frozen.js"></script>
    <script src="js/TouchSlide.1.1.source.js"></script>
    <script src="lib/layer/layer.js"></script>
    <script type="text/javascript">

        TouchSlide({
            slideCell:"#focus",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"left",
            autoPlay:true,//自动播放
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });

        TouchSlide({
            slideCell:"#focus2",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"left",
            autoPlay:true,//自动播放
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });

    </script>
    <script>
        function zufang(){
            var infoid="<?php echo $cyinfo->id;?>";
            var userid="<?php echo $cyinfo->user_id;?>";
            var infoType="<?php echo $cyinfo->info_type;?>";
            var userType="<?php echo $useinfo->type;?>";
            var senderid= <?php
                $loginuserid=-1;
                $userLogin= Yii::app()->session['user'] ;
                if(!empty($userLogin)){
                    $loginuserid=$userLogin->id;

                } echo $loginuserid; ?>;
            if(userType=="1"||userType=="2"){
                if(senderid !=-1){
                    $.ajax({
                        url:"index.php?r=store/rentFang&infoid="+infoid,
                        dataType:"json",
                        type:"POST",
                        success:function(data){
                            if(data.status){
//                                alert("租房信息提交成功！");
                                layer.open({
                                    content: '租房信息提交成功,非平台房源只能线下支付',
                                    style: 'background-color:#ff6d00; color:#fff; border:none;',
                                    time: 2
                                });
                            }else{
                                layer.open({
                                    content: '租房信息提交失败',
                                    style: 'background-color:#ff6d00; color:#fff; border:none;',
                                    time: 2
                                });

                            }
                        }

                    })}else{
                    window.location.href="index.php?r=site/login";

                }
            }else{
                if(infoType==1){
                    window.location.href="index.php?r=store/toFuKuangRi&infoid="+infoid;
                }else{
                    window.location.href="index.php?r=store/toFuKuang&infoid="+infoid;
                }
            }

        }


        function initBaiDuMap(){
            var map= '<?php echo $cyinfo->map ?>';
            var jin='0';
            var wei='0';
            if(map!=null&&map!=''){
                var maps=map.split(',');
                if(maps.length>1){
                    jin=maps[0];
                    wei=maps[1];

                }
            }
            loadBaiDuMap("baidudiv",jin,wei);
        }
        window.addEventListener('load', function(){

            var tab = new fz.Scroll('.ui-tab', {
                role: 'tab',
                autoplay: false,
                interval: 3000
            });

            /* 滑动开始前 */
            tab.on('beforeScrollStart', function(from, to) {
                // from 为当前页，to 为下一页
            })

            /* 滑动结束 */
            tab.on('scrollEnd', function(curPage) {
                // curPage 当前页
            });

        })
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
    <script type="text/javascript">
        $(document).ready(function(){
            loadBaiDuMapAsy("initBaiDuMap");
            var lend_status='<?php echo $cyinfo->lend_status;?>';
            if(lend_status=='1'){
                $("#lendstatusshow").hide();
                
            }
            
            
            $('.slider6').bxSlider({
                mode: 'fade',
                slideWidth: 600,
                slideMargin: 10
            });
        });
    </script>
</html>