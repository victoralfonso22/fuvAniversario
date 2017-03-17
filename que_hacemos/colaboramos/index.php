
<!-- Header -->
<?php include('../../template/cabecera.php'); ?>
<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#centroMenos').hide();
    $('#centroMas').show();
    $('html,body').animate({
    scrollTop: $('#centroMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#capacitaMenos').hide();
    $('#capacitaMas').show();
    $('html,body').animate({
    scrollTop: $('#capacitaMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 3){
    echo "<script>$(document).ready(function() {
    $('#conservaMenos').hide();
    $('#conservaMas').show();
    $('html,body').animate({
    scrollTop: $('#conservaMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 4){
    echo "<script>$(document).ready(function() {
    $('#sorteoMenos').hide();
    $('#sorteoMas').show();
    $('html,body').animate({
    scrollTop: $('#sorteoMas').offset().top
    }, 1000);
});</script>";
}
}?>

<div class="container">
<header class="style1">
    <br/>
<h2>Colaboramos con otros programas</h2>
<div class="bordeAbajo"></div>
</header>
    
</div>
<div id="contenedorBlog" class="container">
    <div  class="container">
        <div id="contenidoSub">
            <div id="centroMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('centroMas','centroMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Centro de Atención para el Cáncer</label>
    </div>
    <div id="centroMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('centroMenos','centroMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Centro de Atención para el Cáncer</label>
    </div>   
            
            <p>En el año 2013, el Instituto de Investigaciones Médico Biológicas de la Universidad Veracruzana (IIMB) se acercó a la Fundación UV para conceptualizar el proyecto “Urgencia de Equipo, Urgencia de Vida”, que implicaba la adquisición de un Tomógrafo y un Acelerador Lineal para sesiones de radioterapia para pacientes oncológicos veracruzanos.  El proyecto transitó por un proceso de rediseño con enfoque de procuración de fondos, estrategia 2013-2015, ejecución de la campaña y búsqueda de donantes potenciales, administración de recursos y finiquito del mismo con todas las instancias involucradas. </p>
            <p>Después de 3 años en esta búsqueda,  se consolidó el proyecto con un monto de recursos (en efectivo y en especie) que suman 51.27 millones de pesos. Este logro coloca a la Universidad Veracruzana como la segunda universidad pública del país con capacidad instalada para la operación de estos equipos, consolidando un proyecto de alto impacto social que atenderá a 70 pacientes con cáncer diariamente  y durante un periodo aproximado de 20 a 25 años. </p>
            <p>Este proyecto representa, en adición, un logro para la sociedad veracruzana y su Máxima Casa de Estudio, y al mismo tiempo ubica a la Fundación UV como una institución de alto nivel de  institucionalidad y transparencia en la planeación, gestión, procuración de fondos y administración de recursos.</p>
            <p>Como primera etapa se ofrecerá el servicio de radioterapia y a mediano plazo se incluirá la aplicación de quimioterapias para los pacientes que lo requieran.</p>
            
            
            
            </div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
            
           <div id="capacitaMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('capacitaMas','capacitaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Capacitación</label>
    </div>
    <div id="capacitaMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('capacitaMenos','capacitaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Capacitación</label>
    </div>   
            
           <p>La Fundación UV busca ofrecer soluciones integrales para que los estudiantes y toda la comunidad mejoren sus condiciones y potencialicen sus talentos. En esta sección encontrarás los programas de capacitación que distintas instancias ofrecen en colaboración con nuestra institución.</p>
           <p>Crea e innova con LEGO® Serious Play® La Fundación UV hizo las gestiones necesarias para ofrecer, en coordinación con la empresa mexicana Sinequanon (especialista en desarrollo organizacional), capacitación bajo la metodología de LEGO® Serious Play® (Jugando en serio). </p>
           <p>Esta metodología fue lanzada en el 2002, como parte de las estrategias educativas de LEGO®, marca líder en producción de juguetes para niños, con 85 años en el mercado. LEGO® Serious Play® (LSP) es una poderosa herramienta diseñada para desarrollar competencias que, en equipo y de manera participativa, permiten innovar y mejorar el desempeño de los individuos y las organizaciones, a través del uso de las piezas de LEGO®.</p>
           <p>La Fundación UV ofrece el taller Crea e innova con LEGO© Serious Play®, dirigido a los que quieren pensar y trabajar de forma diferente. En cinco horas el participante desarrollará y potencializará su capacidad creativa y de innovación, la cual podrá aplicar en el ámbito en el que se desarrolla, ya sea el escolar o el laboral.</p>
           <p>Este taller es posible tomarlo en las instalaciones de la Universidad Veracruzana de las distintas regiones en el estado de Veracruz. Si quieres más conocer más información, envía un correo a: capacitacion1@fundacionuv.org o marca a los teléfonos (228) 841 38 71 y 818 41 34.</p>
         
       </div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
           
           
           <div id="conservaMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('conservaMas','conservaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Conservación y desarrollo de áreas verdes</label>
    </div>
    <div id="conservaMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('conservaMenos','conservaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Conservación y desarrollo de áreas verdes</label>
    </div>   
           <p>Es un programa que procura el resguardo del entorno universitario, creado por el Mtro. Francisco Arredondo, y bajo la coordinación conjunta de la Dirección de Proyectos, Construcciones y Mantenimiento de la Universidad Veracruzana y la Fundación UV.</p>
           <p>Este programa resguarda un total de 90  hectáreas (ha), ubicadas en el Campus CAD Xalapa y el Campus Ixtac, y da atención a actividades de restauración y reposición ecológica, arbolamientos, muestras botánicas y jardinerías; manejo integral de los lagos y cuerpos de agua; aprovechamiento del agua del subsuelo (pozo profundo) y del agua pluvial para uso racional (productivo y riego); además de encargarse de diseñar proyectos de ambientación paisajista y de redes hidráulicas, elaborar programas para el registro florístico, la siembra y la adquisición de materiales o herramientas.</p>
           
           
           
           
           </div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
           <div id="sorteoMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('sorteoMas','sorteoMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Sorteos UV</label>
    </div>
    <div id="sorteoMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('sorteoMenos','sorteoMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Sorteos UV</label>
    </div>   
           
           <p>La idea de realizar un sorteo universitario de la UV surgió por la necesidad de obtener recursos extras que permitieran mejorar las condiciones de formación y desarrollo de sus estudiantes. </p>
           <p>Este programa busca, a mediano y largo plazo, obtener recursos adicionales que mejoren las condiciones de formación y desarrollo de los estudiantes UV en las cinco regiones universitarias que abarcan todo el estado de Veracruz.</p>
           <p>La Universidad Veracruzana es la permisionaria de este programa, porque ofrece su nombre y estructura, entrega cuentas y se responsabiliza legalmente ante la Secretaría de Gobernación. La Fundación UV es la operadora, ya que logísticamente maneja, administra la operación y el desarrollo de los sorteos al tiempo de rendir cuentas a la UV.</p>
           <p>Si quieres más detalles y conocer información sobre la edición en curso, entra a <a target="_blank" href="http://www.sorteosuv.org.mx">www.sorteosuv.org.mx</a></p>
           <div id="paddinFonfo" />
    </div>   
        </div>
</div>    
</div>
        
<!-- contenido -->

<!-- Pié de página -->				
<?php include('../../template/pie.php'); ?>