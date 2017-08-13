<?php 
$skin =  DB::table('web_skins')->first();
 ?>

@extends($skin->nombre == "newland" ? 'layouts.newland.index' : 'layouts.metronic');
@section('content')
@include('alerts.request')
@include('alerts.success')
@include('alerts.errors')
@include('flash::message')
<!-- muestra mensaje que se a modificado o creado exitosamente-->
<!--include('alerts.success')-->


 <div class="row">
    <div class="col-md-12">
    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">

<i class="fa fa-wordpress  font-red"></i>
<span class="caption-subject font-red sbold uppercase">Seccion de Post</span>


    <div><br>
    </div>

<!--buscador-->
{!!Form::open(['url'=>'usuario', 'method'=>'GET' , 'class'=>'navbar-form navbar-left' , 'role'=>'Search'])!!}
<div class="form-group">
  {!!Form::label('')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre y apellido'])!!}
  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
  {{ Form::select('type',config('options.type'),'',['class'=>'form-control']) }}
 <button type="submit" class="fa fa-search btn btn-success"> BUSCAR </button>
</div>
{!!Form::close()!!}
 <!--endbuscador-->


     </div><!--end caption-->



    <div class="actions">
       <div class="btn-group btn-group-devided" >
               
      <a class="btn btn-success" data-toggle="modal" data-target="#nuevo-post" >
      <i class="fa  fa-plus fa-lg"></i></a>
      
       </div>
   </div>


        </div><!--portlet-title-->
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-hover table-light">
  <thead>
      <tr>
    <th>Id</th>
    <th>Imagen</th>
    <th>titulo</th>
    <th class="col-md-4">Operaciones</th> 
      </tr>
    </thead>
    @foreach($posts as $post)
    <tbody>
  <td>{{ $post -> id}}</td>
  <td><img src="{{$post->portada}}" height="100" width="100" alt=""></td>
  <td>{{ $post -> titulo}}</td>

  
  
<td>

<a class="btn btn-success btn-lg fa fa-edit" href="{!! URL::to('post-edit-'.$post->id) !!}"></a>

<a class="btn btn-primary btn-lg fa fa-globe" href="{!! URL::to('blogdetail-post'.$post->id) !!}"></a>
<!--esto es para que solo el administrador pueda eliminar-->

<!--para el metodo eliminar necesito de un formulario para ejecutarlo-->
 <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#confirmDelete-{{ $post->id }}"><i class="fa fa-trash-o"></i></button>

</td>

  </tbody>
  @endforeach
  </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>




<!--modal eliminar post-->
 @include('lineage.admin.post.modal.delete')
 <!--modal create post-->
 @include('lineage.admin.post.modal.create')
                     

@endsection
