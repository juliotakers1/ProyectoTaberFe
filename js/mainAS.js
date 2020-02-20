jQuery(document).on('submit','#form_insert', function(event){
event.preventDefault();
jQuery.ajax({
    url: 'vistas/registrarAs.php',
    type: 'POST',
    dataType: 'jason',
    data: $(this).serialize(),
})
.done(function(respuesta){
    console.log("respuesta");
    if (!respuesta.error) {
        alert('bien hecho');
    } else {
        alert('mal hecho');
    }
})
.fail(function(resp){
    console.log(resp.responseText);
})
.always(function(){
    console.log("complete");
})
});

