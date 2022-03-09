<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KSEEKMALL</title>
	<link rel="stylesheet" type="text/css" href="css/customer_style.css">
        <link rel="stylesheet" type="text/css" href="css/order_style.css">
	<script src="../js/jquery-1.8.2.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="js/graph.js"></script>
</head>
<body>
    <div id="wrapper">
        <!--headerStart-->
        <? require_once("top.php");?>
        <!--//headerEnd-->
        
        <!--contentStart-->
        <div id="container" class="cart_wrap">
            <div class="content_inner">
                <div class="cart_title">
                        <h1>주문/결제</h1>
                        <ol class="cart_breadCrumbs">
                                <li>
                                        <span class="cart">장바구니</span>
                                </li>
                                <li>
                                        <em class="order">주문/결제</em>
                                </li>
                                <li>
                                        <span class="orderend">주문완료</span>
                                </li>
                        </ol>
                </div>
                <div class="cart_prd">
                        <h2>주문상품</h2>
                        <table cellpadding="0" cellspacing="0" class="tbTypeA">
                                <caption>주문상품</caption>
                                <colgroup>
                                        <col width="5%"/>
                                        <col width="15%"/>
                                        <col width="30%"/>
                                        <col width="15%"/>
                                        <col width="10%"/>
                                        <col width="10%"/>
                                        <col width="15%"/>
                                </colgroup>
                                <thead>
                                        <tr>
                                                <th><input type="checkbox" name="" id="" class=""  /></th>
                                                <th colspan="2">상품/옵션정보</th>
                                                <th>총 수량</th>
                                                <th>상품금액</th>
                                                <th>배송비</th>
                                                <th>선택</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                                <td><input type="checkbox" name="" id="" class=""  /></td>
                                                <td class="thumb_goods"><p><img src="image/onlee9.jpg" alt="상품"></p></td>
                                                <td class="prd_title">
                                                    <p class="goods_tit">껍질째 먹는 청송꿀땡이 사과 9월 햇사과 홍로 10kg 5kg </p>
                                                    <p class="opt_tit">햇사과 홍로 10kg</p>
                                                    <div class="quantity">
                                                            <a class="btn minus_indent" href="#"></a><!--
                                                         --><input type="text" id="option_count" class="input_number" value="1" title="구매수량"><!--
                                                         --><a class="btn plus_indent" href="#"></a>
                                                    </div>
                                                    
                                                    <!--<div class="amount">
                                                        <input type="text" name="" id="" class="input_amount" value="1"/>
                                                        <button type="button" class="btn modify">수정</button>
                                                    </div> -->
                                                </td>
                                                <td>1개</td>
                                                <td>22,900원</td>
                                                <td>3,000원</td>
                                                <td>
                                                    <button type="button" class="btn order">주문</button>
                                                    <button type="button" class="btn del">삭제</button>
                                                </td>
                                        </tr>
                                </tbody>
                        </table>
                </div>
                <div class="cart_sum">
                    <p>총 주문액 <span class="price">22,900</span>원 + 배송비<span class="price">3,000</span>원 = <span class="total_price">25,900원</span></p>
                </div>
                <div class="bottom_btn_area">
                    <button type="button" class="btn choice_del">선택상품 삭제</button>
                    <button type="button" class="btn empty">장바구니 비우기</button>
                </div>
            </div>
            <div id="order_area">
                <p>
                        <button type="button" class="btn order_decision" onclick="">주문하기</button>
                        <button type="button" class="btn go_shopping" onclick="">쇼핑 계속하기</button>
                </p>
            </div>
        </div>
        <!--//contentEnd-->
        
        <!--footerStart-->
        <? require_once("footer.php");?>
        <!--//footerEnd-->
    </div>
</body>