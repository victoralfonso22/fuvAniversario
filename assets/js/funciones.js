/* By Viko
 */
$(document).ready(function() {
$('.desaparece').hover(function(){
        $(this).animate({opacity:0});
        $(this).animate({})
    },function(){
        $(this).animate({opacity:1});
    });
});


function mostrarOcultar(mostrar, ocultar){    
    $('#'+mostrar).show(1000);
    $('#'+mostrar).show("fast");
    $('#'+ocultar).hide(1000);
    $('#'+ocultar).hide("fast");
}
