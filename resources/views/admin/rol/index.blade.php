@extends("theme.$theme.layout")
@section("titulo")
    Sistema Roles
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-primary">
            <!-- /.card-header -->
            <div class="card-header with-border">
                <h3 class="card-title">Roles</h3>
                <div class="card-tools">
                    <a href="{{route('crear_rol')}}" class="btn btn-block btn-outline-success btn-sm border-0">
                        <i class="fas fa-plus-circle"></i> Nuevo Registro
                    </a>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-body">
                <table class="table table-bordered table-hover text-nowrap table-striped" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}}</td>
                            <td>
                                <a href="{{route('editar_rol', ['id' => $data->id])}}">
                                    <button type="submit" class="btn-accion-editar tooltipsC" title="Editar este registro">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                <form action="{{route('eliminar_rol', ['id' => $data->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fas fa-times-circle"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection