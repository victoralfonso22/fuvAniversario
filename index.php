<!-- Header -->
<?php include('template/cabecera.php'); ?>

<!-- Implementacion del slider 01-03-2017 by viko -->
<link rel="stylesheet" href="assets/css/glide.core.css" />
<link rel="stylesheet" href="assets/css/glide.theme.css" />
<link rel="stylesheet" href="assets/css/least.min.css" />
<script src="assets/js/glide.js"></script>
<script src="assets/js/least.min.js"></script>
<!-- Slider -->
<div id="div100Slider">
    <div id="divSlider" class="container">                            
        <div id="Glide" class="glide">

            <div id="flechasSlider" class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><img src="assets/css/images/Flacha-left.png"></button>
                <button class="glide__arrow next" data-glide-dir=">"><img src="assets/css/images/Flacha-right.png"></button>
            </div>

            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/carrusel-1.jpg" /></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/carrusel-2.jpg" /></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/carrusel-3.jpg" /></li>
                </ul>
            </div>

            <div id="puntosSlider" class="glide__bullets"></div>

        </div>
    </div>
</div>

<!-- Accesos rapidos 01-03-2017 by viko -->
<div class="wrapper style2">

    <div id="main" class="container">
        <header class="style1">
            <h2>¿Qué estás buscando?</h2>
            <div class="bordeAbajo"/>
        </header>
        <div class="container">
            <table id="tabla">
                <tr>
                    <td >
                        <a target="_blank" href="https://twitter.com/FundacionUV"><img src="imagenes/accesosRapidos/action beca.png" onmouseover="this.src = 'imagenes/accesosRapidos/action beca-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action beca.png'"></a>
                    </td>
                    <td >
                        <a target="_blank" href="https://twitter.com/FundacionUV"><img src="imagenes/accesosRapidos/action proyecto.png" onmouseover="this.src = 'imagenes/accesosRapidos/action proyecto-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action proyecto.png'"></a>
                    </td>
                    <td>
                        <a target="_blank" href="https://twitter.com/FundacionUV"><img src="imagenes/accesosRapidos/action renta.png" onmouseover="this.src = 'imagenes/accesosRapidos/action renta-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action renta.png'"></a>
                    </td>
                    <td>
                        <a target="_blank" href="https://twitter.com/FundacionUV"><img src="imagenes/accesosRapidos/action lego.png" onmouseover="this.src = 'imagenes/accesosRapidos/action lego-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action lego.png'"></a>
                    </td>
                </tr>
                <tr>
                    <td >
                        Solicitar una beca
                    </td>
                    <td >
                        Dar forma a mi proyecto
                    </td>
                    <td>
                        Rentar un espacio para un evento
                    </td>
                    <td>
                        Tomar un curso de Lego
                    </td>
                </tr>
            </table>
        </div>


    </div>
</div>		
    
    <div id="mainReciente">
        <div  class="container">
        <header class="style1">
            <h2>Lo más reciente</h2>
            <div class="bordeAbajo"/>
        </header>
    </div>

<!-- Pié de página -->				
<?php include('template/pie.php'); ?>		
<script>
    $("#Glide").glide({
        type: "slideshow"
    });
</script>