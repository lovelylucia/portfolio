// JavaScript Document



	$(document).ready(function(){
		$('.dandy').hover(function() {
			$(this).attr('src','images/dandy1_gray.jpg')},
			function() {$(this).attr('src','images/dandy1.jpg')}
		)
		$('.casual').hover(function() {
			$(this).attr('src','images/casual1_gray.jpg')},
			function() {$(this).attr('src','images/casual1.jpg')}
		)
	})
	
	
	
	$(document).ready(function(){
		$("img").hover(function(){
			$(".text").hide();
		})
	});
 