<?php
/**
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Q Dica <?= $titlepage;?></title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tema.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/load.css" />

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
</head>

<body <?php body_class(); ?>>

	<!-- Top -->
	<div id="top">

		<!-- Logo -->
		<div id="logo">
			<a href="home" target="_top" border="0">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo-qdica" border="0" />
			</a>
		</div>
		<!-- End Logo -->
		
		<!-- Menu -->
		<div id="menu">
			<!-- Menu 1 [Left side] -->
			<?php wp_nav_menu( array('menu' => 'Menu1') ); ?>
			<div id="menu1">
				<a href="home" name="home" class="menubt">Home</a>		
				<a href="#" class="menubt">Servi&ccedil;os</a>
				<a href="#" class="menubt">Dicas</a>
				<a href="cadastro" name="cadastro" class="menubt">Cadastro</a>
			</div>
			<!-- End Menu 1 -->
			
			<!-- Menu 2 [Right side] -->
			<div id="menu2">
				<div class="menubtl" title="Clique para modificar localização" onClick="loadModal('localidade.php','500','300');"><span>Estou em:</span> <br />Mesquita, RJ</div>
				<div class="menubt" name="departamentos" onClick="toggleDepartamentos()">Departamentos</div>
				<div class="menubt">Login</div>
			</div>
			<!-- End Menu 2 -->
			


		</div>
		<!-- End Menu -->

	</div>
	<!-- End Top -->

	<div id="topline">

		<div id="departamentos">
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/automoveis.png" />
				<div class="nome">Automóveis</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/informatica.png" />
				<div class="nome">Informática</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/mercado.png" />
				<div class="nome">Mercado</div>
			</div>
			<div class="departamento">
				<i mg src="<?php echo get_template_directory_uri(); ?>/images/departamentos/telefonia.png" />
				<div class="nome">Telefonia</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/roupas.png" />
				<div class="nome">Roupas</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/viagens.png" />
				<div class="nome">Viagens</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/jogos.png" />
				<div class="nome">Jogos</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/downloads.png" />
				<div class="nome">Downloads</div>
			</div>
			<div class="departamento">
				<img src="<?php echo get_template_directory_uri(); ?>/images/departamentos/eletronicos.png" />
				<div class="nome">Eletrônicos</div>
			</div>
		</div>



<?php 

/* Codigo para exemplo
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
*/
?>
