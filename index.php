			<!-- Header -->
			<?php include('template/cabecera.php'); ?>
                        
                        <!-- Implementacion del slider 01-03-2017 by viko -->
                        <link rel="stylesheet" href="assets/css/glide.core.css" />
                        <link rel="stylesheet" href="assets/css/glide.theme.css" />
                        <script src="assets/js/glide.js"></script>
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
                        
			<!-- Main -->
				<div class="wrapper style2">
					
					<div id="main" class="container">
                                            <header class="style1">
                                                <h2>¿Qué estás buscando?</h2>
                                                <div class="bordeAbajo"/>
                                            </header>

						<!-- Features -->
							<section id="features">

								<div class="feature-list">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-comment">Mattis velit diam vulputate</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-refresh">Lorem ipsum dolor sit veroeros</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-picture-o">Pretium phasellus justo lorem</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-cog">Tempus sed pretium orci</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-wrench">Aliquam consequat et feugiat</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
												<h3 class="icon fa-check">Dolore laoreet aliquam mattis</h3>
												<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
											</section>
										</div>
									</div>
								</div>
								<ul class="actions actions-centered">
									<li><a href="#" class="button style1 big">Get Started</a></li>
									<li><a href="#" class="button style2 big">More Info</a></li>
								</ul>
							</section>

					</div>
				</div>			

			<!-- Pié de página -->				
                        <?php include('template/pie.php'); ?>		
                        <script>
                            $("#Glide").glide({
                                type: "slideshow"
                            });
                        </script>