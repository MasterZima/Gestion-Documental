<div class="form-group row">
    <label for="nombre" class="col-lg-2 col-form-label requerido text-right">Nombre</label>
    <div class="col-lg-9">
    <input type="text" name="nombre" id="nombre" class="form-control ml-3" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-lg-2 col-form-label requerido text-right">URL</label>
    <div class="col-lg-9">
      <input type="text" name="url" id="url" class="form-control ml-3" value="{{old('url', $data->url ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-lg-2 col-form-label text-right">Icono</label>
    <div class="col-lg-9">
		<input type="text" name="icono" id="icono" class="form-control ml-3"value="{{old('icono', $data->icono ?? '')}}"/>
    </div>
    <div class="col-lg-1">
      <span id="mostrar-icono" class="fas fa-{{old("icono")}}" style="align:center;width:70px;text-align:center;"></span>
    </div>
</div>