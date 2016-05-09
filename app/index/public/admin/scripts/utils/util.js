
//var LAA = {
//    baseurl: "",
//    init: function(url) {
//        this.baseurl = url;
//    },
//    downloadFileUrl :"index.php?model=front&action=downloadfile",
//    getMoreItemProperty: function(itemid, typeid, count) { //获取产品更多属性，分页获取
//        var params = {itemid: itemid, typeid: typeid, count: count + 1};
//        var url = this.baseurl + "&action=getitemmorepro";
//        $.post(url, params, function(data) {
//            if (data) {
//                var moreElement = $("#moreinfo").clone();
//                $("#moreinfo").remove();
//                $(".CJ_pro_mdiv").append(data).append(moreElement);
//            }
//        });
//    },
//    showAjax: function(msg) {
//        if(!msg){
//            msg = "正在执行";
//        }
//        $(".state_tip").html("<img src=\"template/admin/images/loading2.gif\" border=\"0\" align=\"absmiddle\"/>"+msg+"").fadeIn();
//    },
//    hideAjax: function(msg) {
//        if(!msg){
//            msg = "操作完成";
//        }
//        $(".state_tip").html(msg).fadeOut('slow');
//    },
//    len: function(str) { //判断字符长度
//        return str.replace(/[^\x00-\xff]/g, "**").length;
//    },
//    checkedval: function(ele) {
//        var ret = [];
//        ele.each(function() {
//            ret.push(this.value);
//        });
//        return ret;
//    },
//    checksel: function() { //检查是否有选中的checkbox
//        if ($("#listtbody").find("input:checked").length == 0) {
//      jAlert("请选择需要操作的项", "警告");
//            return false;
//        }
//        return true;
//    },
//    selectall: function() { //全选
//        $("#listtbody").find("input[type='checkbox']").prop("checked", $("#allselect").prop("checked"));
//    },
//    openfile : function(picid){
//        var dl = this.downloadFileUrl;
//        window.open(dl + "&picid="+picid);
//    },
//    addMyItemByOne: function(id) { //添加我的资源
//      var url = this.baseurl + "&action=addmyitem";
//      $.post(url,{itemid:id},function(data){
//            if(data.status=="1"){
//        jAlert("添加成功", "提示");
//            }else{
//        jAlert(data.msg, "警告");
//            }
//      },"json");
//    },
//    delMyItem: function(id) {
//        if (this.checksel()) {
//                    var url = this.baseurl + "&action=myitem";
//                    var ids = new Array();
//                    id && (ids.push(id)) || (ids = this.checkedval($("#listtbody").find("input:checked")));
//      systemprompt("删除后你可以在回收站找到它", "确定要删除该资源吗", function(b) {
//                    if (b) {
//                        $.post(url, {opertype: "remove", idstr: ids.join(",")}, function(data) {
//                        if (data == "success") {
//              jAlert("删除成功", "提示", function() {
//                                location.reload();
//                            })
//                        }
//                    });
//                }
//
//            })
//        }
//
//    },
//    setQz : function(value,myitemid){ //设置权值
//        this.opermyitem("order",value,myitemid);
//    },
//    setStatus : function(value,myitemid){
//        if(value == 5){ //如果是转入观察区
//           var url = this.baseurl + "&action=opengcq";
//           $.tbox.popup(url,"get",{myitemid:myitemid});
//        }else{
//            this.opermyitem("status",value,myitemid);
//        }
//
//    },
//    opermyitem : function(field,value,myitemid){
//        var action = "myitem";
//        var url = this.baseurl + "&action="+action;
//        $.post(url,{opertype:"editfield",field:field,value:value,id:myitemid},function(data){
//                if(data == "success"){ //保存成功不做提示
//                }else if (data == "failure"){
//        jAlert("操作失败", "提示");
//                }else{
//                    //
//                }
//        });
//    },
//    setImport : function(myitemid,obj){
//      var value = "0";
//      if(obj.checked){
//          value = 1;
//      }
//      this.opermyitem("import",value,myitemid);
//    },
//    //添加我的资源
//    addMyRes : function(){
//        var url = this.baseurl + "&action=addmyres";
//        $.tbox.popup(url,"get");
//    },
//    impItemRes : function(){ //打开我的资源导入页面
//       var url = this.baseurl + "&action=itemimp";
//       $.tbox.popup(url,"get");
//    },
//    //恢复资源
//    recover : function (recycleid){
//        var url = this.baseurl + "&action=recover";
//        $.post(url,{id:recycleid},function(data){
//                if(data == "success"){
//        jAlert("操作成功", "提示", function() {
//                        location.reload();
//                    });
//                }else{
//        jAlert("操作失败", "提示");
//                }
//        });
//    },
//
//    //彻底删除资源
//    thoroughDel : function (recycleid){
//         var url = this.baseurl + "&action=thoroughdel";
//        $.post(url,{id:recycleid},function(data){
//                if(data == "success"){
//        jAlert("操作成功", "提示", function() {
//                        location.reload();
//                    });
//                }else{
//        jAlert("操作失败", "提示");
//                }
//        });
//    }
//}
function setCookie(name,value,days){
    var options = {expires:days,path:"/"};
    $.cookie(name, $.base64.encode(value),options);
}
//获取cookie值
function getCookieValue(name){
    var value = $.cookie(name);
    if(value != null){
        value = $.base64.decode(value);
    }
    return value;
}
//删除cookie
function deleteCookie(name,path){
    var name = escape(name);
    var expires = new Date(0);
    path = path == "" ? "" : ";path=" + path;
    document.cookie = name + "="+ ";expires=" + expires.toUTCString() + path;
}

function pageding(pagearr,fun_name,data){
                        var html1=[];
                        var totalPage =1;
                        if(data.totaPage > 1){
                            totalPage = data.totaPage;
                        }
                        html1.push(' <div class="ui_flt" style="height: 30px; line-height: 30px;">')
                        html1.push(" 共有 <span class='ui_txt_bold04'>"+data.count+"</span>条 条记录，当前第 ");
                        html1.push("<span class='ui_txt_bold04'>"+data.currentPage+"/"+totalPage+"</span> 页</div>");
                        if(data.currentPage>1){
                            var shang = data.currentPage-1;
                            html1.push("<input type='button' value='首页'  onclick='"+fun_name+"(1)' class='ui_input_btn01'/>");
                            html1.push("<input type='button' value='上一页' class='ui_input_btn01' onclick='"+fun_name+"("+shang+")'/>");
                        }
                        if(data.currentPage<data.totaPage){
                            var xia = data.currentPage+1;
                            var mo =data.totaPage;
                            html1.push("<input type='button' value='下一页' class='ui_input_btn01' onclick='"+fun_name+"("+xia+")'/>");
                            html1.push("<a input type='button' value='末页' class='ui_input_btn01' onclick='"+fun_name+"("+mo+")'/>");
                           
                        }
                        pagearr.html("");pagearr.append(html1.join(""));
        }