<!-- Header -->
<?php include('../template/cabecera.php'); ?>
<div class="container">
    <header class="style1">
            <br/><h2>Organización y Estructura</h2>
        <div class="bordeAbajo"></div>
    </header>    
</div>
<div class="container">    
    <!-- Accordion begin -->
    <div class="accordion_example1">		
        <!-- Section 1 -->
	<div class="accordion_in acc_active">
		<div class="acc_head">Órganos de gobierno</div>
		<div class="acc_content">
			<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</div>
	<!-- Section 2 -->
	<div class="accordion_in">
		<div class="acc_head">Comités Regionales de Becas(Voluntarios)</div>
		<div class="acc_content">
				<!-- Your text here. For this demo, the content is generated automatically. -->
		</div>
	</div>
	<!-- Section 3 -->
	<div class="accordion_in">
            <div class="acc_head">Personal Directivo</div>
            <div class="acc_content">
				<!-- Your text here. For this demo, the content is generated automatically. -->
            </div>
	</div>
    </div>
    <!-- Accordion end -->
</div>
        <link rel="stylesheet" href="acordeon/smk-accordion.css" />
        <script type="text/javascript" src="acordeon/smk-accordion.js"></script>
        <script type="text/javascript" src="acordeon/acordeon.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){

			$(".accordion_example1").smk_Accordion();		

			// Demo text. Let's save some space to make the code readable. ;)
			$('.acc_content').not('.nodemohtml').html('<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Fusce aliquet neque et accumsan fermentum. Aliquam lobortis neque in nulla  tempus, molestie fermentum purus euismod.</p>');
			
		});
	</script>
<!-- Pié de página -->				
<?php include('../template/pie.php'); ?>