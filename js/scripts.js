$(document).ready(function(){	
	/*Модальное окно*/
	$('.header_call').click(function() {
			$('.modal').css({'display':'block'});
			$('.modal_window').animate({'top':'300px'},1500);
			
	});		
	$('.close_modal').click(function(){
			$('.modal_window').animate({'top':'-300px'},1500);
			setTimeout(function(){
				$('.modal').css({'display':'none'});
			},1000)	
			
	});
	/*Личный кабинет*/
	$('.header_login').click(function() {
			$('.header_login_in').toggle();
			$('.header_login_reg').toggle();
			
	});
	/*Поисковый фильтр*/
	$('.search_house_fix img').click(function() {
			$('.search_house_tags').toggle();
			
	});

	/*
----------------------------------------------------------------------------------------------
									AJAX для отдельных категорий
----------------------------------------------------------------------------------------------
*/
	
	$('.cat_next').click(function(){
	var metka = $(this).attr('metka');
	var offset = $(this).attr('offset');
	var id = $(this).attr('id'); 


	var data = {
		action: 'load_posts',
		metka_val: metka,
		offset_val: offset,
		id_val: id,
	};

	jQuery.post(ajaxurl, data, function(response){
		var str = $('.cat_list[metka="'+metka+'"]').html();
		$('.cat_list[metka="'+metka+'"]').html(response);
		if (str.indexOf('noposts') == -1) {
		offset = parseInt(offset)+4; 
		$('.cat_next[metka="'+metka+'"]').attr('offset',offset);
		$('.cat_prev[metka="'+metka+'"]').attr('offset',offset-8);
		}
	})
})

	$('.cat_prev').click(function(){
	var metka = $(this).attr('metka');
	var offset = $(this).attr('offset');
	var id = $(this).attr('id'); 

	if (offset>=0) {
	var data = {
		action: 'load_posts',
		metka_val: metka,
		offset_val: offset,
		id_val: id,
	};

	jQuery.post(ajaxurl, data, function(response){
		var str = $('.cat_list[metka="'+metka+'"]').html();
		$('.cat_list[metka="'+metka+'"]').html(response);
		
		offset = parseInt(offset)-4; 
		$('.cat_next[metka="'+metka+'"]').attr('offset',offset+8);
		$('.cat_prev[metka="'+metka+'"]').attr('offset',offset);
		
	})
	}
});


});