$(document).ready(function () {
    $("#header .gnb > ul > li").mouseenter(function(){
        $(this).addClass("active");
    });
    $("#header .gnb > ul > li").mouseleave(function(){
        $(this).removeClass("active");
    });
});
$(document).ready(function () {
    var $menuBtn = $("#header .nav-open-btn");
    var menuState = false;
    var $gnbM = $(".all_menu");
    var $gnbMBg = $('.bg_overlay');

    $menuBtn.click(function  () {
        if ( menuState ) {
            menuClose();
            menuState = false;
            $(this).removeClass("active");
        }else {
            menuOpen();
            menuState = true;
            $(this).addClass("active");
        }
        return false;

    });

    /* 메뉴열기 */
    function menuOpen () {
        $gnbM.addClass("open");
        $gnbMBg.addClass("active");
    }
    /* 메뉴닫기 */
    function menuClose () {
        $gnbM.removeClass("open");
        $gnbMBg.removeClass("active");
    }


});



var $pageSwitch = undefined;
function mainLoad() {
    if ($("#page_switch").length > 0) {

        if ($pageSwitch == undefined) {
            $pageSwitch = new Swiper('#page_switch.swiper-container', {
                direction: 'vertical',
                mousewheel: {
                    invert: true,
                    releaseOnEdges: true,
                    forceToAxis: true
                },
                speed: 800,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
                simulateTouch:true,
                mousewheelReleaseOnEdges: true,
            });


            // 스크롤시 헤더 스타일 변경
            $pageSwitch.on('slideChange', function (event) {
                if ($pageSwitch != undefined) {
                    if ($pageSwitch.activeIndex == 0) {
                        $('.gnb .menu').removeClass('changed');
                        $('.logo').removeClass('scroll');
                        $('.menu').removeClass('scroll');
                        $('.white-bg').removeClass('changed');
                    } else {
                        $('.gnb .menu').addClass('changed');
                        $('.logo').addClass('scroll');
                        $('.menu').addClass('scroll');
                        $('.white-bg').addClass('changed');
                    }
                    if ($pageSwitch.activeIndex == 3) {

                    }
                }
            });

        }

    }
    // 마지막 페이지 마우스휠 이벤트 정지
    $("#swiper_last").scroll(function() {
        var idx = $(this).scrollTop();
        if($(this).scrollTop() > 0){
            $pageSwitch.mousewheel.disable();
            $pageSwitch.allowTouchMove = false;
            $pageSwitch. mousewheelReleaseOnEdges = false;
        }
        if($(this).scrollTop() == 0){
            $pageSwitch.mousewheel.enable();
            $pageSwitch.allowTouchMove = true;
            $pageSwitch. mousewheelReleaseOnEdges = true;
            $pageSwitch.update();
        }
    });
}

$(window).on('load',function(){
    mainLoad();
});



