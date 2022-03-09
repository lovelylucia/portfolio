<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8; IE=Edge" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="x-UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="와이엘랜드,여유, yeoyou, 도넛라이프, 지파동수, 지파동수샴푸, 지멀티샵">
    <meta name="description" content="와이엘랜드">
    <title>지파동수 멀티샵</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.24.0/babel.js"></script>
    <script src="//cdn.polyfill.io/v1/polyfill.min.js" async defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <!--<script src="assets/js/app.js"></script>-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/YL.ico">
    <!--<link rel="stylesheet" type="text/css" href="assets/css/slider.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/sub.css">
    <link rel="stylesheet" href="assets/css/reponsive.css">
    <script>
        window.addEventListener ("touchmove", function (event) { event.preventDefault (); }, false);
        if (typeof window.devicePixelRatio != 'undefined' && window.devicePixelRatio > 2) {
            var meta = document.getElementById ("viewport");
            meta.setAttribute ('content', 'width=device-width, initial-scale=' + (2 / window.devicePixelRatio) + ', user-scalable=no');
        }

        $(window).scroll(function () {
            if ($(document).scrollTop() > 0) {
                $(".header_wrap").addClass('fixed');
            } else {
                $(".header_wrap").removeClass('fixed');
            }
        });
        $(document).ready(function () {
            $('.gnb_wrap').mouseenter(function() {
                $(".header_wrap").addClass("on");
            });
            $('.gnb_wrap').mouseleave(function(){
                $(".header_wrap").removeClass("on");
            });

            // push menu
            var menuBtn = $(".btn_category");
            var menuState = false;
            var navM = $(".open_nav_wrap");
            var overlay= $('.overlay');

            menuBtn.click(function  () {
                if ( menuState ) {
                    menuClose();
                    menuState = false;
                    $(this).removeClass("open");
                }else {
                    menuOpen();
                    menuState = true;
                    $(this).addClass("open");
                }
                return false;

            });

            /* 메뉴열기 */
            function menuOpen () {
                navM.addClass("open");
                overlay.addClass("open");
            }
            /* 메뉴닫기 */
            function menuClose () {
                navM.removeClass("open");
                overlay.removeClass("open");
            }
        });
    </script>
</head>

<body class="overflow">
<div id="wrap">
    <header class="header_wrap">
        <h1 class="logo"><a href="index.html">logo</a></h1>
        <nav class="gnb_wrap">
            <ul class="gnb left_gnb clearfix">
                <li class="menu">
                    <a href="sub0101.php" class="gnb_tit">지파동수 소개</a>
                    <ul class="sub_menu">
                        <li><a href="sub0101.php">브랜드 소개</a></li>
                        <li><a href="sub0102.php">상품소개</a></li>
                        <li><a href="sub0103.php">사용법 및 가이드</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="sub0201.php" class="gnb_tit">GSHOP</a>
                </li>
                <li class="menu">
                    <a href="sub0301.php" class="gnb_tit">사용후기</a>
                    <ul class="sub_menu">
                        <li><a href="sub0301.php">발모후기</a></li>
                        <li><a href="sub0302.php">PS등록</a></li>
                        <li><a href="sub0303.php">PS후기</a></li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="sub0401.php" class="gnb_tit">G멀티샵</a>
                    <ul class="sub_menu">
                        <li><a href="sub0401.php">G멀티샵 소개</a></li>
                        <li><a href="sub0402.php">베스트샵</a></li>
                        <li><a href="sub0403.php">지역샵 검색</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="gnb right_gnb clearfix">
                <li class="menu">
                    <a href="sub0501.php" class="gnb_tit">이벤트</a></strong>
                </li>
                <li class="menu">
                    <a href="sub0601.php" class="gnb_tit">고객센터</a>
                    <ul class="sub_menu">
                        <li><a href="sub0601.php">뉴스 및 공지</a></li>
                        <li><a href="sub0602.php">1:1 문의</a></li>
                        <li><a href="sub0603.php">자료실</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="open_nav_wrap">
            <div class="inner_wrap">
                <h2 class="m_gnb_logo"><img src="assets/images/logo_black.svg" /></h2>
                <ul class="menu_list_wrap">
                    <li class="menu_list">
                        <a href="sub0101.php">지파동수 소개</a>
                        <ul class="depth_02">
                            <li><a href="sub0101.php">- 브랜드소개</a></li>
                            <li><a href="sub0102.php">- 상품소개</a></li>
                            <li><a href="sub0103.php">- 사용법 및 가이드</a></li>
                        </ul>
                    </li>
                    <li class="menu_list">
                        <a href="sub0201.php">GSHOP</a>
                    </li>
                    <li class="menu_list">
                        <a href="sub0301.php">체험후기</a>
                        <ul class="depth_02">
                            <li><a href="sub0301.php">- 발모후기</a></li>
                            <li><a href="sub0303.php">- PR등록</a></li>
                            <li><a href="sub0302.php">- PS후기</a></li>
                        </ul>
                    </li>
                    <li class="menu_list">
                        <a href="sub0401.php">G멀티샵</a>
                        <ul class="depth_02">
                            <li><a href="sub0401.php">- G멀티샵 소개</a></li>
                            <li><a href="sub0402.php">- 베스트샵</a></li>
                            <li><a href="sub0403.php">- 지역샵 검색</a></li>
                        </ul>
                    </li>
                    <li class="menu_list">
                        <a href="sub0501.php">이벤트</a>
                        <ul class="depth_02">
                            <li><a href="sub0501.php">- 이벤트</a></li>
                        </ul>
                    </li>
                    <li class="menu_list">
                        <a href="sub0601.php">고객센터</a>
                        <ul class="depth_02">
                            <li><a href="sub0601.php">- 뉴스 및 공지</a></li>
                            <li><a href="sub0602.php">- 1:1 문의</a></li>
                            <li><a href="sub0603.php">- 자료실</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn_category">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="overlay"></div>
    </header>