
            $(function(){
                 $('.ui-list li,.ui-tiled li,.link-btn,.ui-tab-nav li').click(function(){
            if($(this).data('href')){
                location.href= $(this).data('href');
            }
        });
        // $('.ui-header .ui-btn').click(function(){
        //     location.href= 'index.html';
        // });
        wHeight=$(window).height();
        $('.table-pay').height(wHeight);
            })
