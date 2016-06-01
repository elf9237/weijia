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
	var laiyuan=['月租','日租','商铺'];
	
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
		
		newStr.push("<li onclick=\"getRealValue('"+id+"',this,"+type+")\">"+province[i]+"</li>");
	}
	newStr.push("</ul></div>");
	$(".filter-wrap").append(newStr.join(""));
	
	
}
function getRealValue(thf,th,type){
	$("#"+thf).text($(th).text());
        if(type==1){
            if($(th).text()=="1000以下"){
                param.sprice=0;
                  param.eprice=1000;
            }
             if($(th).text()=="1000-1500"){
                param.sprice=1000;
                  param.eprice=1500;
            }
             if($(th).text()=="1500-2000"){
                param.sprice=1500;
                  param.eprice=2000;
            }
             if($(th).text()=="2000-2500"){
                param.sprice=2000;
                  param.eprice=2500;
            }
              if($(th).text()=="2500-3000"){
                param.sprice=2500;
                  param.eprice=3000;
            }
              if($(th).text()=="3000-3500"){
                param.sprice=3000;
                  param.eprice=3500;
            }
            if($(th).text()=="3500以上"){
                param.sprice=3500;
                  param.eprice=15000;
            }
        }
        if(type==2){
              if($(th).text()=="单间"){
                param.rooms=1;
                 
            }
                 if($(th).text()=="2室"){
                param.rooms=2;
                
            }
                 if($(th).text()=="3室"){
               param.rooms=3;
            }
                 if($(th).text()=="4室"){
                param.rooms=4;
                 
            }
            
        }
        if(type==3){
              if($(th).text()=="月租"){
                param.info_type=0;
                 
            }
                 if($(th).text()=="日租"){
                param.info_type=1;
                
            }
                 if($(th).text()=="商铺"){
               param.info_type=2;
            }
            
        }
        param.page=0;
        param.totalPage=1;
	$(".filter-wrap .dqld_div").remove();
        querySecond();
	
	
}