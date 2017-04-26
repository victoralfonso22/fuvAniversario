
<!-- Header -->
<?php include('../template/cabecera.php'); ?>
<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#orgMenos').hide();
    $('#orgMas').show();
    $('html,body').animate({
    scrollTop: $('#orgMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#comiMenos').hide();
    $('#comiMas').show();
    $('html,body').animate({
    scrollTop: $('#comiMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 3){
    echo "<script>$(document).ready(function() {
    $('#perMenos').hide();
    $('#perMas').show();
    $('html,body').animate({
    scrollTop: $('#perMas').offset().top
    }, 1000);
});</script>";
}
}?>

<div class="container">
<header class="style1">
    <br/>
<h2 style="margin-top: 12%">Organización y estructura</h2>
<div class="bordeAbajo"></div>
</header>
    
</div>
<div id="contenedorBlog" class="container">
<div  class="container">
    <div id="contenidoSub">
    <!----------------    Texto para seccion Programa de becas     ----------------->
    
    <div id="orgMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('orgMas','orgMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Órganos de gobierno</label>
    </div>
    <div id="orgMas" style="display: none">
    <div id="divSubMenuNota">

    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('orgMenos','orgMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Órganos de gobierno</label>
    </div>
            <div class="div1Notas">
    <ul>
        <li type= disc><h3 style="color:#73d2d3; font-weight: bolder">Asamblea General de Asociados</h3>
            <ul>                
                <li type= disc><b>Junta Directiva</b>
                    <ul>
                        <li type= disc>Mtro. Víctor Aguilar Pizarro – Presidente</li>
                        <li type= disc>Ing. Jesús Antonio López Rosas – Vicepresidente</li>
                        <li type= disc>Lic. Luis Rafael Hinojosa Moreno – Secretario</li>
                        <li type= disc>Mtra. Enriqueta Sarabia Ramírez – Tesorera</li>                        
                    </ul>
                </li>
                <li type= disc>Arq. Arturo  Aguayo Lozano – Asociado</li>
                <li type= disc>LAE Sergio Benítez Obeso – Asociado</li>                
                <li type= disc>Mtra. María Cristina Domínguez Villegas – Asociada</li>
                <li type= disc>Arq. Antonio de Jesús Vilchis López - Asociado Fundador</li>
                <li type= disc>Sr. Carlos Soto Díaz - Asociado Fundador</li>
                <li type= disc>C.P. Rodrigo C. Campos Reyeros - Asociado y Consejero Estatal de Becas</li>
                <li type= disc>Lic. Francisco Javier Escalera Navarrete – Asociado</li>
                <li type= disc>LAE Enrique Acosta Libreros – Asociado</li>
                <li type= disc>Lic. Rafael de Huerta Manjarrez - Asociado y Consejero Estatal de Becas</li>
                <li type= disc>Dr. Julián Sánchez Cortázar – Asociado</li>
                <li type= disc>Dr. Mauro Loyo Varela - Asociado Fundado</li>
                <li type= disc>Lic. Carlos Manuel Ferráez Matus – Asociado</li>
                <li type= disc>Sr. Antonio Chedraui Mafud – Asociado</li>
                <li type= disc>Ing. Manuel Cienfuegos García - Asociado</li>
                <li type= disc>Lic. Salvador Arana Watty - Asociado </li>
                <li type= disc>Lic. Pascual Castillo Moctezuma – Asociado</li>
                <li type= disc>C.P. Raúl de la Fuente Polanco – Asociado</li>
                <li type= disc>Lic. César Alejandro Guillermo Torres Flores - Asociado</li>
            </ul>
        
        </li>
                                   
    </ul>    
    </div> 
</div>

</div>

<div class="separadorSubmenu">
    
</div>
   <div id="comiMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('comiMas','comiMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Comités Regionales de Becas (voluntarios)</label>
    </div>
    <div id="comiMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('comiMenos','comiMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Comités Regionales de Becas (voluntarios)</label>
    </div>
    <ul>
    <li type= disc><b>Coatzacoalcos- Minatitlán</b>
            <ul>                                
                <li type= disc>Lic. Jesús Salas Lizaur - Presidente</li>
                <li type= disc>Lic. Erik Madrazo Lara - Secretario</li>                
                <li type= disc>Dr. Jorge Alberto Andaverde Arredondo - Coordinador Regional</li>
                <li type= disc>Arq. José Antonio Wilburn González - Vocal </li>
                <li type= disc>Ing. Claudio Geraldo Velasco Martell - Vocal</li>
                <li type= disc>C.P. José Daniel Ruiz Flores - Vocal</li>                
            </ul>    
    </li>
    </ul>
    <ul>
    <li type= disc><b>Veracruz-Boca del Río</b>  
            <ul>                                
                <li type= disc>Sr. Antonio Chedraui Mafud - Presidente</li>
                <li type= disc>Lic. Gustavo Sousa Escamilla - Vicepresidente</li>                
                <li type= disc>Lic. Luis Rafael Hinojosa Moreno - Secretario </li>
                <li type= disc>Ing. Rafael Ortiz de Zárate Vimbert - Tesorero </li>
                <li type= disc>Dr. Alfonso Gerardo Pérez Morales - Coordinador Regional </li>
                <li type= disc>Psic. Teresa de Jesús Ríos Linares - Enlace de la Presidencia</li>
                <li type= disc>Dr. Carlos Lamothe Zavaleta - Enlace de la Coordinación Regional</li>
                <li type= disc>Lic. Mary Carmen Hernández Pérez - Asistente de la Presidencia</li>
                <li type= disc>Mtra. Martha Elena Aguirre Serena – Asistente de la Coordinación Regional </li>
                <li type= disc>Dr. Jesús Joaquín Morales Burguet - Vocal</li>
                <li type= disc>Q. Armando Staboli Belmont - Vocal</li>
                <li type= disc>Lic. Adrián Maynes García - Vocal</li>
                <li type= disc>Sr. Manuel Caramés Cota - Vocal</li>
                <li type= disc>Lic. Fernando Ortiz González - Vocal</li>
                <li type= disc>Ing. Ezequiel Guzmán Arango - Vocal</li>
                <li type= disc>Sr. Gilberto de Jesús Bravo Torra - Vocal</li>
                <li type= disc>Ing. Ángel Carrano Castro - Vocal</li>
                <li type= disc>Lic. Jesús Antonio Muñoz de Cote Sampiery - Vocal</li>
                <li type= disc>Ing. Marcos Orduña Alcocer - Vocal</li>
                <li type= disc>Sr. Guillermo Bouchez Gómez - Vocal</li>
                <li type= disc>Ing. Pedro Aguilar Pizarro - Vocal</li>
                <li type= disc>Lic. Jorge Rafael CoffauKayser - Vocal</li>
                <li type= disc>Ing. José Manuel Urreta Ortega - Vocal</li>
                <li type= disc>Lic. Francisco Muñoz Ruiz - Vocal</li>
                <li type= disc>Lic. Ignacio Reyna Carrera - Vocal</li>
                <li type= disc>Ing. Francisco Malpica Valverde - Vocal</li>
                <li type= disc>Ing. Baltazar Pazos Gómez - Vocal</li>
                <li type= disc>Ing. Baltazar Pazos de la Torre - Vocal</li>
                <li type= disc>Ing. Carlos Eduardo Ramírez Capo - Vocal</li>
                <li type= disc>Dr. Armando López Guerrero - Vocal</li>                
            </ul>    
    </li>
    </ul>
    <ul>
    <li type= disc><b>Xalapa</b>
            <ul>                                
                <li type= disc>Ing. Manuel Cienfuegos García - Presidente </li>
                <li type= disc>Lic. Salvador Arana Watty - Tesorero</li>                                
            </ul>    
    </li>
    </ul>
    </div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
    <div id="perMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('perMas','perMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Personal Directivo</label>
    </div>
    <div id="perMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1Notas">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('perMenos','perMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Personal Directivo</label>
    </div>
    <ul>
                <li type= disc>Ing. Facundo Enrique Pacheco Rojas – Director General</li>
                <li type= disc>C.P. Ángeles Contreras Meneses – Directora de Administración y Control</li>
                <li type= disc>Mtro. Mauricio García Velázquez – Director de Desarrollo Institucional</li>
    </ul>    
    </div>
        
    <div id="paddinFonfo" />
    </div>  
    
    
      
</div>

</div>          
    
</div>
</div>
    </div>
        
<!-- contenido -->

<!-- Pié de página -->				
<?php include('../template/pie.php'); ?>