<!------------------------------- metronic scriptt ------------------------------>
            <!-- BEGIN CORE PLUGINS -->

<!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
         
        <script src="{{ asset('layout/js/jquery.min.js') }}" type="text/javascript"></script>
        {!!Html::script('layout/js/bootstrap.js')!!} 
        {!!Html::script('layout/js/js.cookie.min.js')!!}
        {!!Html::script('layout/js/jquery.slimscroll.js')!!}
        {!!Html::script('layout/js/jquery.blockui.min.js')!!}
        {!!Html::script('layout/js/bootstrap-switch.js')!!}
        {!!Html::script('layout/js/moment.min.js')!!}
        {!!Html::script('layout/js/daterangepicker.js')!!}
        {!!Html::script('layout/js/morris.js')!!}
        {!!Html::script('layout/js/raphael-min.js')!!}
        {!!Html::script('layout/js/jquery.waypoints.min.js')!!}
        {!!Html::script('layout/js/jquery.counterup.js')!!}
        {!!Html::script('layout/js/fullcalendar.js')!!}
        {!!Html::script('layout/js/jquery.flot.js')!!}
        {!!Html::script('layout/js/jquery.flot.resize.js')!!}
        {!!Html::script('layout/js/jquery.flot.categories.js')!!}
        {!!Html::script('layout/js/jquery.easypiechart.js')!!}
        {!!Html::script('layout/js/jquery.sparkline.min.js')!!}
        {!!Html::script('layout/js/components-color-pickers.js')!!}
        {!!Html::script('layout/js/bootstrap-colorpicker.js')!!}
        {!!Html::script('layout/js/app.js')!!}
        {!!Html::script('layout/js/dashboard.js')!!}
        {!!Html::script('layout/js/layout.js')!!}
        {!!Html::script('layout/js/demo.js')!!}
        {!!Html::script('layout/js/quick-sidebar.js')!!}
        {!!Html::script('layout/js/quick-nav.js')!!}
        {!!Html::script('layout/js/jquery.minicolors.js')!!}


<!------------------------------- metronic scriptt ------------------------------>


<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('layout/js/bootstrapselect.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/select2.min.js') }}"></script>
<!-- manejo de graficas -->
<script src="{{ asset('layout/js/graficas.js') }}" type="text/javascript"></script>
<script src="{{ asset('layout/js/highcharts.js') }}" type="text/javascript"></script>
<!--estos dos scrip es para mandar la cantidad de item del carrito y actualizar-->
<script src="{{ asset('layout/js/main.js') }}" ></script>
<script src="{{ asset('layout/js/pinterest_grid.js') }}"></script>
<!--sweetalert-->
<script src="{{ asset('layout/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('layout/js/sweetalert-dev.js') }}"></script>
@include('sweet::alert')

<script src="{{ asset('layout/js/parallax.js') }}"></script>

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
<script src="{{ asset('layout/js/dropzone/dropzone.js') }}" ></script>
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



<script src="{{ asset('layout/js/productocombo.js') }}" ></script>

	
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


<script type="text/javascript" src="skin/monster/js/mis-funciones.js"></script>

<!------------script backup---------------->	



<!------------script backup---------------->


