<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KSEEKMALL</title>
	<link rel="stylesheet" type="text/css" href="css/order_style.css">
        <link rel="stylesheet" type="text/css" href="css/customer_style.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            //주문취소 레이어팝업
            function openCancel(){
                window.open("order_cancelPopup.php","주문취소새창","width=500, height=300, toolbar=no, menubar=no, scrollbar=no, resizeble=no");
            };
            //구매결정완료 레이어팝업
            function openDecision(){
                window.open("pch_decision_popup.php","구매결정완료 새창","width=500, height=300, toolbar=no, menubar=no, scrollbar=no, resizeble=no");
            };
        </script>                
</head>
<body>
	<div id="wrapper">
    <!-- HEADER start -->
        <? require_once("top.php");?>
    <!-- HEADER end -->   
       
    <!-- CONTENT start-->
            <div id="container" class="ordDetail_wrap">
                <div class="content_inner">
                    <div class="mypage_leftWrap">
                        <h3 class="mypage_tit">마이페이지</h3>
                        <div class="mypage_leftMenu">
                            <ul class="dep1">
                                <li>
                                    <a href="mypage.php">주문/배송 목록</a>
                                </li>
                                <li>
                                    <a href="cart.php">장바구니</a>
                                </li>
                                <li>
                                    <a href="">취소/반품/교환 목록</a>
                                </li>
                                <li>
                                    <a href="member_check.php">회원정보 수정</a>
                                </li>
                                <li>
                                    <a href="center.php">고객센터</a>
                                    <ul class="dep2">
                                        <li><a href="faq.php">자주묻는 질문 FAQ</a></li>
                                        <li><a href="prd_qnaList.php">나의 상품 문의 내역</a></li>
                                        <li><a href="center_write.php">1:1문의하기</a></li>
                                        <li><a href="1on1_list.php"">1:1문의 내역</a></li>
                                        <li><a href="notice_list.php">공지사항</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mypage_rightWrap">
  
                            <div class="mypage_state">
                                <ol>
                                    <li class="on">
                                        <a href="#" onclick="">
                                            <span>주문접수</span>
                                            <em>1</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>결제완료</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>배송완료</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>배송중</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>배송완료</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                </ol>
                                <ul>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>취소</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>교환</span>
                                            <em>0</em>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="">
                                            <span>반품</span>
                                            <em>0</em>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="search_box">
                                <div class="ui_datePicker">
                                    <ul>
                                        <li class="on"><button>1주일</button></li>
                                        <li><button>1개월</button></li>
                                        <li><button>3개월</button></li>
                                        <li><button>6개월</button></li>
                                    </ul>
                                    <div class="period_box">
                                        <input type="text" id="" value="2017.10.03" name="" title="검색 시작일 입력"><button type="button" class="date_check">기간조회</button>
                                        <span>~</span>
                                        <input type="text" id="" value="2017.10.03" name="" title="검색 마지막일 입력"><button type="button" class="date_check">기간조회</button>
                                    </div>   
                                    <select>
                                        <option>전체</option>
                                        <option>주문접수</option>
                                        <option>입금대기중</option>
                                        <option>결제완료</option>
                                        <option>배송준비중</option>
                                        <option>배송중</option>
                                        <option>배송완료</option>
                                        <option>반품신청</option>
                                        <option>반품완료</option>
                                        <option>교환중</option>
                                        <option>교환완료</option>
                                        <option>주문취소(미입금)</option>
                                    </select>
                                    <button type="button" id="" class="btn btn_inquiry">조회</button>

                                </div>
                            </div>
                            <div class="prdInfo con_tbl">
                                <h2>주문상품</h2>
                                <table cellpadding="0" cellspacing="0" class="tbTypeA">
                                        <caption>주문상품</caption>
                                        <colgroup>
                                                <col width="15%">
                                                <col width="50%">
                                                <col width="10%">
                                                <col width="12%">
                                                <col width="13%">
                                        </colgroup>
                                        <thead>
                                                <tr>
                                                        <th>주문일자</th>
                                                        <th>상품/옵션정보</th>
                                                        <th>상품금액(수량)</th>
                                                        <th>주문상태</th>
                                                        <th>확인/신청</th>
                                                </tr>
                                        </thead>
                                        <tbody> 
                                                <tr>
                                                        <td class="noborder">
                                                            <p class="ord_number">2017-08-05</p>
                                                            <p class="ord_date">2017-101309325</p>
                                                            <a href="order_detail.php" class="show_detail">주문상세보기</a>
                                                        </td>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/onlee9.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">껍질째 먹는 청송꿀땡이 사과 9월 햇사과 홍로 10kg 5kg</p>
                                                                <p class="opt_tit">햇사과 홍로 5kg</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>9,900원</strong>
                                                            (1개)
                                                        </td>
                                                        <td>
                                                            <span>입금완료</span>
                                                        </td>
                                                        <td class="req">
                                                            <a href="order_cancelReq.php"  class="btn btn_claim">주문취소</a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td class="noborder">
                                                            <p class="ord_number">2017-08-05</p>
                                                            <p class="ord_date">2017-101309325</p>
                                                            <a href="order_detail.php" class="show_detail">주문상세보기</a>
                                                        </td>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/onlee9.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">껍질째 먹는 청송꿀땡이 사과 9월 햇사과 홍로 10kg 5kg</p>
                                                                <p class="opt_tit">햇사과 홍로 5kg</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>9,900원</strong>
                                                            (1개)
                                                        </td>
                                                        <td>
                                                            <span>입금대기</span>
                                                        </td>
                                                        <td class="req">
                                                            <a href="javascript:openCancel();"  class="btn btn_claim">주문취소</a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td rowspan="2" class="noborder">
                                                            <p class="ord_number">2017-08-05</p>
                                                            <p class="ord_date">2017-101309325</p>
                                                            <a href="order_detail.php" class="show_detail">주문상세보기</a>
                                                        </td>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/onlee9.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">껍질째 먹는 청송꿀땡이 사과 9월 햇사과 홍로 10kg 5kg</p>
                                                                <p class="opt_tit">햇사과 홍로 5kg</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>9,900원</strong>
                                                            (1개)
                                                        </td>
                                                        <td rowspan="2">
                                                            <span>배송완료</span>
                                                            <a href="" class="btn btn_deli">배송조회</a>
                                                        </td>
                                                        <td rowspan="2" class="req">
                                                            <a href="javascript:openDecision();" class="btn btn_decision">구매결정완료</a>
                                                            <a href="order_returnReq.php" class="btn btn_claim">반품신청</a>
                                                            <a href="order_exchangeReq.php" class="btn btn_claim">교환신청</a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/onlee9.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">껍질째 먹는 청송꿀땡이 사과 9월 햇사과 홍로 10kg 5kg</p>
                                                                <p class="opt_tit">맛있는 배 5kg</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>9,900원</strong>
                                                            (1개)
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td rowspan="3" class="noborder">
                                                            <p class="ord_number">2017-08-05</p>
                                                            <p class="ord_date">2017-101309325</p>
                                                            <a href="order_detail.php" class="show_detail">주문상세보기</a>
                                                        </td>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/2015091601419_0.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">겨울에 먹으면 더 맛있는 따땃한 어묵 10개입</p>
                                                                <p class="opt_tit">보통어묵 10개입</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>9,900원</strong>
                                                            (1개)
                                                        </td>
                                                        <td rowspan="3">
                                                            <span>배송완료</span>
                                                            <a href="" class="btn btn_deli">배송조회</a>
                                                        </td>
                                                        <td rowspan="3" class="req">
                                                            <a href="javascript:openDecision();"  class="btn btn_decision">구매결정완료</a>
                                                            <a href="order_returnReq.php" class="btn btn_claim">반품신청</a>
                                                            <a href="order_exchangeReq.php" class="btn btn_claim">교환신청</a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/2015091601419_0.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">겨울에 먹으면 더 맛있는 따땃한 어묵 10개입</p>
                                                                <p class="opt_tit">안매운어묵 10개입</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>10,900원</strong>
                                                            (1개)
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td class="thumb_goods">
                                                            <label>
                                                                <input type="checkbox" name="" id="" value=""/>
                                                            </label>
                                                            <p class="thumbNail"><img src="image/2015091601419_0.jpg" alt="상품"></p>
                                                            <div class="tit_wrap">
                                                                <p class="prd_tit">겨울에 먹으면 더 맛있는 따땃한 어묵 10개입</p>
                                                                <p class="opt_tit">매운어묵 10개입</p>
                                                            </div>
                                                        </td>
                                                        <td class="price">
                                                             <strong>19,800원</strong>
                                                            (2개)
                                                        </td>
                                                </tr>
                                        </tbody>
                                </table>
                                <div id="page_navigation">
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
    <!--  CONTENT end-->
    <!-- FOOTER -->
        <? require_once("footer.php");?>
    <!-- FOOTER end-->    
</body>
</html>


