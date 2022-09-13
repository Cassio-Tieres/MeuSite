<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!--CSS BOOTSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!--JS BOOTSTRAP -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!--ICONS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

		<!--OWL-CAROUSEL-->
        <link rel="stylesheet" href="wp-content/themes/atelie/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="wp-content/themes/atelie/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

		<!-- MEU CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-expand-lg navbar-light" id="header">
			<div class="container-fluid position-fixed bg-header">
				<a class="navbar-brand ml-5" href="#">
					<h1>
					<span style="color: #1B97D2;">C</span>ássio Tiere<span style="color: #1B97D2;">s</span>
					</h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav">
					<a href="#header" class="nav-item nav-link">Home</a>
					<a href="#sobre-mim" class="nav-item nav-link">Sobre Mim</a>
					<a href="#projetos" class="nav-item nav-link">Projetos</a>
					<a href="#tecnologias" class="nav-item nav-link">Tecnologias</a>
					<a href="#contato" class="nav-item nav-link contato">Contato</a>
					</div>
				</div>
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<div class="navbar-nav">
					<a href="#header" class="nav-item nav-link"><i class="bi bi-instagram"></i></a>
					<a href="#sobre-mim" class="nav-item nav-link"><i class="bi bi-linkedin"></i></a>
					<a href="#projetos" class="nav-item nav-link"><i class="bi bi-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</nav>
		<?php
		wp_body_open();
		?>


