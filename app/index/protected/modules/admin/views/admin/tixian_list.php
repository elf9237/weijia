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
                        审核状态
                        <select name="audit_status" id="audit_status" class="ui_select01"
                                >
                            <option value=""
                            >--请选择--
                            </option>
                            <option value="0">未审核</option>
                             <option value="2">驳回</option>
                            <option value="1">通过</option>
                           
                            
                        </select>

                      
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
                       
                        <th>金额</th>
                        <th>状态</th>
                        <th>申请时间</th>
                       
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
          function queryDls(page){
          
              var audit_status=$("#audit_status option:selected").val();
             
            
              var pagearr=$("#pagearr");
            $.ajax({
               url:"index.php?r=admin/admin/queryTixian",
               data:{
                   page:page,
                   status:audit_status

               },
               type:"POST",
               dataType:"json",
               success:function(data){
                       
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                        innerHtml.push("<tr>");
                        innerHtml.push("<td>"+value.jine+"</td>");
                         
                          
                        var status="待审核";
                        if(value.status=="1")
                          status="通过"; 
                       if(value.status=="2")
                          status="驳回";
                      if(value.status=="3")
                          status="异常";
                      innerHtml.push("<td>"+status+"</td>");
                       innerHtml.push("<td>"+new Date(parseInt(value.create_time) * 1000).toLocaleString().replace(/:\d{1,2}$/,' ')+"</td>");
                      
                      
                      if(value.status=="0"){
                           innerHtml.push("<td><a onclick='pass("+value.id+",1)'>通过</a>|<a onclick='pass("+value.id+",2)'>驳回</a></td>");
                    }else{
                          innerHtml.push("<td>已审核</td>");
                    }
                   
                       
                 
                  
            })
            
               
            
            }
              $("#userbody").html(innerHtml.join(""));
                   pageding(pagearr,"queryDls",data);
            
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
            url:"index.php?r=site/shenHeTiXian",
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
    queryDls(1);
        
    })
    </script>
</div>
</body>
</html>
