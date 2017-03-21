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

    <div id="mainRapido" class="container">
        <header class="style1">
            <h2>¿Qué estás buscando?</h2>
            <div class="bordeAbajo"/>
        </header>
        <div class="container">
            <table id="tabla">
                <tr>
                    <td >
                        <a href="https://fundacionuv.org/solicitudes/"><img src="imagenes/accesosRapidos/action beca.png" onmouseover="this.src = 'imagenes/accesosRapidos/action beca-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action beca.png'"></a>
                    </td>
                    <td >
                        <a href="http://localhost/fuvAniversario/que_hacemos/becas/"><img src="imagenes/accesosRapidos/action-Apoyar-a-un-becario.png" onmouseover="this.src = 'imagenes/accesosRapidos/action-Apoyar-a-un-becario-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action-Apoyar-a-un-becario.png'"></a>
                    </td>
                    <td>
                        <a href="http://localhost/fuvAniversario/que_hacemos/guiamos/"><img src="imagenes/accesosRapidos/action proyecto.png" onmouseover="this.src = 'imagenes/accesosRapidos/action proyecto-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action proyecto.png'"></a>
                    </td>
                    <td>
                        <a href="http://localhost/fuvAniversario/que_hacemos/ofrecemos/"><img src="imagenes/accesosRapidos/action renta.png" onmouseover="this.src = 'imagenes/accesosRapidos/action renta-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action renta.png'"></a>
                    </td>
                    <td>
                        <a href="http://localhost/fuvAniversario/que_hacemos/colaboramos/"><img src="imagenes/accesosRapidos/action lego.png" onmouseover="this.src = 'imagenes/accesosRapidos/action lego-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action lego.png'"></a>
                    </td>
                </tr>
                <tr>
                    <td >
                        Solicitar una beca
                    </td>
                    <td >
                        Apoyar a un becario
                    </td>
                    <td >
                        Dar forma a mi proyecto
                    </td>                    
                    <td>
                        Conseguir un espacio para mi evento
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
            <section id="least">

    <!-- Least Gallery: Thumbnails -->
    <div id="tablaNoticiasHomeMovil">

    <div style="padding-left: 0 !important;">
        <a data-fancybox="gallery" href="imagenes/accesosRapidos/action beca-hover.png">
                        <img src="imagenes/accesosRapidos/action beca-hover.png">
                </a>

                    <a data-fancybox="gallery" href="imagenes/accesosRapidos/action beca-hover.png">
                        <img src="imagenes/accesosRapidos/action beca-hover.png">
                </a>
            </div>
        <a href="blog/" style="text-decoration: none;"><input class="botonNoticasMovil" type="button" value="M&aacute;s noticias"/></a>
    </div>

    <!-- Least Gallery: Thumbnails -->
    <div id="tablaNoticiasHome" >
        <table id="tablaNoticias">
            <tr>
                <td rowspan="2" colspan="2">
                <div class="contenedor-img example2">
                    <img class="imagenPrincipalNoticia"  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                    <div class="contenido">
                        <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                        
                        </div>
                        </div>
                </td>
                <td >
                    <div class="contenedor-img example2">
                    <img  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                           <div class="contenido">
                              <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                           </div> 
                    </div>
                    </div>
                  
              </td>
                
            </tr>
            <tr>
                
                <td >
                    <div class="contenedor-img example2">
                    <img  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                           <div class="contenido">
                              <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                           </div> 
                    </div>
                    </div>
                  
              </td>       
            </tr>
            <tr>
                <td >
                    <div class="contenedor-img example2">
                    <img  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                           <div class="contenido">
                              <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                           </div> 
                    </div>
                    </div>
                  
              </td>
               <td >
                    <div class="contenedor-img example2">
                    <img  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                           <div class="contenido">
                           <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                           </div> 
                    </div>
                    </div>
                  
              </td>
               <td >
                    <div class="contenedor-img example2">
                    <img  src="imagenes/carrusel-1.jpg" />
                    <div class="mascara">
                           <div class="contenido">
                              <h2>Prueba de mas noticia con mascara</h2>
                             <p>Comunicación UV, Marzo 21 de 2017</p>
                           </div> 
                    </div>
                    </div>
                  
              </td>
            </tr>
            <tr><td colspan="3"><br/></td></tr>
            <tr><td colspan="3" style="text-align: right"><input class="botonNoticas" type="button" value="M&aacute;s noticias"/></td></tr>
        </table>


</div>
 
</section>
            
    </div>
            
        </div>

<div id="div100Slider" style="background: #345399">
    <div id="divSlider" class="container">                            
        <div id="Glide2" class="glide">
            <div id="flechasSlider" class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><img src="assets/css/images/Flacha-left.png"></button>
                <button class="glide__arrow next" data-glide-dir=">"><img src="assets/css/images/Flacha-right.png"></button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <li class="glide__slide">
                        <div style="text-align: center; width: 80%; margin-left: 10%; margin-top:8%; color:white; font-family: gill sans; vertical-align: top;"><table>
                                <tr><td colspan="10"><img src="imagenes/numeralia/Boca-del-Río.png" /></td></tr>                                
                                <tr><td style="vertical-align: top"><div style="color: #fcffab; font-weight: bold; font-size: 5em; padding-top: 20px">1,<span id="contador1" data-from="0" data-to="164" class="contador"></span></div><br/>Becas entregadas</td>
                                    <td style="vertical-align: top"><img style="padding-top: 5px" src="imagenes/numeralia/separador.png"/></td>
                                    <td style="vertical-align: top"><img src="imagenes/numeralia/donante.png"/><div style="font-size: 2em" id="contador2" data-from="0" data-to="259" class="contador"></div>Donantes</td>
                                    <td style="vertical-align: top"><img style="padding-top: 5px" src="imagenes/numeralia/separador.png"/></td>
                                    <td style="vertical-align: top"><img src="imagenes/numeralia/beneficiario.png"/><div style="font-size: 2em; padding-top: 10px" id="contador3" data-from="0" data-to="416" class="contador"></div>Beneficiarios</td>
                                    <td style="vertical-align: top"><img style="padding-top: 5px" src="imagenes/numeralia/separador.png"/></td>
                                    <td style="vertical-align: top; padding: 0 5px;"><img src="imagenes/numeralia/mujer.png"/><div style="font-size: 2em; padding-top: 5px" id="contador4" data-from="0" data-to="290" class="contador"></div>Mujeres</td>
                                    <td style="vertical-align: top; padding: 0 5px;"><img src="imagenes/numeralia/hombre.png"/><div style="font-size: 2em; padding-top: 9px" id="contador5" data-from="0" data-to="126" class="contador"></div>Hombres</td>
                                    <td style="vertical-align: top"><img style="padding-top: 5px" src="imagenes/numeralia/separador.png"/></td>
                                    <td style="vertical-align: top">Monto de becas otorgadas<br/><div style="color: #fcffab; font-weight: bold; font-size: 3em; padding-top: 20px;">$5'587,<span id="contador3" data-from="0" data-to="200" class="contador"></span></div></td>
                                </tr>                             
                        </table></div>
                    </li>
                    <li class="glide__slide"><div style="text-align: center">Numeraria 2</div></li>
                    <li class="glide__slide"><div style="text-align: center">Numeraria 3</div></li>
                </ul>
            </div>
            <!--<div id="puntosSlider" class="glide__bullets"></div>-->
        </div>
    </div>
</div>        
<script type="text/javascript">
                            function counter(elem) {
 
                                var id = setInterval(frame, 50);
                                function frame() {
                                    if (elem.data('from') == elem.data('to')) {
                                        clearInterval(id);
                                } else {

                                contador=elem.data('from')+1;
                                elem.data('from',contador);
                                elem.html(elem.data('from'));
                                }
                                }
                            }

                            $( document ).ready(function() {
                                $('.contador').each(function(i) {
           
                                        counter($(this));    

                                });
                            });
                        </script>
<!-- Pié de página -->				
<?php include('template/pie.php'); ?>		
<script>
    $("#Glide").glide({
        type: "slideshow"
    });

    $("#Glide2").glide({
        type: "slideshow",
        autoplay: false       
    });

    $(document).ready(function(){
    $('.least-gallery').least();
    });
</script>