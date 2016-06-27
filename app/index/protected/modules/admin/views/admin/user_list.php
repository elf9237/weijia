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
                        用户类别
                        <select name="type" id="fyXq" class="ui_select01"
                               >
                            <option value=""
                            >--请选择--
                            </option>
                            <option value="0">平台用户</option>
                            <option value="1">非平台用户</option>
                        </select>

                       用户状态
                        <select name="status" id="fyDh" class="ui_select01">
                            <option value="">--请选择--</option>
                             <option value="0">--可用--</option>
                              <option value="1">--拉黑--</option>
                        </select>
                       
                        

                        用户名&nbsp;&nbsp;<input type="text" id="fyZldz" name="username"
                                             class="ui_input_txt02"/>
                    </div>
                    <div id="box_bottom">
                        <input type="button" value="查询" class="ui_input_btn01" onclick="queryUsers(1);"/>
<!--                        <input type="button" value="新增" class="ui_input_btn01" id="addBtn" onclick="add()"/>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="ui_content">
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                       
                        <th>用户名</th>
                        <th>用户类别</th>
                        <th>使用状态</th>
                        <th>拥有房源数</th>
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
          function queryUsers(page){
              var type=$("#fyXq option:selected").val();
              var status=$("#fyDh option:selected").val();
              var username=$("#fyZldz").val();
              var pagearr=$("#pagearr");
            $.ajax({
               url:"index.php?r=admin/admin/queryUser",
               data:{
                   page:page,
                   type:type,
                   status:status,
                   username:username
                   
               },
               type:"POST",
               dataType:"json",
               success:function(data){
                      
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                        innerHtml.push("<tr>");
                        innerHtml.push("<td>"+value.username+"</td>");
                          innerHtml.push("<td>"+value.type+"</td>");
                        var status="可用";
                        if(value.status=="1")
                          status="禁用"; 
                        innerHtml.push("<td>"+status+"</td>");
                        innerHtml.push("<td>"+value.fans+"</td>");
                         innerHtml.push("<td>"+value.jubaos+"</td>");
                          var stext="禁用";
                          if(value.status=="1")
                          stext="启用"; 
                       
                       var pingtai="|<a onclick='biaoji("+value.id+")'>标注平台</a>";
                       if(value.type=="0")
                           pingtai="";
                          
                           innerHtml.push("<td><a onclick='jinyong("+value.id+","+value.status+")'>"+stext+"</a>|<a onclick='tixing("+value.id+")'>提醒</a>"+pingtai+"</td>");
                    })
                   
                       
                   }
                    $("#userbody").html(innerHtml.join(""));
                   pageding(pagearr,"queryUsers",data);
               }
            })
            
        }
        
        function jinyong(id,status){
        $.ajax({
            type:"POST",
            data:{
                id:id,
                status:status
            },
            dataType:"json",
            url:"index.php?r=admin/admin/lahei",
            success:function(data){
                if(data.status){
                     queryUsers(1);
                }
            }
        })
        }
        
         
        function biaoji(id){
        $.ajax({
            type:"POST",
            data:{
                id:id
            },
            dataType:"json",
            url:"index.php?r=admin/admin/biaojipt",
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
    queryUsers(1);
        
    })
    </script>
</div>
</body>
</html>
