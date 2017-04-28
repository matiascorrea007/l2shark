/*"Image Checkbox Buttons"*/
$(function () {
    $('.btn-radio').click(function(e) {
        $('.btn-radio').not(this).removeClass('active')
        .siblings('input').prop('checked',false)
            .siblings('.img-radio').css('opacity','0.5');
      $(this).addClass('active')
            .siblings('input').prop('checked',true)
        .siblings('.img-radio').css('opacity','1');
    });
});




$(document).ready(function(){

//token
  $.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});


//al presionar el link o boton con la clase de  character se ejecuta esto para enviar el nombre del personaje 
  $('.character').click(function(){
    var token = $("#token").val();

    //capturo el nombre del personaje
    var charnombre = this.id;
    //hace referencia a la ruta , y le mandos los parametros
  $.get('servicios/'+ charnombre , function(data){
  //me lo muesta en el input que tenga id mostrar
    $(".char").val(data);
});


  });//end calcularTotal
});//end document