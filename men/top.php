<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>LUKE urban & classic</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="nav/dist/sidebar-menu.css">
<link rel="stylesheet" href="menstyle.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.responsive-dom.min.js"></script>
<script src="men.js"></script>
<script src="nav/dist/sidebar-menu.js"></script>
<script>
$.sidebarMenu($('.sidebar-menu'))
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

</script>
</head>

<body onLoad="MM_preloadImages('images/btn_facebook_ov.png','images/btn_blog_ov.png','images/btn_insta_ov.png')" onFocus="this.blur();">
<div id="wrapper">
    <header>
        <nav>
            <div class="logo">
                    <a href="index.html"><img src="images/luke_logo.png" alt="루크로고"></a>
            </div>
            <a href="#" id="trigger">MENU</a>
            <ul class="sidebar-menu">
              <li>
                <a href="#">
                  <span>BEST</span> <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                  <li><a href="http://studiolux.or.kr/men/item_view_best100.html">Best100</a></li>
                  <li><a href="http://studiolux.or.kr/men/item_view_new.html">New</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span>TOP</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu" style="display: none;">
                  <li><a href="http://studiolux.or.kr/men/item_view_shirt.html">Shirt</a></li>
                  <li><a href="http://studiolux.or.kr/men/item_view_jacket.html">jacket</a></li>
                  <li><a href="#">trainning</a></li>
                </ul>
              </li>
              <li>
                <a href="#">
                  <span>PANTS</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu" style="display: none;">
                  <li><a href="http://studiolux.or.kr/men/item_view_pants_ss.html">s/s season</a></li>
                  <li><a href="http://studiolux.or.kr/men/item_view_pants_fw.html">f/w season</a></li>
                  <li><a href="#">trainning pants</a></li>
                </ul>
              </li>
              <li>
                <a href="http://studiolux.or.kr/men/item_view_bag.html">
                  <span>BAG</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span>ACCESARY</span><i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                  <li><a href="http://studiolux.or.kr/men/item_view_watch.html">Watch</a></li>
                   <li><a href="http://studiolux.or.kr/men/item_view_belt.html">belt</a></li>
                </ul>
              </li>
            </ul>
            <div class="footer">
                <div class="sns">
                    <ul>
                       <li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('facebook','','images/btn_facebook_ov.png',1)"><img src="images/btn_facebook_ot.png" alt="" width="15" height="16" id="facebook"></a></li>
                       <li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('blog','','images/btn_blog_ov.png',1)"><img src="images/btn_blog_ot.png" alt="" width="15" height="16" id="blog"></a></li>
                       <li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('insta','','images/btn_insta_ov.png',1)"><img src="images/btn_insta_ot.png" alt="" width="15" height="15" id="insta"></a></li>
                    </ul>
                </div>
                <select name="brand" class="selmb family_site" data-style="selectBox" data-limit="7" data-control="up" data-fnc="selected_brand">
                    <option value="" selected="true">FAMILY SITE</option>
                    <option value="http://www.daks.co.kr">DAKS</option>
                    <option value="http://www.hazzys.com/hzjsp/index.jsp">HAZZYS</option>
                    <option value="http://www.lafumakorea.co.kr/lfjsp/main.jsp">LAFUMA</option>
                    <option value="http://www.il-corso.com">IL CORSO</option>
                    <option value="http://www.maestro.co.kr/html/main.html">MAESTRO</option>
                    <option value="http://www.jillstuartny.com">JILL STUART NY</option>
                    <option value="http://www.towngent.co.kr">TOWNGENT</option>
                </select>
                <div class="copyright">
                    <span>copyright &copy; 2017 studioLux</span>
                </div>
            </div>
      </nav>
   </header>    

	<div class="main">
<script src="nav/dist/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
	 $(function(){
   	      	var pull=$('#trigger');
   	      	    menu=$('nav>ul');
   	      	    menuHeight=menu.height();   	      
   	      $(pull).on('click', function(e){
   	      	e.preventDefault();
   	      	menu.slideToggle();   	      	
   	      });
   	      $(window).resize(function(){
   	      	var w=$(window).width();
   	      	if(w>768 && menu.is(':hidden'))
   	      		{menu.removeAttr('style');}
   	      });
   	  });
  </script>
</body>
<html>
