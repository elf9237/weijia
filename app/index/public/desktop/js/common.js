var webroot = getRootPath();
var transFn = function(data){return $.param(data);};
var postCfg = {headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},transformRequest: transFn};
var userAgent=window.navigator.userAgent.toUpperCase();
var imgAppType="jpg,gif,png";
var videoAppType="avi,mp4";
var bzp_tmpImg=webroot+"/images/grey.gif";
var randomflag=false;
var party_picNum=8;//活动默认图片数量
var member_picNum=10;//会员默认头像数量
var startClickX=0;//图片滑屏
var setIntervalObj=new Object();//记录setinterval的id
	setIntervalObj.idArray=new Array();
	setIntervalObj.length=0;//记录的长度

//获取一个随机数
function getRandom(){
	if(randomflag){
	   return getRandom0();
    }else{
	   	return getRandomn(10);//10秒的缓存
    }
}
function getRandom0(){
	return new Date().getTime();//+Math.random();
}
function getRandomn(n){
	if(typeof(n)=="undefined" || n<1){
		n=1;
	}
	return parseInt(new Date().getTime()/1000/n);//n秒的缓存
}

//js获取项目根路径，如：http://localhost:8080/project
function getRootPath(){
    var curWwwPath=window.document.location.href;
    var uArray=curWwwPath.split("/");
    if(uArray.length<4 || uArray[3]==""){
    	return "";
    }
    return "/"+uArray[3].replace(/#$/gi,"");
}
//open函数为app和web打开方式用
function webOpen(url) {
	window.open(webroot + url,"_self");
}
function appOpen(url){
	setBackUrl();
	window.open(webroot + url,"_self");
}
function openNewWin(url){
	window.open(webroot + url);
}
function openCurWin(url){
	setBackUrl();
	window.open(webroot + url,"_self");
}

//网站上保留
function openClick(path) {
	window.open(webroot + path,"_self");
}
function winOpen(url){
	window.open(url);
}

//改变背景颜色
function changeBgColor(className){
	window.document.body.className=className;
}
//获取checkbox值
function getCheckBoxValues(objName){
	var retList="[";
	var usidList=window.document.getElementsByName(objName);
	if(usidList!=undefined){
		for(var i=0;i<usidList.length;i++){
			if(usidList[i].checked){
				//retList.push(usidList[i].value);
				if(retList.length>1){
					retList=retList+",";
				}
				retList=retList+usidList[i].value;
			}
		}
		retList=retList+"]";
	}else{
		retList="";
	}
	return retList;
}

//用正则表达式将前后空格用空字符串替代
function trim(str){
	if(str==null || str==undefined){
		return "";
	}
	return str.replace(/(^\s*)|(\s*$)/g, "");
};

function checkIntNumber(keycode){
	return(/[\d]/.test(String.fromCharCode(keycode)));
}
//判断是否输入数值
function checkInputNumber(event){
 if(userAgent.indexOf("MSIE")>=0){
    return checkIntNumber(event.keyCode);
 }else{
    return checkIntNumber(event.which);
 }
 return true;
}

function checkExpore(url){
	var system ={
	   win : false,
	   mac : false,
	   xll : false
	};
	//检测平台
	var p = navigator.platform;
	system.win = p.indexOf("Win") == 0;
	system.mac = p.indexOf("Mac") == 0;
	system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
	//跳转语句，如果是手机访问
	if(system.win || system.mac || system.xll){
	   window.location.href=url;/*如果是电脑访问就跳转到这个网址*/
	}
}

function getScreenHW(height0,width0){
	var height=$(window).height()-82;//document.body.clientHeight
	var width=$(window).width()-4;//document.body.clientWidth
	if(height>height0){
		height=height0;
	}
	if(width>width0){
		width=width0;
	}
	if(height/height0>width/width0){
		height=Math.floor(height0*width/width0);
	}else{
		width=Math.floor(width0*height/height0);
	}
	return [height-1,width];
}
function scrollToTop(x,y){
	if(window.all){
		document.documentElement.scrollTop = y;
	}else{
		window.scrollTo(x, y);
	}
}
function isWeiXin(){
	var ua = window.navigator.userAgent.toLowerCase();
	if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
		return true; 
	}else{
		return false;
	}
}
function tipWord(jQueryRule,defaultWord,preColor,afterColor){
	if(preColor==undefined || preColor==""){
		preColor="#999999";
	}
	if(afterColor==undefined || afterColor==""){
		afterColor="#000000";
	}
    $.each($(jQueryRule), function(i,obj){
      if($(obj).val()==""){
    	$(obj).val(defaultWord);
    	$(obj).attr("flag",1);
    	$(obj).css("color",preColor);
      }else{
    	$(obj).attr("flag",2);
    	$(obj).css("color",afterColor);
      }
  	});
 
    $(jQueryRule).focus(
     function(){
      if($(this).attr("flag")==null||$(this).attr("flag")==1){
           $(this).attr("flag",2);
        $(this).css("color",afterColor);
         $(this).val("");
        }
     }
    );
    $(jQueryRule).blur(function(){
        if($(this).val()==""&&$(this).attr("flag")==2){ 
           $(this).attr("flag",1); 
        $(this).css("color",preColor); 
         $(this).val(defaultWord); 
        }
     }
   );
}
//fid隐藏对象id vid显示图片或者视频对象id fileType:img或者video
function selectFile(fileType,fileSize,fid,vid){
	if(fileType=="video"){
		window.open(webroot+"/upfile.do?fileType="+fileType+"&fileSize="+fileSize+"&fileTypeShow="+videoAppType+"&fid="+fid+"&vid="+vid);
	}else{
		window.open(webroot+"/upfile.do?fileType="+fileType+"&fileSize="+fileSize+"&fileTypeShow="+imgAppType+"&fid="+fid+"&vid="+vid);
	}
}
//判断字符串字节长度-flag:1 一个中文算两个字节 
function getStrLength(str,flag){
	if(flag!=1){
		return str.length;
	}
	var len = 0;
	for(var i=0; i<str.length; i++){
		if(str.charCodeAt(i)>126 || str.charCodeAt(i)==94 || str.charCodeAt(i) < 27){
			len += 2;
		}else {
			len ++;
		}
	}
	return len;
}

function showHiddenDivClk(id){
	if($("#"+id).css("display")=="none"){
		$("#"+id).show();
	}else{
		$("#"+id).hide();
	}
}
function showObj(id){
	$("#"+id).show();
}

function hiddenObj(id){
	$("#"+id).hide();
}
function getWindowHeight(){
	var de=document.documentElement;
	return window.innerHeight||(de&&de.clientHeight)||document.body.clientHeight;
}
function addNumForSlide(picN,add,bz,maxLen){
	if(bz==1){//左右移动
    	picN=picN+add;
    }else{//直接定位
    	picN=add;
    }
  	if(picN>=maxLen){
  		picN=0;
  	}
  	if(picN<0){
  		picN=maxLen-1;
  	}
  	return picN;
}
function loadBaiDuMap(mapdiv,lngStr,latStr){
	try{
		var map = new BMap.Map(mapdiv);
		var lng=parseFloat(lngStr);
		var lat=parseFloat(latStr);
		map.centerAndZoom(new BMap.Point(lng,lat), 13);
		map.enableScrollWheelZoom();
		var marker=new BMap.Marker(new BMap.Point(lng,lat));
		map.addOverlay(marker);
	}catch(e){}
}

/*function loadBaiDuMapAsy(mapdiv,lngStr,latStr){//异步加载地图
	$.getScript("http://api.map.baidu.com/getscript?v=1.4&ak=&services="
				,function(){loadBaiDuMap(mapdiv,lngStr,latStr);}
			   );
}*/
function loadBaiDuMapAsy(initialize){//异步加载
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = "http://api.map.baidu.com/api?v=1.4&callback="+initialize;
	document.body.appendChild(script);
}
function setintervalFun(callFun,time){
	var fun=function(){
		try{
			callFun(1,1);
		}catch(e){//避免div加载其他页面后抛错
			clearInterval(retFun);
		}
	};
	var retFun=window.setInterval(fun,time);
	var len=setIntervalObj.length;
	setIntervalObj.idArray[len]=retFun;
	len=len+1;
	setIntervalObj.length=len;//记录的长度
	return retFun;
}
function clearIntervalFun(){
	var len=setIntervalObj.length;
	var idArray=setIntervalObj.idArray;
	for(var i=0;i<len;i++){
		clearInterval(idArray[i]);
	}
	setIntervalObj.length=0;
}
function pswFoucs(id){
  	$("#"+id).show();
  	$("#"+id+"_bak").hide();
  	$("#"+id).focus();
  	$("#"+id).click();
}
function pswBlur(id,defval){
  	var password=$("#"+id).val(); 
  	if(password=="" || password==defval){
  		$("#"+id).val("");
  		$("#"+id).hide();
  		$("#"+id+"_bak").show();
  	}
}
//修正IE下png透明后的毛边问题
function correctFilterPNG(imgid)
{
	var arVersion = navigator.appVersion.split("MSIE");
    var version = parseFloat(arVersion[1]);
    if ((version >= 5.5) && (document.body.filters))
    {
		var img = document.getElementById(imgid);
		var imgName = img.src.toUpperCase();
		if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
		{
			var imgID = (img.id) ? "id='" + img.id + "' " : "";
			var imgClass = (img.className) ? "class='" + img.className + "' " : "";
			var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' ";
			var imgStyle = "display:inline-block;" + img.style.cssText;
			if (img.align == "left") imgStyle = "float:left;" + imgStyle;
			if (img.align == "right") imgStyle = "float:right;" + imgStyle;
			if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle;
			var strNewHTML = "<span " + imgID + imgClass + imgTitle
				+ " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
				+ "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
				+ "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>";
			img.outerHTML = strNewHTML
		}
	}
}
function getUser(){
}