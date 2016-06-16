<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="public/admin/scripts/jquery/jquery-1.7.1.js"></script>
    <link href="public/admin/style/authority/basic_layout.css" rel="stylesheet" type="text/css">
    <link href="public/admin/style/authority/common_style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="public/admin/scripts/authority/commonAll.js"></script>
    <script type="text/javascript" src="public/admin/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript" src="public/admin/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="public/admin/scripts/utils/util.js"></script>
     <script type="text/javascript" src="public/admin/scripts/layer/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="public/admin/style/authority/jquery.fancybox-1.3.4.css"
          media="screen"></link>
    <script type="text/javascript" src="public/admin/scripts/artDialog/artDialog.js?skin=default"></script>
    <title>信息管理系统</title>
    <script type="text/javascript">
    </script>
    <style>
        .alt td {
            background: black !important;
        }
    </style>
</head>
<body>
<form id="submitForm" name="submitForm" action="" method="post">
    <input type="hidden" name="allIDCheck" value="" id="allIDCheck"/>
    <input type="hidden" name="fangyuanEntity.fyXqName" value="" id="fyXqName"/>
    <div id="container">
        <div class="ui_content">
            <div class="ui_text_indent">
                <div id="box_border">
                    <div id="box_top">搜索</div>
                    <div id="box_center">
                        省市区
                       <div id="city_4" style="display: inline-block">
                    <select id="prov" class="prov input" ></select> 
                    <select id="city" class="city input" disabled="disabled"></select>
                    <select id="dist" class="dist input" disabled="disabled"></select>
                    
                </div>
                        &nbsp;起止时间&nbsp;&nbsp;<input type="text" id="bTime" name="bTime" onClick="WdatePicker()"
                                             class="ui_input_txt02" value=""/>&nbsp;到<input type="text" id="eTime" name="eTime" value="" onclick="WdatePicker({dateFmt: 'yyyy-MM-dd'})"
                                             class="ui_input_txt02"/>
                        

                      
                    </div>
                    <div id="box_bottom">
                        <input type="button" value="查询" class="ui_input_btn01" onclick="queryDls(1);"/>
<!--                        <input type="button" value="新增" class="ui_input_btn01" id="addBtn" onclick="add()"/>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="ui_content">
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                       
                        <th>房租</th>
                        <th>置顶</th>
                        <th>佣金</th>
                        <th>合计</th>
                       
                    </tr>
                    <tbody id="userbody">
                   
<tbody>
                    

                </table>
            </div>
            <div class="ui_tb_h30" id="pagearr">
            </div>
        </div>
    </div>
</form>
<div style="display:none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
    <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
  <script src="public/desktop/js/WdatePicker.js"></script>
   <link href="public/desktop/js/skin/WdatePicker.css" rel="stylesheet" type="text/css">
    <script>
       
        
        var param={
            bTime:"",
            eTime:"",
            province:'福建',
            city:'福州',
            zone:'仓山区',
            page:1
        };
        
          function queryDls(page){
          
              
             
            param.province= $("#prov option:selected").val();
      param.city= $("#city option:selected").val();
       param.zone= $("#dist option:selected").val();
       param.bTime=$("#bTime").val();
        param.eTime=$("#eTime").val();
             
            $.ajax({
               url:"index.php?r=admin/admin/Queryshouyi",
               data:param,
               type:"POST",
               dataType:"json",
               success:function(data){
                 
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                        var zongji = value.fangzu+value.zhiding+value.yongjin;
                        innerHtml.push("<tr>");
                        innerHtml.push("<td>"+(value.fangzu==null?0:value.fangzu)+"</td>");
                         innerHtml.push("<td>"+(value.zhiding==null?0:value.zhiding)+"</td>");
                          innerHtml.push("<td>"+(value.yongjin==null?0:value.yongjin)+"</td>");
                          innerHtml.push("<td>"+zongji+"</td>");
                  
            })
              
               
            
            }
            $("#userbody").html(innerHtml.join(""));
                
            
        }})}
        
        function yichu(id){
        $.ajax({
            type:"POST",
            data:{
                id:id,
               
            },
            dataType:"json",
            url:"index.php?r=admin/admin/delagent",
            success:function(data){
                if(data.status){
                     queryDls(1);
                }
            }
        })
        }
        function add(){
            layer.open({
                type:2,
                content:'index.php?r=admin/admin/adduser',
                area:["600px","600px"],
                title:"添加用户"
                
            })
          
//layer.msg("hehe");
        }
          function pass(id,type){
                 layer.open({
                type:1,
                content:'<div style="text-align:center;display:inline-block;padding-top:10px"><span>消息内容：</span><textarea id="message"></textarea></div>',
                area:["300px","300px"],
                title:"审核",
                btn:["发送","取消"],
                 yes:function(index){
                     if($("#message").val()==""){
                     layer.msg("请填写内容！！");
                     return;
                 }
                     $.ajax({
            type:"POST",
            data:{
                message:$("#message").val(),
                id:id,
                type:type
            },
            dataType:"json",
            url:"index.php?r=admin/admin/shenhe",
            success:function(data){
                if(data.status){
                    layer.close(index);
                    queryDls(1);
                }else{
                    layer.msg("失败！！");
                }
            }
        })
                     
                 },
             cancel:  function(index){
                 layer.close(index);
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
//    queryDls(1);
        
    })
    </script>
</div>
</body>
</html>
