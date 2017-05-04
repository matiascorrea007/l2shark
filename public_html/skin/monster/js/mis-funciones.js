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
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><span class='label label-success'> Agregado! </span></td></tr>");
        });
    });


    //busqueda por Nombre
    var nombre = $('#searchnombre').val();
    //hace referencia a la ruta , y le mandos los parametros
  $.get('search-nombre/'+ nombre , function(data){
  //me lo muesta en el input que tenga id mostrar
$(data).each(function(key,value){
  console.log(data);
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><button onclick='AgregarItem("+value.item_id+");'  type='button' class='btn btn-warning item' id="+value.item_id+"> Agregar <i class='fa fa-expand'></i></button><span class='label label-success'> Agregado! </span></td></tr>");
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
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><span class='label label-success'> Agregado! </span></td></tr>");
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
            tablaDatos.append("<tr><td>"+value.item_id+"</td><td>"+value.name+"</td><td><span class='label label-success'> Agregado! </span></td></tr>");
        });
    });
}


}//end function searchItems()

