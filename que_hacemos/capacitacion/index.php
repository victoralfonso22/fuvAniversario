
<!-- Header -->
<?php include('../../template/cabecera.php'); ?>

<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#cadMenos').hide();
    $('#cadMas').show();
    $('html,body').animate({
    scrollTop: $('#cadMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#ixtacMenos').hide();
    $('#ixtacMas').show();
    $('html,body').animate({
    scrollTop: $('#ixtacMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 3){
    echo "<script>$(document).ready(function() {
    $('#fauMenos').hide();
    $('#fauMas').show();
    $('html,body').animate({
    scrollTop: $('#fauMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 4){
    echo "<script>$(document).ready(function() {
    $('#fotoMenos').hide();
    $('#fotoMas').show();
    $('html,body').animate({
    scrollTop: $('#fotoMas').offset().top
    }, 1000);
});</script>";
}
}?>
<div class="container">
<header class="style1">
    <br/>
<h2>Guiamos tus proyectos</h2>
<div class="bordeAbajo"></div>
</header>

</div>

<div id="contenedorBlog" class="container">
<div  class="container">


    <div id="div100SliderNotas" class="container">
        <div id="divSliderNotas" >                            
            <div id="Glide" class="glide">
            
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide"><img id="imgSliderNotas" src="img/encabezado.png" /></li>                    
                </ul>
            </div>
            
            </div>        
        </div>
        </div>


<br><br>
    <div id="contenidoSub">
    <!----------------    Texto para seccion campus CAD     ----------------->
    <div id="cadMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('cadMas','cadMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Crea e Innova con Lego Serious Play®</label>
    </div>
    <div id="cadMas" style="display: none">
    <div id="divSubMenuNota">

    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('cadMenos','cadMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Crea e Innova con Lego Serious Play®</label>
    </div>
    <p>La Fundación UV hizo las gestiones necesarias para ofrecer, en coordinación con la empresa mexicana Sinequanon (especialista en desarrollo organizacional), capacitación bajo la metodología de LEGO® Serious Play® (Jugando en serio). </p>
    <p>Esta metodología fue lanzada en el 2002, como parte de las estrategias educativas de LEGO®, marca líder en producción de juguetes para niños, con 85 años en el mercado. LEGO® Serious Play® (LSP) es una poderosa herramienta diseñada para desarrollar competencias que, en equipo y de manera participativa, permiten innovar y mejorar el desempeño de los individuos y las organizaciones, a través del uso de las piezas de LEGO®.</p>
    <div class="div1Notas">
    <p>La Fundación UV ofrece el taller Crea e innova con LEGO© Serious Play®, dirigido a los que quieren pensar y trabajar de forma diferente. En cinco horas el participante desarrollará y potencializará su capacidad creativa y de innovación, la cual podrá aplicar en el ámbito en el que se desarrolla, ya sea el escolar o el laboral.</p>
    <p>Este taller es posible tomarlo en las instalaciones de la Universidad Veracruzana de las distintas regiones en el estado de Veracruz. Si quieres más conocer más información, envía un correo a: capacitacion1@fundacionuv.org o marca a los teléfonos (228) 841 45 80 y 818 41 34.</p>        
    </div>
    <div class="div2Notas" style="padding-top: 10px;">
              <div>
                  <a data-fancybox="udu" href="img/lego1.jpg">
                      <img src="img/lego1.jpg">                            
                        </a>
                    
                  <a data-fancybox="udu" href="img/lego2.jpg">
                      <img src="img/lego2.jpg">
                        </a>
                        </div>
                        <div>
                            <a data-fancybox="udu" href="img/lego3.jpg">
                                <img src="img/lego3.jpg">
                        </a>                           
                        </div>
            <!--<div>
                <a data-fancybox="udu" href="img/udu/UDU-2.jpg">
                    <img src="img/udu/UDU-2.jpg">
                        </a>
                            <a data-fancybox="udu" href="img/udu/UDU-3.jpg">
                                <img src="img/udu/UDU-3.jpg">
                        </a>
                        </div>
            <div>
                <a data-fancybox="udu" href="img/udu/UDU-4.jpg">
                    <img src="img/udu/UDU-4.jpg">
                        </a>
                            <a data-fancybox="udu" href="img/udu/UDU-5.jpg">
                                <img src="img/udu/UDU-5.jpg">
                        </a>
                        </div>-->
            
        </div>                                      
   </div>
</div>



<div class="separadorSubmenu">
    
</div>
    
    <div id="ixtacMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('ixtacMas','ixtacMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Diplomado Desarrollo de Talentos Directivos</label>
    </div>
    <div id="ixtacMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('ixtacMenos','ixtacMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Diplomado Desarrollo de Talentos Directivos</label>
    </div>

        <div class="div1Notas">
        <p>Dirigido al sector empresarial, específicamente a puestos que tienen a cargo capital humano: directores, gerentes, subgerentes, coordinadores, supervisores, empresarios y/o emprendedores, el “Diplomado de Desarrollo de Talentos Directivos” tiene el objetivo de desarrollar en sus participantes, estrategias laborales de vanguardia que impacten, de manera directa, en la productividad de sus empresas. Lo imparten especialistas acreditados en el campo: liderazgo, inteligencia emocional, toma de decisiones, creatividad e innovación, manejo y entrevista por competencias, gestión administrativa y administración del tiempo. Y le integran 8 módulos, de 10 horas cada uno: 80 horas presenciales (más 40 horas de asesoría en línea) durante tres meses. </p>            
        <p>Debido a que su horario es fines de semana: viernes de 15:00 a 20:00 hrs., y sábado de 9:00 a 14:00 hrs., el diplomado se imparte durante 12 fines de semana continuos. Para mayor información, comunicarse al correo: <a href="mailto:capacitacion1@fundacionuv.org">capacitacion1@fundacionuv.org</a> o a los teléfonos: <a href="tel:2288414580">(228)  841 4580</a> y <a href="tel:2288184134">818 4134.</a></p>    
        </div>
        <div class="div2Notas" style="padding-top: 10px;">            
              <div>
                  <a data-fancybox="udu" href="img/diplomado1.jpg">
                      <img src="img/diplomado1.jpg">                            
                        </a>
                    
                  <a data-fancybox="udu" href="img/diplomado2.png">
                      <img src="img/diplomado2.png">
                        </a>
                        </div>
                        <div>
                            <a data-fancybox="udu" href="img/diplomado3.png">
                                <img src="img/diplomado3.png">
                        </a>  
                            <a data-fancybox="udu" href="img/diplomado4.png">
                    <img src="img/diplomado4.png">
                        </a>
                        </div>
            <div>               
                <a data-fancybox="udu" href="img/diplomado5.jpg">
                    <img src="img/diplomado5.jpg">
                        </a>
                        </div>
            <!--<div>
                <a data-fancybox="udu" href="img/udu/UDU-4.jpg">
                    <img src="img/udu/UDU-4.jpg">
                        </a>
                            <a data-fancybox="udu" href="img/udu/UDU-5.jpg">
                                <img src="img/udu/UDU-5.jpg">
                        </a>
                        </div>-->
                          
        </div>
</div>

</div>

    
<div class="separadorSubmenu">
    
</div>
    
    
    <!----------------    Texto para seccion campus CAD     ----------------->
    <div id="fauMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('fauMas','fauMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Taller de Manejo de Fauna Venenosa</label>
    </div>
    <div id="fauMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('fauMenos','fauMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Taller de Manejo de Fauna Venenosa</label>
    </div>
        <div class="div1Notas">
            <p>Integrado por conferencistas especializados en temas como: biodiversidad, comportamiento y bienestar animal, coralillos no venenosos y arácnidos venenosos, medicina preventiva y primeros auxilios, el “Taller de Manejo de Fauna Venenosa” tiene el propósito de informar a sus participantes acerca de los mitos que acompañan a la llamada fauna venenosa. Dirigido al público en general, es una oportunidad para aprender a distinguir especies venenosas de las que no lo son, así como para adquirir técnicas actuales que permitan el acercamiento, el manejo y el cuidado de dichas especies. Para más información, comunicarse con el Biólogo Pablo Cobos Mejía, a los teléfonos: (228) 841 1700, ext. 11672 y al número de celular 228 270 0910.</p>
        </div>
        <div class="div2Notas" style="padding-top: 10px;">
              <div>
                  <a data-fancybox="udu" href="img/fauna1.jpg">
                      <img src="img/fauna1.jpg">                            
                        </a>                    
                  <a data-fancybox="udu" href="img/fauna2.jpg">
                      <img src="img/fauna2.jpg">
                        </a>
                        </div>
                        <div>
                            <a data-fancybox="udu" href="img/fauna3.jpg">
                                <img src="img/fauna3.jpg">
                        </a>                           
                        </div>            
            
        </div> 
   </div>
</div>



<div class="separadorSubmenu">
    
</div>
    
    <div id="fotoMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('fotoMas','fotoMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Taller de Fotografía de Flora y Fauna</label>
    </div>
    <div id="fotoMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('fotoMenos','fotoMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Taller de Fotografía de Flora y Fauna</label>
    </div>   
        <div class="div1Notas">
    <p>Ya sea que se busque tener una foto de nuestra mascota o se quiera retratar alguna flor del jardín, se quiera concursar en una revista especializada o se comparta sólo por internet, estar al tanto de la técnica en el uso de la cámara y de las dificultades que presenta el enfocar un animal en movimiento, como un ave, o en miniatura, como un insecto, resulta una ventaja al momento de expresarse mediante la fotografía. Este es el objetivo del “Taller de Fotografía de Flora y Fauna”, el cual imparte temas como: fotografía con celular, armado de tu propio set de fotografía, reglas de composición, manejo de flora y fauna para fotografía. La teoría que se imparte en el taller se aplica a las más de 70 especies registradas en el Campus CAD, entre ellas: tortugas, armadillos, mapaches, reptiles y aves. Para mayores informes, comunicarse con el Biólogo Pablo Cobos Mejía, a los teléfonos: (228) 841 1700, ext. 11672.</p>
    </div>
        <div class="div2Notas" style="padding-top: 10px;">
              <div>
                  <a data-fancybox="udu" href="img/foto1.jpg">
                      <img src="img/foto1.jpg">                            
                        </a>                    
                  <a data-fancybox="udu" href="img/foto2.jpg">
                      <img src="img/foto2.jpg">
                        </a>
                        </div>
                        <div>
                            <a data-fancybox="udu" href="img/foto3.jpg">
                                <img src="img/foto3.jpg">
                        </a>                           
                        </div>            
            
        </div>
        
</div>

</div>
<div id="paddinFonfo" />
    </div>
    
</div>
    
</div>
    </div>


<!-- Pié de página -->				
<?php include('../../template/pie.php'); ?>
<script>
$(document).ready(function(){
    $('.least-gallery').least();
    });
</script>