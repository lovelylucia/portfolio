<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>상세보기</title>
	<link rel="stylesheet" type="text/css" href="css/customer_style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- MODAL LAYERPOPUP start-->
        <div class="layer_popup">
            <div class="cart_info">
                <p class="cart_msg">
                    <span>장바구니 추가</span>
                    상품을 장바구니에 담았습니다.
                </p> 
            </div>
            <div class="action_area">
                <a href="" class="btn go_shopping">쇼핑계속 하기</a>
                <a href="cart.php" class="btn go_cart">장바구니 가기</a>
            </div>
            <a onclick="" class="btn_clear">팝업 닫기</a>
        </div>
        <div class="mask"></div> 
    <!-- MODAL LAYERPOPUP end-->
    <!-- HEADER start -->
        <? require_once("top.php");?>
    <!-- HEADER end -->   
        <div class="breadCrumbs">
            <h3>
                    <span><img src="image/home.png" alt="홈 버튼"></span>
                    <a href="#">식품</a> 
                     >
                    <a>국내산 과일</a> 
                     >
                    <a>산지직송</a>
                     >
                    <a>대전 송중기</a>
            </h3>
        </div>
        <!-- CONTENT start-->
        <div id="content_wrap">
        	<div class="product_top">
	        	<div class="detail_column_left">
	        		<div class="detail_img_area"></div>
	        			<h4 class="blind">상품 이미지</h4>
	        			<p class="prd_img"><img src="image/thumb.png" class="img_center" alt="오설록 녹차제품 썸네일"></p>
	        	</div>
	        	<div class="detail_column_right">
	        		<div class="detail_name">
	        			<p class="store">대전 송중기</p>
	        			<h3 class="title"> </h3>
	        			<stong class="price">22,900원</stong>
	        		</div>
	        		<div class="detail_delivery">
	        			<p class="delivery_price">택배배송&nbsp;&nbsp; 3000원 <span>주문시 결제</span></p>
	        			<p>50,000원 이상 구매 시 무료/제주 추가 3,000원. </p>
	        			<p>제주 외 도서지역 추가 3,000원</p>
	        		</div>
	        		<div class="prd_option">
	        			<a class="select_title">선택01 &nbsp; 햇사과 홍로 10kg</a>
	        			<ul class="combobox_list">
	        				<li class="list_option select"><a href="#">햇사과 홍로 10kg</a></li>
	        				<li class="list_option"><a href="#">햇사과 홍로 5kg</a></li>
	        			</ul>
	        		</div>
	        		<div class="prd_option add_option">
	        			<a class="select_title">선택02 &nbsp; 선택하지 않음 </a>
	        			<ul class="combobox_list">
	        				<li class="list_option select"><a href="#">햇배 10kg</a></li>
	        				<li class="list_option"><a href="#">햇배 20kg</a></li>
	        			</ul>
	        		</div>
	        		<div class="prd_result">
	        			<p> [햇사과 홍로 10kg] </p>
	        			<div class="quantity">
	        				<a class="btn minus_indent" href="#"></a>
	        				<input type="text" id="option_count" class="input_number" value="1" title="구매수량" />
	        				<a class="btn plus_indent" href="#"></a>
	        			</div>
	        			<p class="price"><strong>22,900원</strong></p>
	        			<a class="btn delete"></a>
	        		</div>
	        		<div class="detail_total">
	        			<p>총 상품금액</p>
	        			<div class="total_price">
	        				<span>총 수량 1개</span>
	        				<strong>22,900</strong>
	        				<span>원</span>
	        			</div>
	        		</div>
	        		<div class="indent_btn_area">
	        			<a class="btn cart" onclick="">장바구니</a>
	        			<a class="btn buy" href="order.html">바로구매</a>
	        		</div>
	        	</div>
	        </div>
	        <div class="product_display">
	        	<div class="">
	        		<ul class="info_tab">
	        			<li class="select_li"><a href="#상품정보">상품정보</a></li>
	        			<li><a href="#QnA">Q&A</a></li>
	        			<li><a href="#반품교환안내">반품/교환안내</a></li>	
	        		</ul>
	        		<div class="tab_box detail_info">
		        		<h4 class="blind">제품 상세 정보</h4>
		        		<div class="product_imgArea">
		        			<img src="image/info.png" alt="고급스런 녹차의 진한맛, 제주가 빚은 발효 이미지. 차 따르는 이미지. 녹차">
		        		</div>
		        	</div>
		        	<div class="tab_box qna_info" style="display: none">
		        		<h4 class="blind">QnA</h4>
		        		<div>

		        		</div>
		        	</div>
		        	<div class="tab_box return_info" style="display: none">
		        		<h4 class="blind">반품/교환안내</h4>
		        		<div>
		        			<p> 반품/교환 사유에 따른 요청 가능 기간
								반품 시 먼저 판매자와 연락하셔서 반품사유, 택배사, 배송비, 반품지 주소 등을 협의하신 후 반품상품을 발송해 주시기 바랍니다. <br />
								1구매자 단순 변심은 상품 수령 후 7일 이내 (구매자 반품배송비 부담)<br />
								2표시/광고와 상이, 상품하자의 경우 상품 수령 후 3개월 이내 혹은 표시/광고와 다른 사실을 안 날로부터 30일 이내. <br />
								둘 중 하나 경과 시 반품/교환 불가 (판매자 반품배송비 부담) <br />
								반품/교환 불가능 사유 <br />
								아래와 같은 경우 반품/교환이 불가능합니다. <br />
								1반품요청기간이 지난 경우 <br />
								2구매자의 책임 있는 사유로 상품 등이 멸실 또는 훼손된 경우 (단, 상품의 내용을 확인하기 위하여 포장 등을 훼손한 경우는 제외) <br />
								3포장을 개봉하였으나 포장이 훼손되어 상품가치가 현저히 상실된 경우 (예: 식품, 화장품, 향수류, 음반 등) <br />
								4구매자의 사용 또는 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우 (라벨이 떨어진 의류 또는 태그가 떨어진 명품관 상품인 경우) <br />
								5시간의 경과에 의하여 재판매가 곤란할 정도로 상품 등의 가치가 현저히 감소한 경우 <br />
								6고객주문 확인 후 상품제작에 들어가는 주문제작상품 (판매자에게 회복불가능한 손해가 예상되고, 그러한 예정으로 청약철회권 행사가 불가하다는 사실을 서면 동의 받은 경우) <br />
								7복제가 가능한 상품 등의 포장을 훼손한 경우 (CD/DVD/GAME/도서의 경우 포장 개봉 시)
							</p>
		        		</div>
		        	</div>

		        </div>
        	</div>
        </div>
    <!--  CONTENT end-->
    <!-- FOOTER -->
	    <div id="footer_wrap" class="footer_wrap">
	    	<div class="footer_inner">
	    		<h4 class="blind">푸터영역</h4>
	    		<div class="co_info_area">
	    			<ul>
	    				<li><a href="#이용약관">이용약관</a></li>
	    				<li class="bar"></li>
	    				<li><a href="#개인정보처리방침">개인정보처리방침</a></li>
	    				<li class="bar"></li>
	    				<li><a href="#법적고지">법적고지</a></li>
	    				<li class="bar"></li>
	    				<li><a href="#입점안내">입점안내</a></li>
	    				<li class="bar"></li>
	    				<li><a href="#고객센터">고객센터</a></li>
	    			</ul>
	    		</div>
	    		<p class="co_marketing">
	    			케이시크는 결제정보의 중개서비스 또는 통신판매중개시스템의 제공자로서, <br />
	    			통신판매의 당사자가 아니며 상품의 주문, 배송 및 환불 등과 관련한 의무와 책임은 각 판매자에게 있습니다.
	    		</p>
	    		<address class="co_address">
		    		사업자등록번호: 000-00-00000  
		    		<span class="bar">|</span>   
		    		통신판매업신고번호:  제2000-대전-000호  
		    		<span class="bar">|</span>  
		    		대표이사: 김영렬    
		    		<span class="bar">|</span>   
		    		사업자등록정보확인 <br />
					주소: 대전광역시 서구 둔산남로 9번길 71  향천빌딩 3층  (35234)  
					<span class="bar">|</span> 
					대표전화 070-8668-8668  
					<span class="bar">|</span> 
					팩스  0505-482-7995
				</address>
	    		<p class="co_copyright">
	    			<a class="co_logo" href="http://www.kseek.com"><img src="image/kseek_logo.png"></a>
	    			<span>Copyright ⓒ <stong>KSEEK  Corp.</stong> All Rights REseved.</span>
	    		</p>
	    	</div>
	    </div>
	<!-- FOOTER end-->    
    </div>
</div>
</body>
<script type="text/javascript">
    function wrapWindowByMask(){
        // 화면의 높이와 너비를 변수로 만듭니다.
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
 
        // 마스크의 높이와 너비를 화면의 높이와 너비 변수로 설정합니다.
        $('.mask').css({'width':maskWidth,'height':maskHeight});
 
        // 80%의 불투명으로 변합니다.

        $('.mask').fadeTo("fast",0.5);
 
        // 레이어 팝업을 가운데로 띄우기 위해 화면의 높이와 너비의 가운데 값과 스크롤 값을 더하여 변수로 만듭니다.
        var left = ( $(window).scrollLeft() + ( $(window).width() - $('.layer_popup').width()) / 2 );
        var top = ( $(window).scrollTop() + ( $(window).height() - $('.layer_popup').height()) / 2 );
 
        // css 스타일을 변경합니다.
        $('.layer_popup').css({'left':left,'top':top, 'position':'absolute'});
 
        // 레이어 팝업을 띄웁니다.
        $('.layer_popup').show();
    }
 
    $(document).ready(function(){
        // showMask를 클릭시 작동하며 검은 마스크 배경과 레이어 팝업을 띄웁니다.
        $('.cart').click(function(e){
            // preventDefault는 href의 링크 기본 행동을 막는 기능입니다.
            e.preventDefault();
            wrapWindowByMask();
        });
 
        // 닫기(close)를 눌렀을 때 작동합니다.
        $('.layer_popup .btn_clear').click(function (e) {
            e.preventDefault();
            $('.mask,.layer_popup').hide();
        });
 
        // 뒤 검은 마스크를 클릭시에도 모두 제거하도록 처리합니다.
        $('.mask').click(function () {
            $(this).hide();
            $('.layer_popup').hide();
        });
    });
</script>
</html>


