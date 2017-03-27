	
			<?php include('../template/cabecera.php'); ?>
								
                        <script type="text/javascript" src="funciones.js"></script>
                        
                                                <header class="style1">
                                                    <h2>Contacto</h2>
                                                    <div class="bordeAbajo"/>
                                                </header>
                                        <div id="main" class="container" style="background-color: white; margin-top: 2%">
						<!-- Image ->
                                                        <a href="" class="image featured" style="margin-top: -3.6%" style="cursor: none">
                                                            <img src="img/quienes_somos.png" alt="" />
							</a>-->
                                                        <div class="row 150%">
							<div class="6u 12u(mobile)">

								<!-- Contact Form -->
                                                                <section style="padding-left:5%">
										<form method="post" action="#">
											<div class="row 50%">
												<div class="6u 12u(mobile)">
													<input type="text" name="nombre" id="contact-name" placeholder="Nombre" />
												</div>
												<div class="6u 12u(mobile)">
													<input type="text" name="email" id="contact-email" placeholder="Correo electrónico" />
												</div>
											</div>
											<div class="row 50%">
												<div class="12u">
													<textarea name="asunto" id="contact-message" placeholder="Asunto" rows="4"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="12u">
													<ul class="actions">
														<li><input type="submit" class="style1" value="Enviar" onclick="enviaFormulario()" /></li>
														<!--<li><input type="reset" class="style2" value="Reset" /></li>--> 
                                                                                                                <li style="font-size: 14px; font-family: Open Sans Regular; padding-top:10px;">Al enviar este formulario, consiento que mis datos personales sean tratados conforme al <a href="http://localhost/fuvAniversario/transparencia/?tipo=3"><b>Aviso de privacidad de la Fundación UV.</b></a></li>
													</ul>
												</div>
											</div>
										</form>
									</section>
							</div>
							<div class="6u 12u(mobile)">

								<!-- Contact -->
									<section class="feature-list small">										
                                                                            <div class="row">
											<div class="6u 12u(mobile)">
												<section>
													<p style="text-align: center">							
                                                                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.1596424970814!2d-96.90809125977175!3d19.527901288634233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ab4a54c408f391c!2sFundaci%C3%B3n+de+la+Universidad+Veracruzana+A.C.!5e0!3m2!1ses-419!2smx!4v1490638097184" width="400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                                                                        </p>
												</section>
											</div>											
										</div>

									</section>

							</div>
						</div><br>
                                                <br>		
					</div>
				                                    
        <!--<link rel="stylesheet" href="timeline/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="timeline/style.css"> <!-- Resource style -->
        <script src="timeline/modernizr.js"></script> <!-- Modernizr -->
        <!--<script src="timeline/jquery-2.1.4.js"></script>-->
        <script src="timeline/jquery.mobile.custom.min.js"></script>
        <script src="timeline/main.js"></script> <!-- Resource jQuery -->
        <!--<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48014931-1', 'codyhouse.co');
            ga('send', 'pageview');

            jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(event){
  			event.preventDefault();
  			$('#carbonads-container').hide();
  		});
            });
        </script>-->
			<!-- Pié de página -->				
<?php include('../template/pie.php'); ?>