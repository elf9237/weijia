//翻转
var picFlipFlop=function(){
	var wdmax=400;//图片宽
	var htmax=400;//图片高
	var inc=5;//翻转幅度
	var rate = 50;//翻转间隔
	var pic="";
	var picurl="";
	var bgCor="";
	var that=this;//避免setTimeout闭包出错
	this.init=function(imgId,picWidth,picHeight,picurlNew,incN,rateN,bgColor){
		pic=$("#"+imgId);//document.getElementById(imgId);
		picurl=picurlNew;
		wdmax=picWidth;
		htmax=picHeight;
		if(incN){
			inc=incN;
		}
		if(rateN){
			if(userAgent.indexOf("MSIE") > -1){
				rate=rateN;
			}else{
				rate=40*rateN;
			}
		}
		if(bgColor){
			bgCor=bgColor;
		}
	};
	
	//水平翻转
	this.flip=function(){
		var wd = parseInt(pic.css("width"));
		wd = wd - inc;
		if(wd<0){
			wd=0;
		}else if(wd>wdmax){
			wd=wdmax;
		}
		pic.css("width",wd+"px");
		pic.css("height",htmax+"px");
		if (wd==0) {
			pic.attr("src",bzp_tmpImg);
			pic.attr("src",picurl);
			inc=-inc;
		}
		if (wd!=wdmax) {
			setTimeout(function(){that.flip();},rate);
		}else{
			pic.parents("td").css("background-color",bgCor);
		}
	};
	//上下翻转
	this.flop=function(){
		var ht = parseInt(pic.css("height"));
		ht = ht - inc;
		if(ht<0){
			ht=0;
		}else if(ht>htmax){
			ht=htmax;
		}
		pic.css("height",ht+"px");
		pic.css("width",htmax+"px");
		if (ht==0) {
			pic.attr("src",bzp_tmpImg);
			pic.attr("src",picurl);
			inc=-inc;
		}
		if (ht!=htmax) {
			setTimeout(function(){that.flop();},rate);
		}else{
			pic.parents("td").css("background-color",bgCor);
		}
	};
};

//淡入淡出
var picFadeOut=function(){
	var alpha=100;
	var minAlpha=0;
	var inc=5;//淡化幅度
	var rate = 50;//淡化频率
	var pic="";
	var call=null;
	var that=this;//避免setTimeout闭包出错
	this.init=function(id,callFun,incN,rateN,minAlp){
		pic=document.getElementById(id);
		call=callFun;
		if(incN){
			inc=incN;
		}
		if(rateN){
			rate=rateN;
		}
		if(minAlp){
			minAlpha=minAlp;
		}
	};
	this.fade=function(){
		alpha=alpha-inc;
        if(alpha < minAlpha){
        	alpha = minAlpha;
        	inc=-inc;
        }else if(alpha>100){
        	alpha=100;
        }
        pic.style.filter = 'alpha(opacity:' + alpha + ')'; 
        pic.style.opacity = alpha / 100;
        if(alpha<=minAlpha){
        	call();
        }
        if(alpha<100){
        	setTimeout(function(){that.fade();},rate);
        }
    };
};

//滑屏
function slidingPicture(){
	var that=this;
	var clickFlag=true;
	var pos=0;
	var orient=1;//滑动方向 >0右 <=0左
	var inc=20;
	var rate=1;
	var moveWidth=null;
	this.imgId=null;
	this.imgIdbk=null;
	this.slideFlag=false;//滚动中不能拖拽
	var dbltime=new Date();
	function picDblClick(){
		var time=new Date();
		if(time-dbltime<200){
			//双击事件
			clickFlag=true;
			if(closeLogDiv){
				setTimeout(closeLogDiv,100);
			}
			return true;
		}
		dbltime=time;
		return false;
	}
	function touchStart(event){
		if(picDblClick()){
			return;
		}
		clickFlag=false;
		try{
			var touch = event.originalEvent.changedTouches[0];//获取第一个触点
			startClickX=touch.pageX;
		}catch(e){}
	}
	function touchMove(event){
		if(clickFlag){
			return;
		}
		try{
			var touch = event.originalEvent.changedTouches[0];//获取第一个触点
			var fun=event.data.fun;
			if(startClickX-touch.pageX>8){//左拖拽-右移动
				event.preventDefault();
				fun(1,1);
				clearInterval(event.data.clsFun);
				clickFlag=true;//防止多次调用
			}else if(touch.pageX-startClickX>8){//右拖拽-左移动
				event.preventDefault();
				fun(-1,1);
				clearInterval(event.data.clsFun);
				clickFlag=true;//防止多次调用
			}else{
				//滚屏默认事件
			}
		}catch(e){}
	}
	function touchEnd(event){
	}
	//鼠标事件
	function mouseDown(event){
		event.preventDefault();
		if(picDblClick()){
			return;
		}
		try{
			startClickX=event.pageX;
		}catch(e){}
	}
	function mouseMove(event){
		event.preventDefault();
	}
	function mouseUp(event){
		event.preventDefault();
		try{
			var fun=event.data.fun;
			if(startClickX-event.pageX>30){//左拖拽-右移动
				fun(1,1);
				clearInterval(event.data.clsFun);
			}else if(event.pageX-startClickX>30){//右拖拽-左移动
				fun(-1,1);
				clearInterval(event.data.clsFun);
			}else{
				var dfClick=event.data.dfClick;
				if(typeof(dfClick)!="undefined"){
					eval(dfClick);
				}
				if(closeLogDiv){
					setTimeout(closeLogDiv,100);
				}
			}
		}catch(e){}
	}
	function slideFun(){
		if(orient>0){//右滑
			pos=pos+inc;
			if(pos>moveWidth){
				pos=moveWidth;
			}
		}else{//左滑
			pos=pos-inc;
			if(pos<moveWidth){
				pos=moveWidth;
			}
		}
		$("#"+that.imgId).css("left",pos);
		$("#"+that.imgIdbk).css("left",pos-moveWidth);
		if(pos==moveWidth){
			var o=that.imgId;
			that.imgId=that.imgIdbk;
			that.imgIdbk=o;
			pos=0;
			that.slideFlag=false;
		}else{
			setTimeout(function(){slideFun();},rate);
		}
	}
	this.slide=function(orientN, incN, rateN){
		if(that.slideFlag){
			return;
		}
		that.slideFlag=true;
		moveWidth=parseInt($("#"+that.imgId).css("width"));
		orient=orientN;
		if(orient<=0){//左滑
			moveWidth=-moveWidth;
		}
		inc=incN;
		rate=rateN;
		if(userAgent.indexOf("MSIE")<0){
			inc=inc/5;
			if(inc<1){
				inc=1;
			}
		}
		slideFun();
	};
	this.bindEvent=function(divId,callFun,moveId,ratePic){
		if(moveId){
			that.imgIdbk=moveId+"_bk";
			that.imgId=moveId;
		}
		if(typeof(ratePic)=="undefined"){
			ratePic=2000;//默认两秒
		}
		var interFun=setintervalFun(callFun,ratePic);
		var obj=$("#"+divId);
		obj.on("touchstart",touchStart);
		obj.on("touchmove",{fun:callFun,clsFun:interFun},touchMove);
		obj.on("touchend",touchEnd);
		obj.on("mousedown",mouseDown);
		var defclickFun=obj.attr("onclick");
		obj.removeAttr('onclick');
		obj.on("mousemove",mouseMove);
		obj.on("mouseup",{fun:callFun,clsFun:interFun,dfClick:defclickFun},mouseUp);
		obj.css("cursor","pointer");
		return interFun;
	};
}
function bindEvent(divId,callFun,ratePic){
	var slidingObj=new slidingPicture();
	return slidingObj.bindEvent(divId, callFun,null,ratePic);
}
