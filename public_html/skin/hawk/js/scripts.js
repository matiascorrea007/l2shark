$(document).ready(function() {
	//Событие ховер
	$('.languages').hover(
	function(){
		$('.languages li a.active').hide();
	},
	function(){
		$('.languages li a.active').show(); 
	});
});

$(document).ready(function() {
	var position = 0;
	var servInner = $('#server_block').width();
	var servItem = $('.status_item').width();
	showbutton(position);

	$('.server_prev span').click(function(){
		var newposition = position + (servItem);
		$('#server_block').animate({left: newposition});
		position = newposition;
		showbutton(position);
	});

	$('.server_next span').click(function(){
		var newposition = position - (servItem);
		$('#server_block').animate({left: newposition});
		position = newposition;
		showbutton(position);
	});

	if (position == -servInner + servItem * 2) {
		$(".server_next span").hide();
	    $(".server_next").css({opacity: '0.5'});
	}

	if (position == -servInner + servItem) {
		$(".server_next span").hide();
	    $(".server_next").css({opacity: '0.5'});
	}

	function showbutton() {
    	if (position == 0) {
	    	$(".server_prev span").hide();
	    	$(".server_prev").css({opacity: '0.5'});
	    }
	    else {
	    	$(".server_prev span").show();
	    	$(".server_prev").css({opacity: '1'});
	    }

	    if (position == -servInner + servItem * 2) {
	    	$(".server_next span").hide();
	    	$(".server_next").css({opacity: '0.5'});
	    }
	    else {
	    	$(".server_next span").show();
	    	$(".server_next").css({opacity: '1'});
	    }
    }

    $('.total_block').append($('.server_total'));

    $('.l2top_items thead.l2top_items_tr').click(function(){
        $(this).parent().children('tbody.tabItems').slideToggle(300);
    });

    $('#l2top, #l2').addClass('smart_table_stats');
    $('#chaccpass, #chaccmail, #sexsid, #sexchar, #namesid, #charname, #changersid, #changerchar').addClass('smart_div');
    $('#chaccpass form, #chaccmail form, #sexsid form, #sexchar form, #namesid form, #charname form, #changersid form, #changerchar form').addClass('smart_form');
    $('.form-horizontal').addClass('smart_form');
    $('#chaccpass h4, #chaccmail h4').addClass('smart_content_title');

    $('.chbutton, .button, #chbutton, #ticket_for_help a').addClass('smart_btn');
});

$(document).ready(function() {


var s = $(".shares_text");
	s.each(function() {
	    var shares = $(this).children().height();
	    $(this).css({height: shares});
	});
});

(function($){
            $(window).load(function(){
                
                /* all available option parameters with their default values */
                $("#content_wrapper").mCustomScrollbar({
                    setWidth:false,
                    setHeight:false,
                    setTop:0,
                    setLeft:0,
                    axis:"y",
                    scrollbarPosition:"inside",
                    scrollInertia:500,
                    autoDraggerLength:true,
                    autoHideScrollbar:false,
                    autoExpandScrollbar:false,
                    alwaysShowScrollbar:0,
                    snapAmount:null,
                    snapOffset:0,
                    mouseWheel:{
                        enable:true,
                        scrollAmount:"auto",
                        axis:"y",
                        preventDefault:false,
                        deltaFactor:"auto",
                        normalizeDelta:false,
                        invert:false,
                        disableOver:["select","option","keygen","datalist","textarea"]
                    },
                    scrollButtons:{
                        enable:false,
                        scrollType:"stepless",
                        scrollAmount:"auto"
                    },
                    keyboard:{
                        enable:true,
                        scrollType:"stepless",
                        scrollAmount:"auto"
                    },
                    contentTouchScroll:25,
                    advanced:{
                        autoExpandHorizontalScroll:false,
                        autoScrollOnFocus:"input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
                        updateOnContentResize:true,
                        updateOnImageLoad:true,
                        updateOnSelectorChange:false,
                        releaseDraggableSelectors:false
                    },
                    theme:"light",
                    callbacks:{
                        onInit:false,
                        onScrollStart:false,
                        onScroll:false,
                        onTotalScroll:false,
                        onTotalScrollBack:false,
                        whileScrolling:false,
                        onTotalScrollOffset:0,
                        onTotalScrollBackOffset:0,
                        alwaysTriggerOffsets:true,
                        onOverflowY:false,
                        onOverflowX:false,
                        onOverflowYNone:false,
                        onOverflowXNone:false
                    },
                    live:false,
                    liveSelector:null
                });
                
            });
})(jQuery);