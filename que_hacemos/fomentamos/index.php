<!-- Header -->
<?php include('../../template/cabecera.php'); ?>

<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#canchaMenos').hide();
    $('#canchaMas').show();
    $('html,body').animate({
    scrollTop: $('#canchaMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#formaMenos').hide();
    $('#formaMas').show();
    $('html,body').animate({
    scrollTop: $('#formaMas').offset().top
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
<h2>Fomentamos el deporte</h2>
<div class="bordeAbajo"></div>
</header>
    
</div>
<div id="contenedorBlog" class="container">
    <div  class="container">
        <div id="contenidoSub">
  <div id="canchaMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('canchaMas','canchaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Uso de canchas deportivas</label>
    </div>
    <div id="canchaMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1Notas">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('canchaMenos','canchaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Uso de canchas deportivas</label>
    </div>          
            

        <p>Al hacer uso de las canchas de la Unidad Deportiva Universitaria (UDU), con la cuota de recuperación estás contribuyendo al mantenimiento de las mismas y ayudas a que más personas puedan seguir utilizándolas.</p>
        <p>Puedes solicitar cualquiera de estas instalaciones para practicar:</p>
        <ul>
            <li type= disc>Baloncesto</li>
            <li type= disc>Frontenis</li>
            <li type= disc>Futbol americano</li>
            <li type= disc>Futbol soccer</li>
            <li type= disc>Tenis</li>
            <li type= disc>Volibol</li>
            <li type= disc>Volibol playero</li>
        </ul>
        
        <div class="divSub">
<div id="div100SliderNotas" class="container">
    <div id="divSliderNotasBoton" >                            
        <div id="Glide" class="glide">

            

            <div class="glide__wrapper">
                <ul class="glide__track" style="padding-left: 0;">
                    <li class="glide__slide" ><a  href="pdf/Tabulador canchas UDU descargable.pdf" target="_blank"><img style="width: 100%;" id="imgSliderNotas" src="img/tabulador1.png" /></a></li>                    
                </ul>
            </div>

            

        </div>
    </div>
</div>
</div>
        
        
        <br /><br />
        <p>Consulta la disponibilidad de las canchas llamando al (228) 842 17 00 ext. 11034 o al (228) 117 94 96</p>
        <p>Como parte de las acciones de fomento de la práctica de deportes, la Fundación UV ofrece desde el año 2001, la oportunidad a equipos de la ciudad de Xalapa y la región, en los distintos torneos que organiza anualmente. Lo recaudado a través de la inscripción de éstos se utiliza para dar mantenimiento a las canchas.</p>
        <ul>
            <li type= disc>Torneo Premier de Futbol Soccer Varonil. Dirigido a jugadores nacidos antes y hasta 1960. Se realizan alrededor de 24 jornadas durante el año. Con casi 20 años de antigüedad, este torneo se ha convertido en una tradición en Xalapa para los veteranos que disfrutan jugar un partido de futbol cada fin de semana.</li>
            <li type= disc>Torneo Master de Futbol Soccer Varonil. Dirigido a los nacidos entre 1961 y 1969. Se organizan partidos de visita recíproca entre los equipos, por lo que dura todo el año. </li>
        </ul>
        
        </div>
        <div class="div2Notas" >
            
                        <div>
                        <a data-fancybox="gallery" href="img/HAL_7158.jpg">
                            <img src="img/HAL_7158.jpg">
                        </a>
                    
                        <a data-fancybox="gallery" href="img/HAL_7170.jpg">
                            <img src="img/HAL_7170.jpg">
                        </a>
                        </div>
                        <div>
                        <a data-fancybox="gallery" href="img/HAL_7196.jpg">
                            <img src="img/HAL_7196.jpg">
                        </a>
                    
                        <a data-fancybox="gallery" href="img/HAL_7206.jpg">
                            <img src="img/HAL_7206.jpg">
                        </a>
                        </div>
            <div>
                        <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(141).jpg">
                            <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(141).jpg">
                        </a>
                    
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(125).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(125).jpg">
                        </a>
                        </div>
            <div>
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(131).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(131).jpg">
                        </a>
                    
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(136).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(136).jpg">
                        </a>
                        </div>
            
            <div>
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(144).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(144).jpg">
                        </a>
                    
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(151).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(151).jpg">
                        </a>
                        </div>
            
            <div>
                <a data-fancybox="gallery" href="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(138).jpg">
                    <img src="img/HOYLUCES-UNIDAD-DEPORTIVA-TLAQNA-EXTERIORES-DRON-(138).jpg">
                        </a>
             
                
                        </div>
            
        </div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
   <div id="formaMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('formaMas','formaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Centros de Formación Deportiva Infantil y Juvenil</label>
    </div>
    <div id="formaMas" style="display: none">
    <div id="divSubMenuNota">
        <div >
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('formaMenos','formaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Centros de Formación Deportiva Infantil y Juvenil</label>
    </div>
        
        
        
            <p>El programa de fomento y apoyo al deporte, coordinado por la Fundación UV, tiene como objetivos desarrollar deportistas para la Universidad Veracruzana a corto plazo, formar la identidad universitaria en los niños, jóvenes y sus familias y fomentar el deporte, lo que repercutirá en el bienestar de la sociedad xalapeña y sus alrededores. De este programa forman parte, los Centros de Formación Deportiva infantil y juvenil de futbol soccer, futbol americano y baloncesto, este último a cargo de la Fundación UV desde 2013.</p>
        
        <ul>
            <li type= disc>Futbol soccer <br /><br /><br />
                <div id="div100SliderNotas" class="container">
                    <div id="divSliderNotasBoton" >                            
                        <div id="Glide" class="glide">



                            <div class="glide__wrapper">
                                <ul class="glide__track" style="padding-left: 0;">
                                    <li class="glide__slide" ><img style="width: 100%;" id="imgSliderNotas" src="img/Soccer.jpg" /></li>                    
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
               <br> Coordinador:  Miguel Ángel Maldonado Hernández<br>
Inscripciones abiertas todo el año<br>
Entrenamiento para niñas y niños<br>
Uniformes: se utilizan 3 modelos de uniforme verde, blanco y azul, cada uno con un precio de $450.00 <br/><br/><br/>

            </li>
            <li type= disc>Futbol americano   <br /><br />Inició actividades en el 2010 <br><br /><br />
                <div id="div100SliderNotas" class="container">
                    <div id="divSliderNotasBoton" >                            
                        <div id="Glide" class="glide">



                            <div class="glide__wrapper">
                                <ul class="glide__track" style="padding-left: 0;">
                                    <li class="glide__slide" ><img style="width: 100%;" id="imgSliderNotas" src="img/Americano.jpg" /></li>                    
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
                Coordinador: Néstor Otilio Hernández Flores<br/>
                Inscripciones abiertas todo el año<br/>
                Uniforme doble vista: $700.00<br/>
                Inscripción: $150.00<br/><br/><br/>

            </li>
            <li type= disc>Baloncesto   <br /><br />Inició actividades en el 2003 <br><br /><br />
                <div id="div100SliderNotas" class="container">
                    <div id="divSliderNotasBoton" >                            
                        <div id="Glide" class="glide">



                            <div class="glide__wrapper">
                                <ul class="glide__track" style="padding-left: 0;">
                                    <li class="glide__slide" ><img style="width: 100%;" id="imgSliderNotas" src="img/Baloncesto.jpg" /></li>                    
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>
                
                Coordinador: José Luis Izquierdo Bustamante<br />
El costo de la temporada le incluye: <br /><br />
<ul>
    <li type= disc>1 uniforme de cortos (short y playera)</li>
    <li type= disc>1 uniforme de juego (jersey y fundas)</li>
    <li type= disc>Préstamo de utileria (casco, shoulders e integraciones)</li>
</ul>


El entrenamiento varonil se encuentra dividido en dos categorías:<br /><br />
<ul>
    <li type= disc>Infantil que va de los 6 a los 15 años juega la temporada de Primavera que es de enero a junio y una pre-temporada de octubre a diciembre.</li>
    <li type= disc>Juvenil que va de los 16 a los 18 años tiene dos temporadas al año, la de Primavera que es de enero a junio y la de Otoño que es de julio a diciembre.
Para el entrenamiento femenil, se aceptan desde los 10 hasta los 20 años, divididas en 3 categorías: novatas, intermedia y mayor. Con el objetivo de impulsar la práctica de este deporte entre el género femenino, no se cobra ninguna cuota.</li>

</ul>



            </li>

        </ul>
    </div>
</div>

</div>
            
            
        </div>
    </div>
    
</div>
        
<!-- contenido -->

<!-- Pié de página -->				
<?php include('../../template/pie.php'); ?>

<script>
    $(document).ready(function(){
    $('.least-gallery').least();
    });
    
    function openInParent(url) {
    window.opener.location.href = url;
    window.close();
  }
</script>