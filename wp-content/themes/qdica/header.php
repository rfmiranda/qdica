<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="no-js ie ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="no-js ie ie8 lt-ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Top -->
	<div id="top" class="row">
		<!-- Menu -->
		<div class="container">
		<div id="menu" class="col-lg-5">
			<!-- Menu 1 [Left side] -->
			
			<?php wp_nav_menu( array('menu' => 'Menu1', 'menu_class'     => 'menu-principal') ); ?>
			
		</div>
		<!-- End Menu 1 -->
		<!-- Logo -->
		<div id="logo" class="col-lg-2">
			<a href="home" target="_top" border="0">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo-qdica" border="0" />
			</a>
		</div>
		<!-- End Logo -->
		<!-- Menu 2 [Right side] -->
		<div class="menu-menu2-container col-lg-5">
			<ul class="menu">
				<li class="menubtl" title="Clique para modificar localização" onClick="loadModal('localidade.php','500','300');"><span>Estou em:</span> <br />Rio de Janeiro, RJ</li>
				<li class="menu-item" name="departamentos" onClick="toggleDepartamentos()"><a href="#">Departamentos</a></li>
				<li class="menu-item"><a href="#">Login</a></li>
			</ul>
		</div><!-- End Menu 2 -->
		</div>
	</div><!-- End Menu -->
	<div id="topline">

		<div id="departamentos">
			<div class="departamento">
	        	<img src="img/departamentos/automoveis.png">
	        	<div class="nome">Automóveis</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/informatica.png">
	        	<div class="nome">Informática</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/mercado.png">
	        	<div class="nome">Mercado</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/telefonia.png">
	        	<div class="nome">Telefonia</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/roupas.png">
	        	<div class="nome">Roupas</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/viagens.png">
	        	<div class="nome">Viagens</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/jogos.png">
	        	<div class="nome">Jogos</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/downloads.png">
	        	<div class="nome">Downloads</div>
	        </div>
	        <div class="departamento">
	        	<img src="img/departamentos/eletronicos.png">
	        	<div class="nome">Eletrônicos</div>
	        </div>
		</div>

	</div>
	<!-- End Top -->


	<div class="container">
