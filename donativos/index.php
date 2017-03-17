<?php /*?><?php
if(isset($_GET['t'])){
	$enlace=$_GET['t'];
	
	if($enlace=='T'){$formulario='https://secure.jotform.co/form/33247489067868'; $p_css='height:1800px;';}
	if($enlace=='N'){$formulario='https://secure.jotform.co/form/33025247978865'; $p_css='height:1800px;';}
}else{header('Location: ../');}
?><?php */?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="Fundacion de la Universidad Veracruzana A.C.">
<meta name="DC.Title" content="Fundacion de la Universidad Veracruzana A.C.">
<meta http-equiv="title" content="Fundacion de la Universidad Veracruzana A.C.">
<meta name="DC.Creator" content="www.altas-buscadores.com">
<meta name="keywords" content="donar,becario,apadrinar,dinero,Universidad Veracruzana,UV, facultad,donaciones,escasos recursos,estudiantes,xalapa,poza rica,coatzacoalcos,cordoba orizaba, ">
<meta http-equiv="keywords" content"donar,becario,apadrinar,dinero,Universidad Veracruzana,UV, facultad,donaciones,escasos recursos,estudiantes,xalapa,poza rica,coatzacoalcos,cordoba orizaba, ">
<meta name="description" content="En 1992, un grupo de ex alumnos, empresarios y miembros destacados de la sociedad veracruzana, decidieron constituir una Asociación Civil no lucrativa que reforzara la vinculación de la Universidad Veracruzana con los sectores social, productivo, deportivo y cultural para bien de la sociedad. Así nació la Fundación UV, quien mantiene su compromiso en su lema: “Siempre Universitarios”. ">
<meta http-equiv="description" content="En 1992, un grupo de ex alumnos, empresarios y miembros destacados de la sociedad veracruzana, decidieron constituir una Asociación Civil no lucrativa que reforzara la vinculación de la Universidad Veracruzana con los sectores social, productivo, deportivo y cultural para bien de la sociedad. Así nació la Fundación UV, quien mantiene su compromiso en su lema: “Siempre Universitarios”. ">
<meta http-equiv="DC.Description" content="En 1992, un grupo de ex alumnos, empresarios y miembros destacados de la sociedad veracruzana, decidieron constituir una Asociación Civil no lucrativa que reforzara la vinculación de la Universidad Veracruzana con los sectores social, productivo, deportivo y cultural para bien de la sociedad. Así nació la Fundación UV, quien mantiene su compromiso en su lema: “Siempre Universitarios”. ">
<meta name="author" content="Fundación de la Universidad Veracruzana A.C.">
<meta name="DC.Creator" content="Fundación de la Universidad Veracruzana A.C.">
<meta name="vw96.objectype" content="Homepage">
<meta name="resource-type" content="Homepage">
<meta name="distribution" content="all">
<meta name="robots" content="all">
<meta name="revisit" content="1 days">


<link rel="shortcut icon" type="image/x-icon" href="../imagenes/estructura/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../css/estructura.css"/>
<link href="../imagenes/estructura/dona.png" rel="image_src" />
<link rel="stylesheet" href="../orbit/css/orbit-1.2.3.css"/>
<link rel="stylesheet" type="text/css" href="../css/skin.css"/>
<link rel="stylesheet" type="text/css" href="../nw/style.css"/>
<link rel="stylesheet" type="text/css" href="../css/widgets.css"/>
<link rel="stylesheet" type="text/css" href="../css/nwstc2.css"/>
<link rel="stylesheet" type="text/css" href="../css/intenla.css"/>

<title>Donativos || Fundación de la Universidad Veracruzana A.C.</title>
<script type="text/javascript" src="../orbit/js/jquery-1.5.1.min.js" ></script>
<script type="text/javascript" src="../yox/yoxview-init.js"></script>
<!--<script type="text/javascript" src="scripts/news2.js" ></script>-->
<script type="text/javascript">
jQuery.noConflict();
	jQuery(document).ready(function(){
		jQuery(".yoxview").yoxview({
			textLinksSelector:"",
			lang:"es"
		});
		
		
		jQuery("#AD,#MD,#btnb").hover(function(event){			
			event.preventDefault();			
 			jQuery(this).css('cursor','pointer');
 		},function(){
 			jQuery(this).css('cursor','default');
 		});
		
		jQuery("#MD").click(function(event){
				event.preventDefault();
				jQuery("#paso1").hide();
				jQuery("#paso2").show();								
				jQuery("#MDi").show();
				jQuery("#txcampania > span").append("Micro Donativos");
				
 		});
		jQuery("#AD").click(function(event){
				event.preventDefault();
				jQuery("#paso1").hide();
				jQuery("#paso2").show();				
 				jQuery("#ADi").show();
				jQuery("#txcampania > span").append("Adopta un Becario");
 		});
		jQuery("#btnb").click(function(event){
				event.preventDefault();
				jQuery("#paso1").show();
				jQuery("#paso2").hide();
				jQuery("#txcampania > span").text("");
				jQuery("#MDi").hide();
				jQuery("#ADi").hide();				
 		});
		
	});
</script>

<script src="../nw/jcarousellite_1.0.1c4.js" type="text/javascript"></script>

<script type="text/javascript" src="../orbit/js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="../scripts/OrbitMain.js" ></script>
<script type="text/javascript" src="../nw/Main_jcarousellite.js"></script>
<script type="text/javascript" src="../scripts/news2.js" ></script>

<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery("#facebook_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#facebook_right").stop(true,false).animate({right: -296}, 500); });    jQuery("#twitter_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#twitter_right").stop(true,false).animate({right: -250}, 500); });     jQuery("#google_plus_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#google_plus_right").stop(true,false).animate({right: -154}, 500); });    jQuery("#feedburner_right").hover(function(){ jQuery(this).stop(true,false).animate({right:  0}, 500); },function(){ jQuery("#feedburner_right").stop(true,false).animate({right: -179}, 500); });    });
</script>

<!--[if IE]>
<style type="text/css">
  .timer { display: none !important; }
	div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
</style>
<![endif]-->		
<!-- Run the plugin -->

<!--ORBIT-->
<!--ANALYTICS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28150113-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
.frame{
	width:800px;
	<?=$p_css?>
	margin:0px auto 0 auto !important;
		
}
.contenedorFrm{
	width:880px;
	height:672px;
	margin-left:auto;
	margin-right:auto;
	background:#FFF;
}
.cajac{
	width:150px;
	height:50px;
	float:left;
	background-color:#666;
	margin-top:150px;	
}

.distI{
	margin-left:100px;
}

.distD{
	margin-right:50px;
}
.microd{
	width:242px;
	height:193px;
	float:left;
	margin-left:40px;
	margin-top:200px;	
}
.adopta{
	width:242px;
	height:193px;
	margin-left:30px;
	float:left;
	margin-top:200px;
}
.enlaces{
	width:600px;
	height:200px;
	float:left;
	margin-left:160px;
	margin-top:50px;
	display:none;	
}
.img_sun{
	margin-top:110px;
	width:287px;
	min-height:484px;
	height:auto;
	float:left;
}
.txapy{
	width:504px;
	height:40px;
	margin-top:50px;
	margin-left:45px;
	float:left;
	color:#329642;
	text-align:center;
	font-size:2em;
}

.txapy2{
	width:880px;
	height:40px;
	margin-top:130px;
	/*margin-left:45px;*/
	float:left;
	color:#329642;
	text-align:center;
	font-size:2em;
	opacity:0.4;
}
#txcampania{
	width:880px;
	height:40px;
	margin-top:20px;
	float:left;
	font-size:2em;
	color:#004585;
	margin-bottom:20px;
}
#txcampania span{
	margin-left:350px;
	margin-right:200px;
}
#paso1{
		
}
#paso2{
	/*display:none;	*/
	width:880px;
	height:672px;
	background: url(../imagenes/donativos/fndest.jpg) bottom center no-repeat;
	display:none;
}
#MDi{
	text-align:center;
	display:none;	
}
#ADi{
	text-align:center;
	display:none;	
}
#btnb{
	vertical-align:middle;	
}
</style>

</head>
<body>
<div id="fb-root"></div>
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&AppId=354556087888425";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="contenedorG">
<!--CONTENEDOR PRINCIPAL-->
	<div class="header">
		<!--Encabezado-->
			<div class="logosSup">
				<a href="../"><img src="../imagenes/estructura/logo-fuv.jpg" alt="Logo Fundación UV" width="200" height="70" class="alfuv" /></a>
				<!--<img src="imagenes/estructura/20aniv.png" alt="imagen 20 aniversario" width="200" height="44" class="al20" />-->			
				<a href="http://www.cemefi.org/images/stories/programas/indicadores/ListaOSC_Acreditadas_indicadores.pdf#page=26" target="_blank"><img src="../imagenes/estructura/cemefi_e.png" alt="Logo CEMEFI" width="64" height="70" class="alCMFI" /></a>
				<a href="http://www.uv.mx" target="_blank"><img src="../imagenes/estructura/uv_e.png" alt="Logo UV" class="alUV" /></a>
			</div>
		<!--Encabezado-->
	</div>
	<!--CONTENEDOR FRM-->
	<div class="contenedorFrm">
		<div class="paso1" id="paso1">
		<!--INICIO PASO 1-->
			<div class="img_sun">
				<img src="../imagenes/donativos/sun.jpg" width="287" height="484" />
			</div>
			
			<div class="microd" id="MD"	>
				<img src="../imagenes/donativos/mdn.png" width="242" height="193" />
			</div>
			<div class="adopta" id="AD">
				<img src="../imagenes/donativos/aub.png" width="242" height="193" />
			</div>
			<div class="txapy">
				¡Con tu apoyo... lo hacemos realidad!
			</div>
			
			<!--<div class="enlaces" id="EAD">
				<a href="tcd.php"><img style="margin-right:10px;" src="../imagenes/donativos/aub_tcd.png" width="292" height="125" /></a>
				<a href="aub_vn.php"><img  src="../imagenes/donativos/aub_dvn.png" width="292" height="125" /></a>
			</div>
			<div class="enlaces" id="EMD">
				<a href="tcd.php"><img style="margin-right:10px;" src="../imagenes/donativos/mdn_tcd.png" width="292" height="125" /></a>
				<a href="mdn_vn.php"><img src="../imagenes/donativos/mdn_dvn.png" width="292" height="125" /></a>
			</div>-->
		<!--FIN PASO 1-->
		</div>
		<div class="paso2" id="paso2">
			<div class="txapy2">
				¡Con tu apoyo... lo hacemos realidad!
			</div>
			<div id="txcampania">
				<span></span> <img id="btnb" src="../imagenes/donativos/back.jpg" width="30" height="30" />
			</div>
			<div id="MDi">
				<a href="http://goo.gl/8MwKn3"><img src="../imagenes/donativos/mdn_dvn.png" width="292" height="125" /></a>
				<a href="http://goo.gl/HR5Hf8"><img src="../imagenes/donativos/mdn_tcd.png" width="292" height="125" /></a>
			</div>
			<div id="ADi">
				<a href="http://goo.gl/QpiHle"><img src="../imagenes/donativos/aub_dvn.png" width="292" height="125" /></a>
				<a href="http://goo.gl/HR5Hf8"><img src="../imagenes/donativos/aub_tcd.png" width="292" height="125" /></a>
			</div>			
			
		</div>
	</div>
	<!--FIN CONTENEDOR FRM-->
</div>
<!--CONTENEDOR PRINCIPAL-->
</div>
<div class="footer">
	<div class="menBot">       
		<div class="txFUV">
			<a href="">Fundación de la Universidad Veracruzana, A.C.</a> | 
			<a href="../privacidad.html">Aviso de privacidad</a> | 
			<a href="../contacto.html">Contacto</a> | 01-800-838-4181
		</div>
        
	</div>
</div>
</body>
</html>
