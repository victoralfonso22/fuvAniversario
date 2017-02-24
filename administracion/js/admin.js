/*by viko*/

$(function(){
$('#login').click(function(){
    var usuario = $('#usuario').val();
    var password = $('#password').val();    
    if(usuario == '' || password == ''){
      alert("No debes dejar campos vacios.");  
    }else{
      $.ajax({
         url:'funciones_ajax.php',
         data:{usuario: usuario, password: password, act: 1},
         type: 'POST',
         async: false,
         success: function(data){
             if(data == 1){
                 location.href='admin.php';
             }else if (data == 0){
                 alert('Datos incorrectos');
             }
         }
      });
    }
});    
});



/*
function login(){
    var user = document.getElementById('usuario').value;
    var pass = document.getElementById('password').value;
    if(user == '' || pass == ''){
        alert('No debe dejar el usuario o password vacio');
    }
    
}*/