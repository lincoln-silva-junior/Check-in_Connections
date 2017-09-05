<?php
/**
 * reservas functions and definitions
 * Please browse readme.txt for credits and forking information
 *
 * @package Reservas
 */


if ( ! function_exists( 'reservas_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


function reservas_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on reservas, use a find and replace
	 * to change 'reservas' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'reservas', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270);
	add_image_size( 'reservas-full-width', 1038, 576, true );
	
	
	function reservas_register_reservas_menus() {
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Top Primary Menu', 'reservas' ),
			) );
	}

	add_action( 'init', 'reservas_register_reservas_menus' );
	
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		) );


	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'reservas_custom_background_args', array(
		'default-color' => 'f5f5f5',
		'default-image' => '',
		) ) );
}
endif; // reservas_setup
add_action( 'after_setup_theme', 'reservas_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 */
function reservas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reservas_content_width', 640 );
}
add_action( 'after_setup_theme', 'reservas_content_width', 0 );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function reservas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reservas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Widgets here will appear in your sidebar', 'reservas' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		) );
}
add_action( 'widgets_init', 'reservas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reservas_scripts ( $in_footer ) {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css',true );  

	wp_enqueue_style( 'reservas-style', get_stylesheet_uri() );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css',true );   
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js',array('jquery'),'',true);  

	wp_enqueue_script( 'reservas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20130115', true );

	wp_enqueue_script( 'reservas-js', get_template_directory_uri() . '/js/reservas.js',array('jquery'),'',true);  	

	wp_enqueue_script( 'html5shiv', get_template_directory_uri().'/js/html5shiv.js', array(),'3.7.3',false );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'reservas_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load custom nav walker
 */
if(!class_exists('wp_bootstrap_navwalker')){
require get_template_directory() . '/inc/navwalker.php';
}


function reservas_google_fonts() {
	$query_args = array(

		'family' => 'Lato:400,300italic,700,700i|Source+Sans+Pro:400,400italic'
		);
	wp_register_style( 'reservasgooglefonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
	wp_enqueue_style( 'reservasgooglefonts');
}

add_action('wp_enqueue_scripts', 'reservas_google_fonts');


function reservas_new_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}

		$link = sprintf( '<p class="read-more"><a class="btn btn-default" href="'. esc_url(get_permalink( get_the_ID() )) . '' . '">' . __(' Leia Mais', 'reservas') . '<span class="screen-reader-text"> '. __(' Leia Mais', 'reservas').'</span></a></p>',
		esc_url( get_permalink( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;

}
add_filter( 'excerpt_more', 'reservas_new_excerpt_more' );




/**
*
* Custom Logo in the top menu
*
**/

function reservas_logo() {
	add_theme_support('custom-logo', array(
		'size' => 'reservas-logo',
		'width'                  => 250,
		'height'                 => 50,
		'flex-height'            => true,
		));
}

add_action('after_setup_theme', 'reservas_logo');


/**
*
* New Footer Widgets
*
**/

function reservas_footer_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('Footer Widget left', 'reservas'),
		'id' => 'footer_widget_left',
		'description'   => esc_html__( 'Widgets here will appear in your footer', 'reservas' ),
		'before_widget' => '<div class="footer-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_footer_widget_left_init' );

function reservas_footer_widget_middle_init() {

	register_sidebar( array(
		'name' => esc_html__('Footer Widget middle', 'reservas'),
		'id' => 'footer_widget_middle',
		'description'   => esc_html__( 'Widgets here will appear in your footer', 'reservas' ),
		'before_widget' => '<div class="footer-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_footer_widget_middle_init' );

function reservas_footer_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('Footer Widget right', 'reservas'),
		'id' => 'footer_widget_right',
		'before_widget' => '<div class="footer-widgets">',
		'description'   => esc_html__( 'Widgets here will appear in your footer', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_footer_widget_right_init' );

/**
*
* Top Widgets 
*
**/

function reservas_superior_init() {

	register_sidebar( array(
		'name' => esc_html__('Superior', 'reservas'),
		'id' => 'superior',
		'description'   => esc_html__( 'Widgets here will appear under the header image', 'reservas' ),
		'before_widget' => '<div class="superior">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_superior_init' );

function reservas_ofertas_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('Ofertas Widget left', 'reservas'),
		'id' => 'ofertas_widget_left',
		'before_widget' => '<div class="ofertas">',
		'description'   => esc_html__( 'Widgets here will appear inside oferta´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_ofertas_widget_left_init' );

function reservas_ofertas_widget_middle_init() {

	register_sidebar( array(
		'name' => esc_html__('Ofertas Widget middle', 'reservas'),
		'id' => 'ofertas_widget_middle',
		'before_widget' => '<div class="ofertas">',
		'description'   => esc_html__( 'Widgets here will appear inside oferta´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_ofertas_widget_middle_init' );

function reservas_ofertas_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('Ofertas Widget right', 'reservas'),
		'id' => 'ofertas_widget_right',
		'before_widget' => '<div class="ofertas">',
		'description'   => esc_html__( 'Widgets here will appear inside oferta´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_ofertas_widget_right_init' );

function reservas_membros_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('Membros Widget left', 'reservas'),
		'id' => 'membros_widget_left',
		'before_widget' => '<div class="membros">',
		'description'   => esc_html__( 'Widgets here will appear inside member´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_membros_widget_left_init' );

function reservas_membros_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('Membros Widget right', 'reservas'),
		'id' => 'membros_widget_right',
		'before_widget' => '<div class="membros">',
		'description'   => esc_html__( 'Widgets here will appear inside member´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_membros_widget_right_init' );

function reservas_servicos_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('Servicos Widget left', 'reservas'),
		'id' => 'servicos_widget_left',
		'before_widget' => '<div class="servicos">',
		'description'   => esc_html__( 'Widgets here will appear inside servicos´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_servicos_widget_left_init' );

function reservas_servicos_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('Servicos Widget right', 'reservas'),
		'id' => 'servicos_widget_right',
		'before_widget' => '<div class="servicos">',
		'description'   => esc_html__( 'Widgets here will appear inside servicos´s area', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_servicos_widget_right_init' );


function reservas_top_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('Top Widget left', 'reservas'),
		'id' => 'top_widget_left',
		'before_widget' => '<div class="top-widgets">',
		'description'   => esc_html__( 'Widgets here will appear under the header image', 'reservas' ),
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_top_widget_left_init' );


function reservas_top_widget_middle_init() {

	register_sidebar( array(
		'name' => esc_html__('Top Widget middle', 'reservas'),
		'id' => 'top_widget_middle',
		'description'   => esc_html__( 'Widgets here will appear under the header image', 'reservas' ),
		'before_widget' => '<div class="top-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_top_widget_middle_init' );

function reservas_top_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('Top Widget right', 'reservas'),
		'id' => 'top_widget_right',
		'before_widget' => '<div class="top-widgets">',
		'after_widget' => '</div>',
		'description'   => esc_html__( 'Widgets here will appear under the header image', 'reservas' ),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_top_widget_right_init' );





/**
*
* Bottom Widgets 
*
**/

function reservas_inferior_init() {

	register_sidebar( array(
		'name' => esc_html__('Inferior', 'reservas'),
		'id' => 'inferior',
		'description'   => esc_html__( 'Widgets here will appear under the header image', 'reservas' ),
		'before_widget' => '<div class="inferior">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_inferior_init' );

function reservas_bottom_widget_left_init() {

	register_sidebar( array(
		'name' => esc_html__('bottom Widget left', 'reservas'),
		'id' => 'bottom_widget_left',
		'before_widget' => '<div class="bottom-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'description'   => esc_html__( 'Widgets here will appear above the footer', 'reservas' ),
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_bottom_widget_left_init' );


function reservas_bottom_widget_middle_init() {

	register_sidebar( array(
		'name' => esc_html__('bottom Widget middle', 'reservas'),
		'id' => 'bottom_widget_middle',
		'before_widget' => '<div class="bottom-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'description'   => esc_html__( 'Widgets here will appear above the footer', 'reservas' ),
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_bottom_widget_middle_init' );

function reservas_bottom_widget_right_init() {

	register_sidebar( array(
		'name' => esc_html__('bottom Widget right', 'reservas'),
		'id' => 'bottom_widget_right',
		'before_widget' => '<div class="bottom-widgets">',
		'after_widget' => '</div>',
		'description'   => esc_html__( 'Widgets here will appear above the footer', 'reservas' ),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'reservas_bottom_widget_right_init' );



/**
*
* Admin styles
*
**/
function reservas_load_custom_wp_admin_style( $hook ) {
    if ( 'appearance_page_about-reservas' !== $hook ) {
        return;
    }
    wp_enqueue_style( 'reservas-custom-admin-css', get_template_directory_uri() . '/css/admin.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'reservas_load_custom_wp_admin_style' );



add_action( 'customize_controls_print_styles', 'reservas_customizer_stylesheet' );

/**
*
* Funções customizadas Check-in Connections
*
**/

function verifica_usuario_logado() {
    if (is_user_logged_in()){
        /*return home_url('/bookings');*/
        /*wp_redirect(home_url('/bookings'), 301);*/
        $url= get_site_url() . "/bookings";
        //echo $url;
        //redirect_url($url);
    }
    else{
        //echo "cheguei aqui!";
        /*return home_url('/login');*/
        /* wp_redirect(home_url('/login'), 301);*/
        $url= get_site_url() . "/login";
        //echo $url;
        redirect_url($url);
    }
}

function UrlAtual(){
     $dominio= $_SERVER['HTTP_HOST'];
     $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
     echo $url;
     //return $url;
}

function redirect_url($path)
{
  header("location:".$path);
  exit;
}


function exibe_opcoes_navbar( $items, $args ) {
    if (is_page_template('page_home.php') && $args->theme_location == 'primary') {
        return $items;
    }
    else {
        $items = '<li><a href="'. site_url('index.php') .'">Home</a></li>';
        return $items;
    }

}
add_filter( 'wp_nav_menu_items', 'exibe_opcoes_navbar', 10, 2 );


function add_loginout_link( $items, $args ) {
    //echo $items;
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. wp_logout_url() .'">Sair</a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a href="'. site_url('wp-login.php') .'">Administração</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );



