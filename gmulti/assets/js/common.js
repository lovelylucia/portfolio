/*$(document).ready(function () {
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


    function menuOpen () {
        $gnbM.addClass("open");
        $gnbMBg.addClass("active");
    }

    function menuClose () {
        $gnbM.removeClass("open");
        $gnbMBg.removeClass("active");
    }
});

//push menu open
const navSlide = () => {
    const pushMenuBtn = document.querySelector(".btn_category");
    const nav = document.querySelector(".open_nav_wrap");
    const overlay = document.querySelector(".overlay");
    const overflow = document.querySelector(".overflow");
    pushMenuBtn.addEventListener("click", () => {
        pushMenuBtn.classList.toggle("open");
        overlay.classList.toggle("open");
        overflow.classList.toggle("hidden");
        // nav.classList.add("open");
        if(!nav.classList.contains('open')) {
            nav.classList.add('open');
        } else {
            nav.classList.remove('open');
        };
    });
}
navSlide();


*/

