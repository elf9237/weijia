//验证电话号码
function isPhone(str) {
	str = trim(str);
	//var re = /^1\d{10}$/;
	var re=/^(13|14|15|18|17)\d([\*]{5}|\d{5})\d{3}$/;
	return re.test(str);
}

//正整数
function isInt(str){
	str = str.trim();
	var re = /^[0-9]*[1-9][0-9]*$/;
	return re.test(str);
}
//正实数 
//是返回true,否则返回false
function isPosFloat(str) {
	str = str.trim();
	var re = /^(0\.\d*[1-9]{1}\d*|([1-9]{1}(\d*)(\.\d+)?))$/;
	return re.test(str);
}
function checkPosFloat(obj) {
	var str = obj.value.trim();
	if (str == "" || str=="0" || str=="0.0") {
		return true;
	}
	if (!isPosFloat(str)) {
		showMsgFun("请输入大于0的数！");
		obj.focus();
		obj.value = "";
		return false;
	}
	obj.value = str;
	return true;
}

function isMail(szMail){
	var szReg=/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
	var bChk=szReg.test(szMail);
	return bChk;
}

//限定文本框长度-中文算两个字符
function limitInputLen(obj,maxlen){
	var str=obj.value;
	var len = 0;
	var gLen=0;
	for(var i=0; i<str.length; i++){
		if(str.charCodeAt(i)>126 || str.charCodeAt(i)==94 || str.charCodeAt(i) < 27){
			len += 2;
		}else {
			len ++;
		}
		if(len<=maxlen){
			gLen=i;
		}
	}
	if(len>maxlen){
		obj.value=str.substring(0, gLen+1)
	}
}
//判断日期是否在当前时间以后dastr格式 yyyy-MM-dd hh:mm:ss
function validateTime(dastr){
	var today=new Date().format("yyyy-MM-dd hh:mm:ss");
	if(today>dastr){
		return false;
	}else{
		return true;
	}
}
//统计字符长度
function statTxtFontNum(id,maxcommLen){
	var len = getStrLength($("#"+id).val(),0);
	if(len>maxcommLen){
		$("#"+id).blur();
		$("#"+id).val($("#"+id).val().substring(0, maxcommLen));
		$("#"+id).focus();
		len=maxcommLen;
	}
	$("#"+id+"_sta").html(len+"/"+maxcommLen);
}
String.prototype.trim = function(){
    // 用正则表达式将前后空格用空字符串替代.
	return this.replace(/(^\s*)|(\s*$)/g, "");
};
Date.prototype.format =function(format){
	var o = {
		"M+" : this.getMonth()+1, //month
		"d+" : this.getDate(), //day
		"h+" : this.getHours(), //hour
		"m+" : this.getMinutes(), //minute
		"s+" : this.getSeconds(), //second
		"q+" : Math.floor((this.getMonth()+3)/3), //quarter
		"S" : this.getMilliseconds() //millisecond
	}
	if(/(y+)/.test(format)){
		format=format.replace(RegExp.$1,(this.getFullYear()+"").substr(4- RegExp.$1.length));
	}
	for(var k in o){
		if(new RegExp("("+ k +")").test(format)){
			format = format.replace(RegExp.$1,RegExp.$1.length==1? o[k]:("00"+ o[k]).substr((""+ o[k]).length));
		}
	}
	return format;
};
