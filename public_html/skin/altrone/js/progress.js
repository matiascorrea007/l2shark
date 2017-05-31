$(document).on('ready', function() {
	$('.progress').each(function(){
		var load = $(this).data('load'),
			load_max = $(this).data('maxLoad'),
			deduction = (load * 100)/load_max; 
		$(this).children('div').stop().animate({width:parseInt(deduction) + "%"},1000);
	});

});
