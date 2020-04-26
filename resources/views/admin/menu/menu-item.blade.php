@if ($item["submenu"] == [])
<li class="dd-item dd3-item" data-id="{{$item["id"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        {{-- <a href="{{url("admin/menu/". $item["id"] . "/editar")}}">{{$item["nombre"] . " | Url -> " . $item["url"]}} | Icono -> <i style="font-size:20px;" class="fas fa-{{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a> --}}
        <a href="{{route("editar_menu", ['id' => $item["id"]])}}">{{$item["nombre"] . " | Url -> " . $item["url"]}} Icono -> <i style="font-size:20px;" class="fas fa-{{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
        <a href="{{route('eliminar_menu', ['id' => $item["id"]])}}" class="eliminar-menu width:70px tooltipsC" style="float:right;" title="Eliminar este menú"><i class="fas fa-trash-alt"></i></a>
    </div>
</li>
@else
<li class="dd-item dd3-item" data-id="{{$item["id"]}}">
    <div class="dd-handle dd3-handle"></div>
    <div class="dd3-content {{$item["url"] == "javascript:;" ? "font-weight-bold" : ""}}">
        {{-- <a href="{{url("admin/menu/". $item["id"] . "/editar") }}">{{ $item["nombre"] . " | Url -> " . $item["url"]}} | Icono -> <i style="font-size:20px;" class="fas fa-{{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a> --}}
        <a href="{{route("editar_menu", ['id' => $item["id"]])}}">{{ $item["nombre"] . " | Url -> " . $item["url"]}} Icono -> <i style="font-size:20px;" class="fas fa-{{isset($item["icono"]) ? $item["icono"] : ""}}"></i></a>
        <a href="{{route('eliminar_menu', ['id' => $item["id"]])}}" class="eliminar-menu tooltipsC" style="float:right;" title="Eliminar este menú"><i class="fas fa-trash-alt"></i></a>
    </div>
    <ol class="dd-list">
        @foreach ($item["submenu"] as $submenu)
        @include("admin.menu.menu-item",[ "item" => $submenu ])
        @endforeach
    </ol>
</li>
@endif