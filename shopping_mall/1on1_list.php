<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KSEEKMALL</title>
	<link rel="stylesheet" type="text/css" href="css/customer_style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            $(function() {
                
                    //탭 클릭시 css 추가
                    $('.ui_tabBox > ul > li').click( function() {
                        $(this).addClass('selected').siblings().removeClass('selected');
                        return false;
                    });
              
                //제목 클릭시 텍스트영역 보이기
                     $('.selected > .faq_open').click(function() {
                             $('.selected > .faq_text').toggle('4000');
                     });
                
                     $('.text_left > a').click(function(){
                            $('.list_cont').toggle();
                     });

                    $('.ui_dateColumn > ul >li').click(function(){
                        $(this).addClass('on');
                        $(this).siblings().removeClass('on');
                        return false;
                   });
             });
        </script>
</head>
<body>
    <div id="wrapper">
    <!-- HEADER start -->
        <? require_once("top.php");?>
    <!-- HEADER end -->   
        
    <!-- CONTENT start-->
            <div id=container class="center_wrap">
                <div class="content_inner">
                    <h3 class="center_tit">고객센터</h3>  
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
                    
                    <div class="tbl_area _1on1_list">
                            <h3>1:1 문의 내역</h3>
                            <table>
                                <caption>FAQ 리스트</caption>
                                <colgroup>
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="40%">
                                    <col width="20%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">번호</th>
                                        <th scope="col">구분</th>
                                        <th scope="col">제목</th>
                                        <th scope="col">문의일</th>
                                        <th scope="col">답변상태</th>
                                        <th scope="col">삭제</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="list open">
                                        <td>1</td>
                                        <td>상품</td>
                                        <td class="text_left">
                                            <a href="#해당글">저는 진상 손님이 아닙니다만...</a>
                                        </td>
                                        <td>2017.12.11</td>
                                        <td class="state standby">답변대기</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                 <!---------답변영역--------->
                                    
                                    <tr class="list_cont">
                                        <td colspan="6">
                                            <div class="sec_question">
                                                <p>
                                                    저는 진상 손님이 아닌데<br/>
                                                    판매자가 저를 그런 손님으로 만들고 있어서<br/>
                                                    너무 속이 상합니다 ㅠㅠ
                                                </p>
                                            </div>
                                            <div class="sec_answer">
                                                <h3>답변</h3>
                                                <p>
                                                    ■ 취소 / 교환 반품 신청 방법 <br/>
                                                    1. 배송상품
                                                    배송상품은 물품 수령일 다음 날로 부터 7일 이내, (서비스 상품은 티켓수령일 다음 날로 부터 7일이내)
                                                    마이페이지 > 구매목록을 통해 원하시는 옵션, 회수 주소지 등을 선택하시어 빠르고 정확한 신청이 가능합니다.
                                                    단. 배송중 상태에서는 교환/반품 신청이 불가하며, 배송 완료 이후 [마이페이지>구매목록]으로 접속하여 교환/반품 신청이 가능합니다. 배송 상태가 배송중일 경우 수취확인 진행 후 신청 부탁 드립니다.
                                                    ※ 운송장 상 배송완료상태로 보이지만, 실제 상품을 수령하지 못한 상품의 경우는 해당 운송장정보에 기재된 택배대리점 또는 택배기사님을 통해 배송상품 위치 확인 및 반품의사를 전달하신 이후, 마이페이지에서 직접 반품 신청해주시면 취소신청이 가능합니다.

                                                    배송상품의 경우, 교환/반품 신청 완료시, 택배기사님이 방문 수거할 수 있도록 위메프에서 직접 회수접수를 해드리며
                                                    빠른 시일 내 상품이 회수됩니다.
                                                    (신청 완료 이후 택배 기사님 방문까지 평균 영업일 기준 2~3일 정도 소요되며,배송사 사정에 따라 지연이 발생할 수 있습니다.)

                                                    회수 완료 후 영업일기준 1~2일이내 마이페이지>취소/교환/반품 현황 > 배송현황 클릭을 통해 진행상태 확인이 가능합니다.
                                                    (다만, 고객님께서 직접 반송을 해주실 경우, 회수정보조회가 어려우며, 택배기사님을 통해 수령하신 반송장번호를 직접 등록 시 진행상태 확인이 가능합니다.)
                                                    교환/반품과 관련된 자세한 내용은 '교환/반품 안내' 페이지를 확인해 주세요. 
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="list open">
                                        <td>2</td>
                                        <td>상품</td>
                                        <td class="text_left">
                                            <a href="#해당글">유통기한 넉넉한걸로 보내주세요</a>
                                        </td>
                                        <td>2017.11.03</td>
                                        <td class="state fin">답변완료</td>
                                        <td>
                                            <button type="button" class="btn btn_del">삭제</button>
                                        </td>
                                    </tr>
                                    <tr class="list_cont">
                                        <td colspan="6">
                                            <div class="sec_question">
                                                <p class="text_cont">
                                                    유통기한 넉넉한 걸로 보내주세요
                                                </p>
                                            </div>
                                            <div class="sec_answer">
                                                <h3>답변</h3>
                                                <p>네 넉넉한 것으로 보내드렸습니다</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="list open">
                                        <td>3</td>
                                        <td>교환</td>
                                        <td class="text_left">
                                            <a href="">사이즈 250mm로 교환 가능할까요?</a>
                                        </td>
                                        <td>2017.10.13</td>
                                        <td class="state fin">답변완료</td>
                                        <td>
                                            <button type="button" class="btn btn_del">삭제</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <div class="phone-banner">
                        <div class="deposits">
                                <strong>오프라인</strong>
                                <em>070-8668-8668</em>
                                <span>평일 09:00 ~ 18:00</span>
                        </div>
                        <div class="online">
                                <strong>온라인몰</strong>
                                <em>070-8668-8668</em>
                                <span>평일 09:00 ~ 18:00</span>
                        </div>
                    </div>
                </div>        
            </div>
                            
        </div>
    <!--  CONTENT end-->
    <!-- FOOTER -->
        <? require_once("footer.php");?>
    <!-- FOOTER end-->    
        </div>
</body>
</html>


