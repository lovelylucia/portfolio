<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KSEEKMALL</title>
	<link rel="stylesheet" type="text/css" href="css/customer_style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/tab.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            function submit_click(){
               alert("전송되었습니다"); 
            };
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
                    <div class="_1on1_wrap">
                        <h4>1:1 문의하기</h4>
                        <p>케이시크몰 서비스에 대해 궁금하신 점을 문의해 주시면 친절하게 답변드리겠습니다.</p>
                        <p>상품에 대한 문의는 해당 상품페이지에서 문의해 주시면 더욱 신속하게 답변 받으실 수 있습니다.</p>
                        <form id="" action="" method="">
                            <table>
                                <caption>1:1 문의 등록</caption>
                                <colgroup>
                                        <col style="width:20%;">
                                        <col style="width:80%;">
                                </colgroup>
                                <tbody>
                                    
                                    <tr>
                                        <th scope="col"><label for="">문의유형</label></th>
                                        <td>
                                            <select id="" title="문의유형 항목을 선택하세요" style="width:192px;">
                                                    <option value="" selected="selected">선택해주세요</option>
                                                    <option value="">상품</option>
                                                    <option value="">주문/결제</option>
                                                    <option value="">배송</option>
                                                    <option value="">취소/반품/환불</option>
                                                    <option value="">교환</option>
                                                    <option value="">회원/멤버십</option>
                                                    <option value="">이벤트</option>
                                                    <option value="">기타</option>
                                            </select>
                                            <select id="" title="문의유형 항목을 선택하세요" style="width:192px;" disabled="disabled">
                                                    <option value="" selected="selected">선택해주세요</option>
                                            </select>
                                            <!--<span class="store_off"><input type="checkbox" id="" name="n" value="Y">
                                                <label for="">오프라인 매장 문의</label> -->
                                            </span>
                                        </td>
                                    </tr>
                                    <!--<tr id="" style="display: none;">
                                        <th scope="col"><label for="">문의상품</label></th>
                                        <td>
                                            <div class="over" style="width:98%;">
                                                <div class="input-delete" style="width:84%;">
                                                    <input type="text" id="goodsInquiry" title="문의상품을 선택해 주세요" placeholder="문의상품을 선택해 주세요" readonly="readonly">
                                                    <button type="button" class="ButtonDelete" onclick="javascript:counsel.reg.goodsDel();">삭제</button>
                                                </div>
                                                <input type="button" class="ButtonSubmit" onclick="" value="문의상품 선택">
                                                <input type="hidden" id="" value="">
                                                <input type="hidden" id="" value="N">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                            </div>
                                        </td>
                                    </tr>-->
                                    <tr>
                                            <th scope="col"><label for="">제목</label></th>
                                            <td>
                                                <input type="text" name="" placeholder="제목을 입력해주세요" style="width:387px"/>
                                            </td>
                                    </tr>
                                    <tr class="textarea">
                                            <th scope="col"><label for="">내용</label></th>
                                            <td>
                                                <textarea id="" name="" cols="5" rows="1" placeholder="문의내용을 입력해주세요.(2000자 이내)" style="width:98%;height:280px;"></textarea>
                                                <!--<label for="">
                                                        <button type="button" id="" class="file">첨부파일</button>
                                                </label>-->
                                                <input type="file" id="" name="" class="btnFileAdd" value="첨부파일" title="첨부파일 선택" style="display:block;">
                                                <input type="hidden" name="fileName" id="" value="">
                                                <!--<span id="fileName" class="file" style="display: none;"></span><button type="button" id="" class="ButtonDelete">삭제</button></span>-->
                                                <span class="txt">5MB 이하의 이미지 파일 (JPG, PNG, GIF) 1개를 첨부하실 수 있습니다.</span>
                                            </td>
                                    </tr>
                                    <tr class="notice">
                                        <th scope="col" style="border:0;">답변등록 알림(선택)</th>
                                        <td style="border:0;">
                                            <ul>
                                                <li>
                                                    <input type="checkbox" id="" value="" name="" class="chkSmall" checked="checked"><label for="">SMS</label>
                                                    <select title="통신사를 선택하세요" id="" class="sms" name="" style="width:100px;" selected="selected">
                                                        <option selected="selected">010</option>
                                                        <option>011</option>
                                                        <option>016</option>
                                                        <option>017</option>
                                                        <option>018</option>
                                                        <option>019</option>
                                                        <option>0130</option>
                                                        <option>0303</option>
                                                        <option>0502</option>
                                                        <option>0504</option>
                                                        <option>0505</option>
                                                        <option>0506</option>
                                                    </select>
                                                    <span class="dash">-</span>
                                                    <input type="tel" class="sms" name="" value="" title="휴대폰 가운데 4자리를 입력하세요" maxlength="4" style="width:95px;">
                                                    <span class="dash">-</span>
                                                    <input type="tel" class="sms" name="" value="" title="휴대폰 마지막 4자리를 입력하세요" maxlength="4" style="width:95px;">
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="" name="" value="" class="chkSmall"><label for="">E-mail</label>
                                                    <input type="text" title="아이디를 입력하세요" class="email" name="" placeholder="아이디를 입력하세요" style="width:152px; ime-mode:disabled;">
                                                    <span class="des">@</span>
                                                    <input type="text" class="email" name="" title="직접 입력 하세요" placeholder="직접 입력 하세요" style="width:140px; ime-mode:disabled;">
                                                   
                                                    <select title="도메인 주소를 선택하세요." class="email" style="width:122px;" id="" selected="selected">
                                                            <option value="-1" selected="selected">직접입력</option>
                                                            <option value="hanmail.net">hanmail.net</option>
                                                            <option value="naver.com">naver.com</option>
                                                            <option value="nate.com">nate.com</option>
                                                            <option value="hotmail.com">hotmail.com</option>
                                                            <option value="yahoo.co.kr">yahoo.co.kr</option>
                                                            <option value="paran.com">paran.com</option>
                                                            <option value="empal.com">empal.com</option>
                                                            <option value="gmail.com">gmail.com</option>
                                                            <option value="dreamwiz.com">dreamwiz.com</option>
                                                            <option value="korea.com">korea.com</option>
                                                            <option value="lycos.co.kr">lycos.co.kr</option>
                                                            <option value="hanafos.com">hanafos.com</option>
                                                            <option value="daum.net">daum.net</option>
                                                            <option value="chol.com">chol.com</option>
                                                            <option value="feechal.com">feechal.com</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn_wrap">
                                <p>
                                    <button type="button" class="btn btn_submit" onclick="submit_click();">문의하기</button>
                                    <button type="button" class="btn btn_cancel" onclick="">취소</button>
                                </p>
                            </div>
                        </form>       

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


