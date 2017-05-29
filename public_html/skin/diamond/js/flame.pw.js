$(document).ready(function(e) {
	if(document.location.hash == "#eng"){
        if($.cookie('lang') == "rus") {
            $.cookie('lang', "eng", {
                expires: 5,
                path: '/'
            });
            location.reload();
        }
    }else if(document.location.hash == "#rus"){
        if($.cookie('lang') == "eng") {
            $.cookie('lang', "rus", {
                expires: 5,
                path: '/'
            });
            location.reload();
        }
    }

    if($.cookie('lang') == "rus"){
        $('#lang_eng').removeClass('active');
        $('#lang_rus').addClass('active');
    }
	else if($.cookie('lang') == "eng"){
        $('#lang_rus').removeClass('active');
        $('#lang_eng').addClass('active');
    }
    $('body').on('click', '[lang]', function () {
        $.cookie('lang', $(this).attr('lang'), {
            expires: 5,
            path: '/'
        });
        location.reload();
    });
	$('.status .item').each(function(i, el) {
        $(el).find('.load-line').css('width',$(el).attr('data-online')/50+'%');
    });

	$('.news-block').each(function(i, el) {
        if(i <=1) {
			$(el).addClass('active');	
		}
		if(i >=2) {
			$('#btn_more_news').css('display','block');
		}
		
		$('#btn_more_news').click(function(e) {
            $(el).addClass('active');
			$(this).fadeOut(500);
        });
    });
	
	//% онлайн 1
	var rand = function(min, max) {
	return Math.floor(arguments.length > 1 ? (max - min + 1) * Math.random() + min : (min + 1) * Math.random());
	};
	$('#percent_online_0').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.sonline_0 span').html();
	var curPercent =  online/5000*100;
	if(curPercent > 99) {
		curPercent = 99;
		serv.find('.percent_0').html('100%');
	}
	console.log(curPercent);
	var num = 0;
	var up_up = setInterval( function() {
		if(num > curPercent){
			clearInterval(up_up);
			return;
		}
		if(curPercent > 0) {
			num = parseFloat(num) + parseFloat(rand(1));
			num =  Math.ceil(num);

		} else {
			num = 0;
		}
			serv.find('.percent_0').html(num+'%');
		}, 15);
	});
	//% онлайн 2
	var rand = function(min, max) {
	return Math.floor(arguments.length > 1 ? (max - min + 1) * Math.random() + min : (min + 1) * Math.random());
	};
	$('#percent_online_1').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.sonline_1 span').html();
	var curPercent =  online/5000*100;
	if(curPercent > 99) {
		curPercent = 99;
		serv.find('.percent_1').html('100%');
	}
	console.log(curPercent);
	var num = 0;
	var up_up = setInterval( function() {
		if(num > curPercent){
			clearInterval(up_up);
			return;
		}
		if(curPercent > 0) {
			num = parseFloat(num) + parseFloat(rand(1));
			num =  Math.ceil(num);

		} else {
			num = 0;
		}
			serv.find('.percent_1').html(num+'%');
		}, 15);
	});
	//% онлайн 2
	var rand = function(min, max) {
	return Math.floor(arguments.length > 1 ? (max - min + 1) * Math.random() + min : (min + 1) * Math.random());
	};
	$('#percent_online_2').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.sonline_2 span').html();
	var curPercent =  online/5000*100;
	if(curPercent > 99) {
		curPercent = 99;
		serv.find('.percent_2').html('100%');
	}
	console.log(curPercent);
	var num = 0;
	var up_up = setInterval( function() {
		if(num > curPercent){
			clearInterval(up_up);
			return;
		}
		if(curPercent > 0) {
			num = parseFloat(num) + parseFloat(rand(1));
			num =  Math.ceil(num);

		} else {
			num = 0;
		}
			serv.find('.percent_2').html(num+'%');
		}, 15);
	});
	//% онлайн титул 1
	$('#tooltip_online').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.tonline span').html();
	var tesssst =  online;
	if(tesssst >= 0) {
		serv.find('.tooltip_on').html('< 500 игроков');
	}
	if(tesssst >= 500) {
		serv.find('.tooltip_on').html('500+ игроков');
	}
	if(tesssst >= 1000) {
		serv.find('.tooltip_on').html('1000+ игроков');
	}
	if(tesssst >= 1500) {
		serv.find('.tooltip_on').html('1500+ игроков');
	}
	if(tesssst >= 2000) {
		serv.find('.tooltip_on').html('2000+ игроков');
	}
	if(tesssst >= 2500) {
		serv.find('.tooltip_on').html('2500+ игроков');
	}
	if(tesssst >= 3000) {
		serv.find('.tooltip_on').html('3000+ игроков');
	}
	if(tesssst >= 3500) {
		serv.find('.tooltip_on').html('3500+ игроков');
	}
	if(tesssst >= 4000) {
		serv.find('.tooltip_on').html('4000+ игроков');
	}
	if(tesssst >= 4500) {
		serv.find('.tooltip_on').html('4500+ игроков');
	}
	if(tesssst >= 5000) {
		serv.find('.tooltip_on').html('5000+ игроков');
	}
	if(tesssst >= 77777) {
		serv.find('.tooltip_on').html('<span style="color:#64DA89;">Open Beta Test</span>');
	}
	if(tesssst >= 88888) {
		serv.find('.tooltip_on').html('<span style="color:#ffffff;">Скоро...</span>');
	}
	if(tesssst >= 99999) {
		serv.find('.tooltip_on').html('<span style="color:#FF4C4C;">Closed Beta Test</span>');
	}
	});
	//% онлайн титул 2
	$('#tooltip_online2').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.tonline2 span').html();
	var tesssst =  online;
	if(tesssst >= 0) {
		serv.find('.tooltip_on2').html('< 500 игроков');
	}
	if(tesssst >= 500) {
		serv.find('.tooltip_on2').html('500+ игроков');
	}
	if(tesssst >= 1000) {
		serv.find('.tooltip_on2').html('1000+ игроков');
	}
	if(tesssst >= 1500) {
		serv.find('.tooltip_on2').html('1500+ игроков');
	}
	if(tesssst >= 2000) {
		serv.find('.tooltip_on2').html('2000+ игроков');
	}
	if(tesssst >= 2500) {
		serv.find('.tooltip_on2').html('2500+ игроков');
	}
	if(tesssst >= 3000) {
		serv.find('.tooltip_on2').html('3000+ игроков');
	}
	if(tesssst >= 3500) {
		serv.find('.tooltip_on2').html('3500+ игроков');
	}
	if(tesssst >= 4000) {
		serv.find('.tooltip_on2').html('4000+ игроков');
	}
	if(tesssst >= 4500) {
		serv.find('.tooltip_on2').html('4500+ игроков');
	}
	if(tesssst >= 5000) {
		serv.find('.tooltip_on2').html('5000+ игроков');
	}
	if(tesssst >= 77777) {
		serv.find('.tooltip_on2').html('<span style="color:#64DA89;">Open Beta Test</span>');
	}
	if(tesssst >= 88888) {
		serv.find('.tooltip_on2').html('<span style="color:#ffffff;">Скоро...</span>');
	}
	if(tesssst >= 99999) {
		serv.find('.tooltip_on2').html('<span style="color:#FF4C4C;">Closed Beta Test</span>');
	}
	});
	//% онлайн титул 1
	$('#tooltip_online3').each(function(i, el) {
	var serv = $(el);
	var online = $(el).find('.tonline3 span').html();
	var tesssst =  online;
	if(tesssst >= 0) {
		serv.find('.tooltip_on3').html('< 500 игроков');
	}
	if(tesssst >= 500) {
		serv.find('.tooltip_on3').html('500+ игроков');
	}
	if(tesssst >= 1000) {
		serv.find('.tooltip_on3').html('1000+ игроков');
	}
	if(tesssst >= 1500) {
		serv.find('.tooltip_on3').html('1500+ игроков');
	}
	if(tesssst >= 2000) {
		serv.find('.tooltip_on3').html('2000+ игроков');
	}
	if(tesssst >= 2500) {
		serv.find('.tooltip_on3').html('2500+ игроков');
	}
	if(tesssst >= 3000) {
		serv.find('.tooltip_on3').html('3000+ игроков');
	}
	if(tesssst >= 3500) {
		serv.find('.tooltip_on3').html('3500+ игроков');
	}
	if(tesssst >= 4000) {
		serv.find('.tooltip_on3').html('4000+ игроков');
	}
	if(tesssst >= 4500) {
		serv.find('.tooltip_on3').html('4500+ игроков');
	}
	if(tesssst >= 5000) {
		serv.find('.tooltip_on3').html('5000+ игроков');
	}
	if(tesssst >= 77777) {
		serv.find('.tooltip_on3').html('<span style="color:#64DA89;">Open Beta Test</span>');
	}
	if(tesssst >= 88888) {
		serv.find('.tooltip_on3').html('<span style="color:#ffffff;">Скоро...</span>');
	}
	if(tesssst >= 99999) {
		serv.find('.tooltip_on3').html('<span style="color:#FF4C4C;">Closed Beta Test</span>');
	}
	});
	
	// TO TOP
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('#top').fadeIn();
		} else {
			$('#top').fadeOut();
		}
	});
	$('#top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	
	var elhover =$('#btn_reg_mini, #btn_for, #btn_reg, #btn_files, #btn_dwnld, #btn_more, #btn_go, #btn_more_news')
	 $(elhover)
   	 .append('<div class="fake-hover"></div>').each(function() {
	   var $fake = $('> .fake-hover', this).css('opacity', '0');
	   $(this).hover(function () {
        $fake.stop().fadeTo(300, 1);
      }, function () {
        $fake.stop().fadeTo(300, 0);
      });
	});
   
	$(document).ready(function() {
	$("a.ancLinks").click(function () { 
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').animate( { scrollTop: destination }, 800 );
		return false;
	});
	});
	
	setInterval(function(){
		$('#animates').addClass('animated tada');
		setTimeout(function(){
			$('#animates').removeClass('animated tada');
		},1000);
	},5000);

	$('.news-block').each(function(i, el) {
	var serv = $(el);
        if(i == 0) {
			serv.find('.comments').html('1652');
			serv.find('.share').html('7389');
		}
		if(i == 1) {
			serv.find('.comments').html('1375');
			serv.find('.share').html('5372');
		}
		if(i == 2) {
			serv.find('.comments').html('1573');
			serv.find('.share').html('4785');
		}
		if(i == 3) {
			serv.find('.comments').html('1427');
			serv.find('.share').html('6137');
		}
		if(i == 4) {
			serv.find('.comments').html('1627');
			serv.find('.share').html('7132');
		}
		if(i == 5) {
			serv.find('.comments').html('1581');
			serv.find('.share').html('5731');
		}
		if(i == 6) {
			serv.find('.comments').html('1735');
			serv.find('.share').html('6273');
		}
		if(i == 7) {
			serv.find('.comments').html('1571');
			serv.find('.share').html('6778');
		}
    });
	
	var elWrap = $('.slider'),
		el =  elWrap.find('.item'),
		indexImg = 1,
		indexMax = el.length;
	function change () {
		el.removeClass('active');
		el.filter(':nth-child('+indexImg+')').addClass('active');
	}
	function autoCange () {	
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}			
		change ();
	}	
	var interval = setInterval(autoCange, 10000);

	elWrap.mouseover(function() {
		clearInterval(interval);
	});
	elWrap.mouseout(function() {
		interval = setInterval(autoCange, 10000);
	});
	elWrap.append('<div class="next"></div><div class="prev"></div>');
	$('.next').click(function() {
		indexImg++;
		if(indexImg > indexMax) {
			indexImg = 1;
		}
		change ();
	});
	$('.prev').click(function() {
		indexImg--;
		if(indexImg < 1) {
			indexImg = indexMax;
		}
		change ();
	});
	
	var pp     = $("#pp"),
        bg     = $("#pp-bg");
    function pp_hide(pp, bg){
        pp.removeClass('active');
		bg.removeClass('active');
    }
    function pp_show(pp, bg){
		bg.addClass('active');
		pp.addClass('active');
        bg.click(function(){pp_hide(pp, bg)});
    }
	setTimeout(function(){
    if ( $.cookie('visit') == undefined ){
        $.cookie('visit', true);
        pp_show(pp, bg);
    } else {
    }
	},$('#pp').attr('data-delay'));
	//setTimeout(function(){
    //pp_show(pp, bg);
	//},$('#pp').attr('data-delay'));
});