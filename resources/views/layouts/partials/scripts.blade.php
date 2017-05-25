<!-- REQUIRED JS SCRIPTS -->





<!-- jQuery 2.2.2 -->
<script src="{{ asset('/js/jquery.min.js') }}" ></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/bootstrapselect.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- manejo de graficas -->
<script src="{{ asset('/js/graficas.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/highcharts.js') }}" type="text/javascript"></script>
<!--estos dos scrip es para mandar la cantidad de item del carrito y actualizar-->
<script src="{{ asset('/js/main.js') }}" ></script>
<script src="{{ asset('js/pinterest_grid.js') }}"></script>
<!--sweetalert-->
<script src="{{ asset('js/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/sweetalert/sweetalert-dev.js') }}"></script>
@include('sweet::alert')
<!--Filemanager-->
<script src="{{ asset('../vendor/unisharp/laravel-filemanager/public/js/lfm.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('../vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>

<!--Filemanager para crear-->
    <script>
       $('textarea.my-editor').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm').filemanager('image');
    </script>
<!--Filemanager para editar-->
    <script>
       $('textarea.my-editor2').ckeditor({
filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'});
        $('#lfm2').filemanager('image');
    </script>




@yield('scriptdatepicker')
@yield('ventas')
@yield('compras')
@yield('presupuestos')


<!--dropzone-->
<script src="{{ asset('/js/dropzone/dropzone.js') }}" ></script>
<script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
           addRemoveLinks: true,
           dictRemoveFile: 'Remove',
            maxFilezise: 20,
             parallelUploads: 100,
            maxFiles: 4,

            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>




<!--select dinamico para crear-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para editar-->
<script>
$('#categoriaedit').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoriaedit').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoriaedit').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para crear combo-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>





<!--===============scrip de los tags========-->

<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#tags').select2({
            // Activamos la opcion "Tags" del plugin
            tags: true,
            tokenSeparators: [','],
            ajax: {
                dataType: 'json',
                url: '{{ url("tags") }}',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    }
                },
                processResults: function (data, page) {
                  return {
                    results: data
                  };
                },
            }
        });
    });
</script>





<script src="{{ asset('/js/productocombo.js') }}" ></script>

	
<!------------script backup---------------->	



<!------------script backup---------------->