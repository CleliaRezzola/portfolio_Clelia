$(document).ready(function(){
	
	$('.pc, .watch').on('mouseover', function(){
		$('.home').css('background-image', 'url(images/home_page_hover.png)');
	});

	$('.pc, .watch').on('mouseout', function(){
		$('.home').css('background-image', 'url(images/home_page.png)');
	});

	$('a[href="#scrollToTop"]').on('click', function() {
		$('html, body').animate({scrollTop: 0}, "slow");
		return false;
	});

});