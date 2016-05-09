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
                        已租未租
                        <select name="lend_status" id="lend_status" class="ui_select01"
                                >
                            <option value=""
                            >--请选择--
                            </option>
                            <option value="0">未租</option>
                            <option value="1">已租</option>
                        </select>

                       审核状态
                        <select name="audit_status" id="audit_status" class="ui_select01">
                            <option value="">--请选择--</option>
                             <option value="0">--在线上--</option>
                              <option value="1">--已下架--</option>
                        </select>
                       居室
                        <select name="rooms" id="rooms" class="ui_select01">
                            <option value="">--全部--</option>
                             <option value="1">--单间--</option>
                              <option value="2">--两室--</option>
                              <option value="3">--三室--</option>
                              <option value="4">--四室以上--</option>
                        </select>
                      出租类型
                        <select name="info_type" id="info_type" class="ui_select01">
                            <option value="">--全部--</option>
                             <option value="0">--月租房--</option>
                              <option value="1">--日租房--</option>
                              <option value="2">--商铺--</option>
                             
                        </select><br/>
                       
                        

                        &nbsp;价格区间&nbsp;&nbsp;<input type="text" id="bprice" name="bprice"
                                             class="ui_input_txt02" value="0"/>&nbsp;到<input type="text" id="eprice" name="eprice" value="10000"
                                             class="ui_input_txt02"/>
                    </div>
                    <div id="box_bottom">
                        <input type="button" value="查询" class="ui_input_btn01" onclick="queryHouses(1);"/>
<!--                        <input type="button" value="新增" class="ui_input_btn01" id="addBtn" onclick="add()"/>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="ui_content">
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                       
                        <th>房源名称</th>
                        <th>地址</th>
                        <th>居室</th>
                        <th>租金</th>
                        <th>出租类型</th>
                        <th>出租状态</th>
                        <th>被举报次数</th>
                        <th>操作</th>
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
    <script>
          function queryHouses(page){
          
              var lend_status=$("#lend_status option:selected").val();
              var audit_status=$("#audit_status option:selected").val();
              var rooms=$("#rooms option:selected").val();
              var info_type=$("#info_type option:selected").val();
              var bprice=$("#bprice").val().trim();
               var eprice=$("#eprice").val().trim();
               if(bprice>eprice){
                   layer.msg("价格区间输入有误！！");
                   return;
               }
              var pagearr=$("#pagearr");
            $.ajax({
               url:"index.php?r=admin/admin/queryhouse",
               data:{
                   page:page,
lend_status:lend_status,
audit_status:audit_status,
rooms:rooms,
info_type:info_type,
bprice:bprice,
eprice:eprice
               },
               type:"POST",
               dataType:"json",
               success:function(data){
                         $("#userbody");
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                        innerHtml.push("<tr>");
                        innerHtml.push("<td>"+value.info_name+"</td>");
                          innerHtml.push("<td>"+value.province+"--"+value.city+"--"+value.zone+"</td>");
                        var status="未租";
                        if(value.status=="1")
                          status="已租"; 
                      var infotype="月租房";
                      if(value.info_type==1)
                          infotype="日租房";
                      if(value.info_type==2)
                          infotype="商铺";
                        innerHtml.push("<td>"+value.rooms+"</td>");
                        innerHtml.push("<td>"+value.price+"</td>");
                          innerHtml.push("<td>"+infotype+"</td>");
                         innerHtml.push("<td>"+status+"</td>");
                         innerHtml.push("<td>"+value.cishu+"</td>");
                        
                          var stext="下架";
                          if(value.audit_status=="1")
                          stext="上线"; 
                           innerHtml.push("<td><a onclick='jinyong("+value.id+","+value.audit_status+")'>"+stext+"</a>|<a onclick='xiangqing("+value.id+")'>详情</a></td>");
                    })
                   
                       
                   }
                    $("#userbody").html(innerHtml.join(""));
                   pageding(pagearr,"queryHouses",data);
               }
            })
            
        }
        
        function jinyong(id,audit_status){
        $.ajax({
            type:"POST",
            data:{
                id:id,
                audit_status:audit_status
            },
            dataType:"json",
            url:"index.php?r=admin/admin/xiajia",
            success:function(data){
                if(data.status){
                     queryUsers(1);
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
          function tixing(id){
                 layer.open({
                type:1,
                content:'<div style="text-align:center;display:inline-block;padding-top:10px"><span>消息内容：</span><textarea id="message"></textarea></div>',
                area:["300px","300px"],
                title:"添加提醒",
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
            },
            dataType:"json",
            url:"index.php?r=admin/admin/tixing",
            success:function(data){
                if(data.status){
                    layer.close(index);
                }else{
                    layer.msg("发送异常！！");
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
    queryHouses(1);
        
    })
    </script>
</div>
</body>
</html>
