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
        <div id="Glide" class="glide" style="top:40%; z-index: 1000">

            <div id="flechasSlider" class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><img src="assets/css/images/Flacha-left.png"></button>
                <button class="glide__arrow next" data-glide-dir=">"><img src="assets/css/images/Flacha-right.png"></button>
            </div>

            <div class="glide__wrapper">
                <ul class="glide__track">                    
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/carrusel-4.png" /></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/reconocimiento.png" /></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/carrusel-2.jpg" /></li>
                    <li class="glide__slide"><a href="https://www.fundacionuv.org/que_hacemos/becas/?tipo=4"><img id="imgSlider" src="imagenes/carrusel-3.jpg" /></a></li>                    
                    <li class="glide__slide"><a href="blog/noticias/acelerador.php"><img id="imgSlider" src="imagenes/carrusel-5.png" /></a></li>
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
                        <a href="https://www.fundacionuv.org/que_hacemos/becas/?tipo=4"><img src="imagenes/accesosRapidos/action beca.png" onmouseover="this.src = 'imagenes/accesosRapidos/action beca-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action beca.png'"></a>
                    </td>
                    <td >
                        <a href="https://www.fundacionuv.org/dona/"><img src="imagenes/accesosRapidos/action-Apoyar-a-un-becario.png" onmouseover="this.src = 'imagenes/accesosRapidos/action-Apoyar-a-un-becario-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action-Apoyar-a-un-becario.png'"></a>
                    </td>
                    <td>
                        <a href="https://www.fundacionuv.org/que_hacemos/guiamos/"><img src="imagenes/accesosRapidos/action proyecto.png" onmouseover="this.src = 'imagenes/accesosRapidos/action proyecto-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action proyecto.png'"></a>
                    </td>
                    <td>
                        <a href="https://www.fundacionuv.org/que_hacemos/ofrecemos/"><img src="imagenes/accesosRapidos/action renta.png" onmouseover="this.src = 'imagenes/accesosRapidos/action renta-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action renta.png'"></a>
                    </td>
                    <td>
                        <a href="https://www.fundacionuv.org/que_hacemos/colaboramos/?tipo=2"><img src="imagenes/accesosRapidos/action lego.png" onmouseover="this.src = 'imagenes/accesosRapidos/action lego-hover.png'" onmouseout="this.src = 'imagenes/accesosRapidos/action lego.png'"></a>
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
                        Tomar un curso de capacitación
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
         <div id="divMenuBlog">
        <div>
            <table>
                <tr><td class="tituloNoticia">25 aniversario de la Fundación UV</td></tr>
                <tr><td><img class="imagenBlogPrincipal193" src="blog/img/25Ani/para-home.png"></td></tr>
                <tr><td class="pieNoticia">Marzo de 2017</td></tr>
                <tr><td class="masNoticia">Hace 25 años, egresados y amigos de la Universidad Veracruzana, en un acto de gratitud decidieron crear la Fundación de la Universidad Veracruzana (FUV)</td></tr>
                <tr><td class="botonNoticia"><a href="blog/noticias/25Aniversario.php"><img src="blog/img/leer-mas.png" onmouseover="this.src='blog/img/leer-mas-hover.png'" onmouseout="this.src='blog/img/leer-mas.png'"></a></td></tr>
            </table>
        <table>
                <tr><td class="tituloNoticia">“Urgencia de equipo, urgencia de vida”: gestión de magno proyecto de la FUV</td></tr>
                <tr><td><img class="imagenBlogPrincipal193" src="blog/img/lineal/2.jpg"></td></tr>
                <tr><td class="pieNoticia">Marzo de 2017</td></tr>
                <tr><td class="masNoticia">En el marco de los 25 años de la Fundación UV, “Urgencia de Equipo, Urgencia de Vida” ha logrado posicionarse como el primer proyecto de gestión a gran escala.</td></tr>
                <tr><td class="botonNoticia"><a href="blog/noticias/acelerador.php"><img src="blog/img/leer-mas.png" onmouseover="this.src='blog/img/leer-mas-hover.png'" onmouseout="this.src='blog/img/leer-mas.png'"></a></td></tr>
            </table>
            
            <table>
                <tr><td class="tituloNoticia">Programa Becas: dirigido al estudiante de buen desempeño y vulnerabilidad económica</td></tr>
                <tr><td><img class="imagenBlogPrincipal193" src="blog/img/becas/4-8.jpg"></td></tr>
                <tr><td class="pieNoticia">Marzo de 2017</td></tr>
                <tr><td class="masNoticia">Ser estudiante conlleva una formación de tiempo completo.</td></tr>
                <tr><td class="botonNoticia"><a href="blog/noticias/becas.php"><img src="blog/img/leer-mas.png" onmouseover="this.src='blog/img/leer-mas-hover.png'" onmouseout="this.src='blog/img/leer-mas.png'"></a></td></tr>
            </table>
        
        </div>
       
        
            </div>
        <a href="blog/" style="text-decoration: none;"><input class="botonNoticasMovil" type="button" value="M&aacute;s noticias"/></a>
    </div>
    </div>

    <!-- Least Gallery: Thumbnails -->
    <div id="tablaNoticiasHome" >
        <table id="tablaNoticias">
            <tr>
                <td rowspan="2" colspan="2">
                <div class="contenedor-img example2">
                    <img class="imagenPrincipalNoticia"  src="blog/img/25Ani/para-home.png" />
                    <a href="blog/noticias/25Aniversario.php">
                    <div class="mascara">
                    <div class="contenido">
                        <h2>25 aniversario de la Fundación UV</h2>
                             <p>Marzo de 2017</p>
                        
                        </div>
                        </div>
                        </a>
                </td>
                <td >
                    <div class="contenedor-img example2">
                       <img  src="blog/img/instalaciones/1-2.jpg" /></a>
                    <div class="mascara">
                        <a href="blog/noticias/instalaciones.php">
                           <div class="contenido">
                              <h2>Administración de Instalaciones: plataforma para el deporte, la cultura y la recreación</h2>
                             <p>Marzo de 2017</p>
                           </div> 
                            </a>
                    </div>
                    </div>
                  
              </td>
                
            </tr>
            <tr>
                
                <td >
                    <div class="contenedor-img example2">
                        <img  src="blog/img/procura/3-1.jpg" />
                    <div class="mascara">
                        <a href="blog/noticias/procuracion.php">
                           <div class="contenido">
                              <h2>Eventos para la Procuración de Fondos: programa que nace con la Fundación</h2>
                             <p>Marzo de 2017</p>
                           </div> 
                            </a>
                    </div>
                    </div>
                  
              </td>       
            </tr>
            <tr>
                <td >
                    <div class="contenedor-img example2">
                        <img  src="blog/img/lineal/2.jpg" />
                    <div class="mascara">
                        <a href="blog/noticias/acelerador.php">
                           <div class="contenido">
                              <h2>“Urgencia de equipo, urgencia de vida”: gestión de magno proyecto de la FUV</h2>
                             <p>Marzo de 2017</p>
                           </div> 
                        </a>
                    </div>
                    </div>
                  
              </td>
               <td >
                    <div class="contenedor-img example2">
                        <img  src="blog/img/admon/5-1.jpg" />
                    <div class="mascara">
                        <a href="blog/noticias/proyectos.php">
                           <div class="contenido">
                           <h2>Programa Administración de Proyectos: una trayectoria con impacto social</h2>
                             <p>Marzo de 2017</p>
                           </div> 
                        </a>
                    </div>
                    </div>
                  
              </td>
               <td >
                    <div class="contenedor-img example2">
                        <img  src="blog/img/becas/4-2.jpg" />
                    <div class="mascara">
                        <a href="blog/noticias/becas.php">
                           <div class="contenido">
                              <h2>Programa Becas: dirigido al estudiante de buen desempeño y vulnerabilidad económica</h2>
                             <p>Marzo de 2017</p>
                           </div> 
                        </a>
                    </div>
                    </div>
                  
              </td>
            </tr>
            <tr><td colspan="3"><br/></td></tr>
            <tr><td colspan="3" style="text-align: right"><a href="https://www.fundacionuv.org/blog/"><input class="botonNoticas" type="button" value="M&aacute;s noticias"/></a></td></tr>
        </table>


</div>
 
</section>
            
    </div>
            
        </div>

<div id="div100Slider" style="background: #17529d; height: 370px;">
    <div id="divSlider" class="container">                            
        <div id="Glide2" class="glide">
            <div id="flechasSlider" class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<"><img src="assets/css/images/Flacha-left.png"></button>
                <button class="glide__arrow next" data-glide-dir=">"><img src="assets/css/images/Flacha-right.png"></button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    <!--<li class="glide__slide">
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
                    </li>-->
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/numeralia/numeralia1.png" style="padding-top: 3%"/></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/numeralia/numeralia2.png" style="padding-top: 3%"/></li>
                    <li class="glide__slide"><img id="imgSlider" src="imagenes/numeralia/datos-de-numeralia-Coatzacoalcos-–-Minatitlán.png" style="padding-top: 3%"/></li>
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
        autoplay: 8000       
    });

    $(document).ready(function(){
    $('.least-gallery').least();
    });
</script>