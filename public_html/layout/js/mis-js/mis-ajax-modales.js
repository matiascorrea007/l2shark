function ModalEditarNoticia(id) {
    var token = $("#token").val();

    //hace referencia a la ruta , y le mandos los parametros
  $.get('post-edit-'+ id , function(data){
  //me lo muesta en el input que tenga id mostrar


    $(".noticia_titulo").val(data.titulo);
    $(".noticia_descrip_corta").val(data.descripcioncorta);
    $(".noticia_descrip_larga").val(data.descripcionlarga);
    $(".noticia_id").val(data.id);

});
  
}





function ModalDeletePost(id) {
    var token = $("#token").val();
    $(".post_id").val(id);
}