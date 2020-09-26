
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
            var id =$(this).data('id');
            $.ajax('/ajax/movimientos/cargar_horas', {
                data: {
                    _token:csrf_token,
                    //        "_token": "{{ csrf_token() }}",
                 id:id},
                type: 'post',
                dataType: 'json', // type of response data
                success: function(response, status, xhr) { // success callback function

                    if(response.success.HRALLEGADACTE==null||response.success.HRALLEGADACTE=='N/A'||response.success.HRALLEGADACTE==''){response.success.HRALLEGADACTE='00:00'}
                    if(response.success.HRACARGA==null||response.success.HRACARGA=='N/A'||response.success.HRACARGA==''){response.success.HRACARGA='00:00'}
                    if(response.success.HRASALIDACTE==null||response.success.HRASALIDACTE=='N/A'||response.success.HRASALIDACTE==''){response.success.HRASALIDACTE='00:00'}
                    if(response.success.HRAENTREGADOCTOS==null||response.success.HRAENTREGADOCTOS=='N/A'||response.success.HRAENTREGADOCTOS==''){response.success.HRAENTREGADOCTOS='00:00'}
                    if(response.success.HRALLEGADAFILA==null||response.success.HRALLEGADAFILA=='N/A'||response.success.HRALLEGADAFILA==''){response.success.HRALLEGADAFILA='00:00'}
                    if(response.success.HRAINSPECCION==null||response.success.HRAINSPECCION=='N/A'||response.success.HRAINSPECCION==''){response.success.HRAINSPECCION='00:00'}
                    if(response.success.HRAMODULOMEX==null||response.success.HRAMODULOMEX=='N/A'||response.success.HRAMODULOMEX==''){response.success.HRAMODULOMEX='00:00'}
                    if(response.success.HRAMODULOMEXSALIDA==null||response.success.HRAMODULOMEXSALIDA=='N/A'||response.success.HRAMODULOMEXSALIDA==''){response.success.HRAMODULOMEXSALIDA='00:00'}
                    if(response.success.HRAMODULOUSA==null||response.success.HRAMODULOUSA=='N/A'||response.success.HRAMODULOUSA==''){response.success.HRAMODULOUSA='00:00'}
                    if(response.success.HRAMODULOUSASALIDA==null||response.success.HRAMODULOUSASALIDA=='N/A'||response.success.HRAMODULOUSASALIDA==''){response.success.HRAMODULOUSASALIDA='00:00'}
                    if(response.success.HRAENTREGACTE==null||response.success.HRAENTREGACTE=='N/A'||response.success.HRAENTREGACTE==''){response.success.HRAENTREGACTE='00:00'}



                    Swal.fire({
                        title: '<strong>Actualizando horas de viaje</strong>',
                        icon: 'info',
                        html:
                        '<div class="actualizar_group_values">'+
                        '<div class="form-group"><label >Llegada cliente</label>'+
                        '<input type="time" name="HRALLEGADACTE" placeholder="Fecha" value="'+response.success.HRALLEGADACTE+'" class="form-control mb-2 llegada_cliente" /></div>'+

                        '<div class="form-group"><label >Carga cliente</label>'+
                        '<input type="time" name="HRACARGA" placeholder="Fecha" value="'+response.success.HRACARGA+'" class="form-control mb-2 carga_cliente" /></div>'+

                        '<div class="form-group"><label >Salida cliente</label>'+
                        '<input type="time" name="HRASALIDACTE" placeholder="Fecha" value="'+response.success.HRASALIDACTE+'" class="form-control mb-2 salida_cliente" /></div>'+

                        '<div class="form-group"><label >Carga documentos</label>'+
                        '<input type="time" name="HRAENTREGADOCTOS" placeholder="Fecha" value="'+response.success.HRAENTREGADOCTOS+'" class="form-control mb-2 hora_documentos" /></div>'+

                        '<div class="form-group"><label >Llegada fila</label>'+
                        '<input type="time" name="HRALLEGADAFILA" placeholder="Fecha" value="'+response.success.HRALLEGADAFILA+'" class="form-control mb-2 llegada_fila" /></div>'+

                        '<div class="form-group"><label >Inspección K9</label>'+
                        '<input type="time" name="HRAINSPECCION" placeholder="Fecha" value="'+response.success.HRAINSPECCION+'" class="form-control mb-2 hora_inspeccion" /></div>'+

                        '<div class="form-group"><label >Módulo México</label>'+
                        '<input type="time" name="HRAMODULOMEX" placeholder="Fecha" value="'+response.success.HRAMODULOMEX+'" class="form-control mb-2 hora_mod_mex" /></div>'+

                        '<div class="form-group"><label >Módulo México salida</label>'+
                        '<input type="time" name="HRAMODULOMEXSALIDA" placeholder="Fecha" value="'+response.success.HRAMODULOMEXSALIDA+'" class="form-control mb-2 hora_mod_mex_salida" /></div>'+

                        '<div class="form-group"><label >Módulo Usa</label>'+
                        '<input type="time" name="HRAMODULOUSA" placeholder="Fecha" value="'+response.success.HRAMODULOUSA+'" class="form-control mb-2 hora_mod_usa" /></div>'+

                        '<div class="form-group"><label >Módulo Usa salida</label>'+
                        '<input type="time" name="HRAMODULOUSASALIDA" placeholder="Fecha" value="'+response.success.HRAMODULOUSASALIDA+'" class="form-control mb-2 hora_mod_usa_salida" /></div>'+

                        '<div class="form-group"><label >Entrega cliente</label>'+
                        '<input type="time" name="HRAENTREGACTE" placeholder="Fecha" value="'+response.success.HRAENTREGACTE+'" class="form-control mb-2 entrega_cliente" /></div>'+
                        '</div>'
                        ,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonText:
                          'Procesar',
                        confirmButtonAriaLabel: 'Actualizar!',
                        cancelButtonText:
                          'Cancelar',
                        cancelButtonAriaLabel: 'Cancelar'
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {

                        var inputs = $('.actualizar_group_values').find("input");
                        var horas = {};

                        inputs.each(function() {
                                horas[this.name]=this.value;
                        });

                        save_actualizar_fechas(horas);

                        } else  {
                          Swal.fire('Cancelado', '', 'info')
                        }
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




    function save_actualizar_fechas(horas){

        var csrf_token = $('.csrf_token').val();

        $.ajax('/ajax/movimientos/actualizar/horas', {
            data: {
            _token:csrf_token,
             horas:horas},
            type: 'post',
            dataType: 'json', // type of response data
            success: function(response, status, xhr) { // success callback function
                console.log(response);

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




    }
