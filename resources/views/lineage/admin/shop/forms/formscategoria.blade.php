<div class="row">
        <div class="form-group col-xs-12 col-sm-12 col-md-12">
            <div class="input-group">
                <select required name="idcliente" id="idcliente" class=" selectpicker"  data-live-search="true" > 
                <option  value="">Seleccione la Categoria</option>
                    @foreach($categorias as $categoria)
                     <option value="{{$categoria->id}}">{{$categoria->nombre}} </option>
                     @endforeach 
                </select> 
                
            </div>

</div>
</div>


<input type="hidden" name="_token" value="{{ csrf_token() }}">