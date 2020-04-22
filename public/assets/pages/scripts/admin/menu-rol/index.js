$('.menu_rol').on('change', function () {
    var data = {
        menu_id: $(this).data('menuid'),
        rol_id: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1
    } else {
        data.estado = 0
    }
    ajaxRequest('/admin/menu-rol', data);
});

function ajaxRequest (url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success: function (respuesta) {
            if (data.estado == 1) {
                Documental.notificaciones('El registro fue eliminado correctamente', 'Documental', 'success');
            } else {
                Documental.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Documental', 'error');
            }
        }
    });
}