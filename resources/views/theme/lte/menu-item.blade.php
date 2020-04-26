@if ($item["submenu"] == [])
    {{-- <li class="nav-item {{getMenuActivo($item["url"])}}">
        <a class="nav-link {{getMenuActivo($item["url"])}}" href="{{url($item['url'])}}">
            <i class="nav-icon fas fa-{{$item["icono"]}}"></i>  --}}
    <li class="nav-item">
        <a href="{{url($item['url'])}}" class="nav-link {{getMenuActivo($item["url"])}}">
            <i class="nav-icon fas fa-{{$item["icono"]}}"></i>
            <p>
                {{$item["nombre"]}}          
            </p>
        </a>
    </li>
@else
    {{-- <li class="nav-item {{getMenuActivo($item["url"])}}">
        <a href="#" class="nav-link {{getMenuActivo($item["url"])}}">
            <i class="nav-icon fas fa-{{$item["icono"]}}"></i>  --}}
    <li class="nav-item has-treeview">
        <a href="javascript:;" class="nav-link">
          <i class="nav-icon fas fa-{{$item["icono"]}}"></i>
            <p>
                {{$item["nombre"]}}
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview" style="display: block;">
            @foreach ($item["submenu"] as $submenu)
                @include("theme.$theme.menu-item", ["item" => $submenu])
            @endforeach
        </ul>                    
    </li>
@endif