@if (session("mensaje"))
    @if (session("tipo"))
        <div class="{{ session("tipo") }}" data-auto-dismiss="5000">
    @else
        <div class="alert alert-success alert-dismissible" data-auto-dismiss="5000">
    @endif
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    @if (session("icono"))    
        <h5><i class="{{ session("icono") }}"></i> Mensaje Sistema Gestion Documental</h5>
    @else
        <h5><i class="icon fas fa-check"></i> Mensaje Sistema Gestion Documental</h5>
    @endif
        <ul>
            <li>{{ session("mensaje") }}</li>
        </ul>
    </div>    
@endif