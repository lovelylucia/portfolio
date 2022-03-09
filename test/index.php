<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>무제 문서</title>
<style>
	* {
		padding:0;
		margin:0;
	}
	
	.wrapper {
		width:800px;
		border:1px solid #ededed;	
	}
	a:visited {
		color:#333;
		text-decoration: none;
	}
	a:link {
		color:#333;
		text-decoration: none;
	}
	.content {
		padding:50px;
	}
	.tab-box {
		height:50px;
		list-style: none;
	}
	.tab-box li {
		width:25%;
		height:50px;
		float:left;
		position:relative;
	}
	.tab-box li.on:before {
		content: '';
    	position: absolute;
		bottom: -3px;
		left: 50%;
    	width: 15px;
    	height: 8px;
    	margin-left: -6px;
    	background: url('ico_arrow.png') no-repeat 0 0;
	}
	.tab-box li a {
    	display: block;
    	height: 45px;
    	line-height: 45px;
    	font-size: 16px;
    	background: #efefef;
    	border-left: 1px solid #fff;
    	text-overflow: ellipsis;
    	white-space: nowrap;
    	overflow: hidden;
		text-align: center;
		text-decoration: none;
	}
	
	.tab-box li.on a {
		background:#666;
		color:#fff;
	}
	.layer_popup {
		background: #ccc;
	}
</style>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
$(function(){
	$('.tab-box ul li').each(function(){
		$(this).click(function(){
			$(this).addClass('on');
			$(this).siblings().removeClass('on');		
		});
	});
})	

</script>
<script language="Javascript" type="text/javascript">

 function setCookie( name, value, expirehours ) { 
  var todayDate = new Date(); 
  todayDate.setHours( todayDate.getHours() + expirehours ); 
  document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";" 
 }
 function closeWin() { 
  if(document.getElementById("pop_today").checked){
   setCookie( "ncookie", "done" , 24 ); 
  }
  document.getElementById('layer_pop').style.display = "none";
 }

</script>
<script type="text/javascript">

		$(function(){

			$('#layer_pop').draggable({cursor:'move',snap:true,scroll:true,scrollSensitivity:100});

		});

	</script>

</head>

<body>
	<div class="layer_popup" style="position:absolute; width:500px;left:50%; margin-left:-480px; top:90px; z-index:1;" id="layer_pop">
		<table width="500" border="0" cellpadding="0" cellspacing="0">
		<tr>
		 <td><img src="images/popupimage.jpg" width="500" height="500" border="0" /></td>
		</tr>
		<tr>
		 <td align="center" height="30" bgcolor="#333333">
		 <table width="95%" border="0" cellpadding="0" cellspacing="0">
		 <tr>
		  <td align="left" class="pop" style="color:#FFF"><input type="checkbox" name="pop_today" id="pop_today"  />오늘 하루 이 창 열지 않음</td>
		  <td align="right" class="pop"><a style="color:#FFF" href="javascript:closeWin();" >닫기</a></td>
		 </tr>
		 </table></td>
		</tr>
		</table>
		<script language="Javascript" type="text/javascript">

		 cookiedata = document.cookie;
		 if (cookiedata.indexOf("ncookie=done") < 0){ 
		  document.getElementById('layer_pop').style.display = "inline";
		 } else {
		  document.getElementById('layer_pop').style.display = "none";
		 }

		</script>
	</div>
	<!--<div class="wrapper">
		<?php
		  include_once('tab.html');
		?>
		<div class="content">
			첫번째 컨텐츠
		</div>
	</div>
	-->
	<div>아에이오우</div>
</body>
</html>
