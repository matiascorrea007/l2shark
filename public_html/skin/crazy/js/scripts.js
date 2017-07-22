$(document).ready(function() {
    $('#l2top, #l2').addClass('smart_table_stats');
    $('#chaccpass, #chaccmail, #sexsid, #sexchar, #namesid, #charname, #changersid, #changerchar').addClass('smart_div');
    $('#chaccpass form, #chaccmail form, #sexsid form, #sexchar form, #namesid form, #charname form, #changersid form, #changerchar form').addClass('smart_form');
    $('#chaccpass h4, #chaccmail h4').addClass('smart_content_title');

    $('.chbutton, .button, #chbutton').addClass('smart_btn');
});


(function($){
            $(window).load(function(){
                
                /* all available option parameters with their default values */
                $("#smart_content_wrapper").mCustomScrollbar({
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

$(document).ready(function() {
    $('.sp_for_pagination').append($('#pager'));
});

$(document).ready(function() {
    //Default Action
    $("ul.smart_tab_ul li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content

    //On Click Event
    $("ul.smart_tab_ul li").click(function() {
        $("ul.smart_tab_ul li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".smart_tab").removeClass('smart_active_tab'); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        $(activeTab).addClass('smart_active_tab'); //Fade in the active content
        return false;
    });
});