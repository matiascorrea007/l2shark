$(document).ready(function(){
	
	closeModal = function(instant) {
		if($("#modal:visible, #backblack:visible, #alerta:visible").length > 0) {
			if(instant == '1') {
				$("#modal, #backblack, #alerta").finish().remove();
			} else {
				$("#modal, #backblack, #alerta").fadeOut('fast', function(){
					$("#modal, #backblack, #alerta").finish().remove();
				});
			}
		}
	};
	
	opencaptcha = function() {
		var l11017 = $('#l11017').val();
		var l11018 = $('#l11018').val();
		var newCode = Math.random();
		$('.captchaImage').attr('src', 'captcha/securimage_show.php?sid='+newCode+'');
		$('body').append("<div id='backblack'></div><div id='modal' style='display:none;'><h1>Captcha &bullet; "+l11017+"</h1>"+l11018+"<br /><br /><label class='formpadrao captcha'><div><div class='desc'><img style='margin:5px 0 0 0;' class='captchaImage' src='captcha/securimage_show.php?sid="+newCode+"' /></div><div class='camp'><input type='text' id='captchaInput' maxlength='5' name='captcha' autocomplete='off' /></div><a tabindex='-1' href='#'><img src='captcha/refresh.png' /></a></div></label><input style='margin: 20px auto; display: table;' type='submit' class='default dbig' value='Continue' onclick='logucp();' /></div>");
		$('#modal').fadeIn('fast', function() { $('#modal input#captchaInput').focus(); });
	};
	
	logucp = function() {
		var ucp_captcha_send = $('#modal input#captchaInput').val();
		$('#ucp_captcha').val(ucp_captcha_send);
		$('form#login_form').submit();
	};
	
	changePage = function(HREF) {
		
		var LOADING = $('#mainLoading');
		
		if($('#mainLoading:visible').length > 0) {
			atualAlert($('input#l20001').val());
			return false;
		}
		
		$(LOADING).show();
		
		$.ajax({
			type: 'POST',
			url: ''+HREF+'',
			cache: false,
			data: 'onlyPage=1',
			dataType: 'text',
			timeout: 20000,
			async: false,
			success: function(data)
			{
				
				$(LOADING).finish().hide();
				
				$('article > .page').html(data);
				
				$('html, body').finish().animate({scrollTop:''+($('#pageTop').offset().top - 150)+''}, 300);
				
				$('input#hback').val(window.location.href);
				
				window.history.pushState("object", "", ""+HREF+"");
				
				$('head title').text($('input#titleDefault').val());
				
				$('.news .new').hover(function(e) {
					$(this).addClass('active');
					$('.news .new:not(.active)').addClass('passive').animate({ 'opacity': '0.5' }, 100);
				}, function(){
					$('.news .new').removeClass('passive').removeClass('active').animate({ 'opacity': '1' }, 100);
				});
				
			},
		    error: function(jqXHR, textStatus){
		    	$(LOADING).hide();
		    	if(textStatus == 'timeout') {
			        atualAlert(l11015+' #3');
		    	} else if(textStatus != 'abort') {
			        atualAlert(l12055+' #4');
			    }
		    }
		});
		
	};
	
	$("body").on('click', '.captcha a', function() {
		$('.captchaImage').attr('src', 'captcha/securimage_show.php?sid='+Math.random()+'');
		$(this).parent().parent().find('#captchaInput').val('').focus();
		return false;
	});
	
	$("body").on('click', '#backblack', function() {
		if($('#alerta').length == 0) {
			closeModal();
		}
	});
	
	$('form#login_form').submit(function(e){
		e.preventDefault();
		closeModal(1);
		var l11015 = $('#l11015').val();
		var l12055 = $('#l12055').val();
		var l40044 = $('#l40044').val();
		$('form#login_form').css({ 'visibility': 'hidden' });
		$('.loginarea .error').remove();
		$('.loginarea').append('<div class="loader"></div>');
		$.ajax({
			type: 'POST',
			url: ''+$('form#login_form').attr('action')+'',
			cache: false,
			data: $('form#login_form').serialize()+'&isJS=1',
			dataType: 'json',
			timeout: 30000,
			async: false,
			success: function(data)
			{
				if(data.act == 'OK') {
					document.location.href=''+data.url+'';
				} else if(data.act == 'SESSION') {
					atualAlert(l40044, 'ERROR', data.url);
					return false;
				} else {
					$('.loginarea').prepend('<div class="error">'+data.msg+'</div>');
					$('form#login_form').css({ 'visibility': 'visible' });
					$('.loginarea .loader').remove();
				}
			},
		    error: function(jqXHR, textStatus){
		    	$(submitButton).removeClass('loading');
		    	if(textStatus == 'timeout') {
			        atualAlert(l11015+' #1');
		    	} else if(textStatus != 'abort') {
			        atualAlert(l12055+' #2');
			    }
		    }
		});
		
	});
	
	$('form#login_form input').keypress(function(e){
		if(e.keyCode == '13') {
			if($('form#login_form').find('input[type="submit"]').length == 0) {
				opencaptcha();
			} else {
				$('form#login_form').submit();
			}
		}
	});
	
	$('body').on('keypress', '#captchaInput', function(e){
		if(e.keyCode == '13') {
			logucp();
		}
	});
	
	$('body').on('click', '#alerta .ok > div', function(){
		var url = $(this).attr('data-url');
		if(url.length > 0 && url != undefined && url != 'undefined') {
			document.location.href=''+url+'';
		} else {
			closeModal();
		}
	});
	
	$('body').on('submit', 'form.usarJquery', function() {
		
		if($('#acceptrules').length > 0) {
			var l12004 = $('#l12004').val();
			if($('#acceptrules').prop('checked') != true) {
				atualAlert(l12004);
				return false;
			}
		}
		
		var theForm = $(this);
		var submitButton = $(this).find("input[type='submit']");
		var l11015 = $('#l11015').val();
		var l12055 = $('#l12055').val();
		var l20001 = $('#l20001').val();
		var l40044 = $('#l40044').val();
		
		if(!$(submitButton).hasClass('loading') && !$(submitButton).hasClass('sucesso')) {
			
			$(submitButton).attr('data-oldtext', ''+$(submitButton).val()+'').addClass('loading').val(l20001);
			
			$.ajax({
				type: 'POST',
				url: ''+$(theForm).attr('action')+'',
				cache: false,
				data: $(theForm).serialize()+'&isJS=1',
				dataType: 'json',
				timeout: 40000,
				async: false,
				success: function(data)
				{
					
					$(submitButton).val(''+$(submitButton).attr('data-oldtext')+'').removeClass('loading');
					
					$('.captchaImage').attr('src', './captcha/securimage_show.php?sid='+Math.random());
					$('input[name="captcha"]').val('');
					
					if(data.act == 'OK') {
						
						if($(theForm).hasClass('registerForm') && data.email != '' && data.login != '' && data.email != undefined && data.login != undefined) {
							document.location.replace('./?engine=download_account_txt&eConf='+data.email+'&lConf='+data.login);
						}
						
						$(submitButton).addClass('sucesso');
						$(theForm).addClass('sucedido');
						
					} else if(data.act == 'SESSION') {
						
						atualAlert(l40044, 'ERROR', data.url);
						return false;
						
					}
					
					if(data.url != '' && data.msg == '') {
						document.location.href=''+data.url+'';
						return;
					}
					
					atualAlert(data.msg, data.act, data.url);
					
				},
			    error: function(jqXHR, textStatus){
			    	$(submitButton).val(''+$(submitButton).attr('data-oldtext')+'').removeClass('loading');
			    	if(textStatus == 'timeout') {
				        atualAlert(l11015+' #3');
			    	} else if(textStatus != 'abort') {
				        atualAlert(l12055+' #4');
				    }
			    }
			});
			
		}
		
		return false;
		
	});
	
	$('body').on('change keydown', 'form.usarJquery.sucedido', function() {
		var submitButton = $(this).find("input[type='submit']");
		var theForm = $(this);
		if($(submitButton).hasClass('sucesso')) {
			$(submitButton).text(''+$(submitButton).attr('data-oldtext')+'').removeAttr('data-oldtext').removeClass('sucesso');
			$(theForm).removeClass('sucedido');
		}
	});
	
	$('body').on('click', 'a', function(e) {
		
		var HREF = $(this).attr('href');
		
		if(!$(this).hasClass('noJquery') && HREF.substr(0, 4) != 'http' && HREF != '#' && HREF != '' && HREF != './') {
			
			e.preventDefault();
			
			changePage(HREF);
			
		}
		
	});
	
	$('nav > *').css({ 'opacity': '0' });
	$('aside > .box').css({ 'margin-top': '-150px', 'opacity': '0' });
	
	// NAV: Opcoes uma a uma (1)
	if($(window).height() > 780 && !$('body').hasClass('nav-effected')) {
		
		$('body').addClass('nav-effected');
		
		$('nav > *').each(function(i){
			
		    var el = $(this);
		    setTimeout(function() {
		        el.animate({
		            'opacity': '1'
		        }, 400);
		    }, i * 200);
		    
		});
		
	}
	
	$(window).scroll(function(){
		
		var SCROLLPOS = $(window).scrollTop();
		
		// Show menu on scroll
		if(SCROLLPOS > 780) {
			if(!$('nav').hasClass('fixed')) {
				//$('nav').addClass('fixed');
				$('nav').addClass('fixed').css({ 'top': '-400px' }).animate({ 'top': '-106px' });
			}
		} else {
			$('nav').removeClass('fixed').css({ 'top': '632px' });
		}
		
		// NAV: Opcoes uma a uma
		if(($(window).height() > 780 || SCROLLPOS > (780 - $(window).height())) && !$('body').hasClass('nav-effected')) {
			
			$('body').addClass('nav-effected');
			
			$('nav > *').each(function(i){
				
			    var el = $(this);
			    setTimeout(function() {
			        el.animate({
			            'opacity': '1'
			        }, 400);
			    }, i * 200);
			    
			});
			
		}
		
		// ASIDE
		if(SCROLLPOS > ($('aside').offset().top - $(window).height()) && !$('body').hasClass('aside-effected')) {
			
			$('body').addClass('aside-effected');
			
			$('aside > .box').each(function(i){
				
			    var el = $(this);
			    setTimeout(function() {
			        el.animate({
			        	'opacity': '1',
			            'margin-top': '0'
			        }, 800);
			    }, i * 300);
			    
			});
			
		}
		
		// NEWS
		if($('.news').length > 0) {
			
			$('.news > div > .new').each(function(i){
				
				if(SCROLLPOS > ($('.news > div > .new').eq(i).offset().top - $(window).height()) && !$('body').hasClass('new'+i+'-effected')) {
					
					$('body').addClass('new'+i+'-effected');
					
				    var nl = $(this).addClass('show');
				    
				    if(i == ($('.news > div > .new').length-1)) { $('article').addClass('force-view-news'); }
				    
				}
				
			});
			
		}
		
		// FACEINDEX
		if($('.faceIndex').length > 0) {
			
			if(SCROLLPOS > ($('.faceIndex').offset().top - $(window).height()) && !$('body').hasClass('fbi-effected')) {
				
				$('body').addClass('fbi-effected');
				
				$('.faceIndex').addClass('show');
				
			}
			
		}
		
		// LINKSPANEL FOOTER
		if(SCROLLPOS > ($('.linksPanel').offset().top - $(window).height()) && !$('body').hasClass('lpfooter-effected')) {
			
			$('body').addClass('lpfooter-effected');
			
			$('.linksPanel').addClass('show');
			
		}
		
	});
	
	$('body').on('click', '.backHistory', function(e){
		
		e.preventDefault();
		
		var HBACK = $('input#hback').val();
		if(HBACK.length == 0) {
			history.back();
		} else {
			changePage(HBACK);
		}
		
	});
	
	showElements = function(){
		
		if(!$('body').hasClass('elements-effected')) {
			
			
			$('.langs').css({ 'top': '-60px' }).fadeIn(300).animate({ 'top': '0px' }, function(){
			
				$('.bg-top-logo').fadeIn(800);
				
				$('html, body').css({ 'overflow-x': 'hidden' });
				
				$('.serverStatus').css({ 'top': '543px' }).fadeIn(200).animate({ 'top': '443px' });
				$('a.downloadButton').css({ 'top': '740px' }).fadeIn(300).animate({ 'top': '590px' });
				
				$('.userarea').css({ 'top': '707px' }).fadeIn(500).animate({ 'top': '507px' }, function(){
					$('header').css({ 'height': '820px' });
					$('section').css({ 'padding-top': '32px' });
					$('html, body').css({ 'overflow-x': 'auto' }).addClass('elements-effected');
				});
				
				if($('.anpc').length > 0) {
					$('.anpc').css({ 'right': '-200px' }).fadeIn(500).animate({ 'right': '18px' });
				}
				
			});
			
			/*
			
			$('html, body').css({ 'overflow-x': 'hidden' });
			
			$('.bg-top-logo').delay(400).fadeIn(1000);
				
			$('.serverStatus').css({ 'top': '1200px' }).fadeIn(400).animate({ 'top': '443px' });
			$('a.downloadButton').css({ 'top': '1200px' }).fadeIn(400).animate({ 'top': '590px' });
			$('.langs').css({ 'top': '-60px' }).fadeIn(400).animate({ 'top': '0px' });
			
			$('.anpc').show();
			
			$('.userarea').css({ 'top': '1200px' }).fadeIn(400).animate({ 'top': '507px' }, function(){
				$('html, body').css({ 'overflow-x': 'auto' }).addClass('elements-effected');
			});
			
			*/
			
			
		}
		
	};
	
	$("img#bg-top").one("load", function() {
	
		showElements();
	
	}).each(function() {
	
		if(this.complete) $(this).load();
	
	});
	
	setTimeout(showElements, 10000);
	
	
	$('.news .new').hover(function(e) {
		$(this).addClass('active');
		$('.news .new:not(.active)').addClass('passive').animate({ 'opacity': '0.5' }, 100);
	}, function(){
		$('.news .new').removeClass('passive').removeClass('active').animate({ 'opacity': '1' }, 100);
	});
	
	/*
	var $animation_elements = $('.animation-element');
	var $window = $(window);
	
	function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);
	
		$.each($animation_elements, function() {
			var $element = $(this);
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);
	
			//check to see if this current container is within viewport
			if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_bottom_position)) {
				$element.addClass('in-view');
			} else {
				$element.removeClass('in-view');
			}
		});
	}
	
	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
	*/
	
});

function atualAlert(texto, act, url) {
	$("#modal, #backblack, #alerta").remove();
	$('*:focus').blur();
	if(act == 'OK') { var aaClass = 'ok sucesso'; } else { var aaClass = 'ok'; }
	$('body').append("<div id='backblack'></div><div id='alerta'>"+texto+"<div class='"+aaClass+"'><div data-url='"+url+"'>Ok</div></div></div>");
	if($('#alerta').width() > 700) { $('#alerta').css({ 'width': '700px' }); }
	$('#alerta').css({ 'left': ''+(($(window).width()-($('#alerta').width()+60))/2)+'px', 'top': ''+(($(window).height()-($('#alerta').height()+50))/2)+'px', 'visibility': 'visible' });
}

