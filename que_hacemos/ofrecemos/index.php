
<!-- Header -->
<?php include('../../template/cabecera.php'); ?>
<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#tlaqMenos').hide();
    $('#tlaqMas').show();
    $('html,body').animate({
    scrollTop: $('#tlaqMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#beisMenos').hide();
    $('#beisMas').show();
    $('html,body').animate({
    scrollTop: $('#beisMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 3){
    echo "<script>$(document).ready(function() {
    $('#gimMenos').hide();
    $('#gimMas').show();
    $('html,body').animate({
    scrollTop: $('#gimMas').offset().top
    }, 1000);
});</script>";
}
}?>

<div class="container">
<header class="style1">
    <br/>
<h2>Ofrecemos espacios para eventos</h2>
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
                    <li class="glide__slide"><img id="imgSliderNotas" src="img/encabezado-eventos.png" /></li>                    
                </ul>
            </div>
            
            </div>        
        </div>
        </div>
    
    <div id="contenidoSub">
    <!----------------    Texto para seccion Programa de becas     ----------------->
    <p>Tú puedes apoyar el mantenimiento de los programas que ofrece la Fundación UV a través de la renta de alguno de nuestros espacios para tus eventos musicales, proyectos culturales, deportivos o académicos. Conócelos y elige el que se adapte mejor a tus necesidades.</p>
    <div id="tlaqMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('tlaqMas','tlaqMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Tlaqná. Centro Cultural</label>
    </div>
    <div id="tlaqMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('tlaqMenos','tlaqMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Tlaqná. Centro Cultural</label>
    </div>
            <div class="div1Notas">
    <p class="h3subMenu">Sala principal</p>
            <ul>
                <li type= disc>Considerando que es una sala diseñada acústicamente, los eventos y actividades que se presenten dentro de ella deben tomar en cuenta como característica especial la apreciación del sonido sin ningún equipo de amplificación. Es por ello que la música sinfónica, de cámara y presentaciones acústicas, entre otras actividades de este tipo, son los eventos ideales para esta sala.</li>
                <li type= disc>Capacidad para 1,205 espectadores sentados y espacio para sillas de ruedas.</li>
                <li type= disc>En formato Sala de Conciertos, es decir un escenario rodeado de butacas que permite ofrecer zona de Balcones (uno trasero y dos laterales), zona Frontal (aforo general) y zona de Palcos (general y elevado).</li>
                <li type= disc>Foro para orquesta de 110 músicos y coro de 100 cantantes; escenario de 190 m<sup>2</sup> que cuenta con plataforma elevadiza mecánica para participación de diferentes tipos de orquestas.</li>
                <li type= disc>Sistema acústico ajustable con:
            <ul>
                <li type= disc>Canopy o difusor acústico superior mecanizado.</li>
                <li type= disc>Cortinas acústicas laterales mecanizadas.</li>
                <li type= disc>Muro escultórico acústico rodeante de 1000 m<sup>2</sup>.</li>
                <li type= disc>Gradas practicables móviles de nivelación de orquesta.</li>
                <li type= disc>Butacas de diseño acústico.</li>
            </ul>

        </li>
        <li type= disc>5 salas de ensayo por instrumentos: Pianos, Arpas, Percusiones, Cuerdas y General.</li>
        <li type= disc>Bodega general.</li>
        <li type= disc>4 camerinos con estancia de espera.</li>
        <li type= disc>Estancia de músicos.</li>
        <li type= disc>10 puertas de entrada a la sala y 4 puertas de entrada al escenario.</li>
        <li type= disc>Guardarropa.</li>
            </ul>
        
        
        </div>
        <div class="div2Notas" style=" text-align: right ; padding-top: 10px;" >
                <div style="padding-left: 0 !important;">
                <a data-fancybox="tlaqna" href="img/tlaqna/DJI_0134-Editar.jpg">
                    <img src="img/tlaqna/DJI_0134-Editar.jpg">
                </a>

                <a data-fancybox="tlaqna" href="img/tlaqna/DJI_0214-Editar.jpg">
                    <img src="img/tlaqna/DJI_0214-Editar.jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqna" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                </a>

                    <a data-fancybox="tlaqna" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqna" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                </a>
                    <a data-fancybox="tlaqna" href="img/tlaqna/Croquis-Tlaqna.png">
                        <img src="img/tlaqna/Croquis-Tlaqna.png">
                </a>

            </div>
            </div>
         <p class="h3subMenu">Sala anexa</p>
         <div class="div1Notas">
         <ul>
                <li type= disc>Capacidad para 420 espectadores en formato Teatro (dos niveles).</li>
                <li type= disc>Servicios audiovisuales con pantalla de 8 x 3 mt.</li>
                <li type= disc>Tramoya.</li>
                <li type= disc>Foso para ópera.</li>
                <li type= disc>Vestíbulo.</li>
                <li type= disc>Cafetería.</li>
                <li type= disc>Sala de espera.</li>
                <li type= disc>Bodega de servicios.</li>
                <li type= disc>4 puertas de entrada a la sala y 2 puertas de entrada al escenario.</li>                
            </ul>
         </div>
         <div class="div2Notas" style=" text-align: right ; padding-top: 10px;" >
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqnaA" href="img/tlaqnaAnexa/anexa-(10).jpg">
                    <img src="img/tlaqnaAnexa/anexa-(10).jpg">
                </a>

                    <a data-fancybox="tlaqnaA" href="img/tlaqnaAnexa/anexa-(4).jpg">
                    <img src="img/tlaqnaAnexa/anexa-(4).jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqnaA" href="img/tlaqnaAnexa/anexa-(6).jpg">
                        <img src="img/tlaqnaAnexa/anexa-(6).jpg">
                </a>

                    <a data-fancybox="tlaqnaA" href="img/tlaqnaAnexa/anexa-(8).jpg">
                        <img src="img/tlaqnaAnexa/anexa-(8).jpg">
                </a>
            </div>
                
            </div>
             
         <p class="h3subMenu">Servicios adicionales del Centro Cultural</p>
         <ul>
                <li type= disc>Aire acondicionado.</li>
                <li type= disc>Súper-poste de iluminación externa.</li>
                <li type= disc>Sanitarios.</li>
                <li type= disc>Servicios de atención a discapacitados.</li>
                <li type= disc>Servicio médico y ambulancia (durante los eventos).</li>
                <li type= disc>Brigada de Protección Civil.</li>
                <li type= disc>Personal de vigilancia permanente con circuito cerrado.</li>
                <li type= disc>Personal de acomodo y atención al público.</li>
                <li type= disc>Estacionamiento techado para 126 autos (espacio total disponible dentro del Campus CAD: 1000 autos).</li>                
            </ul>
         
    
    <p>Solicita más información sobre este espacio llamando al (228) 817 13 43</p>
    
</div>

</div>

<div class="separadorSubmenu">
    
</div>
   <div id="beisMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('beisMas','beisMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Campo de Béisbol</label>
    </div>
    <div id="beisMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('beisMenos','beisMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Campo de Béisbol</label>
    </div>
    
    <ul>
                <li type= disc>Capacidad hasta para 12,000 personas en un evento masivo (considerando campo y gradas).</li>
                <li type= disc>Entradas y salidas independientes para público y producción.</li>
                <li type= disc>Uso de los estacionamientos disponibles dentro del Campus CAD (espacio total para 1,000 autos).</li>
                <li type= disc>Sanitarios bajo las gradas y limpieza de los mismos.</li>
                <li type= disc>Disponibilidad de servicio de barra de cafetería/bebidas concesionado, en caso de que el empresario no desee operarlo por su cuenta.</li>
                <li type= disc>Dispositivo de seguridad perimetral (definido en coordinación con la producción).</li>
                <li type= disc>Este espacio está disponible de diciembre a abril.</li>
                <li type= disc>Entre los artistas que se han presentado en este espacio se encuentran Alejandra Guzmán, Moderatto, Silvio Rodríguez y Juan Formell y los Van Van, entre otros.</li>
            </ul>
    </div>
        <p>Consulta la disponibilidad de este espacio llamando al (228) 842 17 00 ext. 11034 o al (228) 117 94 96</p>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
    <div id="gimMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('gimMas','gimMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Gimnasio Universitario</label>
    </div>
    <div id="gimMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1Notas">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('gimMenos','gimMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Gimnasio Universitario</label>
    </div>
    <ul>
                <li type= disc>Capacidad máxima para 3,000 personas (incluidas gradas retráctiles y sillería sobre la duela de baloncesto). </li>
                <li type= disc>Camerinos cercanos al escenario.</li>
                <li type= disc>Uso de estacionamientos disponibles dentro del Campus CAD (espacio total para 1000 autos).</li>
                <li type= disc>Servicio de sanitarios y limpieza de los mismos.</li>
                <li type= disc>Disponibilidad de servicio de barra de cafetería/bebidas concesionado, en caso de que el empresario no desee operarlo por su cuenta.</li>
                <li type= disc>Secciones definidas para venta de boletos.</li>
                <li type= disc>Entradas y salidas independientes para público y producción.</li>
                <li type= disc>Dispositivos de seguridad perimetral (definido en coordinación con la producción).</li>
                <li type= disc>Entre los artistas que se han presentado en este recinto están: Air Supply, Julieta Venegas, Yuri, Mijares, Mocedades, Pandora, Zoe, Ángeles Azules y Cristian Castro.</li>
                
            </ul>
    <p>Consulta la disponibilidad de este espacio llamando al (228) 842 17 00 ext. 11034 o al (228) 117 94 96</p>
    </div>
    <div class="div2Notas" >
            <div>
                <a data-fancybox="gym" href="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(103).jpg">
                    <img src="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(103).jpg">
                </a>

                <a data-fancybox="gym" href="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(110).jpg">
                    <img src="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(110).jpg">
                </a>
            </div>
            <div>
                <a data-fancybox="gym" href="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(95).jpg">
                    <img src="img/gym/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(95).jpg">
                </a>
                <a data-fancybox="gym" href="img/gym/Croquis-Gimnasio.png">
                    <img src="img/gym/Croquis-Gimnasio.png">
                </a>
            </div>
        </div>
    
    <div id="paddinFonfo" />
    </div>  
    
    
      
</div>

</div>
    
      <p>Si estás interesado en cualquiera de estos espacios, revisa los <a target="_blank" href="pdf/Uso de Instalaciones para Eventos Masivos.pdf">requisitos para apartarlo.</a></p>
    <p>* Estos recintos y sus espacios no están disponibles para actividades religiosas o políticas.</p>
    
</div>
</div>
    </div>
        
<!-- contenido -->

<!-- Pié de página -->				
<?php include('../../template/pie.php'); ?>