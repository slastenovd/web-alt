$(document).ready(function () {
	// выравниваем сетку, т.к. рекламные блоки имеют разную высоту
	var autoHeightADBlocks = function(){
		var item_height = $('.item__thumbnail:first').height();
		var item_pading_bottom = $('.item:first').css("padding-bottom").replace("px", "");
		var windowWidth = $(window).width() + 17;
		var resHeight = 0;
		if ( windowWidth > 599 ) {
			resHeight = item_height*2 + item_pading_bottom*2 +1;
		} else {
			resHeight = item_height*4 + item_pading_bottom*6 +2;
		}
		$('.ad-1').height( resHeight );
		$('.ad-2').height( resHeight );
	}

	$(window).on('resize', function(){
		autoHeightADBlocks();
	});

	autoHeightADBlocks();

});