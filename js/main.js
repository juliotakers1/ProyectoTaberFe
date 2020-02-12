jQuery(document).on('submit','#form_insert', function(event){
event.preventDefault();
jQuery.ajax({
    url: 'vistas/registrarAs.php',
    type: 'POST',
    dataType: 'jason',
    data: $(this).serialize(),
})
.done(function(respuesta){
    console.log("success");
})
.fail(function(resp){
    console.log("error");
})
.always(function(){
    console.log("complete");
})
});

