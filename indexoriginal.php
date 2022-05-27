<?php
    include("conexion/conexion00.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Instituto Universitario UCSA</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/pop.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/nuevologo.jpeg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<!-- <a href="index.html"> -->
							<img class="logo" src="./img/nuevologo2.png" alt="logo">
							<img class="logo-alt" src="./img/nuevologo2.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!--/Collapse nav button-->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Inicio</a></li>
					<li><a href="#about">Nosotros</a></li>
					<li><a href="#portfolio">Galeria</a></li>
					<li><a href="#service">Servicios</a></li>
					<li><a href="#pricing">Cursos</a></li>
					<li><a href="#team">Nuestro Equipo</a></li>
					<!--<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li>-->
					<li><a href="#contact">Contacto</a></li>
					</u1>
				<!-- /Main navigation -->
			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">CENTRO UNIVERSITARIO EN CIENCIAS DE LA SALUD Y DESARROLLO HUMANO.</h1>
							<p class="white-text">Centro internacional de formacion, evaluacion y certificacion en programas de educacion medica prehospitalaria.							</p>
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h1 class="title">Bienvenidos al Instituto Universitario UCSA</h1>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-flag"></i>
						<!--<i class="fa fa-cogs"></i>-->
						<h3>MISION</h3>
						<p>Brindar capacitación para y en el trabajo, proporcionando conocimientos, habilidades y destrezas que contribuyan al aumento de la
                        productividad y a la satisfacción de las necesidades de las organizaciones productivas y empresas.</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-university"></i>			
						<!-- <i class="fa fa-magic"></i> -->
						<h3>VISION</h3>
						<p>Ser, en el ámbito nacional, una Institución privada líder en brindar los servicios de capacitación y certificación de las competencias
                        laborales, a personas que demandan los sectores productivos y sociales.</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-users"></i>
						<h3>OBJETIVO</h3>
						<p>Innovar e implementar nuevas ideologias con actualizaciones requeridas bajo normativas existentes con los recursos adecuados
                        para la formacion de personal altamente calificado en los diferentes campos laborales para atencion del sector salud empresarial y privado.</p>
						<!-- <a href="#">Read more</a> -->
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Galeria</h2>
				</div>
				<!-- /Section header -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/aha.png" alt="">
					<div class="overlay">
						<div class="work-content">
							<!--<span>leer mas</span>-->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop1"><i class="fa fa-external-link"></i></a>

							</div>
						</div>

					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/etls.jpeg" alt="">
					<div class="overlay">
						<div class="work-content">
							<!-- <span>Category</span> -->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop2"><i class="fa fa-external-link"></i></a>
								<!-- <a class="lightbox" href="./img/work2.jpg"><i class="fa fa-search"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/acls.jpg" alt="">
					<div class="overlay">
						<div class="work-content">
							<!-- <span>Category</span> -->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop3"><i class="fa fa-external-link"></i></a>
								<!-- <a class="lightbox" href="./img/work3.jpg"><i class="fa fa-search"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/conocer.jpg" alt="">
					<div class="overlay">
						<div class="work-content">
							<!-- <span>Category</span> -->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop4"><i class="fa fa-external-link"></i></a>
								<!-- <a class="lightbox" href="./img/work4.jpg"><i class="fa fa-search"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/pitcrew.png" alt="">
					<div class="overlay">
						<div class="work-content">
							<!-- <span>Category</span> -->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop5"><i class="fa fa-external-link"></i></a>
								<!-- <a class="lightbox" href="./img/work5.jpg"><i class="fa fa-search"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Work -->
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/star.png" alt="">
					<div class="overlay">
						<div class="work-content">
							<!-- <span>Category</span> -->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop6"><i class="fa fa-external-link"></i></a>
								<!-- <a class="lightbox" href="./img/work6.jpg"><i class="fa fa-search"></i></a> -->
							</div>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>

		<!-- /Container -->
	</div>
	<!-- /Portfolio -->
	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Galeria</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<?php
                $consulta = "SELECT * FROM galeria";
                $resultado = mysql_query($consulta,$conexion00);
                $num=1;	
                while ($row=mysql_fetch_assoc($resultado)) {
                ?>
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="data:image/jpg;base64,<?php echo base64_encode($row['gal_imagen']); ?>">
					<div class="overlay">
						<div class="work-content">
							<!--<span>leer mas</span>-->
							<h3>Ver fotos</h3>
							<div class="work-link">
								<a href="#galeria-pop<?php echo $num;?>"><i class="fa fa-external-link"></i></a>

							</div>
						</div>

					</div>
				</div>
				<?php
				++$num;	
                } 
                mysql_free_result($resultado);
                ?>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>

		<!-- /Container -->
	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Nuestros servicios</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-graduation-cap"></i>
						<h3>Cursos</h3>
						<p>Impartimos cursos globales en atencion preholpitalaria.</p>
						<a href="#servicios-pop1"><i class="fa fa-external-link">Ver mas</i></a>


					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-certificate"></i>
						<h3>Certificaciones nacionales</h3>
						<p>Realizamos certificaciones con validez en la secretaria del trabajo y prevencion social</p>
                        <a href="#servicios-pop2"><i class="fa fa-external-link">Ver mas</i></a>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-file-text-o"></i>
						<h3>Programas de certificacion internacional</h3>
						<p>Impartimos cursos de preparacion inicial en la atencion prehospitalaria.</p>
						<a href="#servicios-pop3"><i class="fa fa-external-link">Ver mas</i></a>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-bullhorn"></i>
						<h3>Programa de capacitacion para empresas</h3>
						<p>Realizamos simulacros en tiempo real con casos de atencion prehopitalaria.</p>
						<a href="#servicios-pop4"><i class="fa fa-external-link">Ver mas</i></a>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-building-o"></i>
						<h3>Profesionalizacion a Lic. en enfermaria</h3>
						<p>Cursos impartidos para la atencion ante una emergencia dentro de la empresa.</p>
						<a href="#servicios-pop5"><i class="fa fa-external-link">Ver mas</i></a>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-heartbeat"></i>
						<h3>Diplomados</h3>
						<p>Impartimos cursos mediante nuestros contactos en Mc Allen Texas.</p>
						<a href="#servicios-pop6"><i class="fa fa-external-link">Ver mas</i></a>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Por que elegirnos</h2>
					</div>
					<p>Somos una empresa comprometida con nuestros estudiantes en el buen manejo y aprendizaje de actuales tecnicas de atencion prehospitalaria</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Somos una escuela con presencia nacional e internacional.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Nos apegamos a las normas emitidas por la STPS.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Las certificaciones son con valor curricular.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Contamos con las instalaciones y el mejor equipo para la realizacion de cursos.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/prueba2.jpg" alt="">			
						<img class="img-responsive" src="./img/elcoc2.jpg" alt="">
						<img class="img-responsive" src="./img/elcoco3.jpg" alt="">
						<img class="img-responsive" src="./img/elcoco4.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/logosolito.png');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">150</span></h3>
						<span class="white-text">Clientes satisfechos</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Reconocimientos</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span></h3>
						<span class="white-text">Cursos impartidos</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Certificaciones realizadas</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Proximos cursos</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Certificacion CONOCER</span>
							<!--<div class="price">
								<h3>$9<span class="duration">/ month</span></h3>
							</div>-->
						</div>
						<ul class="price-content">
							<li>
								<p>Conducción y manejo del camión motobomba</p>
							</li>
							<li>
								<p>Certificación en el estándar EC0555</p>
							</li>
							<li>
								<p>Centro de Evaluación CE00005 HealthWebCE Nezahualcóyotl</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="./docs/operador de camion motobomba 1.1.pdf" target="_blank"><i class="outline-btn">Descarga temario</i></a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Certificacion PIT CREW</span>
							<!--<div class="price">
								<h3>$19<span class="duration">/ month</span></h3>
							</div>-->
						</div>
						<ul class="price-content">
							<li>
								<p>Programa formativo de equipos en reanimación de alto rendimiento (RCP al extremo)</p>
							</li>
							<li>
								<p>AUTHORIZED TRAINIG CENTER APPLICATION DESIGNS IMPROVING EMERGENTOLOGY IN LATINOAMERICA</p>
							</li>
							<li>
								<p>ID: 36-456</p>
							</li>
  							
						</ul>
						<div class="price-btn">
							<a href="./docs/PIT CREW 1.1.pdf" target="_blank"><i class="outline-btn">Descarga temario</i></a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Certificacion ACLS</span>
							<!--<div class="price">
								<h3>$39<span class="duration">/ month</span></h3>
							</div>-->
						</div>
						<ul class="price-content">
							<li>
								<p>Programa de proveedor SVCA/ACLS</p>
							</li>
							<li>
								<p>Soporte Vital Cardiovascular Avanzado</p>
							</li>
							<li>
								<p>American Heart Association AUTHORIZED TRAINING CENTER </p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="./docs/ACLS 1.1.pdf" target="_blank"><i class="outline-btn">Descarga temario</i></a>
						</div>
					</div>
				</div>
				<!-- /pricing -->
			</div>
			<!-- Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Pricing -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/cruz.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/ramos.jpg" alt="">
								<h3 class="white-text">Eduardo Ramos</h3>
								<span>Bombero los reyes la paz</span>
							</div>
							<p class="white-text">"Excelente escuela los profesores estan sumamente capacitados y orientados a resultados".</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/cocol.jpg" alt="">
								<h3 class="white-text">Jorge Coronado</h3>
								<span>Paramedico</span>
							</div>
							<p class="white-text">"Clases orientadas a cada curso y las certificaciones son unicas en mexico".</p>
						</div>
						<!-- /testimonial -->

						<!--
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/ricardocastillo.jpg" alt="">
								<h3 class="white-text">Ricardo Castillo</h3>
								<span>Instructor</span>
							</div>
							<p class="white-text">"Los compañeros de healtwebce nos han ayudado con su participacion en varios congresos e impartiendo sus conocimientos en ellos".</p>
						</div>
						-->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/rescatecnu.jpg" alt="">
								<h3 class="white-text">Central Nacional de Urgencias</h3>
								<span>Institucion de atencion prehospitalaria</span>
							</div>
							<p class="white-text">"Healtwebce ha aportado sus conocimientos en capacitar a nuestro personal para enfrentar las exigencias diarias y mantener a nuestro equipo actualizado en conocimiento de atencion prehospitalaria".</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/ponce.jpg" alt="">
								<h3 class="white-text">Antonio Ponce</h3>
								<span>PARAMEDICO NEZAHUALCOYOTL</span>
							</div>
							<p class="white-text">"Dedicacion, confianza y sobre todo profesionalismo por parte del equipo Healtwebce siempre a la vanguardia de las necesidades de esta profesion excelente precio por sus certificaciones y claros en todo momento".</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">NUESTRO EQUIPO</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/cesar.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/healtwebce.nezahualcoyotl"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Julio Cesar Sanchez Martinez</h3>
							<span>Director Instituto Universitario UCSA</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- white -->
				<div class="col-sm-4">
				</div>
				<!-- /white -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/doctor.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/healtwebce.nezahualcoyotl"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Jose Alfredo Villatoro</h3>
							<span>Doctor Interino Instituto Universitario UCSA</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!--
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/doctor.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://www.facebook.com/healtwebce.nezahualcoyotl"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Jose Alfredo Villatoro</h3>
							<span>Instructor Healthwebce Nezahualcoyotl</span>
						</div>
					</div>
				</div> -->
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Noticias Recientes.</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/salud.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Mexico CDMX.</li>
								<li><i class="fa fa-clock-o"></i>11 Jul.</li>
								<!-- <li><i class="fa fa-comments"></i>57</li>-->
							</ul>
							<h3>Modelo de Atención Médica Prehospitalaria.</h3>
							<p>Las lesiones causadas por el tránsito siguen encontrándose entre las diez principales causas de muerte. En 2015, fallecieron 37 mil 190 personas por lesiones accidentales. De estas, 16 mil 39 (el 43.1 %) se debieron a accidentes de tránsito.</p>
							<a href="./docs/MODELO_DE_ATENCION_MEDICA_PREHOSPITALARIA.pdf">Leer mas.</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/roja.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Excelsior</li>
								<li><i class="fa fa-clock-o"></i>11 Jul.</li>
								<!--<li><i class="fa fa-comments"></i>57</li>-->
							</ul>
							<h3>Regionalizan atención de emergencias en CDMX</h3>
							<p>Con el fin de garantizar que la llegada de las ambulancias sea oportuna, la Coordinación de Atención Prehospitalaria de la Secretaría de Salud capitalina, elaboró un mapa de regionalización.</p>
							<a href="https://www.msn.com/es-mx/noticias/mexico/regionalizan-atenci%C3%B3n-de-emergencias-en-cdmx/ar-BBW0z7N">Leer mas</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="./img/diputados.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Camara de Diputados</li>
								<li><i class="fa fa-clock-o"></i>11 Jul</li>
								<!--<li><i class="fa fa-comments"></i>57</li>-->
							</ul>
							<h3>Aprueban que atención médica prehospitalaria requiera de título profesional o certificado de especialización</h3>
							<p>La Cámara de Diputados aprobó reformas al artículo 79 de la Ley General de Salud, para incluir que la atención médica prehospitalaria en el ejercicio de actividades profesionales requiere de títulos profesionales o certificados de especialización.</p>
							<a href="http://www5.diputados.gob.mx/index.php/esl/Comunicacion/Boletines/2018/Abril/26/5362-Aprueban-que-atencion-medica-prehospitalaria-requiera-de-titulo-profesional-o-certificado-de-especializacion">Leer mas</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Medios de Contacto.</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telefono</h3>
						<p>55 6698 3737</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>tem.medic@hotmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Direccion</h3>
						<p>Av. Simón Bolívar #5 Col. Valle de los Reyes Edo. Mex.</p>
					</div>
				</div>
				<!-- /contact -->
				<br>
				<!-- contact form  action="comuni.php"-->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-header text-center">
						<h2 class="title">Mandanos un mensaje</h2>
					</div>
					<form class="contact-form" method="post" action="contacto.php">
						<input type="text"; class="input"; placeholder="Nombre"; name="nombre"; maxlength="43"; required>
						<input type="email"; class="input"; placeholder="Correo"; name="correo"; maxlength="43"; required>
						<input type="text"; class="input"; placeholder="Titulo"; name="titulo"; maxlength="33"; required>
						<textarea class="input"; placeholder="Mensaje"; name="mensaje"; maxlength="148"; required></textarea>
						<button class="main-btn"; name="Ccon";>Enviar Mensaje</button>
					</form>
				</div>
				<!-- /contact form -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /Container -->
	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/nuevologo.jpeg" alt="logo"></a>
						<p>INSTITUTO UNIVERSITARIO UCSA</p>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/healtwebce.nezahualcoyotl"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						<li><a href="login.php"><i class="fa">Lo</i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved. Designed by ZEROsystemMX</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->
	<!-- /Galeria Pops -->
	<div id="galeria-pop1" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="galeria-pop2" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="galeria-pop3" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="galeria-pop4" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="galeria-pop5" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="galeria-pop6" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
                <h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
	<!-- /Galeria Pops -->

	<!-- /Nuestros-Servicios Pops -->
	<div id="servicios-pop1" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="servicios-pop2" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="servicios-pop3" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="servicios-pop4" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="servicios-pop5" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
    <div id="servicios-pop6" class="popupview">
        <div id="popupBody">
            <div class="container-text-pop">
            	<h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
                <h2>Título de la ventana</h2>
                <p align="justify">Sabemos que el personal que colabora contigo es el activo más importante de tu empresa y que por eso vale la pena que lo cuides y darle lo que se merece todo el tiempo, incluso el mejor servicio de transporte.<br>
                Gracias a 20 años de experiencia en el trato con ejecutivos somos capaces de ofrecer la mejor atención en el traslado de personal.
                </p>
            </div>
            <div class="imgs-pop">
            	<img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/12/s_64a163f16ecbb099e52f2f8271f73cbbfcfc9034be4d646f7375e4db1ca6f3d7_1573501883482_ap_19001106049831-1.jpg?quality=100&strip=info&w=320&h=240&crop=1">
            </div>
            <a id="cerrar-pop" href="#">&times;</a>
        </div>
    </div>
	<!-- /Galeria Pops -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

	

</body>

</html>
