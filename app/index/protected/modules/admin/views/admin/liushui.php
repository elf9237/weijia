<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="public/js/jquery-1.9.0.min.js"></script>
  <script src="public/desktop/date/WdatePicker.js"></script>
  <link href="public/desktop/date/skin/WdatePicker.css" rel="stylesheet" type="text/css">
    <link href="public/admin/style/authority/basic_layout.css" rel="stylesheet" type="text/css">
    <link href="public/admin/style/authority/common_style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="public/admin/scripts/authority/commonAll.js"></script>
    <script type="text/javascript" src="public/admin/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript" src="public/admin/scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="public/admin/scripts/utils/util.js"></script>
     <script type="text/javascript" src="public/admin/scripts/layer/layer.js"></script>
    <link rel="stylesheet" type="text/css" href="public/admin/style/authority/jquery.fancybox-1.3.4.css"
          media="screen"/>
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
                                             class="ui_input_txt02" value="2016-06-01 00:00:00"/>&nbsp;到<input type="text" id="eTime" name="eTime" value="2016-06-30 23:59:59" onclick="WdatePicker()"
                                             class="ui_input_txt02"/>
                        

                      
                    </div>
                    <div id="box_bottom">
                        <input type="button" value="查询" class="ui_input_btn01" onclick="queryAll();"/>
                         <input type="button" value="导出订单" class="ui_input_btn01" onclick="excelorder();"/>
                          <input type="button" value="导出提现" class="ui_input_btn01" onclick="exceltixian();"/>
<!--                        <input type="button" value="新增" class="ui_input_btn01" id="addBtn" onclick="add()"/>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="ui_content">
             <span>订单明细</span>
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                       
                        <th>地区</th>
                        <th>单号</th>
                        <th>金额</th>
                        <th>类别</th>
                        <th>状态</th>
                        <th>时间</th>
                       
                    </tr>
                    <tbody id="userbody">
                       
                   
</tbody>
                    

                </table>
            </div>
            <div class="ui_tb_h30" id="pagearr">
            </div>
        </div>
        
        <div class="ui_content">
            <span>提现明细</span>
            <div class="ui_tb">
                <table class="table" cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
                    <tr>
                       
                        <th>地区</th>
                        <th>转态</th>
                        <th>金额</th>
                        <th>时间</th>
                    </tr>
                    <tbody id="tixian">
                   
</tbody>
                    

                </table>
            </div>
              <div class="ui_tb_h30" id="tixianpage">
            </div>
        </div>
    </div>
</form>
<div style="display:none">
    <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script>
    <script type="text/javascript" src="public/desktop/js/skill/jquery.cityselect.js"></script>
  
    <script>
             function getLocalTime(nS) {
                return new Date(parseInt(nS) * 1000).toLocaleString().substr(0,12)
}
        
        var param={
            bTime:"",
            eTime:"",
            province:'福建',
            city:'福州',
            zone:'仓山区',
            page:1
        };
        
          function queryDls(page){
             param.page=page;
            $.ajax({
               url:"index.php?r=admin/admin/queryorder",
               data:param,
               type:"POST",
               async: false,
               dataType:"json",
               success:function(data){
                 
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                     innerHtml.push('<tr><td>'+value.zone+'</td>') ;
                      innerHtml.push('<td>'+value.weidan+'</td>') ;
                       innerHtml.push('<td>'+value.pay_price+'</td>') ;
                        innerHtml.push('<td>'+value.order_type+'</td>') ;
                        var audit_status='支付';
                        if(value.audit_status==4)
                            audit_status='退款';
                            innerHtml.push('<td>'+audit_status+'</td>');  
                             innerHtml.push('<td>'+getLocalTime(value.create_time)+'</td></tr>'); 
                            
            })
              
               
            
            }
             $("#userbody").html(innerHtml.join(""));
                   pageding($("#pagearr"),"queryDls",data);
                
            
        }})}
        
        
         function querytian(page){
              param.page=page;
            $.ajax({
               url:"index.php?r=admin/admin/querytixianLiu",
               data:param,
               type:"POST",
               async: false,
               dataType:"json",
               success:function(data){
                   var innerHtml=[];
                   if(data.pageList.length>0){
                    $.each(data.pageList,function(n,value){
                     innerHtml.push('<tr><td>'+value.zone+'</td>') ;
                      innerHtml.push('<td>支出</td>') ;
                       innerHtml.push('<td>'+value.jine+'</td>') ;
                             innerHtml.push('<td>'+getLocalTime(value.create_time)+'</td></tr>'); 
                       
                  
            })
              
             
            
            }
           
                
           $("#tixian").html(innerHtml.join(""));
                   pageding($("#tixianpage"),"querytian",data);  
        }})}
        
        
        function queryAll(){
           
            param.province= $("#prov option:selected").val();
          param.city= $("#city option:selected").val();
           param.zone= $("#dist option:selected").val();
         param.bTime=new Date($("#bTime").val().replace(/-/g,'/')).getTime()/1000;
          param.eTime=new Date($("#eTime").val().replace(/-/g,'/')).getTime()/1000;
            queryDls(1);
            
            querytian(1);
            
        }
        
        function excelorder(){
            
             param.province= $("#prov option:selected").val();
          param.city= $("#city option:selected").val();
           param.zone= $("#dist option:selected").val();
         param.bTime=new Date($("#bTime").val().replace(/-/g,'/')).getTime()/1000;
          param.eTime=new Date($("#eTime").val().replace(/-/g,'/')).getTime()/1000;
          window.location.href="index.php?r=admin/systeminit/exportOrder&province="+param.province+"&city="+ param.city+"&zone="+param.zone+"&bTime="+param.bTime+"&eTime="+param.eTime;
          
        }
        
         function exceltixian(){
            
             param.province= $("#prov option:selected").val();
          param.city= $("#city option:selected").val();
           param.zone= $("#dist option:selected").val();
         param.bTime=new Date($("#bTime").val().replace(/-/g,'/')).getTime()/1000;
          param.eTime=new Date($("#eTime").val().replace(/-/g,'/')).getTime()/1000;
          window.location.href="index.php?r=admin/systeminit/exportTixian&province="+param.province+"&city="+ param.city+"&zone="+param.zone+"&bTime="+param.bTime+"&eTime="+param.eTime;
          
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
