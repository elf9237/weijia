
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
<!--                    <li ><a href="./index.php?r=lease/storerent">商铺出租</a></li>-->
                </ul>
            </div>
            <div class="list"> 
                <div class="notNullGroup"> 
                    
                    <li class="splitLine"></li>
                    <li class="_item priceNumber"><span class="nu_title">租金</span>
                        <div class="nu_itemtext">
                            <span class="nu_after">元</span>
                            <div class="nu_itemtext_con">
                                <input type="number" pattern="[0-9]*" value="<?php echo $cyinfo->price?>" id="price" name="MinPrice" />
                            </div>
                        </div>
                        <div class="errorTip MinPriceerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                    <li class="splitLine"></li>
                    <li class="_item titleInput"><span class="tx_title">标题</span>
                        <div class="tx_itemtext">
                            <input type="text" value="<?php echo $cyinfo->info_name?>" placeholder="请输入6-30字" id="info_name" name="info_name" />
                        </div>
                        <div class="errorTip Titleerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        
                        
                         <li class="_item titleInput"><span class="tx_title">详细信息</span>
                        <div class="tx_itemtext" style="height:150px">
                            <textarea type="text" style="width:90%" value="<?php echo $cyinfo->detail?>" placeholder="请输入6-30字" id="detail" name="detail" rows="3" ><?php echo $cyinfo->detail?></textarea>
                        </div>
                        <div class="errorTip Titleerror">
                            <div class="errorTipDiv"></div>
                            <span></span>
                        </div></li>
                        <li class="splitLine"></li>
                    <div  id="uploadnew" >
                    <div class="rows_wrap clearfix custom_name">

                        <div class="upload">
                            <div class="localUpload_wrap">

                                <div class="localUpload" style="min-height:230px;background:#fff">
                                    <div id="imgUploadf">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                            <span>封面图片(重新上传将覆盖原来)</span></div>
                        <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                            <span>1</span>张，每张最大
                            <span>8M</span></div>


                    </div>

                    <div class="rows_wrap clearfix custom_name">


                        <div class="upload">
                            <div class="localUpload_wrap">

                                <div class="localUpload" style="min-height:230px;background:#fff">
                                    <div id="imgUploadp">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                            <span>公共区域图片(重新上传将覆盖原来)</span></div>
                        <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                            <span>2</span>张，每张最大
                            <span>8M</span></div>


                    </div>
                    <div class="rows_wrap clearfix custom_name">
                        <div class="upload">
                            <div class="localUpload_wrap">

                                <div class="localUpload" style="min-height:230px;background:#fff">
                                    <div id="imgUpload1">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows_title">
                            <span>房屋图片(重新上传将覆盖原来)</span></div>
                        <div class="info">只能上传房屋图片，不能包含有文字、数字、网址、名片等，最多上传
                            <span>2</span>张，每张最大
                            <span>8M</span></div>

                    </div>
                    </div>
                    <li class="splitLine"></li>
                    
                </div> 

            </div>
          

            <div class="post btnPost"><button class="btn_post" id="btn_post" onclick="submitmyhome()">修改</button></div>
        </section>
      

<!--        <script src="lib/zepto.min.js"></script>
        <script src="js/frozen.js"></script>
        <script src="js/house.js"></script>-->
          <script src="public/desktop/js/jquery.min.js"></script>
        <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
 <link rel="stylesheet" type="text/css" href="public/desktop/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="public/desktop/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="public/desktop/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="public/desktop/diyUpload/js/diyUpload.js"></script>

 <script type="text/javascript" src="public/admin/scripts/layer/layer.js"></script>
        
       
<script>
    var miams="<?php echo $cyinfo->mian_url?>";
    var publics="<?php echo $cyinfo->public_url?>";
    var roomsurl="<?php echo $cyinfo->room_url?>";
    
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



function submitmyhome(){
    var rex=/^\+?[1-9][0-9]*$/;
    var info_name=$("#info_name").val().trim();
     var detail=$("#detail").val().trim();
     
      var price =$("#price").val().trim();
        if(!rex.test(price)){
            layer.msg("请输入正确数字");
            return;
        }
        if(info_name==""){
             layer.msg("请输入主题名称！");
                return;
        }
        
    if(mian_urls.length>0)
        miams=mian_urls.join(",");
     if(public_urls.length>0)
        publics=public_urls.join(",");
     if(room_urls.length>0)
        roomsurl=room_urls.join(",");
        
        var param={
           
            price:price,
            detail:detail,
            info_name:info_name,
            mian_url:miams,
            public_url:publics,
            room_url:roomsurl
        };
        
        $.ajax({
             url:"index.php?r=center/updateMyhome&infoid=<?php echo $cyinfo->id?>",
               data:param,
               type:"POST",
               dataType:"json",
               success:function(data){
                   if(data.status){
                     
                         window.location.href="index.php?r=center/issue";
                     }
                   else{
                       layer.msg("修改失败！！")
                   }
               }
            
        })
        
        
    
}


function showtu(){
if($("#uploadnew").css("display")=='none'){
    $("#uploadnew").css("display","block");
}else{
     $("#uploadnew").css("display","none");
}

}

  
  
  
 
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