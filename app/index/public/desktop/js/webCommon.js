//表头按钮事件
var oldTitleId="";
var ooldHisttoryUrl="";
var historyMaxLen=20;//最多记录20个历史记录
var historyIndex=0;
var historyFlag=false;
var historyArray=new Array();
function addHistory(key,id,url){
	var obj = new Object();
	obj.key=key;
	obj.id=id;
	obj.url=url;
	historyArray[historyIndex]=null;
	historyArray[historyIndex]=obj;
	historyIndex=historyIndex+1;
	if(historyIndex>=historyMaxLen){
		historyIndex=0;
	}
}
function getHistory(key){
	for(var i=0;i<historyArray.length;i++){
		var obj=historyArray[i];
		if(obj.key==key){
			historyIndex=i+1;
			if(historyIndex>=historyMaxLen){
				historyIndex=0;
			}
			return obj;
		}
	}
	return null;
}
function loadContentUrl(url){
	$("#content").load(webroot+url);
	hideBananer();
	scrollToTop(0,0);
}
function changeTopTitle(id,url,addFlag){
	try{
		if(typeof(addFlag)=="undefined" && (oldTitleId!=id || ooldHisttoryUrl!=url)){
			historyFlag=true;
			var hTag=getRandom0();//id+
			addHistory(hTag,id,url);
			$.history.load(hTag);
			ooldHisttoryUrl=url;
		}
	}catch(e){}
	try{
		if(typeof(id)=="undefined" || id=="null" || id=="undefined"){
			id="";
		}
	    if(oldTitleId!=id){
			$("#"+id).attr("src", webroot+"/images/"+id+"_h.png");
			if(oldTitleId!=""){
		  	  $("#"+oldTitleId).attr("src", webroot+"/images/"+oldTitleId+"_n.png");
		  	}
			oldTitleId=id;
		}
		if(typeof(url)!="undefined" && url!="undefined" && url!="null"){
			if(url!=""){
				hideBananer();
				$("#content").load(webroot+url);
			}
		}else{
			if("firstpage"==id){//首页
				showBananer();
				$("#content").load(webroot+"/web/mainDispatcher.do?method=main");
			}else{
				hideBananer();
				if("housefind"==id){//找房
					$("#content").load(webroot+"/web/houseDispatcher.do?method=findhouse");
				}else if("housemanage"==id){//管家婆
					$("#content").load(webroot+"/web/service.do");
				}else if("member"==id){//会员中心
					$("#content").load(webroot+"/web/mbmain.do");
				}else if("househand"==id){//交房
					$("#content").load(webroot+"/web/lease.do");
				}else if("aboutus"==id){//关于我们
					$("#content").load(webroot+"/web/about.do");
				}else if("housein"==id){//同一屋檐下
					$("#content").load(webroot+"/web/partyDispatcher.do?method=showSameEaves");
				}else if("housestyle"==id){//风格展示
				}
			}
		}
	}catch(e){}
	if(typeof(addFlag)=="undefined"){
		scrollToTop(0,0);
	}
}
function openTopTitle(id,url){
	if(typeof(id)=="undefined" || id=="null" || id=="undefined"){
		id="firstpage";
	}
	if(typeof(url)=="undefined" || url=="undefined" || url==""){
		if("firstpage"==id){//首页
			url="/web/mainDispatcher.do?method=main";
		}else{
			if("housefind"==id){//找房
				url="/web/houseDispatcher.do?method=findhouse";
			}else if("housemanage"==id){//管家婆
				url="/web/service.do";
			}else if("member"==id){//会员中心
				url="/web/mbmain.do";
			}else if("househand"==id){//交房
				url="/web/lease.do";
			}else if("aboutus"==id){//关于我们
				url="/web/about.do";
			}else if("housein"==id){//同一屋檐下
				url="/web/partyDispatcher.do?method=showSameEaves";
			}else if("housestyle"==id){//风格展示
			}
		}
	}
	$("#openUrlInp").val(url);
	$("#openIdInp").val(id);
	document.getElementById("opentopform").submit();
}
function changeClass(id,cs){
  	document.getElementById(id).className=cs;
}

function fnSelectClear(id){
	var obj=document.getElementById(id);
	for(var i=0;i<obj.options.length;)
	{
		obj.removeChild(obj.options[i]);
	}
}

function fnSelectAdd(obj,vid,val){
	var opt=new Option(val,vid);
  	obj.options[obj.length]=opt;
}

function fnPageX(elem){
	return elem.offsetParent?(elem.offsetLeft+fnPageX(elem.offsetParent)):elem.offsetLeft;
}
function fnPageY(elem){
	return elem.offsetParent?(elem.offsetTop+fnPageY(elem.offsetParent)):elem.offsetTop;
}