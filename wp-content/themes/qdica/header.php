<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */

global $current_user;
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/sass/font-awesome-4.1.0/css/font-awesome.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="menu-responsivo-list">

	</div>

	<!-- Top -->
	<div id="top">
		<div class="menu-responsivo col-xs-2">
			<div class="menu-bt">
				<i class="fa fa-bars"></i>
			</div>
			<?php //wp_nav_menu( array('menu' => 'Menu1', 'menu_class'  => 'menu-principal') ); ?>
		</div>
		<!-- Menu -->
		<div class="container">
			<div id="menu" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<!-- Menu 1 [Left side] -->
				
				<?php wp_nav_menu( array('menu' => 'Menu1', 'menu_class'  => 'menu-principal') ); ?>
				
			</div>
			<!-- Fim Menu 1 -->
			<!-- Menu Responsivo -->
			
			<!-- Fim Menu Responsivo -->
			<!-- Logo -->
			<div id="logo" class="col-lg-4 col-md-4 col-sm-8 col-xs-8 text-center">
				<a href="home" target="_top" border="0">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-thumbnail img-responsive" alt="logo-qdica" border="0" />
				</a>
			</div>
			<!-- Fim Logo -->
			<!-- Menu 2 [Right side] -->
			<div class="menu-menu2-container col-lg-4 col-md-4 col-sm-5 col-xs-5">
				<ul class="menu">
					<li class="menubtl" title="Clique para modificar localização" onClick="loadModal('localidade.php','500','300');"><span>Estou em:</span> <br />Rio de Janeiro, RJ</li>
					<li class="menu-item" name="departamentos" onClick="toggleDepartamentos()"><a href="#">Departamentos</a></li>
					<li class="menu-item">
						<a href="#">
						<?php if ( is_user_logged_in() ) { echo $current_user->display_name.' <i class="fa fa-sort-desc"></i>'; } else { echo 'Login'; } ?>
						</a>
					</li>
				</ul>
			</div><!-- Fim Menu 2 -->
		</div>]
		<!-- Login Responsivo -->
		<div class="menu-responsivo">
			<div class="menu-bt-login">
				<?php if ( is_user_logged_in() ) { echo $current_user->display_name.' <i class="fa fa-sort-desc"></i>'; } else { echo 'Login'; } ?>
			</div>
			<?php //wp_nav_menu( array('menu' => 'Menu1', 'menu_class'  => 'menu-principal') ); ?>
		</div>
		<!-- Fim Login Responsivo -->
	</div><!-- Fim Top -->

	

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
	<!-- Fim Top -->

	<?php if ( !is_user_logged_in() ) { ?>
	<div class="login-container container">
		<div class="login-panel container">
			<form name="login" action="<?php echo home_url('/wp-login.php'); ?>" method="post">
				<input type="text" class="form-control m-b-small" placeholder="Login ou Email" name="log" />
				<input type="password" class="form-control m-b-small" placeholder="Senha" name="pwd" />
				<div class="m-b-small text-default">
					<input type="checkbox" name="rememberme" class="m-r-small" /> Manter-me conectado
				</div>
				<input type="submit" class="btn btn-primary m-t" value="Entrar"/>
			</form>
		</div>
	</div>
	<?php } ?>


	<div class="container">
