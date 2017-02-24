<?php
include 'cabeceraAdmin.php';
?>
<form>
<h1>Panel de administración, bienvenido <?=$_SESSION['usuario']?></h1>
<br/>

<div class="centrado">
    <table align="center" width="30%">
        <tr><td><br/></td></tr>
        <tr><td><a href="menu.php">Menú principal</a></td></tr>
        <tr><td><br/></td></tr>

    </table>
</div>

</form>
<?php include("../template/pie.php");?>