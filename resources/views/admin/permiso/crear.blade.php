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
        <div class="card card-success">
            <!-- /.card-header -->
            <div class="card-header">
                <h3 class="card-title">Crear Rol</h3>
                <div class="card-tools">
                    <a href="{{route('permiso')}}" class="btn btn-block btn-outline-primary btn-sm border-0">
                        <i class="fas fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <!-- form start -->
            <form action="{{route('guardar_permiso')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <!-- /.card-body -->
                <div class="card-body">
                    @include('admin.permiso.form')
                </div>
                <div class="card-footer">
                    @include('includes.boton-form-crear')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection