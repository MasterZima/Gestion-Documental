@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menus
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Crear Menus</h3>
                </div>
                <!-- form start -->
                <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                    @csrf
                    <!-- /.card-header -->
                    <div class="card-body">
                       @include('admin.menu.form')
                    </div>
                    <div class="card-footer">
                        @include('includes.boton-form-crear')
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection