<?php
/*Se incluye el encabezado principal*/
 include("../template/cabecera.php"); ?>
<script src="js/admin.js"></script>
<form>
<br/>
<br/>


<h1>Login para administrar el sitio</h1>
<br/>

<div class="centrado">
<label>Usuario</label>
<input id="usuario" type="text" style="margin: 0 auto; text-align: center;"></input>

<label>Contraseña</label>
<input id="password" type="password" style="margin: 0 auto; text-align: center;"></input>
<br>
<input class="centrado" type="button" id="login" value="Ingresar"/>
</div>

</form>
<?php include("../template/pie.php");