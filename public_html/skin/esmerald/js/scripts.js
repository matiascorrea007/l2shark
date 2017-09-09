$(document).ready(function() {
    $('.news').hover(function() {
        $('.news').addClass('disable');
        $(this).removeClass('disable');
    }, function() {
        $('.news').removeClass('disable');
    });

    var serverInfo = $('.status').attr('data-info').split('; ');
    $('.status__item').each(function(i, el) {
        $(el).find('.status__line').width($(el).attr('data-online')/5000*100+'%');
        $(el).find('.status__desc').html(serverInfo[i]);
    });

    addAnimation(1);

    $('[rel=popup]').click(function(e) {
       if($('.popup').is('.active')) {
           $('.popup').removeClass('active');
       }
       $('.overlay, body, .popup'+$(this).attr('href')).addClass('active');
       return false;
   });
   $('[rel=close]').click(function(e) {
       $('.popup, .overlay, body').removeClass('active');
       return false;
   });
   $('.overlay').click(function(e) {
       var target = e.srcElement || e.target;
       if(!target.className.search('overlay')) {
           $('.overlay, .popup, body').removeClass('active');
       }
   });
   $(document).keyup(function(e) {
       if(e.keyCode === 27) {
           if($('.popup').is('.active')) {
               $('.popup, .overlay, body').removeClass('active');
           }
       }
   });

   $('[rel=toggle]').click(function(event) {
       if($(this).is('.active')){
           $('.toggle__item'+$(this).attr('href')).removeClass('active');
           $(this).removeClass('active');
       } else {
           $('.toggle__item'+$(this).attr('href')).addClass('active');
           $(this).addClass('active');
       }
       return false;
   });

   $('select').niceSelect();

   $('.scrollbar').slimScroll({
    width: '100%',
    height: '835px'
  });

});

function addAnimation(el) {
    setTimeout(function(){
        $('.status__item:eq('+(el-1)+')').addClass('animated');
        setTimeout(function(){
            $('.status__item').removeClass('animated');
            addAnimation(el);
        },1500);
    },5000);
}
