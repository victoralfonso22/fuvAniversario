<?php
/*Se incluye la conexion a la base de datos*/
include("../conexion/funciones.php");


if($_POST['act'] == 1){   
    return login($_POST['usuario'], $_POST['password']);    
}

?>