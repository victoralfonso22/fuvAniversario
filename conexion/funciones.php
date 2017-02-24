<?php
session_start();
function conectar(){
    $con = new mysqli('192.168.100.105','horus', 'osiris', 'fuv25Aniversario');
	 if($con->connect_error){
            die("Error en la conexion : ".$con->connect_errno.
                                      "-".$con->connect_error);
        }        
        $con->set_charset("utf8");
        return $con;
     
}

function login($usuario,$password){
    $con = conectar();    
    $resultado = $con -> query("select * from usuarios where usuario = '$usuario' and password = MD5('$password') limit 1");
    if($resultado-> num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['logueado'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
        echo 1;
    }else{
        echo 0;
    }
 } 

?>