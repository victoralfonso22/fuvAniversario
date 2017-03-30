
<!-- Header -->
<?php include('../../template/cabecera.php'); ?>
<link rel="stylesheet" href="../../assets/css/glide.core.css" />
<link rel="stylesheet" href="../../assets/css/glide.theme.css" />
<script src="../../assets/js/glide.js"></script>

<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#programaMenos').hide();
    $('#programaMas').show();
    $('html,body').animate({
    scrollTop: $('#programaMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#formaApoyarMenos').hide();
    $('#formaApoyarMas').show();
    $('html,body').animate({
    scrollTop: $('#formaApoyarMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 4){
    echo "<script>$(document).ready(function() {
    $('#convocaMenos').hide();
    $('#convocaMas').show();
    $('html,body').animate({
    scrollTop: $('#paddinFonfoBecas').offset().top
    }, 1000);
});</script>";
}
}?>


<div class="container">
<header class="style1">
    <br/>
<h2>Otorgamos becas</h2>
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
                    <li class="glide__slide"><img id="imgSliderNotas" src="img/encabezado-otorgamos-becas.png" /></li>                    
                </ul>
            </div>

            

        </div>
    </div>
</div>
    <div id="contenidoSub">     
    <!----------------    Texto para seccion Programa de becas     ----------------->
    <div id="programaMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('programaMas','programaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Programa de becas</label>
    </div>
    <div id="programaMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('programaMenos','programaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Programa de becas</label>
    </div>
        
    <p>Una de las principales acciones de la Fundaci&oacute;n UV es apoyar a la comunidad estudiantil de la Universidad Veracruzana, raz&oacute;n por la que cre&oacute; un programa que otorga becas y cuya finalidad es hacer que el estudiante beneficiario:
    <ul>
        <li type= disc>No abandone sus estudios.</li>
        <li type= disc>Logre concluir su formaci&oacute;n profesional.</li>
        <li type= disc>Contin&uacute;e cultivando sus conocimientos.</li>
        <li type= disc>Obtenga oportunidades de desarrollo, mejorando sus condiciones de vida.</li>
    </ul>
<p>
La beca consiste en la entrega de un apoyo econ&oacute;mico semestral, no reembolsable, que permite cubrir costos de inscripci&oacute;n al inicio del periodo, transporte y materiales necesarios para el quehacer acad&eacute;mico. De esta forma, se asegura la equidad de oportunidades, independientemente de la situaci&oacute;n socioecon&oacute;mica del estudiante, logrando as&iacute; evitar que el universitario beneficiario de la beca se vea en la necesidad de abandonar sus estudios por falta de recursos econ&oacute;micos.<br><br> 

Este programa procura la atenci&oacute;n integral del estudiante hasta su egreso universitario, operando un modelo de <i>acompa&ntilde;amiento</i>, que consiste en apoyar al alumno desde el semestre que ingresa como beneficiario de beca hasta el semestre en que concluye su formaci&oacute;n profesional, impulsando en cada periodo su continuidad escolar y mejora acad&eacute;mica.</p>
</div>
        <div id="fotoBeca" class="div2" style="padding-top: 8em; text-align: center;">
<img src="img/P-Becas1.png">
</div>


    <div id="fotoBeca" class="div2" style="padding-top: 3em; text-align: center;">
        <img src="img/P-Becas2.png">
    </div>
    
    <div class="div1">

    <h3>¿C&oacute;mo se logra?</h3><br/>
            <p>
La entrega de becas se realiza gracias a la participaci&oacute;n altruista de la sociedad civil que decide invertir en la educaci&oacute;n y colabora para mejorar la calidad de vida de los j&oacute;venes estudiantes universitarios.
            </p><p>
Con la finalidad de sumar esfuerzos a esta causa social, que permitiera maximizar el beneficio a los estudiantes en las regiones del estado de Veracruz donde tiene presencia la UV, se crearon  los Comit&eacute;s Regionales de Becas, integrados por miembros voluntarios de la sociedad civil que, adem&aacute;s de coadyuvar en la procuraci&oacute;n de fondos para el programa, realizan la funci&oacute;n de <i>Contralor&iacute;a Social</i>, garantizando la transparencia en la selecci&oacute;n de beneficiarios y vigilando el uso, asignaci&oacute;n y rendici&oacute;n de cuentas de los recursos procurados. 
</p>
</div>
</div>
<br /> 
<div id="div100SliderNotas" class="container">
    <div id="divSliderNotas" >                            
        <div id="Glide" class="glide">

            

            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide"><img id="imgSliderNotas" src="img/comite-regionales.png" /></li>                    
                </ul>
            </div>

            

        </div>
    </div>
</div>

<div class="divSub">
<div id="div100SliderNotas" class="container">
    <div id="divSliderNotasBoton" >                            
        <div id="Glide" class="glide">

            

            <div class="glide__wrapper">
                <ul class="glide__track" style="padding-left: 0;">
                    <li class="glide__slide" ><a  href="pdf/Informe 2016 - Unidad de Becas.pdf" target="_blank"><img style="width: 50%;" id="imgSliderNotas" src="img/boton-informe-2016.png" /></a></li>                    
                </ul>
            </div>

            

        </div>
    </div>
</div>
</div>

</div>

<div class="separadorSubmenu">
    
</div>
<!----------------    Texto para seccion Formas de apoyar     ----------------->

<div id="formaApoyarMenos" class="encabezadoSub">
    <img class="puntero" onclick="mostrarOcultar('formaApoyarMas','formaApoyarMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Dona a becas</label>
    </div>
<div id="formaApoyarMas" style="display: none;">
    <div id="divSubMenuNota">
<div class="encabezadoSub">
    <img class="puntero" onclick="mostrarOcultar('formaApoyarMenos','formaApoyarMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Dona a becas</label>
    </div>
<p class="h3subMenu">Campa&ntilde;as de donativo</p>
<table>    
    <tr  >
        <td style="text-align: center; width: 50%;">
            Adopta un becario
        </td>
        <td style="text-align: center; width: 50%;">
            Microdonativos
        </td>
    </tr>
    <tr >
        <td>En esta campa&ntilde;a, el benefactor:
            <ul>
                <li type= disc>Participa como Padrino o Madrina de un estudiante.</li>
                <li type= disc>Puede tener una vinculaci&oacute;n directa con su becario(a).</li>
                <li type= disc>Selecciona, conoce y tiene toda la informaci&oacute;n necesaria del estudiante para comunicarse y saber de primera mano sobre el estado de su desempe&ntilde;o acad&eacute;mico.</li>
            </ul>
</td>
<td>
            En esta campa&ntilde;a, el benefactor:
            <ul>
                <li type= disc>Colabora para formar un fondo com&uacute;n que permita incrementar el n&uacute;mero de beneficiarios de beca.</li>
            </ul>
</td>
    </tr>
    <tr>
        <td>Caracter&iacute;sticas del donativo:
            <ul>
                <li type= disc>$5,000.00 al semestre, en una o varias exhibiciones.</li>
                <li type= disc>Se puede participar con aportaciones desde ¼ de beca ($1,250.00)</li>
                <li type= disc>Los periodos escolares son de febrero a julio y de agosto a enero.</li>
            </ul>
</td>
<td>
            Caracter&iacute;sticas del donativo:
            <ul>
                <li type= disc>$50.00 mensuales una &uacute;nica vez o de manera recurrente. </li>
            </ul>
</td>
    </tr>
    
</table>
<p>Nota: En ambas campañas el benefactor elige el número de periodos y de pagos con los que desea participar en el programa.</p>

<a href="../../dona/"><img style="margin-left: 1%" src="img/Dona-ahora.png" onmouseover="this.src = 'img/Dona-ahora-hover.png'" onmouseout="this.src = 'img/Dona-ahora.png'"/></a>
<br />
<br />
<p class="h3subMenu">Eventos anuales de procuraci&oacute;n</p>
<div class="div1Notas">
<p>Con la finalidad de fortalecer la labor de procuraci&oacute;n de fondos en beneficio de los estudiantes UV, se ha implementado la realizaci&oacute;n de eventos con causa, en los cuales los asistentes pueden disfrutar del programa art&iacute;stico a la vez que contribuyen con nuestro Programa de Becas. </p>
<p>Te invitamos a estar al pendiente de los pr&oacute;ximos eventos que se llevar&aacute;n a cabo.</p>
</div>
<div class="div2Notas" style=" padding-top: 10px; padding-bottom: 20px;">
    <div>
        <a data-fancybox="gallery" href="img/cata/IMG_20141017_212604.jpg">
            <img src="img/cata/IMG_20141017_212604.jpg">
                </a>

        <a data-fancybox="gallery" href="img/cata/IMG_20141017_213637.jpg">
                    <img src="img/cata/IMG_20141017_213637.jpg">
                </a>
            </div>
            <div>
                 <a data-fancybox="gallery" href="img/conciertos/z6.jpg">
            <img src="img/conciertos/z6.jpg">
                </a>
                <!--<a data-fancybox="gallery" href="img/cata/IMG_20141017_214604.jpg">
                    <img src="img/cata/IMG_20141017_214604.jpg">
                </a>-->
                <a data-fancybox="gallery" href="img/conciertos/1.png">
                    <img src="img/conciertos/1.png">
                </a>
            </div>
    <div>
        <a data-fancybox="gallery" href="img/conciertos/2.png">
            <img src="img/conciertos/2.png">
                </a>
        <a data-fancybox="gallery" href="img/conciertos/3.png">
            <img src="img/conciertos/3.png">
                </a>
            </div>
    <div>
        <a data-fancybox="gallery" href="img/conciertos/4.png">
            <img src="img/conciertos/4.png">
                </a>
        <a data-fancybox="gallery" href="img/conciertos/z4.jpg">
                    <img src="img/conciertos/z4.jpg">
                </a>
            </div>
    
    
</div>

</div>
    </div>
<div class="separadorSubmenu"></div>

<!----------------    Texto para seccion Convocatorias y resultados ----------------->

<div id="convocaMenos" class="encabezadoSub">
    <img class="puntero" onclick="mostrarOcultar('convocaMas','convocaMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Convocatoria y resultados</label>
    </div>
<div id="convocaMas"  style="display: none;">
<div class="encabezadoSub">
    <img class="puntero" onclick="mostrarOcultar('convocaMenos','convocaMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Convocatoria y resultados</label>
    </div>

<p>
La beca que la Fundaci&oacute;n UV otorga a estudiantes de la Universidad Veracruzana, opera la modalidad de acompa&ntilde;amiento, es decir que nuestros beneficiarios pueden mantenerla desde que ingresan al programa hasta que concluyen sus estudios profesionales, siempre y cuando cumplan con los requisitos y lineamientos que, en cada periodo escolar, se establecen en la Convocatoria P&uacute;blica de Becas. </p>

<p>La Convocatoria es abierta de forma bianual en los meses de febrero y agosto y el proceso de solicitud es como se muestra en la imagen:</p>

<div id="div100SliderNotas" class="container">
    <div id="divSliderNotas" >                            
        <div id="Glide" class="glide">           
            <div class="glide__wrapper">
                <ul class="glide__track" style="padding-left: 0;">
                    <li class="glide__slide" ><a  href="" target="_blank"><img id="imgSliderNotas" style="width: 80%" src="img/proceso para solicitar una beca.png" /></a></li>                    
                </ul>
            </div>            
        </div>              
    </div>    
</div>
<br />
<br /><br /><br /><br /><br />
<div id="paddinFonfoBecas"></div>
<p class="h3subMenu" style="margin-top: 0px">Resultados becas Fundación UV / periodo Febrero - Julio 2017</p>
<p style="text-align: center">
    <a href="pdf/Resultados VB 2017-1.pdf" style="padding-right: 7%" target="_blank"><img src="img/Veracruz---Boca-del-Río.png" style="height: 60px"></a>
    <a href="pdf/Resultados CO 2017-1.pdf" style="padding-right: 6%" target="_blank"><img src="img/Córdoba---Orizaba.png" style="height: 60px"></a>
    <a href="pdf/Resultados CM 2017-1.pdf" target="_blank"><img src="img/Coatzacoalcos-Minatitlan.png" style="height: 60px"></a></p>
<p style="text-align: center">
    <a href="pdf/Resultados PT 2017-1.pdf" style="padding-right: 10%" target="_blank"><img src="img/Poza-Rica---Tuxpan.png" style="height: 60px"></a>
    <a href="pdf/Resultados XA 2017-1.pdf" target="_blank"><img src="img/Xalapa.png" style="height: 60px"></a></p>
    </div>
    </div>
</div>
</div>
    </div>

    </div>
<!-- Pi&eacute; de p&aacute;gina -->				
<?php include('../../template/pie.php'); ?>
<script>
    $("#Glide").glide({
        type: "slideshow"
    });
    $("#Glide1").glide({
        type: "slideshow"
    });
</script>