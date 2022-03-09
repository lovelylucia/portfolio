

$(function() {
  
   //상품정보 탭
	$('.select_title').click(function() {
		$('.combobox_list').toggle();
	});

  //제품정보 탭
	$('.info_tab > li').click(function() {
		var n = $(this).index();
		$('.info_tab > li').removeClass();$(this).addClass('select_li');
		$('.tab_box').css('display', 'none');
		$('.tab_box').eq(n).css('display', 'block');
	});

});