@extends("theme.$theme.layout")
@section("titulo")
    Sistema Menus
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-header with-border">
                <h3 class="card-title">Menus</h3>
                <div class="card-tools">
                    <a href="{{route('crear_menu')}}" class="btn btn-block btn-light btn-sm text-dark">
                        <i class="fas fa-plus-circle"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-3">
                <table class="table table-bordered table-hover text-nowrap table-striped">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key => $item)
                                @if ($item["menu_id"] != 0)
                                    @break
                                @endif
                                @include("admin.menu.menu-item",["item" => $item])
                            @endforeach
                        </ol>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection