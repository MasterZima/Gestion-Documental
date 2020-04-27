<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>
    <div class="col-lg-9">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>