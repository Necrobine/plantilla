<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Luis Fernando Hernandez Guevara</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">


				<div class="container">

					<!-- Logo -->
						<h1><a href="#" id="logo">Luis Fernando Hernandez Guevara</a></h1>
						<h3><a href="#" id="logo">Perfil Profecional</h3>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Inicio</a></li>
								<li><a href="left-sidebar.html">Estudios Realizados</a></li>
								<li><a href="right-sidebar.html">Pasatiempos</a></li>
								<li><a href="no-sidebar.html">Aspiraciones</a></li>
							</ul>
						</nav>



				</div>
			</div>








											<div>
												<form action="index.html" class="formulario" name="formulario_registro" method="post">
											      <div class="formu">

															<?php


															if(isset($_POST['email'])) {

																	//

																	$email_to = "email@gmail.com";

																	$email_subject = "Contacto desde Web";

																	function died($error) {

																			// mensajes de error

																			echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";

																			echo "Detalle de los errores.<br /><br />";

																			echo $error."<br /><br />";

																			echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
																			die();
																	}

																	// Se valida que los campos del formulairo estén llenos

																	if(!isset($_POST['first_name']) ||

																			!isset($_POST['last_name']) ||

																			!isset($_POST['email']) ||

																			!isset($_POST['telephone']) ||

																			!isset($_POST['message'])) {

																			die('Lo sentimos pero parece haber un problema con los datos enviados.');

																	}
															 //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo

																	$first_name = $_POST['first_name']; // requerido

																	$last_name = $_POST['last_name']; // requerido

																	$email_from = $_POST['email']; // requerido

																	$telephone = $_POST['telephone']; // no requerido

																	$message = $_POST['message']; // requerido

																	$error_message = "";//Linea numero 52;

															//En esta parte se verifica que la dirección de correo sea válida

																 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

																if(!preg_match($email_exp,$email_from)) {

																	$error_message .= 'La dirección de correo proporcionada no es válida.<br />';

																}

															//En esta parte se validan las cadenas de texto

																	$string_exp = "/^[A-Za-z-ñ .'-]+$/";

																if(!preg_match($string_exp,$first_name)) {

																	$error_message .= 'El formato del nombre no es válido<br />';

																}



																if(!preg_match($string_exp,$last_name)) {

																	$error_message .= 'el formato del apellido no es válido.<br />';

																}

																if(strlen($message) < 2) {

																	$error_message .= 'El formato del texto no es válido.<br />';

																}

																if(strlen($error_message) > 0) {

																	die($error_message);

																}

															//Este es el cuerpo del mensaje tal y como llegará al correo

																	$email_message = "Contenido del Mensaje.\n\n";



																	function clean_string($string) {

																		$bad = array("content-type","bcc:","to:","cc:","href");

																		return str_replace($bad,"",$string);

																	}



																	$email_message .= "Nombre: ".clean_string($first_name)."\n";

																	$email_message .= "Apellido: ".clean_string($last_name)."\n";

																	$email_message .= "Email: ".clean_string($email_from)."\n";

																	$email_message .= "Teléfono: ".clean_string($telephone)."\n";

																	$email_message .= "Mensaje: ".clean_string($message)."\n";


															//Se crean los encabezados del correo

															$headers = 'From: '.$email_from."\r\n".

															'Reply-To: '.$email_from."\r\n" .

															'X-Mailer: PHP/' . phpversion();

															@mail($email_to, $email_subject, $email_message, $headers);

															echo $first_name . "<br>";
															echo $last_name . "<br>";
															echo $email_from . "<br>";
															echo $telephone . "<br>";
															echo $message . "<br>";

															?>

															 <?php
																			if(!isset($_POST["confirmar"])) {
																	?>
																					<form  method="post">
																					<input type="submit" name="confirmar" value="Confirmar">
																					</form>
																	<?php
																			}
																			else {
																					//procesamos en formulario
																			}
																	 ?>


															<!-- Mensaje de que fue enviado-->

															 <br>

															Gracias! Nos pondremos en contacto contigo a la brevedad

															<?php

															}

															?>







											      </div>
												</form>
											</div>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
									<header class="major">
										<h2>Instituciones</h2>
									</header>
									<ul class="contact">
										<li>
											<span class="address"> <a href="http://unicuces.edu.co/portal/"> Unicuces</span>
											<a href="#" class="image"><img src="images/pic05.jpg" weight="40" height="40" alt=""></a>
										</li>
										<li>
											<span class="mail"> <a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"> Sena</span>
												<a href="#" class="image"><img src="images/pic06.png" weight="40" height="40" alt=""></a>
									</ul>
								</section>
							</div>
						</div>

					<!-- Copyright -->
						<div class="copyright">
							Design: <a href="">TEMPLATED</a> Images: <a href="">Unsplash</a> (<a href="">CC0</a>)
						</div>

				</div>
			</div>

	</body>
</html>
