
function enviaFormulario(){
    if($("#contact-name").val() == ''){
        alert('Debe capturar tu nombre completo.');
    }else if($("#contact-email").val() == '' ){
        alert('Ingresa tu correo electrónico para poder contactarnos usted');    
    }else if($("#contact-message").val() == ''){
        alert('Debe escribir el Asunto');
    }    
    else{				
                                nombre = $('#contact-name').val();
                                correo = $('#contact-email').val();
                                asunto = $('#contact-message').val();                                
                                /* ------------- */
                                /*$("#envioInfo").html("<b>Enviando sus datos, un momento por favor.</b><img src='img/bigrotation2.gif'></img>");*/
                                $('#contact-name').attr('disabled', 'disabled');
                                $('#contact-email').attr('disabled', 'disabled');
                                $('#contact-message').attr('disabled', 'disabled');                                
                                $.post("correo.php", {
                                    nombre:nombre,
                                    correo:correo,                                                                        
                                    asunto : asunto                                    
                                },                                
                                function(data){
                                    data = data.replace(/^\s*|\s*$/g,"");				    
                                    if(data== 1){
                                        $("#envioInfo").html("");
                                        alert("Gracias por comunicarse con nosotros. En breve te canalizaremos al área que corresponda");
                                    }else{
                                        alert("Su mensaje no se pudo enviar correctamente. Inténtelo mas tarde");                                        
                                    }
                                }); 											
    }
}
