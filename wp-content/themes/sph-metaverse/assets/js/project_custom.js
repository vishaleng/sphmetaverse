
	$=jQuery;
	jQuery(document).ready(function($) {
		var imgs = jQuery('img-expand').children();
		var contWidth = jQuery('#img-container').width();
		
		
		var bigWidth = 30;
		var smallWidth = (100 - bigWidth) / (imgs.length);
		var mouseSmalLWidth = (100/imgs.length - 1);
		var normalWidth = (100/ imgs.length);
		// var smallWidth =  (contWidth - bigWidth) / (imgs.length - 1);
		
		console.log(smallWidth);
		console.log(bigWidth);
		// console.log(imgs.length);
		// console.log(contWidth);
		
		jQuery('.img-expand').mouseover(function() {
		  jQuery(this).stop().animate({
			// width: bigWidth+'%'
			width: '40%'
		  }, 300);
		  
		  jQuery(this).siblings().stop().animate( {
			// width: smallWidth+'%'
			width: '15%'
		  }, 300);
		  
		})
		
		jQuery('.img-expand').mouseout(function(){
		  jQuery(this).stop().animate({
			// width: smallWidth+'%'
			width: '20%'
		  }, 300);
		  jQuery(this).siblings().stop().animate( {
			// width: smallWidth+'%'
			width: '20%'
		  }, 300);
		})
		
		
	  });
	  
	  $(document).on('click','.menu_icon a',function(){
		$('.main_menu_wrapper').addClass('menu_active');
	  })
	  $(document).on('click','.close_menu',function(){
		$('.main_menu_wrapper').removeClass('menu_active');
	  })
	  $(document).on('click','.main_menu ul li a',function(){
		$('.main_menu_wrapper').removeClass('menu_active');
	  })

