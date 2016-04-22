$(document).ready(function(){
          $('#slide_container').bxSlider({ 
            slideWidth: 200,
			minSlides: 3,
			maxSlides: 3,
			ticker: true,
			speed: 100000,
			startSlides: 0, 
            slideMargin: 10
          });
        });
$(document).ready(function(){
          $('#importantRoom').bxSlider({ 
            slideWidth: 1024, 
			infiniteLoop: false,
			hideControlOnEnd: true,
            slideMargin: 10
          });
        });

$(function(){
  var nav=$(".nav ul li a");
  $(nav).click(function(){
    $(this).addClass("active").parent().siblings().find("a").removeClass("active");
  })

})