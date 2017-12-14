$(document).ready(function(e) {
		
	$('.showlk').click(function(e) {
        showPopup('.lk');
    });
	
	$('.showreg').click(function(e) {
        showPopup('.reg');
    });
	
	$('.showdonate').click(function(e) {
        showPopup('.don');
    });
	
	
	$('.showfiles').click(function(e) {
        showPopup('.fil');
    });
	
	
	$('.close').click(function(e) {
        closePopup();
    });
	$('.events .tabs li').click(function(e) {
		$('.events .tab-content').removeClass('active');
		$('.events .tabs li').removeClass('active');
        $('.events .tab-content.'+$(this).attr('class')).addClass('active');
		$(this).addClass('active');
    }); 
	
	$('.events .tab-content .event').click(function(e) {
		$(this).parent().find('.event').removeClass('active');
        $(this).addClass('active');
    }); 
	
	$('.next').click(function(e) {
		if($('.slides li.current:last').next().is('li')) {
			$('.slides li.current:first').removeClass('current');
			$('.slides li.current:last').next().addClass('current');
		} else {
			$('.slides li').removeClass('current');
			$('.slides li:first').addClass('current').next().addClass('current').next().addClass('current').next();
		}
    });
	
	$('.prev').click(function(e) {
		if($('.slides li.current:first').prev().is('li')) {
			$('.slides li.current:last').removeClass('current');
			$('.slides li.current:first').prev().addClass('current');
		} else {
			$('.slides li').removeClass('current');
			$('.slides li:last').addClass('current').prev().addClass('current').prev().addClass('current').prev();
		}
    });
	$('.fancybox').fancybox();
	
	$('.scroller').slimScroll({
        height: '420px', 
		width: '404px',
		railVisible: true,
		alwaysVisible: true,
		size: '8px',  
		color: '#34302d',    
		railColor: '#1e1d1b',
		
    });
	
		$('#stock').click(function(e) {
		if($(this).hasClass('active')) {
			$(this).animate({left: -440},300).removeClass('active');	
		} else {
        	$(this).animate({left: -100},300).addClass('active');
		}
    });
	
	banner();

	vk();
	
});

function showPopup(el) { 
	$('.overlay, body, .popup'+el).addClass('active');
}

function closePopup() {
	$('.overlay, .popup, body').removeClass('active');	
}

function banner() {
		$('.banner').animate({top: 85},600,function(){$('.banner').animate({top: 95},600); banner()});	
	}

function vk() {
		$('.vk').animate({bottom: 35},600,function(){$('.vk').animate({bottom: 45},600); vk()});	
	}
