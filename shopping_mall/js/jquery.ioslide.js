 /*
 * jQuery IoSlide v1  
 *
 *  Copyright 2016, Kim Sung-Hyun
 *
 *  Licensed under MIT
 *
 */
 
 (function($){
	  $.fn.ioslide = function(options){
			var $target = $(this);
			var $target_item = $target.children();
			var  option = {
				controls: true,
				pager: true,
				auto: true,
				subtext: true,
				style:'slide',
				speed:500,
				totalSpeed : 4000

			};
			
			$.extend(option, options);
	
			var  slider = {};
			var  setup = function(){
				$target.wrap('<div class="io_slide_wrap"><div class="io_slide_viewport"></div></div>');
				slider.viewport = $target.parent();
				slider.pager = $('<div class="io_pager" />');
				if (option.pager) {
					slider.viewport.append(slider.pager);
					makerPager();
					pager();
				}
				if (option.controls) {
					slider.controls = $('<div class="io_controls" />');
					slider.viewport.append(slider.controls);
					makerControls();
					controls();
				}
				if (option.auto) {
					startTimer();
					autocon();
				}

					slideStart();
			}
					
			var inx = 0;
			var inxPrev;
			var inxNext;
			var leftN;	
			var timer;
			
			var  slideStart = function(){
				/*$(window).load(function(){
					var imgWidth = $target_item.eq(0).width();
					var imgHeight = $target_item.eq(0).height();
					var imgHper = (100*imgHeight) / imgWidth;
					var  wrapHeight = slider.viewport.width() * (imgHper / 100); 
					$target.css({height: wrapHeight});
					$(window).resize(function(){
						wrapHeight = slider.viewport.width() * (imgHper / 100); 
						$target.css({height: wrapHeight});
					});	
					
				
					
				});*/
					$target.css({position: 'relative', overflow:'hidden',zIndex:'1'});
					slider.viewport.css({position: 'relative',width: '100%',overflow:'hidden'});
					if (option.style == 'slide') {	slideSet();	}
					if (option.style == 'fade') {	fadeSet();	}
					if (option.subtext) {subtextAni();}
			}
//-------		
			var  slideSet = function(){
				 inxPrev = inx - 1;
				 inxNext = inx + 1;
				if (inxPrev == -1 ){  inxPrev =  $target_item.length-1; }  
				if (inxNext == $target_item.length ){  inxNext =  0; }  
				$target.css({width: '300%',	left: '-100%'});
				$target_item.css({position: 'absolute',	width: 100 / 3+'%', zIndex: 0 });
				$target_item.eq(inxPrev).css({zIndex:1, left:0 });
				$target_item.eq(inx).css({zIndex:1,	left:100 / 3+'%'});
				$target_item.eq(inxNext).css({zIndex:1,	left:(100 / 3)*2+'%'});
			}

			var  slideAni =  function(){
				if (inx== -1 ){  inx =  $target_item.length-1; }  
				if (inx == $target_item.length ){  inx =  0; }  
				$target.animate({left:leftN+'%'},option.speed,function(){
					$target.css({left:'-100%'});
						slideSet();
					if (option.subtext) {subtextAni();}
				});	
				if (option.pager) { $(".pager_item").addClass('pager_on').not(':eq('+inx+')').removeClass('pager_on');}
				
			}
//-------------------------			
			var  fadeSet = function(){
				$target.css({width: '100%'});
				$target_item.css({position: 'absolute', width: '100%', zIndex: 0,display:'none' });
				$target_item.eq(inx).css({zIndex:10, display:'block'});
			}
			
			var  fadeAni =  function(){
				if (inx== -1 ){  inx =  $target_item.length-1; }  
				if (inx>= $target_item.length ){  inx =  0; }  
				
				$target_item.eq(inx).css({zIndex:'11'}).fadeIn(option.speed,function(){
					fadeSet();
					if (option.subtext) {subtextAni();}
				});	
				if (option.pager) { $(".pager_item").addClass('pager_on').not(':eq('+inx+')').removeClass('pager_on');}
			}
		
			var  makerControls = function(){
				var contHtml = '';
				contHtml+="<button type='button' class='prev_btn'>Prev</button>";	
				contHtml+="<button type='button' class='next_btn'>next</button>";	
			//	contHtml+="<button type='button' class='prev_btn'><i class='xi-angle-left'></i></button>";	
			//	contHtml+="<button type='button' class='next_btn'><i class='xi-angle-right'></i></button>";	
				slider.controls.html(contHtml);
			}
			
			var controls = function(){
				var  aniNext = function() {
					if (option.style == 'slide') {
						if (!$target.is(':animated')) {
							leftN = -200;
							inx++;
							slideAni();
						}
					}else{
						if (!$target_item.is(':animated')) {
						inx++;
						fadeAni();
						}
					}	
				}
				
				var  aniPrev = function() {
					if (option.style == 'slide') {
						if (!$target.is(':animated')) {
						leftN = 0;
						inx--;
						slideAni();
						}
					}else {
						if (!$target_item.is(':animated')) {
						inx--;
						fadeAni();
						}
					}	
				}
				
				$(".next_btn").click(function(){	aniNext();});
				$(".prev_btn").click(function(){ aniPrev();});
				
			}
//-------------------------			
			var  makerPager = function(){
				var pagerHtml = '';
				var pagerW = 100/$target_item.length;
				pagerHtml+="<ul class='pager_group'>";	
				for(var i=0; i < $target_item.length; i++){
					var pagerNum = i + 1;
					if(i == 0){
					pagerHtml += '<li style="width:'+pagerW+'%" class="pager_item pager_on pager'+pagerNum+'"></li>'	
					}else{
					pagerHtml += '<li style="width:'+pagerW+'%" class="pager_item pager'+pagerNum+'"></li>';
					}
				}
				pagerHtml+="</ul>";	
				slider.pager.html(pagerHtml);
			}
			
			var  pager = function(){

				$(".pager_item").click(function(){
					if (option.style == 'slide') {
						if (!$target.is(':animated')) {
							var  pagerInx  = $(this).index('.pager_item');
							$(".pager_item").addClass('pager_on').not(':eq('+pagerInx+')').removeClass('pager_on');
							if (pagerInx == inx) return false;
							if (pagerInx >= inx){	
								leftN = -200;	
								inx = pagerInx;
								$target_item.eq(pagerInx).css({zIndex:2, left:(100 / 3)*2+'%'});
								slideAni();		
							}else{
								leftN = 0;
								inx = pagerInx;
								$target_item.eq(pagerInx).css({zIndex:2, left:0 });
								slideAni();		
							}
						}
					}else{
						if (!$target_item.is(':animated')) {
							var  pagerInx  = $(this).index('.pager_item');
							$(".pager_item").addClass('pager_on').not(':eq('+pagerInx+')').removeClass('pager_on');
							if (pagerInx == inx) return false;
								inx = pagerInx;
								fadeAni();
						}
					}
					
				});
			}
//-------------------------------
			var  subtextAni = function(){
				var subTextLen = $target_item.eq(inx).children().length;
				for(var i = 0; i<subTextLen; i++){
					
					$target_item.eq(inx).children().eq(i).delay(120*i).fadeIn(800,function(){
						$target_item.not(':eq('+inx+')').children().css({display:'none'});
					});
					
				}
			
				
			}
   			
			
//-------------------------		
					function autoAni(){
						if (option.style == 'slide') {
							if (!$target.is(':animated')) {
								leftN = -200;
								inx++;
								slideAni();
							}
						}else{
							if (!$target_item.is(':animated')) {
							inx++;
							fadeAni();
							}
						}	
					}	
					function startTimer(){timer = setInterval( autoAni, option.totalSpeed);}
					function stopTimer(){clearInterval(timer); }
					var  autocon = function(){
						$(".pager_item , .next_btn , .prev_btn").mouseenter(function(){ stopTimer(); });
						$(".pager_item  , .next_btn , .prev_btn").mouseleave(function(){ startTimer(); });
					}
				
		setup();
	};
 })(jQuery)
