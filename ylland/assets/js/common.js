$(document).ready(function () {
   $(window).scroll(function () {
      if ($(document).scrollTop() > 0) {
         $(".header-wrap").addClass('fixed');
      } else {
         $(".header-wrap").removeClass('fixed');
      }
   });

   $( ".gnb").mouseover(function() {
      $(".header-wrap").addClass("on");
   });
   $('.gnb').mouseleave(function(){
      $(".header-wrap").removeClass("on");
   });
   $(".btn-category").click(function(){
       $(this).toggleClass("open");
   });
});

//push menu open
window.onload = function(){
     const pushMenuBtn = document.querySelector(".btn-category");

     pushMenuBtn.addEventListener("click", () => {
         this.classList.toggle("open");
     });
}

