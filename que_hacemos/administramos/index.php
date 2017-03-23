
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
}
}?>
<div class="container">
<header class="style1">
    <br/>
<h2>Administramos instalaciones</h2>
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
                    <li class="glide__slide"><img id="imgSliderNotas" src="img/encabezado-administramos-instalaciones.png" /></li>                    
                </ul>
            </div>
            
            </div>        
        </div>
        </div>
    
    
    
    <div id="contenidoSub">
    <!----------------    Texto para seccion campus CAD     ----------------->
    <div id="cadMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('cadMas','cadMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Campus CAD Xalapa</label>
    </div>
    <div id="cadMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('cadMenos','cadMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Campus CAD Xalapa</label>
    </div>
    <p>El Campus para la Cultura, las Artes y el Deporte fue entregado en comodato a la Fundación UV el 9 de diciembre de 1998.</p>
    <p>Ubicado en la zona universitaria de Xalapa, es un espacio reconocido, por visitantes nacionales y extranjeros, por su belleza natural y la sana convivencia que se desarrolla en su interior.</p>
    <p>Con 33 hectáreas de extensión y vocación multidisciplinaria es sede de la Unidad de Servicios Bibliotecarios y de Información (USBI), Tlaqná. Centro Cultural (TCC), la Unidad Deportiva Universitaria (UDU), el Gimnasio Universitario, y además de institutos y laboratorios de investigación especializada, campeonatos deportivos locales, regionales y nacionales, cursos de verano para niños y jóvenes (julio-agosto) así como conciertos y espectáculos internacionales.</p>
    <div class="div1Notas">
    <p>Asimismo, las áreas verdes del Campus CAD Xalapa son hogar de una gran cantidad de especies animales, y con el objetivo de preservarlas y contribuir al cuidado de nuestros recursos, la Fundación UV creó en 2015 la Unidad de Manejo de Fauna. Entre las especies que están bajo la observación y cuidado de la Unidad encontramos tortugas, tlacuaches, ardillas, armadillos, mapaches, zorros, reptiles y aves, algunas de ellas migratorias, procedentes de diversas partes del mundo que bajan a descansar y alimentarse, y otras que eligen al Campus como residencia definitiva.</p>
    
    

        </div>
        <div class="div2Notas" style=" text-align: right !important; padding-top: 10px;">
            <div>
                <a data-fancybox="fauna" href="img/fauna/DSCN2139.jpg">
                    <img src="img/fauna/DSCN2139.jpg">
                </a>

                <a data-fancybox="fauna" href="img/fauna/DSCN2385.jpg">
                    <img src="img/fauna/DSCN2385.jpg">
                </a>
            </div>
            
            <div>
                <a data-fancybox="fauna" href="img/fauna/DSCN2480.jpg">
                    <img src="img/fauna/DSCN2480.jpg">
                </a>

                <a data-fancybox="fauna" href="img/fauna/DSCN2758.jpg">
                    <img src="img/fauna/DSCN2758.jpg">
                </a>
            </div>
            
            <div>
                <a data-fancybox="fauna" href="img/fauna/DSCN3481.jpg">
                    <img src="img/fauna/DSCN3481.jpg">
                </a>

                <a data-fancybox="fauna" href="img/fauna/DSCN3643.jpg">
                    <img src="img/fauna/DSCN3643.jpg">
                </a>
            </div>
            
        </div>
    <p>A los animales que son encontrados por esta Unidad se les toman medidas, se determina su género y se les marca, antes de volver a liberarlos. Los ejemplares que se encuentran atrapados, lastimados o enfermos son llevados a cuarentena, rehabilitados y posteriormente liberados.  Además, para apoyar en la generación de conciencia sobre el cuidado y la preservación de las especies, la Unidad de Manejo de Fauna organiza periódicamente congresos, cursos y eventos sobre el manejo adecuado de la fauna venenosa y no venenosa. </p>
    <div id="div100SliderNotas" class="container">
    <div id="divSliderNotasBoton" >                            
        <div id="Glide" class="glide">

            

            <div class="glide__wrapper">
                <ul class="glide__track" style="padding-left: 10px;">
                    <li class="glide__slide" ><img style="width: 100%; text-align: center;-webkit-border-radius: 5px 10px;  -moz-border-radius: 5px 10px;" id="imgSliderNotas" src="img/CROQUIS.png" /></li>                    
                </ul>
            </div>

            

        </div>
    </div>
</div>
        
       <br/>
       <br/>
       <br/>
        <p class="h3subMenu">Unidad Deportiva Universitaria (UDU)</p>    
        <div class="div1Notas">
    <p>El Campus CAD Xalapa ofrece este espacio para todas las personas de la comunidad universitaria y el público general que busca cuidar su salud y mantenerse activo, practicando deportes al aire libre.</p>
    <p>Cuenta con 12 canchas en las que se puede entrenar futbol soccer y americano, baloncesto, volibol, tenis, volibol playero y frontenis. Además tiene un campo de beisbol y una vitapista que es aprovechada todo el año por corredores regulares. </p>
    <p>Cada año dentro de la UDU, la Fundación UV organiza dos torneos de futbol soccer varonil: Premier y Master, con el objetivo de ofrecer espacios para los amantes de este deporte.<br/>Además, es sede de:</p>
    <ul>
        <li type= disc>Campeonato Universitario Telmex-Telcel varonil. Torneo nacional de futbol soccer más importante a nivel universitario.</li>
        <li type= disc>Liga Universitaria de Baloncesto. Torneo varonil y femenil nacional avalado por la ABE (Asociación de Basquetbol Estudiantil).</li>
        <li type= disc>Liga varonil y femenil de Futbol Americano avalada por la ONEFA (Organización Nacional Estudiantil de Futbol Americano).</li>
        <li type= disc>Torneo de dependencias y empresas. De registro libre, en él participan equipos formados por dependencias UV, maestros y/o estudiantes de facultades, dependencias gubernamentales o empresas de la iniciativa privada.</li>
    </ul>
    
    </div>
        <div class="div2Notas" style="padding-top: 10px;">
              <div>
                  <a data-fancybox="udu" href="img/udu/HAL_7099.jpg">
                      <img src="img/udu/HAL_7099.jpg">                            
                        </a>
                    
                  <a data-fancybox="udu" href="img/udu/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(143).jpg">
                      <img src="img/udu/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(143).jpg">
                        </a>
                        </div>
                        <div>
                            <a data-fancybox="udu" href="img/udu/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(149).jpg">
                                <img src="img/udu/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(149).jpg">
                        </a>
                    
                        </div>
            
        </div>
        <p>También, es sede de los Centros de Formación Deportiva para niños y jóvenes y sus instalaciones fueron sede de algunas competencias durante los Juegos Centroamericanos y del Caribe, Veracruz 2014.</p>
        
        <p class="h3subMenu">Gimnasio Universitario</p>
        <div class="div1Notas">
        <p>Entregado en comodato a la Fundación UV el 2 de abril de 2004, se encuentra ubicado dentro del Campus CAD Xalapa y es conocido como “El Nido de los Halcones”.</p>
        <p>Es un espacio deportivo primordialmente, pero su multifuncionalidad ha permitido desarrollar conciertos, bienvenidas estudiantiles, informes, entrega de reconocimientos, galas y cenas.</p>
        <p>Se encuentra en funciones de lunes a sábado, de 7:00 a 21:00 horas y es utilizado por los estudiantes UV que cursan las materias de baloncesto, volibol y acondicionamiento físico que forman parte del Modelo Educativo Integral y Flexible (MEIF) </p>
        </div>
        <div class="div2Notas" style=" padding-top: 10px;">
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
            </div>
        </div>
            
            <br/><br/><br/>
            <p class="h3subMenu">Tlaqná. Centro Cultural</p>
            <div id="tlaqnaDesk">
            <div class="div2Notas" style="width: 51%; text-align: left !important; padding-top: 10px;">
                <div style="padding-left: 0 !important;">
                <a data-fancybox="tlaq" href="img/tlaqna/DJI_0134-Editar.jpg">
                    <img src="img/tlaqna/DJI_0134-Editar.jpg">
                </a>

                <a data-fancybox="tlaq" href="img/tlaqna/DJI_0214-Editar.jpg">
                    <img src="img/tlaqna/DJI_0214-Editar.jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaq" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                </a>

                    <a data-fancybox="tlaq" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaq" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                </a>

            </div>
            </div>
            <div class="div1Notas" >
                <p>Este espacio cuyo nombre es un vocablo totonaco que significa El que interpreta, fue entregado en comodato a la Fundación UV para su administración, el 23 de agosto del 2013, con el objetivo de salvaguardar y mantener en óptimas condiciones las instalaciones, así como posicionar al centro cultural como un referente de alto nivel y prestigio para la realización de eventos artísticos y culturales. </p>
        <p>Con una propuesta de diseño arquitectónico a cargo del Arq. Enrique Murillo, en Tlaqná. Centro Cultural., confluye un estricto cuidado de la estética, funcionalidad y acústica, logrado gracias al trabajo de expertos nacionales e internacionales. </p>
        </div><p>Cuenta con una sala principal en formato Sala de concierto, con capacidad para más de 1,200 personas; una sala anexa en formato Teatro para 420 personas, y otra de usos múltiples próxima a inaugurarse. Además de un foro al aire libre, vestíbulo y mezzanine.</p>
        <p>El acustólogo Larry Kierkegaard, de Kierkegaard Associates, estuvo a cargo del proyecto acústico de la Sala principal que comprendió la supervisión de cada uno de los elementos constructivos, mobiliarios y ornamentales del recinto, incluido el muro escultórico de 1000 metros cuadrados, denominado Bosque de Niebla y realizado por el artista Hiroyuki Okumura.</p>
        <p>Este mural tuvo un proceso de creación de nueve meses y cuenta con 2,272 paneles poblados de personajes, motivos de Xalapa y paisajes aledaños, los cuales recorren ininterrumpidamente los cuatro muros perimetrales de la Sala. </p>
            
        </div>
            <div id="tlaqnaMovil" style="display: none;">
                <div class="div1Notas" >
                 <p>Este espacio cuyo nombre es un vocablo totonaco que significa El que interpreta, fue entregado en comodato a la Fundación UV para su administración, el 23 de agosto del 2013, con el objetivo de salvaguardar y mantener en óptimas condiciones las instalaciones, así como posicionar al centro cultural como un referente de alto nivel y prestigio para la realización de eventos artísticos y culturales. </p>
        <p>Con una propuesta de diseño arquitectónico a cargo del Arq. Enrique Murillo, en Tlaqná. Centro Cultural., confluye un estricto cuidado de la estética, funcionalidad y acústica, logrado gracias al trabajo de expertos nacionales e internacionales. </p>
        </div><p>Cuenta con una sala principal en formato Sala de concierto, con capacidad para más de 1,200 personas; una sala anexa en formato Teatro para 420 personas, y otra de usos múltiples próxima a inaugurarse. Además de un foro al aire libre, vestíbulo y mezzanine.</p>
        <p>El acustólogo Larry Kierkegaard, de Kierkegaard Associates, estuvo a cargo del proyecto acústico de la Sala principal que comprendió la supervisión de cada uno de los elementos constructivos, mobiliarios y ornamentales del recinto, incluido el muro escultórico de 1000 metros cuadrados, denominado Bosque de Niebla y realizado por el artista Hiroyuki Okumura.</p>
        <p>Este mural tuvo un proceso de creación de nueve meses y cuenta con 2,272 paneles poblados de personajes, motivos de Xalapa y paisajes aledaños, los cuales recorren ininterrumpidamente los cuatro muros perimetrales de la Sala. </p>
            <div class="div2Notas" style=" text-align: left !important; padding-top: 10px;" >
                <div style="padding-left: 0 !important;">
                <a data-fancybox="tlaqM" href="img/tlaqna/DJI_0134-Editar.jpg">
                    <img src="img/tlaqna/DJI_0134-Editar.jpg">
                </a>

                <a data-fancybox="tlaqM" href="img/tlaqna/DJI_0214-Editar.jpg">
                    <img src="img/tlaqna/DJI_0214-Editar.jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqM" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(30).jpg">
                </a>

                    <a data-fancybox="tlaqM" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(5).jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="tlaqM" href="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                        <img src="img/tlaqna/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(56).jpg">
                </a>

            </div>
            </div>
            
               
            </div>
   </div>
</div>



<div class="separadorSubmenu">
    
</div>
    
    <div id="ixtacMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('ixtacMas','ixtacMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Campus Ixtac</label>
    </div>
    <div id="ixtacMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1Notas">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('ixtacMenos','ixtacMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Campus Ixtac</label>
    </div>
        
        <p>Entregado en comodato a la Fundación UV en el año 2009, se encuentra ubicado en el municipio de Ixtaczoquitlán (entre Córdoba y Orizaba). </p>
        <p>Este espacio resguarda las instalaciones de la Unidad de Servicios Bibliotecarios y de Información (USBI) regional y la Facultad de Contaduría y Administración, y tiene una superficie total de 55 hectáreas, de las cuales 48 son administradas por la Fundación UV.</p>
        <p>Las áreas comunes se administran en colaboración con las autoridades universitarias de la región y bajo líneas generales de operación, con el fin de impulsar el crecimiento ordenado, sustentable e integral para los siguientes años.</p>
        <p>Dentro de él se llevan a cabo tareas de mantenimiento de equipos electromecánicos como la torre de alumbrado, la planta de tratamientos de aguas residuales, el sistema de bombeo de agua y sistema de control vehicular e iluminación en general.</p>
        <p>En 2016, las áreas administradas por la Fundación UV dentro de este Campus fueron certificadas por la Jurisdicción Sanitaria No. 7 como espacios libres de criaderos de los mosquitos que transmiten el dengue, la chikungunya y el zika. </p>
        <pfotosIxtac>
   
            </div>
        <div class="div2Notas" style=" text-align: right !important;" >
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="ixtac" href="img/ixtac/IMG_3187.jpg">
                        <img src="img/ixtac/IMG_3187.jpg">
                </a>

                    <a data-fancybox="ixtac" href="img/ixtac/IMG_3209.jpg">
                        <img src="img/ixtac/IMG_3209.jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="ixtac" href="img/ixtac/IMG_3260.jpg">
                        <img src="img/ixtac/IMG_3260.jpg">
                </a>

                    <a data-fancybox="ixtac" href="img/ixtac/IMG_3261.jpg">
                        <img src="img/ixtac/IMG_3261.jpg">
                </a>
            </div>
                <div style="padding-left: 0 !important;">
                    <a data-fancybox="ixtac" href="img/ixtac/IMG_3263.jpg">
                        <img src="img/ixtac/IMG_3263.jpg">
                </a>
                    
                        <a data-fancybox="ixtac" href="img/ixtac/IMG_3267.jpg">
                            <img src="img/ixtac/IMG_3267.jpg">
                </a>

            </div>
            <div style="padding-left: 0 !important;">
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3324.jpg">
                    <img src="img/ixtac/IMG_3324.jpg">
                </a>
                    
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3361.jpg">
                    <img src="img/ixtac/IMG_3361.jpg">
                </a>

            </div>
            
            <div style="padding-left: 0 !important;">
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3364.jpg">
                    <img src="img/ixtac/IMG_3364.jpg">
                </a>
                    
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3389.jpg">
                    <img src="img/ixtac/IMG_3389.jpg">
                </a>

            </div>
            
            <div style="padding-left: 0 !important;">
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3390.jpg">
                    <img src="img/ixtac/IMG_3390.jpg">
                </a>
                    
                <a data-fancybox="ixtac" href="img/ixtac/IMG_3482.jpg">
                    <img src="img/ixtac/IMG_3482.jpg">
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