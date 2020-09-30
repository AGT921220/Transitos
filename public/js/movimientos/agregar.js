


$(document).on('click','.subcontratado_check,.compartido_check', function (){

    if($('.compartido_check').is(':checked')){
$('.container_select_compartido').show();
    }else{
$('.container_select_compartido').hide();
    }


    if($('.subcontratado_check').is(':checked')){
$('.container_select_subcontratado').show();
    }else{
$('.container_select_subcontratado').hide();
    }

});


function load_swal_return_movimientos(){

}
