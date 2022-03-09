<?php 
include_once('../g5/common.php');
include_once(G5_LIB_PATH.'/latest.lib.php')
?>

<!doctype html>
<html lang="ko" class="no-js">
<head>
<meta charset="utf-8">
<title>웹에이전시</title>
<link rel="stylesheet" href="http://studiolux.or.kr/agency/css/style.css">
<link rel="stylesheet" href="http://studiolux.or.kr/g5/skin/latest/Nimple_basic/style.css">
<link rel="stylesheet" href="css/swiper.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
    (function(H){
		H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
<style>
	.swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }	
</style>
</head>

<body>
	<div class="wrapper">
    	<header>
        	<h1><a href="http://studiolux.or.kr/agency"><img src="images/studiolux_logo.png" alt="로고"></a></h1>
             <ul class="navi">
                <li><a href="sub0101.html">ABOUT</a>
                	<div class="blank01">
                        <ul class="about">
                            <li><a href="sub0101.html">overview</a></li>
                            <li><a href="sub0103.html">organization</a></li>
                        </ul>
                    </div>    
                </li>
                <li><a href="sub0201.html">WORK</a>
                  	<div class="blank02">
                         <ul class="work">
                            <li><a href="#">web service</a></li>
                            <li><a href="#">mobile service</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">consulting</a></li>
                        </ul>
                   </div> 
                </li>
                <li><a href="http://studiolux.or.kr/g5/bbs/board.php?bo_table=portfolio">PORTPOLIO</a></li>
                <li><a href="http://studiolux.or.kr/g5/bbs/board.php?bo_table=maintenance">MAINTENANCE</a></li>
                <li><a href="sub0501.html">CONTACT</a>
                	<div class="blank03">
                        <ul class="contact">
                            <li><a href="sub0501.html">견적의뢰</a></li>
                            <li><a href="sub0502.html">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </header>
		<div class="swiper-container">
			<div class="swiper-wrapper">
			  <div class="swiper-slide"><img src="images/tumblr_04_1.jpg" alt="image1"/></div>
			  <div class="swiper-slide"><img src="images/tumblr_05_1.jpg" alt="image2"/></div>
			  <div class="swiper-slide"><img src="images/main_visual01.jpg" alt="image3"/></div>
			</div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <section class="content">
        	<div class="consult">
        		<p>
            		<img src="http://studiolux.or.kr/agency/images/consult.jpg" alt="상담시간">
            	</p>
        	</div>
			<div class="latest01">
				<p>
					<?=latest("Nimple_basic","notice",5,22);?>
				</p>
			</div>
			<div class="latest01-2">
				<p>
					<?=latest("Nimple_basic","maintenance",5,22);?>
				</p>
			</div>
			<div class="latest02">
				<p class="latest02_title"><a href="http://studiolux.or.kr/g5/bbs/board.php?bo_table=portfolio">PORTFOLIO</a>   	            
				</p>
				<p class="latest02_board">
					<?=latest("Responsive_Carousel","portfolio",3,10);?>
				</p>
			</div>
		</section>                    
		<footer>
			<div class="footer_inner">
			   <div class="sns">
					  <ul>
						  <li><a href="#" target="_self"><img src="http://studiolux.woobi.co.kr/images/Twitter.png" alt="트위터"></a></li>
						  <li><a href="#" target="_self"><img src="http://studiolux.woobi.co.kr/images/Facebook.png" alt="페이스북"></a></li>
						  <li><a href="#" target="_self"><img src="http://studiolux.woobi.co.kr/images/Instagram.png" alt="인스타그램"></a></li>                        			 
					 </ul>
			   </div>
				<img class="white_logo" src="http://studiolux.woobi.co.kr/images/studiolux_logo_gray.png" alt="그레이색 로고"> 	
				<div class="info">
					<ul>
						<li><a href="#">고객센터</a></li>
						<li><a href="#">매장안내</a></li>
						<li><a href="#">이용약관</a></li>
						<li><a href="#">직원채용</a></li>
						<li><a href="#">개인정보처리방침</a></li>
					</ul>
				</div>
				<address>대전 광역시 서구 둔산동 123-123 오라클빌딩 3층 그린컴퓨터학원</address>
				<p>coryright&copy; studioLux@naver.com 2016, all right reserved.</p>
				<div class="family">
				  <form name="form" id="form">
					  <select name="jumpMenu" id="jumpMenu" onChange="MM_jumpMenu('parent',this,0)">
						<option>family site</option>
						<option>naver</option>
						<option>daum</option>
						<option>google</option>
					</select>
				  </form>
				</div>
			</div>
    	</footer>
    </div>
	
	
	<!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

	  <!-- Initialize Swiper -->
	  <script>
		var swiper = new Swiper('.swiper-container', {
        speed: 2500,
        loop: true,
        autoplay: {
          delay: 2000,
      },
      	pagination: {
        	el: '.swiper-pagination',
			},
		    navigation: {
        	nextEl: '.swiper-button-next',
        	prevEl: '.swiper-button-prev',
      		
			   },
    	});
	  </script>
</body>
</html>
