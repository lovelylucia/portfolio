/**
 * small screen navigation
 *
 * @version 1.0.0
 * @since 2018-02-03
 * @author STUDIO-JT (KMS)
 * @requires TweenMax.min.js
 */
function small_screen_nav_open(){

    var $body = $('body'),
        $header = $('#header'),
        $menu_container = $('#small_menu_container'),
        $menu_overlay = $('#small_menu_overlay')

    // open menu
    $('#small_menu_btn').on('click', function(){
        scroll_top = $(window).scrollTop();

        $body.addClass('open_menu');
        $header.removeAttr('style');


        // add class and scroll pos tracker
        $body.attr('data-scrolltop',scroll_top)
                 .css({'position':'fixed','width': '100%'});


        // active menu check
        $('.small_screen_menu > li').each(function(){

            if($(this).hasClass('current_page_item') && !$('.article').hasClass('inquiry_page')){
                var $this = $(this);
                $('.small_screen_menu > li.current_page_item').find('.menu-depth-1 > .view_all').addClass('view_all_page');
            }

            if($(this).hasClass('current-menu-ancestor') || $(this).hasClass('current-menu-item')){
                var $this = $(this);
                // 2depth
                $this.addClass('active').find('> ul').show();

                // 3depth
                $this.find('> ul > li.current-menu-ancestor').each(function(){
                    $(this).addClass('active').find('> ul').show();
                })

                $this.find('> ul > li.current-menu-item').each(function(){
                    $(this).addClass('active').find('> ul').show();
                })
                return false;
            }
        });

        // open
        TweenLite.to($menu_overlay, .3, {autoAlpha: 1,onStart: function() {$menu_overlay.css('display', 'block');}});
        TweenLite.fromTo($menu_container, .3, {x: '0%'}, {
            x: '-100%',
            onStart: function() {
                //$menu_container.css('display', 'block');
            }
        });


        //active menu position scroll
        var $el;

        if(!!$('.small_menu_container_inner').length){
            $el = $('.small_menu_container_inner');
        }

        if( $el != undefined && $el.find('li.current-menu-item').length > 0 ) {
            var $active = $el.find('li.current-menu-item');
            $el.scrollTop($active.position().top - 100);
        }

    });

    // close menu
    $('#small_menu_close, #small_menu_overlay').on('click',function(){

        TweenLite.to($menu_overlay, .5, {autoAlpha: 0,onComplete: function() {$menu_overlay.css('display', 'none');}});
        TweenLite.to($menu_container, .5, {
            x: '100%',
            onComplete: function() {
                $body.removeClass('open_menu');
                //$menu_container.css('display', 'none');
                $('.small_screen_menu > li').removeClass('active').find('> ul').stop().hide();
            }
        });

        // restore scroll top
		var scroll_top = $body.attr('data-scrolltop');
        $body.removeAttr('style');
        window.scrollTo(0, scroll_top);

    });


    var $header_h = $('.small_menu_header').outerHeight(),
         $smart_btn = $('.small_menu_smart_link').outerHeight(),
         $smart_tit = $('.smart_link_title').outerHeight(),
         $insights_btn = $('.small_menu_insights').outerHeight();

    if(JT.is_screen(1023)){

        /*
        if( $('body').hasClass('page-template-insights') ){
            $menu_container.height($(window).innerHeight());
            $('.small_menu_container_inner').height($(window).innerHeight() - ($header_h + $smart_btn) );
            $('.smart_link_list').height($(window).innerHeight()-$smart_tit );

            $(window).on('resize',function(){
                 $menu_container.height(window.innerHeight);
                $('.small_menu_container_inner').height(window.innerHeight - ($header_h + $smart_btn));
                $('.smart_link_list').height(window.innerHeight-$smart_tit );
            })

        }
        */
        $menu_container.height($(window).innerHeight());
        $('.small_menu_container_inner').height($(window).innerHeight() - ($header_h + $smart_btn + $insights_btn - 2));
        $('.smart_link_list').height($(window).innerHeight()-$smart_tit );

        $(window).on('resize',function(){
            $menu_container.height(window.innerHeight);
            $('.small_menu_container_inner').height(window.innerHeight - ($header_h + $smart_btn + $insights_btn - 2));
            $('.smart_link_list').height(window.innerHeight-$smart_tit );
        })


        $menu_overlay.height(window.innerHeight);
        $(window).on('resize',function(){
            $menu_overlay.height(window.innerHeight);
        })

    }else{
        $('.small_menu_container_inner').removeAttr('style');
    }


}



/**
 * small screen 2depth menu
 *
 * @version 1.0.0
 * @since 2018-02-03
 * @author STUDIO-JT (KMS)
 * @requires TweenMax.min.js
 */
function small_screen_nav_toggle(){

    // menu top level link
	$('.small_screen_menu').on('click', 'li.menu-item-has-children > a', function(e){

        e.preventDefault();

        var $parent = $(this).closest('ul');
        var $li = $(this).closest('li');

        if( !$parent.hasClass('sub-menu') ) { // 2depth

            $('.small_screen_menu > li.active > ul > li').removeClass('active').find('> ul').stop().slideUp(); // 3depth close

            if($(this).closest('li').hasClass('active')) { // 열려있는 menu 클릭시 닫기

                $(this).closest('li').removeClass('active').find('> ul').stop().slideUp();

            } else {

                $('.small_screen_menu > li').removeClass('active').find('> ul').stop().slideUp();

                $li.addClass('active');
                $li.find('> ul').stop().slideDown();

            }

        } else { // 3depth

            if($(this).closest('li').hasClass('active')) { // 열려있는 menu 클릭시 닫기

                $(this).closest('li').removeClass('active').find('> ul').stop().slideUp();

            } else {

                $('.small_screen_menu > li.active > ul > li').removeClass('active').find('> ul').stop().slideUp();

                $li.addClass('active');
                $li.find('> ul').stop().slideDown();

            }

        }

	});

}