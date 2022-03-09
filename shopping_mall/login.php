<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>케이시크몰에 오신 것을 환영합니다</title>
	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href="css/customer_style.css" rel="stylesheet" type="text/css">
	<script src="../js/nav.js"></script>
	<script src="../js/jquery-1.8.2.min.js"></script>
	<script src="../js/nav.js"></script>
	<script>
	$(document).ready(function() {
		$("#login_action").submit(function() {
			var mode = $(this).find("input[name=mode]").val();
			var uid = $(this).find("input[name=UID]").val();
			var passwd = $(this).find("input[name=PASSWD]").val();
			$.post("../../user/gtlogd.action.php", {
				"mode":mode,
				"email":uid,
				"pw":passwd
			},function(result){
				if (result.indexOf("OK")!=-1){
					location.href="./index.php";
				}
				else if (result.indexOf("ERR")!=-1){
					var reStr=result.split(",");
					var res = trim(reStr[1]);
					if(res=="L") {
						alert($.trs("m.confirm.idpw"));
					}
					else {
						alert("login err");
					}
				}
				else {
					alert(result);
				}
			});
			return false;
		});
	});

	function trim(str){    
		return str.replace(/^\s*|\s*$/g,"");
	}
	</script>
</head>
<body>
    <div id="wrapper">
        <div class="header_wrap">
                <div class="gnb_wrap">
                    <div class="gnb_inner">
                        <ul class="gnb_left">
                            <li><a href="index.php" class="join_logo"><img src="./image/join_logo.jpg" alt="케이시크 로고" /></a></li>
                        </ul>
                        <ul class="gnb_right">
                                <li><a href="login.php">로그인</a></li>
                                <li><a href="join.php">회원가입</a></li>
                                <li><a href="center.php">고객센터</a></li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="container">   
            <div class="loginWarp">
                <div class="login_title"> 
                        <h3>LOGIN</h3>
                        <p>케이시크몰에 오신 것을 환영합니다</p>
                </div>
                <div class="login_box">
                                <form id="login_action">
                                        <input type="hidden" id="mode" name="mode" value="LOGIN" placeholder="아이디" /> 
                                        <div class="login_content">
                                                <div class="form_wrap">
                                                        <p>
                                                                <input type="text" placeholder="이메일" id="uid" name="UID" tabindex="1" autofocus autocomplete="on" required="required">
                                                                <input type="password" placeholder="비밀번호" id="password" name="PASSWD" tabindex="2" required="required">
                                                        </p>
                                                        <input type="submit" class="login_btn" value="로그인" >
                                                </div>

                                                <div class="login_b"> 
                                                        <p class="btnFindip">
                                                                <span class="txt blind">아이디를 잊어버리셨나요?</span>
                                                                <span class="btn btn_userid">
                                                                    <input type="button" value="아이디/패스워드 찾기" onclick="document.location.href='find_idpw.php'"/>
                                                                </span>
                                                        </p>
                                                        <p class="btnJoin">
                                                                <span class="btn btn_join">
                                                                                <input type="button" value="회원가입" onclick="document.location.href='join.php'" />
                                                                </span>
                                                        </p> 
                                                        <!-- <p>
                                                                <span class="txt blind">비밀번호를 잊어버리셨나요?</span>
                                                                <span class="btn btn_userpw">
                                                                        <input type="button" value="비밀번호찾기" onclick="document.location.href='/gt/pw_finder/r_index.php'" />
                                                                </span>
                                                        </p> -->
                                                </div>

                                        </div>
                                </form>
                        </div>
                </div>
        </div>
        <!--<footer>
            <div class="footer_inner">
                <span class="center">ⓒ 2017 KSEEK. All rights reserved.</span>
            </div>
        </footer>-->
    </div>
</body>
</html>
