/**
 * ��������
 * */
function getProvinceBuy(){
$(".filter-wrap .dqld_div").remove();
	var province=eval(proStr);
	var newStr=new Array();
	newStr.push("<div class=\"dqld_div\" style=\"\"><ul>");
	for(var i=0,psize=province.length;i<psize;i++){
		province[i].NAME;
		newStr.push("<li onclick=\"getCityBuy("+i+")\">"+province[i].NAME+"</li>");
	}
	newStr.push("</ul></div>");
	$(".filter-wrap").append(newStr.join(""));
}

function getCityBuy(val){
	var province=eval(proStr);
	var city=eval(province[val].ITEMS);
	var newStr=new Array();
	newStr.push("<div class=\"dqld_div\"><ul>");
	newStr.push("<li onclick=\"getProvinceBuy()\" style=\"background-color:#808080;\">"+province[val].NAME+"</li>");
	for(var j=0,csize=city.length;j<csize;j++){
		newStr.push("<li onclick=\"getAreaBuy("+j+","+val+")\"  style=\"padding-left:20px;\">"+city[j].NAME+"</li>");
	}
	newStr.push("</ul></div>");
	$(".filter-wrap .dqld_div").remove();
	$(".filter-wrap").append(newStr.join(""));
}

function getAreaBuy(val,val1){
	var province=eval(proStr);
	var city=eval(province[val1].ITEMS);
	var area=eval(city[val].ITEMS);
	var newStr=new Array();
	newStr.push("<div class=\"dqld_div\"><ul>");
	newStr.push("<li onclick=\"getProvinceBuy()\" style=\"background-color:#999999;\">"+province[val1].NAME+"</li>");
	newStr.push("<li onclick=\"getCityBuy("+val1+")\" style=\"background-color:#ccc;padding-left:10px;\">"+city[val].NAME+"</li>");
	for(var t=0,asize=area.length;t<asize;t++){
		area[t].NAME;
		newStr.push("<li  style=\"padding-left:25px;\" onclick=\"getallArea("+val1+","+val+","+t+")\">"+area[t].NAME+"</li>");
	}
	newStr.push("</ul></div>");
	if(asize==0){
		var allarea=province[val1].NAME+city[val].NAME;
		$("#shengshi").attr({"SS":province[val1].NAME,"SQ":city[val].NAME,"XS":""});
		$("#shengshi").val(allarea);
		$(".filter-wrap .dqld_div").remove();
	}
	else{
		$(".filter-wrap .dqld_div").remove();
		$(".filter-wrap").append(newStr.join(""));
	}
}

function getallArea(val,val1,val2){
	var province=eval(proStr);
	var city=eval(province[val].ITEMS);
	var area=eval(city[val1].ITEMS);
	var allarea=area[val2].NAME;
	$("#shengshi").attr({"SS":province[val].NAME,"SQ":city[val1].NAME,"XS":area[val2].NAME});
	$("#shengshi").val(allarea);
        param.prov=province[val].NAME;
        param.city=city[val1].NAME;
        param.dist=area[val2].NAME;
        param.page=0;
        param.totalPage=1;
        querySecond();
	$(".filter-wrap .dqld_div").remove();
}
