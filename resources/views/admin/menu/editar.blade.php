@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-warning">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3 class="card-title text-white">Editar Menús</h3>
                    <div class="card-tools">
                        <a href="{{route('menu')}}" class="btn btn-block btn-outline-primary btn-sm text-white border-0">
                            <i class="fas fa-reply-all"></i> Volver al listado
                        </a>
                    </div>
                </div>
                <!-- form start -->
                <form action="{{route('actualizar_menu', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <!-- /.card-body -->
                    <div class="card-body">
                       @include('admin.menu.form')
                    </div>
                    <div class="card-footer">
                        @include('includes.boton-form-editar')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection