
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>我要出租</title>
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
            .gr_itemtext span input{
                width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block
            }
        </style>
    </head>
    <body ontouchstart="">
        <!-- <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>微家</h1><button class="ui-btn ui-back-index">账户</button>
        </header> -->
        <footer id="foot"class="ui-footer ui-footer-btn ui-footer-new">
            <!--            <ul class="ui-tiled ui-border-t">-->
            <!--                <li data-href="introduce.html" class="ui-border-r ui-house"><div>微家</div></li>-->
            <!--                <li data-href="index.html" class="ui-border-r ui-rent"><div>首页</div></li>-->
            <!--                <li data-href="rent.html" class="ui-rentout"><div>我要租房</div></li>-->
            <!--            </ul>-->
        </footer>
        <section class="ui-container">
            <div id="chuzumenu" class="ui-tab">
                <ul class="ui-tab-nav ui-border-b">
                    <li data-href=""class="current" ><a href="./index.php?r=lease/crent">住房出租</a></li>
                    <li ><a href="./index.php?r=lease/storerent">商铺出租</a></li>
                </ul>
            </div>
            <div class="list"> 
                <div class="notNullGroup"> 
                   <li class="_item priceNumber"><span class="nu_title">类别</span>
                        <div class="nu_itemtext">
                            <span style="display:inline-block;margin-right: 10px;width:28%"><input type="radio" name="info_type" id="inlineRadio1" value="0" style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" > 月租房</span>
                            <span style="display:inline-block;margin-right: 10px;width:28%"><input type="radio" name="info_type" id="inlineRadio2" value="1" style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block"> 日租房</span>
                            <span style="display:inline-block;margin-right: 10px;width:28%"> <input type="radio" name="info_type" id="inlineRadio2" value="2" style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block"> 商铺 </span>  
                        </div>
                        </li>
                   
                    <li class="_item huxingLabel"><span class="gr_title">位置</span>
                        <div class="gr_itemtext">
                            
                               
                                <div class="gr_itemt_con">
                                    <input  id="district" name="district"  />
                                </div>
                         
                        </div>
                        <div class="errorTip huxingLabelerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                    <li class="_item localArea"><span class="tm_title">区域</span><span class="tm_after"><span></span></span>
                        <div tabindex="0" class="tm_itemtext">
                             <div id="city_4" style='float: right;margin-right:10%'>
                    <select id="prov" class="prov input" ></select> 
                    <select id="city" class="city input" disabled="disabled"></select>
                    <select id="dist" class="dist input" disabled="disabled"></select>
                   
                </div>
                        </div>
                        <div class="tm_selectval" id="localArea">
                            
                        </div>
                        <div class="errorTip localAreaerror">
                            <div class="errorTipDiv"></div>
                            <span>undefined</span>
                        </div></li>
                    <li class="splitLine"></li>
                    <li class="_item huxingLabel"><span class="gr_title">户型</span>
                        <div class="gr_itemtext">
                            <div class="gr_itemt" style='width:25%'>
                                <span class="gr_after">室</span>
                                <div class="gr_itemt_con">
                                    <input type="number" pattern="[0-9]*" id="huxingshi" name="jushishuru" max="100" min="-10" />
                                </div>
                            </div>
                            <div class="gr_itemt" style='width:25%'>
                                <span class="gr_after">厅</span>
                                <div class="gr_itemt_con">
                                    <input type="number" pattern="[0-9]*" id="huxingting" name="huxingting" max="100" min="-10" />
                                </div>
                            </div>
                            <div class="gr_itemt" style='width:25%'>
                                <span class="gr_after">卫</span>
                                <div class="gr_itemt_con">
                                    <input type="number" pattern="[0-9]*" id="huxingwei" name="huxingwei" max="100" min="-10" />
                                </div>
                            </div>
                            
                            <div class="gr_itemt" style='width:25%'>
                                <span class="gr_after">m2</span>
                                <div class="gr_itemt_con">
                                     
                                    <input type="number" pattern="[0-9]*" id="area" name="area" max="100" min="-10" />
                                </div>
                               
                            </div>
                           
                            
                        </div>
                        <div class="errorTip huxingLabelerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                        <li class="_item huxingLabel"><span class="gr_title">朝向</span>
                        <div class="gr_itemtext">
                            
                               
                                <div class="gr_itemt_con">
                                    <input  id="direction" name="direction"  />
                                </div>
                         
                        </div>
                        <div class="errorTip huxingLabelerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                        
                        <li class="_item huxingLabel"><span class="gr_title">楼层</span>
                        <div class="gr_itemtext">
                            <div class="rows_content">
                  <div class="tip"></div>
                  <div class="input_text_wrap clearfix" name="Floor" style="width:45%;display:inline-block">
                    <span>第</span>
                    <input type="inputText" tabindex="12" id="nfloor" maxlength="2" style='width:60%'>
                    <span>层</span></div>
                  <div class="input_text_wrap clearfix" name="zonglouceng" style="width:45%;display:inline-block">
                    <span>共</span>
                    <input type="inputText" tabindex="13" id="floors" maxlength="2" style='width:60%'>
                    <span>层</span></div>
                </div>
                            
                        </div>
                        <div class="errorTip huxingLabelerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                         <li class="_item huxingLabel"><span class="gr_title">设备</span>
                        <div class="gr_itemtext" style="height:180px;line-height: 30px">
                            
                            <div class="rows_content">
                  <div class="tip"></div>
                  <div class="checkbox_wrap clearfix" name="HouseAllocation" nameid="1022">
                    <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="7">
                     床</span>
                     <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="9">
                     热水器</span>
                     <span style="display:inline-block;margin-right: 10px;width:28%">
                        <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="1">
                       洗衣机</span>
                   <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="2">
                       空调</span>
                   <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="3">
                       冰箱</span>
                    <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="11">
                       电视</span>
                     <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="10">
                       宽带</span>
                    <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="2">
                       沙发</span>
                     <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="6">
                       衣柜</span>
                     <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="5">
                       餐桌</span>
                       <span style="display:inline-block;margin-right: 10px;width:28%">
                      <input type="checkbox"  style="width:30%;appearance:radio;-webkit-appearance:radio;display: inline-block" class="shebei" value="8">
                       窗帘</span>
                    <div class="select_all">
                      <span>全选</span></div>
                  </div>
                </div> 
                        </div>
                        <div class="errorTip huxingLabelerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                        
                       
                        
                        
                        
                    <li class="_item priceNumber"><span class="nu_title">租金</span>
                        <div class="nu_itemtext">
                            <span class="nu_after">元</span>
                            <div class="nu_itemtext_con">
                                <input type="number" pattern="[0-9]*" id="price" name="MinPrice" />
                            </div>
                        </div>
                        <div class="errorTip MinPriceerror">
                            <div class="errorTipDiv"></div>
                            <span>undefined</span>
                        </div></li>
                        
                        <li class="_item priceNumber"><span class="nu_title">公交</span>
                        <div class="nu_itemtext">
                            <span class="nu_after"></span>
                            <div class="nu_itemtext_con">
                                <input type="number" pattern="[0-9]*" id="bus" name="MinPrice" />
                            </div>
                        </div>
                        <div class="errorTip MinPriceerror">
                            <div class="errorTipDiv"></div>
                            <span>undefined</span>
                        </div></li>
                    <li class="splitLine"></li>
                    <li class="_item titleInput"><span class="tx_title">标题</span>
                        <div class="tx_itemtext">
                            <input type="text" value="" placeholder="请输入6-30字" id="info_name" name="info_name" />
                        </div>
                        <div class="errorTip Titleerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                        
                         <li class="_item titleInput"><span class="tx_title">详细信息</span>
                        <div class="tx_itemtext" style="height:150px">
                            <textarea type="text" style="width:90%" value="" placeholder="请输入6-30字" id="detail" name="detail" rows="3" ></textarea>
                        </div>
                        <div class="errorTip Titleerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                    
                    
                    
                </div> 
                <div class="rows_wrap clearfix custom_name">
            
              <div class="upload">
                        <div class="localUpload_wrap">
                         
                          <div class="localUpload" style="width:540px;min-height:230px;background:#fff">
                            <div id="imgUploadf">
                              
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                        <span>1</span>张，每张最大
                        <span>8M</span></div>
                <div class="rows_title">
                  <span>上传封面图片</span></div>
            
                  </div>
                
                 <div class="rows_wrap clearfix custom_name">
               
                 
                <div class="upload">
                        <div class="localUpload_wrap">
                         
                          <div class="localUpload" style="width:540px;min-height:230px;background:#fff">
                            <div id="imgUploadp">
                              
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                        <span>2</span>张，每张最大
                        <span>8M</span></div>
                <div class="rows_title">
                  <span>上传公共区域图片</span></div>
              
                  </div>
              <div class="rows_wrap clearfix custom_name">
                  <div class="upload">
                        <div class="localUpload_wrap">
                         
                          <div class="localUpload" style="width:540px;min-height:230px;background:#fff">
                            <div id="imgUpload1">
                              
                            </div>
                            </div>
                        </div>
                      </div>
                      <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                        <span>2</span>张，每张最大
                        <span>8M</span></div>
                <div class="rows_title">
                  <span>上传房屋图片</span></div>
              </div>
            </div>
            <input type="hidden" id="map" value=""/>

            <div class="post btnPost"><button class="btn_post" id="btn_post" onclick="queryMap()">发布</button></div>
        </section>

        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="js/house.js"></script>
          <script src="public/desktop/js/jquery.min.js"></script>
        <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
 <link rel="stylesheet" type="text/css" href="public/desktop/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="public/desktop/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="public/desktop/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="public/desktop/diyUpload/js/diyUpload.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
 <script type="text/javascript" src="public/admin/scripts/layer/layer.js"></script>
        
        <script type="text/javascript">
  var map = new BMap.Map("baidumap");
var localSearch = new BMap.LocalSearch(map);
function searchlnlg(keyword){
    alert(keyword);
localSearch.setSearchCompleteCallback(function (searchResult) {
      alert(1);
        var poi = searchResult.getPoi(0);
      
        if(poi==null){
             $("#map").val("119.240072,26.065315");
        }else{
        $("#map").val(poi.point.lng + "," + poi.point.lat);
    }
     submitmyhome();
       
    });
   var searchResult= localSearch.search(keyword.trim());

}
</script>
<script>
    var mian_urls=[];
    var public_urls=[];
    var room_urls=[];
    
  $('#imgUpload1').diyUpload({
	url:'index.php?r=upload/upload',
	success:function( data ) {
		if(data.status){
                  room_urls.push(data.params.pic);  
                  console.info( data.params.pic );
                }
	},
	error:function( err ) {
		console.info( err );	
	},
	buttonText : '选择文件',
	chunked:true,
	// 分片大小

	//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
	fileNumLimit:3,
	fileSizeLimit:5000000 * 1024,
	fileSingleSizeLimit:500000 * 10240,
	accept: {}
});
$('#imgUploadf').diyUpload({
	url:'index.php?r=upload/upload',
	success:function( data ) {
		 mian_urls.push(data.params.pic);  
                  console.info( data.params.pic );
	},
	error:function( err ) {
		console.info( err );	
	},
	buttonText : '选择文件',
	chunked:true,
	// 分片大小

	//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
	fileNumLimit:1,
	fileSizeLimit:5000000 * 1024,
	fileSingleSizeLimit:500000 * 10240,
	accept: {}
});
$('#imgUploadp').diyUpload({
	url:'index.php?r=upload/upload',
	success:function( data ) {
		 public_urls.push(data.params.pic);  
                  console.info( data.params.pic );
	},
	error:function( err ) {
		console.info( err );	
	},
	buttonText : '选择文件',
	chunked:true,
	// 分片大小

	//最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
	fileNumLimit:3,
	fileSizeLimit:5000000 * 1024,
	fileSingleSizeLimit:500000 * 10240,
	accept: {}
});
function queryMap(){
     var prov=$("#prov option:selected").val();
       var city=$("#city option:selected").val();
       var zone=$("#dist option:selected").val();
       var district =$("#district").val();
       var keyword=prov+city+zone+district;
    
        searchlnlg(keyword);
  
}
function dosuccess(){
    
    
}

function submitmyhome(){
    var rex=/^\+?[1-9][0-9]*$/;
    var info_name=$("#info_name").val().trim();
     var detail=$("#detail").val().trim();
     
      var price =$("#price").val().trim();
       var bus =$("#bus").val().trim();
       var prov=$("#prov option:selected").val();
       var city=$("#city option:selected").val();
       var zone=$("#dist option:selected").val();
       var district =$("#district").val();
       var info_type=$("input[name='info_type']:checked").val();
       var shebei=[];
       $("input[type='checkbox']:checked").each(
               function(){
                   shebei.push($(this).val());
               }
                );
     
       var floors=$("#floors").val();
       var nfloor=$("#nfloor").val();
       var direction=$("#direction").val();
       var rooms=$("#huxingshi").val();
       var ting=$("#huxingting").val();
        var wei=$("#huxingwei").val();
        var house_type=rooms+'室'+(ting==""?0:ting)+"厅"+(wei==""?0:wei)+"卫";
        var area=$("#area").val();
        var map=$("#map").val();
        if(!rex.test(price)||!rex.test(nfloor)||!rex.test(floors)||!rex.test(area)){
            layer.msg("请输入正确数字");
            return;
        }
        if(info_name==""){
             layer.msg("请输入主题名称！");
                return;
        }
        var param={
            map:map,
            area:area,
            house_type:house_type,
            rooms:rooms,
            direction:direction,
            shebei:shebei.join(","),
            info_type:info_type,
            district:district,
            zone:zone,
            city:city,
            prov:prov,
            bus:bus,
            price:price,
            detail:detail,
            info_name:info_name,
            mian_url:mian_urls.join(","),
            public_url:public_urls.join(","),
            room_url:room_urls.join(","),
            floors:floors,
            nfloor:nfloor,
            
            
        };
        
        $.ajax({
             url:"index.php?r=ajax/savemyhome",
               data:param,
               type:"POST",
               dataType:"json",
               success:function(data){
                   if(data.status)
                         window.location.href="index.php?r=ajax/myhome";
                   else
                       layer.msg("发布失败！！")
               }
            
        })
        
        
    
}

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
                        alert('===');
                    },
                })
            });
        </script>


    </body>
</html>