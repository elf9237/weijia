//bananer_color1:左边延伸补充的颜色
//bananer_color2：右边延伸补充的颜色
//bananer：替换的图片名称 "bananer1" "bananer2"
var topBananer=function(bananer_color1,bananer_color2,bananer_pici,imgtype,bananer,banbg){
	var interverBan=null;
	var overn=0;
	var bananer_Num=0;
	if(bananer_color1.length){
		bananer_Num=bananer_color1.length;//5;
	}
	var bananer_Index=1;
	var oldIndex=1;
	var banFdObj=new picFadeOut();
	var that=this;
	this.banFade=function(index){
	  	if(!index || index==1){//右移动
	  		bananer_Index=bananer_Index+1;
	  	}else if(index<0){//左移动
	  		bananer_Index=bananer_Index-1;
	  	}else{//指定位置
	  		bananer_Index=index-10;
	  	}
	  	if(bananer_Index>bananer_Num){
	  		bananer_Index=1;
	  	}
	  	if(bananer_Index<1){
	  		bananer_Index=bananer_Num;
	  	}
	  	var picurlNew=webroot+"/images/"+bananer+bananer_pici[bananer_Index-1]+"."+imgtype[bananer_Index-1];
	  	var callFun=function(){
	  		document.getElementById("imgbananer").src=picurlNew;
	  		var bgtd1=document.getElementById("tdbananerBg1");
	  		var bgtd2=document.getElementById("tdbananerBg2");
	  		if(bgtd1){
	  			if(bananer_color1[bananer_Index-1]=="-1"){
	  				bgtd1.style.backgroundImage="url("+webroot+"/images/"+banbg+"l"+bananer_pici[bananer_Index-1]+".jpg)";
	  				bgtd2.style.backgroundImage="url("+webroot+"/images/"+banbg+"r"+bananer_pici[bananer_Index-1]+".jpg)";
		  		}else{
		  			bgtd1.style.backgroundImage="";
		  			bgtd2.style.backgroundImage="";
		  			bgtd1.style.backgroundColor=bananer_color1[bananer_Index-1];
		  			bgtd2.style.backgroundColor=bananer_color2[bananer_Index-1];
		  		}
	  		}
	  		if(document.getElementById("banyuan"+oldIndex)){
		  		document.getElementById("banyuan"+oldIndex).src=webroot+"/images/yuan10_hui.png";
		  		document.getElementById("banyuan"+bananer_Index).src=webroot+"/images/yuan10_he.png";
	  		}
	  		oldIndex=bananer_Index;
	  	};
	  	banFdObj.init("divbananerBg",callFun,1,20,90);
	  	banFdObj.fade();
	};
	this.start=function(){
		overn++;
		if(interverBan==null){
			interverBan=window.setInterval(that.banFade,4000);
		}
	};
	this.stop=function(){
		if(overn>1){
			clearInterval(interverBan);
			interverBan=null;
		}
	};
};