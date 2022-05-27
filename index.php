<?php
include("conexion/consultas.php");
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
	<link type="text/css" rel="stylesheet" href="css/popup.css" />
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
							<p class="white-text">Centro internacional de formacion, evaluacion y certificacion en programas de educacion medica prehospitalaria. </p>

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
					<h1 class="title">Bienvenidos Instituto Universitario UCSA</h1>
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
		<div id="galeria" class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Galeria</h2>
				</div>
				<!-- /Section header -->
				<!-- Work -->
				<?php
				foreach ($galeria as $row ) {
				$num = 1;
				?>
					<div class="col-md-4 col-xs-6 work">
						<img class="img-responsive" src="dashboard/img/<?php echo $row['gal_foto']; ?>">
						<div class="overlay">
							<div class="work-content">
								<!--<span>leer mas</span>-->
								<h3>Ver fotos</h3>
								<div class="work-link">
									<a href="#galeria-pop<?php echo $num; ?>"><i class="fa fa-external-link"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Galeria Pops -->
					<div id="galeria-pop<?php echo $num; ?>" class="popupview">
						<div id="popupBody">
							<div class="container-text-pop">
								<h2><?php echo $row['gal_titulo']; ?></h2>
								<p align="justify"><?php echo $row['gal_text']; ?></p>
							</div>
							<div class="imgs-pop">
								<img src="dashboard/img/<?php echo $row['gal_foto']; ?>">
							</div>
							<a id="cerrar-pop" href="#galeria">&times;</a>
						</div>
					</div>
					<!-- /Galeria Pops -->
				<?php
					++$num;
				}
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
		<div id="servicios" class="container">
			<!-- Row -->
			<div class="row">
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Nuestros servicios</h2>
				</div>
				<!-- /Section header -->
				<?php
				foreach ($servicios as $row ) {
					$num = 1;
				?>
					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa <?php echo $row['serv_icon'] ?>"></i>
							<h3><?php echo $row["serv_titulo"] ?></h3>
							<p><?php echo $row["serv_desc1"] ?></p>
							<a href="#servicios-pop<?php echo $num; ?>"><i class="fa fa-external-link">Ver mas</i></a>
						</div>
					</div>
					<!-- /service -->
					<!-- Nuestros-Servicios Pops -->
					<div id="servicios-pop<?php echo $num; ?>" class="popupview">
						<div id="popupBody">
							<div class="container-text-pop">
								<h2><?php echo $row["serv_titulo"] ?></h2>
								<p align="justify"><?php echo $row["serv_desc2"] ?></p>
							</div>
							<div class="imgs-pop">
								<img src="dashboard/img/blanco.jpg">
							</div>
							<a id="cerrar-pop" href="#servicios">&times;</a>
						</div>
					</div>
					<!-- /Nuestros-Servicios Pops -->
				<?php
					++$num;
				}
				?>
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
					<?php
						foreach ($elegirnos as $row ) {

							if ($row["ele_formato"] == "Titulo") {
					?>
							<p><?php echo $row["ele_texto"]; ?></p>
						<?php
						} elseif ($row["ele_formato"] == "Párrafo") {
						?>
							<div class="feature">
								<i class="fa fa-check"></i>
								<p><?php echo $row["ele_texto"]; ?></p>
							</div>
					<?php
						} else {
						}
					}
					?>
				</div>
				<!-- /why choose us content -->
				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<?php
						foreach ($carrusel as $row ) {
						?>
							<img class="img-responsive" src="dashboard/img/<?php echo $row['carr_foto']; ?>" alt="">
						<?php
						}
						?>
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
				<?php
				foreach ($numeros as $row ) {
				?>
					<!-- number -->
					<div class="col-sm-3 col-xs-6">
						<div class="number">
							<i class="fa <?php echo $row["num_iconos"]; ?>"></i>
							<h3 class="white-text"><span class="counter"><?php echo $row["num_cantidad"]; ?></span></h3>
							<span class="white-text"><?php echo $row["num_titulo"]; ?></span>
						</div>
					</div>
					<!-- /number -->
				<?php
				}
				?>
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
				<?php
					foreach ($cursos as $row ) {
				?>
					<!-- pricing -->
					<div class="col-sm-4">
						<div class="pricing">
							<div class="price-head">
								<span class="price-title"><?php echo $row["cur_titulo"] ?></span>
							</div>
							<ul class="price-content">
								<li>
									<p><?php echo $row["cur_text1"] ?></p>
								</li>
								<li>
									<p><?php echo $row["cur_text2"] ?></p>
								</li>
								<li>
									<p><?php echo $row["cur_text3"] ?></p>
								</li>
							</ul>
							<div class="price-btn">
								<a download="curso" href="dashboard/docs/<?php echo $row['cur_pdf']; ?>" target="_blank"><i class="outline-btn">Descarga temario</i></a>
							</div>
						</div>
					</div>
					<!-- /pricing -->
				<?php
				}
				?>
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
						<?php
							foreach ($testimonios as $row ) {

						?>
							<!-- testimonial -->
							<div class="testimonial">
								<div class="testimonial-meta">
									<img src="dashboard/docs/<?php echo $row['cur_pdf']; ?>" alt="">
									<h3 class="white-text"><?php echo $row["test_foto"]; ?></h3>
									<span><?php echo $row["test_area"]; ?></span>
								</div>
								<p class="white-text"><?php echo $row["test_text"]; ?></p>
							</div>
							<!-- /testimonial -->
						<?php
						}
						?>
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
				<?php
					foreach ($equipo as $row ) {
				?>
					<!-- team -->
					<div class="col-sm-4">
						<div class="team">
							<div class="team-img">
								<img class="img-responsive" src="dashboard/img/<?php echo $row['equi_foto']; ?>" alt="">
								<div class="overlay">
									<div class="team-social">
										<a href="<?php echo $row['equi_redsocial1'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="<?php echo $row['equi_redsocial2'] ?>"><i class="fa fa-instagram"></i></a>
										<a href="<?php echo $row['equi_redsocial3'] ?>"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
							<div class="team-content">
								<h3><?php echo $row["equi_nombre"] ?></h3>
								<span><?php echo $row["equi_area"] ?></span>
							</div>
						</div>
					</div>
					<!-- /team -->
				<?php
				}
				?>
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
				<?php
					foreach ($noticias as $row ) {

				?>
					<!-- blog -->
					<div class="col-md-4">
						<div class="blog">
							<div class="blog-img">
								<img class="img-responsive" src="dashboard/img/<?php echo $row['not_foto']; ?>" alt="">
							</div>
							<div class="blog-content">
								<ul class="blog-meta">
									<li><i class="fa fa-user"></i><?php echo $row["not_ciudad"] ?></li>
									<li><i class="fa fa-clock-o"></i><?php $date = date_create($row["not_fecha"]);
																		echo date_format($date, 'd M.'); ?></li>
									<!-- <li><i class="fa fa-comments"></i>57</li>-->
								</ul>
								<h3><?php echo $row["not_titulo"] ?></h3>
								<p><?php echo $row["not_descripcion"] ?></p>
								<a href="<?php echo $row['not_sitioweb']?>" target="_blank">Leer mas.</a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
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
						<input type="text" ; class="input" ; placeholder="Nombre" ; name="nombre" ; maxlength="79" ; required>
						<input type="email" ; class="input" ; placeholder="Correo" ; name="correo" ; maxlength="79" ; required>
						<input type="text" ; class="input" ; placeholder="Titulo" ; name="titulo" ; maxlength="44" ; required>
						<textarea class="input" ; placeholder="Mensaje" ; name="mensaje" ; required></textarea>
						<button class="main-btn" ; name="Ccon" ;>Enviar Mensaje</button>
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
						<a href="#"><img src="img/nuevologo.jpeg" alt="logo"></a>
						<p>INSTITUTO UNIVERSITARIO UCSA</p>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/healtwebce.nezahualcoyotl"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->
					<!-- footer intranet -->
					<div class="footer-follow">
						<a href="login.php">
							<p>Intranet</p>
						</a>
					</div>
					<!-- /footer intranet -->
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

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>
