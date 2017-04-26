<!DOCTYPE HTML>
<html>
	<head>
		<title>Fundación de la Universidad Veracruzana</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/main.css" />
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/slicknav.css" />                
                <link rel="shortcut icon" type="image/x-icon" href="https://www.fundacionuv.org//imagenes/favicon.ico" />       		
                <script src="https://www.fundacionuv.org//assets/js/jquery.min.js"></script>
                <script src="https://www.fundacionuv.org//assets/js/funciones.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
                <script src="https://www.fundacionuv.org//assets/js/jquery.slicknav.js"></script>
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/glide.core.css" />
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/glide.theme.css" />                
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/smk-accordion.css" />
                <link rel="stylesheet" href="https://www.fundacionuv.org//assets/css/jquery.fancybox.min.css" />
                <script src="https://www.fundacionuv.org//assets/js/glide.js"></script>                
                <script src="https://www.fundacionuv.org//assets/js/smk-accordion.min.js"></script>                       
                <script src="https://www.fundacionuv.org//assets/js/jquery.fancybox.min.js"></script>

	</head>
	<body class="homepage">
		<div id="page-wrapper">
                    <div id="header-wrapper" class="wrapper" style="position: fixed; z-index: 10000; width: 100%; background-color: whitesmoke;">
                                    <div id="line"></div>
                                    <div class="container">
                                        <div  id="logoPrincipal"><a href="https://www.fundacionuv.org//"><img src="https://www.fundacionuv.org//imagenes/principales/logo.png"></a></div>
                                    <div id="fechaPrincipal" ><label><?PHP setlocale(LC_ALL,"es_ES");
                                            echo utf8_decode(ucwords(strftime("%A %d")))
                                                    . " de ".ucwords(strftime("%B"))
                                                    . " de ".strftime("%Y");                                            
                                            ?></label>&nbsp;&nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/FundacionUV.AC/"><img src="https://www.fundacionuv.org//assets/css/images/face.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/face-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/face.png'"></a>
                                            &nbsp;&nbsp;<a target="_blank" href="https://www.facebook.com/UVfutbolamericano"><img src="https://www.fundacionuv.org//assets/css/images/twett.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/twett-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/twett.png'"></a>
                                    &nbsp;&nbsp;<a target="_blank" href="https://www.youtube.com/channel/UCxrRKzpGarDUDO6qlSqiU2g"><img src="https://www.fundacionuv.org//assets/css/images/yout.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/yout-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/yout.png'"></a>
                                    </div>
                                        
                                        <div id="fechaPrincipalMovil" ><label><?PHP setlocale(LC_ALL,"es_ES");
                                            echo ucwords(strftime("%A %d"))
                                                    . " de ".ucwords(strftime("%B"))
                                                    . " de ".strftime("%Y");  
                                            ?></label><br /><a target="_blank" href="https://www.facebook.com/FundacionUV.AC/"><img src="https://www.fundacionuv.org//assets/css/images/face.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/face-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/face.png'"></a>
                                            &nbsp;&nbsp;<a target="_blank" href="https://twitter.com/FundacionUV"><img src="https://www.fundacionuv.org//assets/css/images/twett.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/twett-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/twett.png'"></a>
                                    &nbsp;&nbsp;<a target="_blank" href="https://www.youtube.com/channel/UCxrRKzpGarDUDO6qlSqiU2g"><img src="https://www.fundacionuv.org//assets/css/images/yout.png" onmouseover="this.src='https://www.fundacionuv.org//assets/css/images/yout-hover.png'" onmouseout="this.src='https://www.fundacionuv.org//assets/css/images/yout.png'"></a>
                                    </div>
                                    </div>
					<div id="header">
						<!-- Nav -->
							<nav id="nav" class="container">
                                                            <ul  class="container">
									<li class="current"><a href="https://www.fundacionuv.org//quienes_somos/">Qui&eacute;nes somos</a></li>                                                                        
                                                                        <li style="display: none; padding: 0;"><a href="https://www.fundacionuv.org//que_hacemos/">Qu&eacute; hacemos</a>
                                                                        <li><a style="cursor: default;">Qu&eacute; hacemos</a>
                                                                                <ul class="container centrados" >
                                                                                    <div id="divMenu" class="container" >
                                                                                        <div >
                                                                                        <table >
                                                                                            <tr><th><li><a href="https://www.fundacionuv.org//que_hacemos/becas/">Otorgamos becas</a></li></th></tr>
                                                                                        <tr><td><li type= disc><a href="https://www.fundacionuv.org//que_hacemos/becas/?tipo=1">Programa de becas</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/becas/?tipo=2">Campañas de donativo</a></li>
                                                                                                <!-- <li type= disc><a>Testimonios</a></li> -->
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/becas/?tipo=4">Convocatoria y Resultados</a></li></td></tr>   
                                                                                        </table>
                                                                                        
                                                                                        </div>
                                                                                        <div >
                                                                                    <table>
                                                                                       <tr><th><li><a href="https://www.fundacionuv.org//que_hacemos/ofrecemos/">Ofrecemos espacios para eventos</a></li></th></tr>
                                                                                        <tr><td><li type= disc><a href="https://www.fundacionuv.org//que_hacemos/ofrecemos/?tipo=1">Tlaqn&aacute;. Centro cultural</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/ofrecemos/?tipo=2">Campo de beisbol</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/ofrecemos/?tipo=3">Gimnasio universitario</a></li>
                                                                                       </td></tr>
                                                                                         </table>
                                                                                            
                                                                                        </div>
                                                                                        <div >
                                                                                    <table>
                                                                                        <tr><th><li><a href="https://www.fundacionuv.org//que_hacemos/fomentamos/">Fomentamos el deporte</a></li></th></tr>
                                                                                        <tr><td>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/fomentamos/?tipo=1">Uso de instalaciones deportivas</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/fomentamos/?tipo=2">Centros de formaci&oacute;n DEPORTIVA INFANTIL Y JUVENIL</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/fomentamos/?tipo=3">Programa de Futbol Americano</a></li>
                                                                                        </td></tr>
                                                                                                     </table>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div id="divMenu" class="container" >
                                                                                        <div >
                                                                                        <table>                                                                                        
                                                                                            <tr><th><li><a href="https://www.fundacionuv.org//que_hacemos/administramos/">Administramos instalaciones</a></li></th></tr>
                                                                                        <tr><td><li type= disc><a href="https://www.fundacionuv.org//que_hacemos/administramos/?tipo=1">Campus CAD Xalapa</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/administramos/?tipo=2">Campus IXTAC</a></li></td></tr>                                                                                        
                                                                                    </table>
                                                                                        
                                                                                        </div>
                                                                                        <div >
                                                                                    <table>
                                                                                        
                                                                                        <tr><th ><li><a href="https://www.fundacionuv.org//que_hacemos/guiamos/">Guiamos tus proyectos</a></li></th></tr>
                                                                                        <tr><td>
                                                                                                <!-- <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/guiamos/">Gu&iacute;a para dise&ntilde;ar un proyecto</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/guiamos/">Proceso para administrar un proyecto</a></li> -->
                                                                                            </td></tr>
                                                                                       
                                                                                    </table>
                                                                                            
                                                                                        </div>
                                                                                        <div >
                                                                                    <table>
                                                                                        
                                                                                        <tr><th><li><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/">Colaboramos con otros programas</a></li></th></tr>
                                                                                        <tr><td>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/?tipo=1">Centro de atenci&oacute;n para el c&aacute;ncer</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/?tipo=2">Capacitaci&oacute;n</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/?tipo=3">Conservaci&oacute;n y desarrollo de &aacute;reas verdes</a></li>
                                                                                                <li type= disc><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/?tipo=4">Sorteos uv</a></li>
                                                                                                
                                                                                            </td></tr>
                                                                                    </table>
                                                                                            
                                                                                        </div>
                                                                                    </div>
											
										</ul>
									</li>
									<li><a href="https://www.fundacionuv.org//dona/">Dona a becas</a></li>
									<!-- <li><a href="right-sidebar.html">Egresados uv</a></li> -->
									<li><a href="https://www.fundacionuv.org//blog/">Blog</a></li>
								</ul>
							</nav>
                                                
                                                

                                          
                                                
					</div>
    <!-- Se empieza con la configuracion del nuevo menú movil dado que el anterior no se adecuaba a las necesidades 08-03-2017 by viko -->
    <div>
                                        
        <ul id="menu"><div  id="logoResponsive" style="text-align: center; background-color: white;"><a style="background-color: white;" href="https://www.fundacionuv.org//"><img width="100px" src="https://www.fundacionuv.org//imagenes/principales/logo_responsive.png"></a></div>
                                        <!--<li><a href="https://www.fundacionuv.org//">Inicio</a></li>-->
                                        <li><a href="https://www.fundacionuv.org//quienes_somos/">Qui&eacute;nes somos</a></li>
            <li>Qu&eacute; hacemos
                <ul>                    
                    <li><a href="https://www.fundacionuv.org//que_hacemos/becas/">Otorgamos becas</a></li>
                    <li><a href="https://www.fundacionuv.org//que_hacemos/ofrecemos/">Ofrecemos espacios para eventos</a></li>
                    <li><a href="https://www.fundacionuv.org//que_hacemos/fomentamos/">Fomentamos el deporte</a></li>
                    <li><a href="https://www.fundacionuv.org//que_hacemos/administramos/">Administramos instalaciones</a></li>
                    <li><a href="https://www.fundacionuv.org//que_hacemos/guiamos/">Guiamos tus proyectos</a></li>
                    <li><a href="https://www.fundacionuv.org//que_hacemos/colaboramos/">Colaboramos con otros programas</a></li>
                </ul>
            </li>
            <li><a href="https://www.fundacionuv.org//dona/">Dona a becas</a></li>
        <!-- <li><a href="#">Egresados uv</a></li> -->
    
    <li><a href="https://www.fundacionuv.org//blog/">Blog</a></li>
    
                                    </ul>                                        
</div>
</div>