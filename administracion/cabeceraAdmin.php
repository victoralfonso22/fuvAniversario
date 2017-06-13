<?php

/*Se verifica la sesion*/
session_start();
	 
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true) {
 
} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='index.php'>Salir</a>";
	exit;
}

$now = time();
if($now > $_SESSION['expire']) {
	session_destroy();
	 
	echo "Su sesion a terminado,
	<a href='index.php'>Necesitas loguearte de nuevo.</a>";
	exit;
}

/*Se incluye el encabezado principal */
 include("../template/cabecera.php"); ?>

<br/>
<div class="container">
<a id="fechaPrincipal" class="container"  href="cerrarSesion.php">Cerrar sesión</a>
</div>
<br/>
