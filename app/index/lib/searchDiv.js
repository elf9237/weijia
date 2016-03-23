 function popCen(th,type){
	var cla='cla'+type;
	if($(".filter-wrap ."+cla).length>0){
	$(".filter-wrap .dqld_div").remove();
	return;
	}
	$(".filter-wrap .dqld_div").remove();
	var province=[];
	var zujin=['1000以下','1000-1500','1500-2000','2000-2500','2500-3000','3000-3500','3500以上'];
	var huxin=['单间','2室','3室','4室'];
	var laiyuan=['个人','平台','加盟'];
	
	if(type==1){
		province=zujin;
	}
	if(type==2){
		province=huxin;
	}
	if(type==3){ 
		province=laiyuan;
	}
	var id=$(th).attr("id");
	var newStr=new Array();
	var realClass="dqld_div  "+cla;
	newStr.push("<div class='"+realClass+" ' ><ul>");
	for(var i=0,psize=province.length;i<psize;i++){
		
		newStr.push("<li onclick=\"getRealValue('"+id+"',this)\">"+province[i]+"</li>");
	}
	newStr.push("</ul></div>");
	$(".filter-wrap").append(newStr.join(""));
	
	
}
function getRealValue(thf,th){
	$("#"+thf).text($(th).text());
	$(".filter-wrap .dqld_div").remove();
	
	
}