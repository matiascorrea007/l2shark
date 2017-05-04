<div class="panel-body">
<div class="row">

        <div class="form-group col-xs-12 col-sm-12 col-md-12">
        <label for="cliente">Seleccionar la Categoria</label>
            <div class="input-group">
                <select required name="idcliente" id="idcliente" class="form-control selectpicker"  data-live-search="true" > 
                <option  value="">Seleccione la Categoria</option>
                    @foreach($categorias as $categoria)
                     <option value="{{$categoria->id}}">{{$categoria->nombre}} </option>
                     @endforeach 
                </select> 
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#crear-categoria"><i class="fa fa-plus"></i></button>
                </div>
              </div>
        </div>



</div>
</div>
