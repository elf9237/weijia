( function($) {
    $.extend({
        'foucs' : function(con) {
            var num = 0;
            var $container = $('.index_b_hero'),
            $imgs = $container.find('li.hero'),
            $leftBtn = $container.find('a.prev'),
            $rightBtn = $container.find('a.next'),
            config = {
                interval : con && con.interval || 3000,
                animateTime : con && con.animateTime || 500,
                direction : con && (con.direction === 'right'),
                _imgLen : $imgs.length
            },
            i = num,

            //@y 前后第y张（偏移量）
            getNextIndex = function(y) {
                return i + y >= config._imgLen ? i + y - config._imgLen : i + y;
            },

            //@y 前后第y张（偏移量）
            getPrevIndex = function(y) {
                return i - y < 0 ? config._imgLen + i - y : i - y;
            },

            silde = function(d) {
                $imgs.eq(( d ? getPrevIndex(2) : getNextIndex(2))).css('left', ( d ? '-2400px' : '2400px'))
                $imgs.animate({
                    'left' : ( d ? '+' : '-') + '=1200px'
                }, config.animateTime);
                //alert("this is the i"+i);
                i = d ? getPrevIndex(1) : getNextIndex(1);
                num = i;
                changeTheys(num);
                loadImg(num);
            },
            sildeJump = function(d) {
                if (d >= 6) {
                    for( var j = d; j>=0; j--) {
                      var px = (j-d)*1200;
                      $imgs.eq(j).css('left', px+'px');
                    }
                    $imgs.eq(0).css('left', '1200px');
                } else if (d == 0){
                    $imgs.eq(0).css('left', '0px');
                    $imgs.eq(1).css('left', '1200px');
                    $imgs.eq(2).css('left', '2400px');
                    $imgs.eq(3).css('left', '3600px');
                    $imgs.eq(4).css('left', '-3600px');
                    $imgs.eq(5).css('left', '-2400px');
                    $imgs.eq(6).css('left', '-1200px');
                } else{
                    for (var j=d+1; j>=0; j--){
                      var px = (j-d) * 1200;
                      $imgs.eq(j).css('left', px+'px');
                    }
                    for (var k= j = d+2; j > 0; j--,k++) {
                      var px = (j+2)*-1200;
                      $imgs.eq(k).css('left', px+'px');
                    }
                }
                num = i = d;
                changeTheys(num);
            },
            s = setInterval(function() {
                silde(config.direction);
            }, config.interval);

            $imgs.css('left', '-1200px');
            $imgs.eq(i).css('left', 0).end().eq(i + 1).css('left', '1200px');
            /*$imgs.eq(i).css('left', 0).end().eq(i + 1).css('left', '1200px').end().eq(i - 1).css('left', '-1200px');*/

            $leftBtn.click(function() {
                if ($(':animated').length === 0) {
                    silde(true);
                }
            });

            $rightBtn.click(function() {
                if ($(':animated').length === 0) {
                    silde(false);
                }
            });

            $('.small_list li').click(function() {
                sildeJump(Number($(this).find("img").attr('id')));
            });

            $('.banner').hover(function() {
                clearInterval(s);
            }, function() {
                s = setInterval(function() {
                    silde(config.direction);
                }, config.interval);
            });

            function changeTheys(numss) {
                var length = $(".small_list li").length;
                for (var i = 0; i < length; i++) {
                  $("#"+i).parent().removeClass("on");
                }
                $("#"+numss).parent().addClass("on");
                loadImgSuper(numss);
            }

            function loadImg(i){
                var $img = $imgs.eq(i);
                if( $img.attr("data-loadImg") === "done" ){
                  return;
                }
                var $firstImg = $img.find("img");
                var firstImgSrc = $firstImg.attr("data-src");
                $firstImg.hide();
                $firstImg.attr("src", firstImgSrc);
                if( !$img.attr("data-loadImg") ){
                  $firstImg.fadeIn(300);
                  $img.attr("data-loadImg", "done");
                }
            }

            function loadImgSuper(i){
                loadImg(i);
                setTimeout(function(){
                  var next = getNextIndex(1);
                  var prev = getPrevIndex(1);
                  loadImg(next);
                  loadImg(prev);
                }, 200)
            }

            function init(){
                loadImgSuper(0);
                changeTheys(0);
            }
            init();
        }
    });

    $.foucs({
        direction : 'left'
    });
}(jQuery));
