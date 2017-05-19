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




//seleccion del personaje en servicios
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

    //muestra el nombre del personaje
    $(".char").val(data[0].char_name);

});

  });//end calcularTotal
});//end document




//seleccion del personaje en la ruta Admin
$(document).ready(function(){
//token
  $.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});

//al presionar el link o boton con la clase de  character se ejecuta esto para enviar el nombre del personaje 
  $('.character2').click(function(){
    var token = $("#token").val();
    //capturo el nombre del personaje
    var character = this.id;
    //hace referencia a la ruta , y le mandos los parametros
  $.get('admin/'+ character , function(data){
  //me lo muesta en el input que tenga id mostrar



    //muestra el nombre del personaje
    $(".char").val(data[0].char_name);

    //muestra los otros datos para la ruta /Admin

    //Nombre
    $(".nombre").val(data[0].char_name);
    //Titulo
    $(".titulo").val(data[0].title);
    //CreadoEn
    $(".creadoen").val(data[0].char_name);
    //Online
    if (data[0].online == 1) {
      $(".online").val("SI");
    }else{
      $(".online").val("NO");
    }
    
    //base class
    $(".baseclase").val(data[0].class_name);
    
    //sub clase 1
   if (data[2] != null) {
      $(".sub1").val(data[2].class_name);
   };
    
    //sub clase 2
    if (data[3] != null) {
      $(".sub2").val(data[3].class_name);
   };
    
    //sub clase 3
    if (data[4] != null) {
      $(".sub3").val(data[4].class_name);
   };


    //Level Base
    $(".levelbase").val(data[0].level);

    //Genero
    if (data[0].sex == 0) {
      $(".genero").val("Masculino");
    }else{
      $(".genero").val("Femenino");
    }
    
    //Pvp
    $(".pvp").val(data[0].pvpkills);
    //Pk
    $(".pk").val(data[0].pvpkills);
    //Karma
    $(".karma").val(data[0].karma);
    //Nobless
    if (data[0].nobless == 1) {
      $(".nobless").val("SI");
    }else{
      $(".nobless").val("NO");
    }

    //clan
    $(".clan").val(data[1].clan_name);

    //Alianza
    $(".alianza").val(data[1].ally_name);

});

  });//end calcularTotal
});//end document











function AgregarItem(id) {
    var token = $("#token").val();
    //capturo el nombre del personaje
    var tablaDatos = $("#datos");
    $("#datos").empty();

    //hace referencia a la ruta , y le mandos los parametros
  $.get('combo-item-add/'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
  console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><span class='label label-success'> Agregado! </span></td></tr>");
        });
});
  
}










//funcion para el boton buscar y que realize la busqueda por ID o por Nombre
  $('#search').click(function(){
    var token = $("#token").val();
    //capturo el nombre del personaje
    var tablaDatos = $("#datos2");
    $("#datos2").empty();


    //busqueda por iD
    var id = $('#searchid').val();
  $.get('search-id/'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
  console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><button onclick='AgregarItem("+value.item_id+");'  type='button' class='btn btn-primary item' id="+value.item_id+"> Agregar <i class='ra ra-battered-axe'></i></button></td></tr>");
        });
    });


    //busqueda por Nombre
    var nombre = $('#searchnombre').val();
    //hace referencia a la ruta , y le mandos los parametros
  $.get('search-nombre/'+ nombre , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
  console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><button onclick='AgregarItem("+value.item_id+");'  type='button' class='btn btn-primary item' id="+value.item_id+"> Agregar <i class='ra ra-battered-axe'></i></button></td></tr>");
        });
    });

  });//end #search














function searchItems() {

    //si se preciona enter que realize la accion
if (event.keyCode == 13){
    var token = $("#token").val();
    //capturo el nombre del personaje
    var tablaDatos = $("#datos2");
    $("#datos2").empty();
     var id =  eval($("#searchid").val());
     //url
      $.get('search-id/'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
  console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><button onclick='AgregarItem("+value.item_id+");'  type='button' class='btn btn-primary item' id="+value.item_id+"> Agregar <i class='ra ra-battered-axe'></i></button></td></tr>");
        });
    });
}
   

//si se preciona enter que realize la accion
 if (event.keyCode == 13){
    var token = $("#token").val();
    //capturo el nombre del personaje
    var tablaDatos = $("#datos2");
    $("#datos2").empty();
     //var nombre = $(this).val();
      var nombre = $("#searchnombre").val();
      console.log(nombre);
      //url
      $.get('search-nombre/'+ nombre , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
   console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><button onclick='AgregarItem("+value.item_id+");'  type='button' class='btn btn-primary item' id="+value.item_id+"> Agregar <i class='ra ra-battered-axe'></i></button></td></tr>");
        });
    });
}


}//end function searchItems()








//----------------------------aceptar las condicones para continuar-----------------------//
function checkCheckBox(f){
  var l12004 = $('#l12004').val();
if (f.checkbox.checked == false )
{
atualAlert(l12004);
return false;
}else
return true;
}


$('body').on('click', '#alerta .ok > div', function(){
    var url = $(this).attr('data-url');
    if(url.length > 0 && url != undefined && url != 'undefined') {
      document.location.href=''+url+'';
    } else {
      closeModal();
    }
  });

function atualAlert(texto, act, url) {
  $("#modal, #backblack, #alerta").remove();
  $('*:focus').blur();
  if(act == 'OK') { var aaClass = 'ok sucesso'; } else { var aaClass = 'ok'; }
  $('body').append("<div id='backblack'></div><div id='alerta'>"+texto+"<div class='"+aaClass+"'><div data-url='"+url+"'>Ok</div></div></div>");
  if($('#alerta').width() > 700) { $('#alerta').css({ 'width': '700px' }); }
  $('#alerta').css({ 'left': ''+(($(window).width()-($('#alerta').width()+60))/2)+'px', 'top': ''+(($(window).height()-($('#alerta').height()+50))/2)+'px', 'visibility': 'visible' });
}


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

//----------------------------aceptar las condicones para continuar-----------------------//




//----------------------------seleccion de coins-----------------------//
$(document).ready(function(){
  

  
  $('select#qtdCoins').change(function(){
    
    if($('select#metodo_pgto').val() == 'PagSeguro') {
      var preco = "1.00";
    } else if($('select#metodo_pgto').val() == 'Banking') {
      var preco = "1.00";
    } else if($('select#metodo_pgto').val() == 'PayPal_USD') {
      var preco = "0.40";
    } else if($('select#metodo_pgto').val() == 'PayPal_BRL') {
      var preco = "1.00";
    } else if($('select#metodo_pgto').val() == 'PayPal_EUR') {
      var preco = "0.30";
    } else if($('select#metodo_pgto').val() == 'MercadoPago') {
      var preco = "1.00";
    } else if($('select#metodo_pgto').val() == 'PayGol_USD') {
      var preco = "0.40";
    } else if($('select#metodo_pgto').val() == 'PayGol_BRL') {
      var preco = "1.00";
    } else if($('select#metodo_pgto').val() == 'PayGol_EUR') {
      var preco = "0.30";
    } else if($('select#metodo_pgto').val() == 'WebMoney') {
      var preco = "0.40";
    } else if($('select#metodo_pgto').val() == 'Payza') {
      var preco = "0.40";
    } else if($('select#metodo_pgto').val() == 'Skrill') {
      var preco = "0.40";
    } else {
      //este es el que dijita el porcentaje
      var preco = "0.3";
    }
    
    var valor = parseInt($(this).val());
    
        
    var count1 = parseInt("100");
    var bonus1 = parseInt("10");
    var count2 = parseInt("400");
    var bonus2 = parseInt("15");
    var count3 = parseInt("1000");
    var bonus3 = parseInt("20");
    
    if(valor >= count3) { var bonus = bonus3; }
    else if(valor >= count2) { var bonus = bonus2; }
    else if(valor >= count1) { var bonus = bonus1; }
    else { var bonus = '0'; }
    if(bonus > 0) {
      var calculado = parseInt((valor*bonus)/100);
      $('#bonus').text(calculado);
      $('.bonus').show();
      $('.bonuss').val(calculado);
    } else {
      $('#bonus').text('');
      $('.bonus').hide();
    }
    
        
    var price = ((valor * preco).toFixed(2)).replace(".", ",");
    $('#valor_total').text(''+price+'');
    //muestra el valor en el input oculto para mandarlo por el formulario
    $('.valor_total').val(price);
    
  });
  
});
//----------------------------seleccion de coins-----------------------//






//----------------------------comprar combo , sumar precios al tildar checkbox-----------------------//
$(function() {
  
  $('.sumPrice').prop('checked', false);
  
  $('.sumPrice').change(function(){
    
    var isChecked = $(this).prop('checked');
    var price = $(this).attr('data-price');
    
    if($(this).val() == 'all') {
      
      if(isChecked == true) {
        $('input.sumPrice[value!="all"]').prop('checked', false).prop('disabled', true);
        $('#valor_total').text(parseInt(price));
      } else {
        $('input.sumPrice[value!="all"]').prop('checked', false).prop('disabled', false);
        $('#valor_total').text('0');
      }
      
    } else {
      
      $('input.sumPrice[value="all"]').prop('checked', false);
      
      var priceTotal = $('#valor_total').text();
      
      if(isChecked == true) {
        $('#valor_total').text(parseInt(parseInt(priceTotal)+parseInt(price)));
        //con esto mando en un input oculto el valor total
        $('.valor_total').val(parseInt(parseInt(priceTotal)+parseInt(price)));
      } else {
        $('#valor_total').text(parseInt(parseInt(priceTotal)-parseInt(price)));
        //con esto mando en un input oculto el valor total
        $('.valor_total').val(parseInt(parseInt(priceTotal)-parseInt(price)));
      }
      
    }
    
    
  });
  
  
  $('#buyTrigger').click(function() {
    
    var submitButton = $(this);
    var theForm = $('#buyItemForm');
  
    if(!$(submitButton).hasClass('loading')) {
      
      $(submitButton).attr('data-oldtext', ''+$(submitButton).val()+'').addClass('loading').val('Espera...');
      
      $.ajax({
        type: 'POST',
        url: './?module=shop&engine=buyitem',
        cache: false,
        data: $(theForm).serialize()+'&char='+$('select#personagem').val()+'&pack=13&isJS=1',
        dataType: 'json',
        timeout: 20000,
        async: false,
        success: function(data)
        {
          
          $(submitButton).val(''+$(submitButton).attr('data-oldtext')+'').removeClass('loading');
          atualAlert(data.msg, data.act, data.url);
          
        },
          error: function(jqXHR, textStatus){
            $(submitButton).val(''+$(submitButton).attr('data-oldtext')+'').removeClass('loading');
            if(textStatus == 'timeout') {
                atualAlert('Por favor, compruebe su conexión a Internet. La página está tomando demasiado tiempo para responder.');
            } else if(textStatus != 'abort') {
                atualAlert('Lo sentimos, ha ocurrido un error! Por favor, vuelva a intentarlo. #3');
            }
          }
      });
      
    }
    
  });
  
});