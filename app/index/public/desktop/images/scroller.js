var scroller = function(){
	var scroller=this;
	this.scrollerContainer="";
	this.slidePos=0;
	this.slideWidth=0;
	this.isScrolling=false;
	this.prevPosDrag=0;
	this.posDrag=0;
	this.momentum=0;
	this.dragStartX=0;
	this.slidePosX=0;
	this.kSlowDown=false;
	this.time=new Date();
	this.slowFactor=0.80;
	this.clickAction=null;
	this.callBack=null;//回调函数
	this.clickStart=new Date();
	this.intervalObj=null;//interval定时器
	this.timeoutObj=null;//setTimeout定时器
	this.moveWidth=null;//整图移动
	this.interRate;//setTimeout参数
	this.timeoutRate;//setTimeout参数
	
	// set container
	this.initWithContainer=function(container_id,moveOnewidth) {
		this.scrollerContainer = container_id;
		if(moveOnewidth){
			this.moveWidth=moveOnewidth;
		}
		if(/Android|iphone|ipad/i.test(navigator.userAgent)){
			$('#'+this.scrollerContainer).on('touchmove',scroller.drag);
			$('#'+this.scrollerContainer).on('touchend',scroller.stopDrag);
		}else{
			$('#'+this.scrollerContainer).on('mousemove touchmove',scroller.drag);
			$('#'+this.scrollerContainer).on('mouseup touchend',scroller.stopDrag);
		}
	};
	
	// set scrolling width
	this.setSlideWidth=function(w) {
		this.slideWidth = w;
	};
	
	// scroll to position
	this.scrollTo=function(pos) {
		this.slidePos = pos;
		if (pos < 0) {
			this.slidePos = this.slideWidth + pos;
		} else if (pos >= this.slideWidth){
			this.slidePos = pos - this.slideWidth;
		}
		$('#'+this.scrollerContainer).css('left',-this.slidePos);
	};
	
	//move by amount
	this.scrollAmount=function(amount) {
		this.scrollTo(this.slidePos + amount);
	};
	
	this.startDrag=function(e){
		/*scroller.clickAction=$(e.target).attr("onclick");*/
		scroller.clickStart = new Date();
		if (!this.isScrolling && (!scroller.moveWidth || !scroller.kSlowDown)){
			this.isScrolling = true;
			this.clearSlowdown();
			this.dragStartX = (e.originalEvent.touches == undefined) ? e.clientX : e.originalEvent.touches[0].clientX;
			this.posDrag = this.dragStartX;
			this.slidePosX = this.slidePos;
		}
	};

	this.stopDrag=function(e){
		if (scroller.isScrolling && (!scroller.moveWidth || !scroller.kSlowDown)) {
			if(!scroller.moveWidth){
				scroller.isScrolling = false;
				var dif = (new Date() - scroller.time) / 10;
				if (dif > 1) {
					scroller.momentum = scroller.momentum / (dif);
				}
			}
			scroller.kSlowDown = setInterval(scroller.slowdown, 20);
		}
	};

	this.drag=function(e) {
		if (scroller.isScrolling && (!scroller.moveWidth || !scroller.kSlowDown)) {
			scroller.prevPosDrag = scroller.posDrag;
			scroller.posDrag = (e.originalEvent.touches == undefined) ? e.pageX : e.originalEvent.touches[0].pageX;
			if(scroller.moveWidth){//滑动整个图片
				if(scroller.posDrag - scroller.prevPosDrag>0){
					scroller.momentum=scroller.slidePos % scroller.moveWidth;
					if(scroller.momentum<scroller.moveWidth/2){
						scroller.momentum=scroller.moveWidth+scroller.momentum;
					}
				}else if(scroller.posDrag - scroller.prevPosDrag<0){
					scroller.momentum=-scroller.moveWidth+(scroller.slidePos % scroller.moveWidth);
					if(scroller.momentum>-scroller.moveWidth/2){
						scroller.momentum=-scroller.moveWidth+scroller.momentum;
					}
				}
			}else{
				scroller.momentum = scroller.posDrag - scroller.prevPosDrag;
				scroller.scrollTo(scroller.slidePosX - (scroller.posDrag - scroller.dragStartX));
			}
			scroller.time = new Date();
		}
		return false;
	};

	this.slowdown=function() {
		var m = Math.round(scroller.momentum);
		if (Math.abs(m) > 0) {
			if(scroller.moveWidth){
				m=scroller.momentum * (1-scroller.slowFactor);
				if(m>0){
					m=Math.ceil(m);//+2;
				}else{
					m=-Math.ceil(-m);//-2;
				}
				if((scroller.momentum>0 && scroller.momentum-m<0) || (scroller.momentum<0 && scroller.momentum-m>0)){
					m=scroller.momentum;
				}
				scroller.momentum=scroller.momentum-m;
			}else{
				scroller.momentum = scroller.momentum * scroller.slowFactor;
			}
			scroller.scrollAmount(-m);
		} else {
			scroller.isScrolling = false;
			scroller.clearSlowdown();
		}
	};
	
	this.clearSlowdown=function() {
		if (scroller.kSlowDown) {
			clearInterval(scroller.kSlowDown);
			scroller.kSlowDown = false;
			//停止处理其他事件
			if(new Date() - scroller.clickStart < 200 && Math.abs(scroller.slidePosX-scroller.slidePos)<10){
				if(scroller.clickAction){
					eval(scroller.clickAction);
				}
			}else{
				if(scroller.intervalObj){
					clearInterval(scroller.intervalObj);
				}
				if(scroller.timeoutObj){
					clearTimeout(scroller.timeoutObj);
					scroller.autoTimeScroll(scroller.interRate,scroller.timeoutRate);
				}
			}
			//停止时回调
			if(scroller.callBack){
				scroller.callBack.call(this,scroller.getCurPage(),scroller.getTotalPage());
			}else{
				$("#showNumdiv").html(scroller.getCurPage()+"/"+scroller.getTotalPage());
			}
		}
	};
	
	this.mouseDown=function(e) {
		e.preventDefault();
		scroller.startDrag(e);
	};
	this.getCurPage=function(){
		return parseInt((scroller.slidePos % scroller.slideWidth)/scroller.moveWidth+0.5)+1;
	};
	this.getTotalPage=function(){
		return parseInt(scroller.slideWidth/scroller.moveWidth+0.5);
	};
	this.autoScroll=function(inc,rate){
		scroller.intervalObj=setintervalFun(function(){scroller.scrollTo(scroller.slidePos+inc);},rate);
	};
	this.autoTimeScroll=function(interRate,timeoutRate){
		scroller.interRate=interRate;
		scroller.timeoutRate=timeoutRate;
		var inter=function(){
			if(scroller.intervalObj){
				clearInterval(scroller.intervalObj);
			}
			if(scroller.timeoutObj){
				clearTimeout(scroller.timeoutObj);
			}
			var add=0;
			scroller.intervalObj=setintervalFun(function(){
				var m=(scroller.moveWidth-scroller.slidePos % scroller.moveWidth) * (1-scroller.slowFactor);
				m=Math.ceil(m);//+1;
				add=add+m;
				if(add>scroller.moveWidth){
					m=m-add+scroller.moveWidth;
				}
				scroller.scrollTo(scroller.slidePos+m);
				if(scroller.slidePos % scroller.moveWidth==0){
					clearInterval(scroller.intervalObj);
					scroller.timeoutObj=setTimeout(inter,timeoutRate);
					//停止则回调
					if(scroller.callBack){
						scroller.callBack.call(this,scroller.getCurPage(),scroller.getTotalPage());
					}else{
						$("#showNumdiv").html(scroller.getCurPage()+"/"+scroller.getTotalPage());
					}
				}
				},interRate);
		};
		scroller.timeoutObj=setTimeout(inter,timeoutRate);
	};
};
