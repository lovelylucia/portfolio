<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KSEEKMALL</title>
	<link rel="stylesheet" type="text/css" href="css/customer_style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="./js/jquery-1.8.2.min.js"></script>
	<script src="./js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/tab.js"></script>
	<script type="text/javascript" src="./js/jquery.ioslide.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#main_visual').ioslide({
			controls: true,
			pager: true,
			auto: true,
			subtext: false,
			style:'slide',
			speed:400,
			totalSpeed : 3000
		});
	});
	</script>
</head>
<body>
    <div id="wrapper">
        <!--Header start-->
        <? require_once("top.php");?>
        <!--Header end-->
                <div class="container">
                        <div id="main_visual">
                                <div class="img_vis_01"><a href="product_view.php"></a></div>
                                <div class="img_vis_02"><a href="product_view.php"></a></div>
                                <div class="img_vis_03"><a href="product_view.php"></a></div>
                                <div class="img_vis_04"><a href="product_view.php"></a></div>
                        </div>
                        <div class="tvshop_prd">
                                <h3>TV 쇼핑</h3>
                                <ul>
                                        <li class="present_prd">
                                                <div>
                                                        <a href="product_view.php" title="현재 tv 판매중인 상품">
                                                                <span class="title">현재 TV판매중인 상품</span>
                                                                <span class="prd_name">명품 나주배 10kg 49,000원</span>
                                                                <span class="thumb"><img src="image/pear.png"/></span>
                                                        </a>
                                                </div>
                                        </li>
                                        <li class="past_prd">
                                                <div>
                                                        <a href="product_view.php" title="지난 tv 판매상품">
                                                                <span class="title">지난 tv판매상품</span>
                                                                <span class="prd_name">쿠쿠 IH트윈프레셔 2기압 압력밥솥<br /> CRP-JHT1010FS</span>
                                                                <span class="thumb"><img src="image/rise_pot.png"/></span>
                                                        </a>
                                                </div>
                                        </li>
                                </ul>
                        </div>
                        <div class="banner">
                            <a "product_view.php" title="향수와 화장품 빅이벤트">
                                <img src="image/banner.png" alt="향수와 튤립이 어우러진 배너이미지"/>
                            </a>
                        </div>
	                    <div class="mdpick_prd">
                            <h3 class="mdpick_title">MD PICK 케이시크가 엄선한 추천상품입니다</h3>
                            <ul>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/room_spray.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">조 말론 룸 스프레이</p>
                                                <span class="md_price">22,900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/stick.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">[호호당] 어른 놋수저와 수저 누비집</p>
                                                <span class="md_price">18,900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/black_baies.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">딥디크 Black Candle</p>
                                                <span class="md_price">116,800원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/baies.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">딥디크 Candle Baies</p>
                                                <span class="md_price">73,147원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/prd_1.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">기장하트미역 생일선물로 인기</p>
                                                <span class="md_price">900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/stick2.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">[놋이] 수저세트</p>
                                                <span class="md_price">104,200원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php">
                                            <div class="thumb">
                                                <img src="./image/black_baies.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">딥디크 Black Candle</p>
                                                <span class="md_price">116,800원</span>
                                            </div>
                                        </a>
                                    </li>
                                     <li>
                                         <a href="product_view.php">
                                             <div class="thumb">
                                                 <img src="./image/baies.jpg" />
                                             </div>
                                             <div class="info">
                                                 <p class="md_title">딥디크 Candle Baies</p>
                                                 <span class="md_price">73,147원</span>
                                             </div>
                                         </a>
                                     </li>
                            </ul>
					</div>
					<div class="total_prd">
                            <h3 class="total_title">전체보기</h3>
                            <ul class="list_sorting">
                                    <li class="on"><a href="">추천순</a></li>
                                    <li><a href="">최신순</a></li>
                            </ul>
                            <ul class="total_common_list">
                                    <li>
                                        <a href="product_view.php">
                                            <div class="thumb">
                                                <img src="./image/stick.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">[호호당] 어른 놋수저와 수저 누비집</p>
                                                <span class="md_price">18,900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php">
                                            <div class="thumb">
                                                <img src="./image/stick2.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">[놋이] 수저세트</p>
                                                <span class="md_price">104,200원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php">
                                            <div class="thumb">
                                                <img src="./image/baies.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">딥디크 Candle Baies</p>
                                                <span class="md_price">73,147원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/prd_1.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">기장하트미역 생일선물로 인기</p>
                                                <span class="md_price">900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/backpack.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">론카토 백팩</p>
                                                <span class="md_price">106,182원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/pear.png" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">기장하트미역 생일선물로 인기</p>
                                                <span class="md_price">900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php"> 
                                            <div class="thumb">
                                                <img src="./image/prd_1.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">기장하트미역 생일선물로 인기</p>
                                                <span class="md_price">900원</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product_view.php">
                                            <div class="thumb">
                                                <img src="./image/black_baies.jpg" />
                                            </div>
                                            <div class="info">
                                                <p class="md_title">딥디크 Black Candle</p>
                                                <span class="md_price">116,800원</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
					</div>
				</div>
				<!-- FOOTER -->
                              <? require_once("footer.php");?>  
                     <!-- FOOTER end-->    
            </div>
</body>
