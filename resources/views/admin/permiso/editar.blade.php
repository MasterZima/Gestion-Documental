@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/permiso/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-warning">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3 class="card-title text-white">Editar Permisos - {{$data->nombre}}</h3>
                    <div class="card-tools">
                        <a href="{{route('permiso')}}" class="btn btn-block btn-outline-primary btn-sm text-white border-0">
                            <i class="fas fa-reply-all"></i> Volver al listado
                        </a>
                    </div>
                </div>
                <!-- form start -->
                <form action="{{route('actualizar_permiso', ['id' => $data->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <!-- /.card-body -->
                    <div class="card-body">
                        @include('admin.permiso.form')
                    </div>
                    <div class="card-footer">
                        @include('includes.boton-form-editar')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection