$(function(){
	//商品分类
	$('.all .item').hover(function(){
		$(this).addClass('active').find('s').hide();
		$(this).find('.product-wrap').show();
	},function(){
		$(this).removeClass('active').find('s').show();
		$(this).find('.product-wrap').hide();
	});
	});


/*销量排行榜折叠效果*/
	
	$(document).ready(function () {
		
		$('#ranking a.item').click(function () {

			//slideup or hide all the Submenu
			$('#ranking li').children('ul').slideUp('fast');	
			
			//remove all the "Over" class, so that the arrow reset to default
			$('#ranking a.item').each(function () {
				if ($(this).attr('rel')!='') {
					$(this).removeClass($(this).attr('rel') + 'Over');	
				}
			});
			
			//show the selected submenu
			$(this).siblings('ul').slideDown('fast');
			
			//add "Over" class, so that the arrow pointing down
			$(this).addClass($(this).attr('rel') + 'Over');			

			return false;

		});
	
	});

