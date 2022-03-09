// JavaScript Document
$(function(){

   $('.wrapper').css('width', $(window).width());
   $('.wrapper').css('height', $(window).height());
   $(window).resize(function() {
        $('.wrapper').css('width', $(window).width());
        $('.wrapper').css('height', $(window).height());
   });

});

/*2019.03.31 모달팝업 추가*/

$('#notice').click(function(){
  alert(`업데이트중입니다.
하루가 26시간이었으면 좋겠습니다`);
});
$('#notice2').click(function(){
  alert(`현재 호스팅 이전 중입니다`);
});


/* 2018.11.26 모바일 팝업 추가 */
function modalView(modalName){
  var modalWidth = $(".modalpop .popup-wrap."+modalName).outerWidth() / 2;
  var modalHeight = $(".modalpop .popup-wrap."+modalName).outerHeight() / 2;
  $(".transparents-layer").remove();
  $("body").css({overflow: "hidden"});
  $(".popup-wrap").removeClass("active").css("left", "-99999px").css("top", "-99999px").css("opacity", "0");
  $(".modalpop").css({top: 0, left: 0});
  $(".modalpop").append("<div class='transparents-layer'></div>");
  //$(".transparents-layer").attr("onclick", "modalHide('"+modalName+"')");
  $(".popup-wrap."+modalName).addClass("active").css({top:"50%", left:"50%", marginTop:-modalHeight, marginLeft:-modalWidth}).animate({opacity:1}, 500);
  if($(".modalpop").height() < $(".modalpop .popup-wrap."+modalName).outerHeight()){
    $(".popup-wrap."+modalName).css({top:"100px", marginTop:0});
  }
  $('.slick-slider').slick('setPosition');
}

function modalHide(modalName){
  $(".popup-wrap."+modalName).animate({opacity:0}, 400, function(){
    $("body").css("overflow", "auto");
    $(".popup-wrap."+modalName).css("top", "-99999px").css("left","-99999px");
    $(".modalpop").css({top:"-99999px", left:"-99999px"});
    $(".transparents-layer").animate({opacity:0}, 400, function(){
      $(this).remove();
    });
    $(".popup-wrap."+modalName).removeClass("active");
  });
}
