<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since  2.2.0
	 *
	 * @return void
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since  2.2.0
 *
 * @return void
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Twitter Bootstrap.
	wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

	// General scripts.
	// FitVids.
	wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

	// Main jQuery.
	wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );

	// Grunt main file with Bootstrap, FitVids and others libs.
	// wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );



//////////////////////// Funcoes usuarios ///////////////////////

//Remover barra do site
add_filter('show_admin_bar','__return_false');

// Usuario Vendedor


/*
function remove_role_tecnico() {
	remove_role( 'vendedor' );
}
add_action( 'admin_init', 'remove_role_tecnico' );
*/
function wp_admin_bar_new_item() {
global $wp_admin_bar;
$wp_admin_bar->remove_node( 'new-post' );
}

add_action('wp_before_admin_bar_render', 'wp_admin_bar_new_item');

add_action( 'admin_init', 'add_role_vendedor' );
	function add_role_vendedor() {
	  add_role( 'vendedor', 'Vendedor', array(
	     'activate_plugins' => false,
		 'add_users' => false,
		 'create_users' => false,
		 'delete_others_pages' => false,
		 'delete_others_posts' => false,
		 'delete_pages' => false,
		 'delete_plugins' => false,
		 'delete_posts' => true,
		 'delete_private_pages' => false,
		 'delete_private_posts' => true,
		 'delete_published_pages' => false,
		 'delete_published_posts' => true,
		 'delete_users' => false,
		 'edit_dashboard' => false,
		 'edit_files' => true,
		 'edit_others_pages' => false,
		 'edit_others_posts' => false,
		 'edit_pages' => false,
		 'edit_posts' => true,
		 'edit_private_pages' => false,
		 'edit_private_posts' => true,
		 'edit_published_pages' => false,
		 'edit_published_posts' => true,
		 'edit_theme_options' => false,
		 'edit_users' => false,
		 'export' => true,
		 'import' => true,
		 'list_users' => false,
		 'manage_categories' => false,
		 'manage_links' => false,
		 'manage_options' => false,
		 'moderate_comments' => false,
		 'promote_users' => false,
		 'publish_pages' => false,
		 'publish_posts' => true,
		 'read_private_pages' => false,
		 'read_private_posts' => true,
		 'read' => true,
		 'remove_users' => false,
		 'switch_themes' => false,
		 'unfiltered_upload' => false,
		 'upload_files' => true,
		 'update_core' => false,
		 'update_plugins' => false,
		 'update_themes' => false,
		 'install_plugins' => false,
		 'install_themes' => false,
		 'delete_themes' => false,
		 'edit_plugins' => false,
		 'edit_themes' => false,
		 'unfiltered_html' => false
	    ));
	}

add_action( 'admin_init', 'vendedor_capabilities');
function vendedor_capabilities() {
global $user_ID;
if ( current_user_can( 'vendedor' ) ) {

	add_action( 'admin_head', 'admin_css' );

	function admin_css()
	{
	echo '<style type="text/css">.update-nag{display:none !important;}</style>';
	}




 //remove_menu_page( 'edit.php?post_type=produtos' ); // tipo de post Produtos
 remove_menu_page('edit.php'); // Posts
 //remove_menu_page('upload.php'); // Mídia
 //remove_menu_page('link-manager.php'); // Links
 //remove_menu_page('edit-comments.php'); // Comentários
 //remove_menu_page('edit.php?post_type=page'); // Páginas
 //remove_menu_page('plugins.php'); // Plugins
 //remove_menu_page('themes.php'); // Aparência
 //remove_menu_page('users.php'); // Usuários
 remove_menu_page('tools.php'); // Ferramentas
 //remove_menu_page('options-general.php'); // Configurações
 //remove_menu_page('wpcf7'); // Página do plugin Contact Form 7
 } 
}


// Register Custom Post Type
function cpt_produtos() {

	$labels = array(
		'name'                => _x( 'Produtos', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Produto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Produtos', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Todos', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Novo Produto', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'produto', 'text_domain' ),
		'description'         => __( 'produtos qdica', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'comments', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'produto', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_produtos', 0 );


/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/plugins-support.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';
