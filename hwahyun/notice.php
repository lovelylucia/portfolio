<?php
include $_SERVER["DOCUMENT_ROOT"] . "/include/top.php";
?>
    <!-- 상단 이미지 [S]-->
    <div id="sub_visual">
        <div class="vis_img_wrap sub_bg_04">
        </div>
        <p>회사소개</p>
    </div>
    <!-- 상단 이미지 [E]-->
    <div class="sub_contents_wrap notice_wrap">
        <!-- 서브 컨텐츠 [S]-->
        <div class="contents_inner">
            <!-- 내용 [S]-->
            <div class="tit_area">
                <h3 class="title">공지사항</h3>
            </div>
            <div class="notice_box">
                <!-- 게시판 시작 -->
                <link rel="StyleSheet" href="../inc/board/board_1.css" type="text/css">
                <table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#FFFFFF" background="#">
                    <tr>
                        <td>
                            <?php
                            $bbs_code = "Site_BBS_1";
                            include(_PACK_ROOT_ . "/bbs/bbs.php");
                            ?>
                        </td>
                    </tr>
                </table>
                <!-- 게시판 끝 -->
            </div>
            <!-- 내용 [E]-->
        </div>
    </div>
    <!-- 서브 컨텐츠 [E]-->
<?php
require_once('bottom.html');
?>