<?php 
include_once('../g5/common.php');
include_once(G5_LIB_PATH.'/latest.lib.php')
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>대전종합만화축제 DICU</title>
<link rel="stylesheet" href="bxslider.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../agency/css/swiper.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="jquery.bxslider.min.js"></script>
<script>
	$(function(){
		$('#sub').hide();
		$('.gnb').hover(function(){
			$(this).parent().find('#sub').slideDown();
			$(this).parent().hover(function(){
			},function(){
				$(this).parent().find('#sub').slideUp();
			});
		});
	});
</script>
</head>

<body>
<div id="wrapper">
	
	<header>
       <div class="inner">
			<div class="util">
				<ul>
					<li><a href="#">로그인</a></li>
					<li><a href="#">회원가입</a></li>
					<li><a href="#">ID/PW 찾기</a></li>
				</ul>
			</div>
			<nav>
				<h1 class="logo">
					<a href="http://www.studiolux.or.kr/dicu"><img src="images/dicu_logo.png"></a>
				</h1>
				<ul class="gnb">
					<li><a href="#">ABOUT DICU</a></li>
					<li><a href="#">관람안내</a></li>
					<li><a href="#">참가안내</a></li>
					<li><a href="#">코스프레ZONE</a></li>
					<li><a href="#">커뮤니티</a></li>
				</ul>
				<div id="sub">
					<div class="sub_inner">
						<ul class="about menu">
							<li><a href="#">소개</a></li>
							<li><a href="#">인사말</a></li>
							<li><a href="#">지난축제</a></li>
						</ul>
						<ul class="program menu">
							<li><a href="#">공식행사</a></li>
							<li><a href="#">전시</a></li>
							<li><a href="#">행사장안내</a></li>
							<li><a href="#">행사장 오시는 길</a></li>
						</ul>
						<ul class="join menu">
							<li><a href="#">부스모집안내</a></li>
							<li><a href="#">동아리 참가안내</a></li>
							<li><a href="#">기업 참가안내</a></li>
						</ul>
						<ul class="costume menu">
							<li><a href="#">참가신청안내</a></li>
							<li><a href="#">유의사항안내</a></li>
						</ul>
						<ul class="contact menu">
							<li><a href="#">공지사항</a></li>
                            <li><a href="#">갤러리</a></li>
							<li><a href="#">질문과 답변</a></li>
							<li><a href="#">출력서비스</a></li>
							<li><a href="#">자원봉사자신청</a></li>
						</ul>
					</div>
				</div>
			</nav>				
		</div>
    </header>
    <div>
    	<div class="swiper-container">
        	<div class="swiper-wrapper">
            	<div class="swiper-slide" style="overflow: hidden;">
                    <img src="images/SFXuw3.jpg" />
                    <div class="text_wrap">
                        <h1>제 27회 DICU 페스티벌</h1>
                        <p><span>D</span>aejeon <span>C</span>artoon <span>C</span>ostumeplay <span>F</span>estival</p>
                        <p>대전 예술가의 집</p> 
                        <p>2.4(토)~2.5(일) 11:00 ~ 17:00</p>
                    </div>
                </div>
                <div class="swiper-slide" style="overflow: hidden;">
                    <img src="images/promotion1.jpg" />
                    <div class="text_wrap">
                    	<h1>마녀의 과자집</h1>
                        <h1>오직 디쿠만을 위한 이벤트</h1>
                        <p>양일 경품추첨 이벤트</p>
                        <p>1등 대형 피규어등</p> 
                        <p>가발 직거래 예약 이벤트 20%할인</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="content_wrap">
        	<div class="latest_board">
            	<div class="notice_box">
                	<p>
                    	<?php 
							include_once("../g5/tab.php");
						?>
                    </p>
                </div>  
            </div>
            <div class="info_wrap">
            	<div class="program_box">
            		
            	</div>
            	<div class="map_box">
            		
            	</div>
            	<div class="gallery_box">
            		
            	</div>
            	<div class="program_box">
            		
            	</div>
            	<div class="map_box">
            		
            	</div>
            	<div class="gallery_box">
            		
            	</div>
            </div>	
        </div>
    </section>
    <footer>
    	<div class="footer_inner">
        	<ul>
        		<li><a href="#개인정보처리방침">개인정보처리방침</a></li>
        		<li><a href="#저작권보호정책">저작권보호정책</a></li>
        		<li><a href="개인정보처리방침">오시는 길</a></li>
        	</ul>
        	<address>대전 서구 문정로 150번길 22 B1F 대전아마추어만화협회 DICU</address>
        	<p>
        		<span>Tel 042-123-4567</span>
        		<span>Fax 042-123-4456</span>
        	</p>
        	<copyright>COPYRIGHT(C) DICU. ALL RIGHTS RESERVED.</copyright>
        </div>
    </footer>
</div>
<!-- Swiper JS -->
  <script src="../agency/js/swiper.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
        speed: 2500,
        loop: false,
        autoplay: false,
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
