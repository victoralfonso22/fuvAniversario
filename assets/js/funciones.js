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