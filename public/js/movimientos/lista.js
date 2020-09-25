
$( document ).ready(function() {
console.log('Lista Movimientos');

var table = $('#table_movimientos').DataTable( {
    lengthChange: false,
    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
} );

table.buttons().container()
    .appendTo( '#table_movimientos_wrapper .col-md-6:eq(0)' );


    $(document).on('click', '.actualizar_horas',  function(){
        var csrf_token = $('.csrf_token').val();
        console.log(csrf_token);
        var id =$(this).data('id');
        $.ajax('/ajax/movimientos/cargar_horas', {
            data: {
                _token:csrf_token,
                //        "_token": "{{ csrf_token() }}",
             id:id},
            type: 'post',
            dataType: 'json', // type of response data
            success: function(response, status, xhr) { // success callback function
                console.log(response);
                console.log(response.success);

                Swal.fire({
                    title: '<strong>Actualizar Horas</strong>',
                    icon: 'info',
                    html:
                    '<div class="form-group"><label >Llegada Cliente</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRALLEGADACTE+'" class="form-control mb-2 llegada_cliente" /></div>'+

                    '<div class="form-group"><label >Carga Cliente</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRACARGA+'" class="form-control mb-2 carga_cliente" /></div>'+

                    '<div class="form-group"><label >Salida Cliente</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRASALIDACTE+'" class="form-control mb-2 salida_cliente" /></div>'+

                    '<div class="form-group"><label >Carga Documentos</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAENTREGADOCTOS+'" class="form-control mb-2 hora_documentos" /></div>'+

                    '<div class="form-group"><label >Llegada Fila</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRALLEGADAFILA+'" class="form-control mb-2 llegada_fila" /></div>'+

                    '<div class="form-group"><label >Hora Inspeccion</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAINSPECCION+'" class="form-control mb-2 hora_inspeccion" /></div>'+

                    '<div class="form-group"><label >Hora Mod MEX</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAMODULOMEX+'" class="form-control mb-2 hora_mod_mex" /></div>'+

                    '<div class="form-group"><label >Hora Mod MEX Salida</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAMODULOMEXSALIDA+'" class="form-control mb-2 hora_mod_mex_salida" /></div>'+

                    '<div class="form-group"><label >Hora Mod USA</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAMODULOUSA+'" class="form-control mb-2 hora_mod_usa" /></div>'+

                    '<div class="form-group"><label >Hora Mod USA Salida</label>'+
                    '<input type="text" name="fecha" placeholder="Fecha" value="'+response.success.HRAMODULOUSASALIDA+'" class="form-control mb-2 hora_mod_usa_salida" /></div>'+

                    '<div class="form-group"><label >Entrega Cliente</label>'+
                    '<input type="time" id="appt" name="appt" min="09:00" max="18:00 placeholder="Fecha" value="'+response.success.HRAENTREGACTE+'" class="form-control mb-2 entrega_cliente" /></div>'

                    ,
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText:
                      'Actualizar!',
                    confirmButtonAriaLabel: 'Actualizar!',
                    cancelButtonText:
                      'Cancelar',
                    cancelButtonAriaLabel: 'Cancelar'
                  })

            },
            error: function(jqXhr, textStatus, errorMessage) { // error callback
                Swal.close();
                Swal.fire(
                    'Error',
                    'Ha ocurrido un error!',
                    'error'
                )

            }
        });

 });

});
