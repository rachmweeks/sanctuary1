<?php
/**
 * sanctuary1 functions and definitions
 *
 * @package sanctuary1
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'sanctuary1_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sanctuary1_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on sanctuary1, use a find and replace
	 * to change 'sanctuary1' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sanctuary1', get_template_directory() . '/languages' );

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
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' =>('Main'),
	) );
	
	

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sanctuary1_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // sanctuary1_setup
add_action( 'after_setup_theme', 'sanctuary1_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function sanctuary1_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sanctuary1' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'sanctuary1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sanctuary1_scripts() {
	wp_enqueue_style( 'sanctuary1-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sanctuary1-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	/* FONTS HERE */
	wp_enqueue_style( 'arvo', 'http://fonts.googleapis.com/css?family=Arvo:400,700', false, false, 'all' );
	wp_enqueue_style( 'open sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,700', false, false, false );
	wp_enqueue_style( 'open sans condensed', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300', false, false, false );
	wp_enqueue_style( 'font awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_script( 'sanctuary1-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sanctuary1_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


/*
ADDED CUSTOM POST TYPES
*/

add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
	register_post_type( 'studio_cabin', 
		array(
			'labels' => array(
				'name' => __( 'Studio Cabins' ),
				'singular_name' => __( 'Studio Cabin' ),
				'add_new' => __( 'Add New Cabin' ),
				'add_new_item' => __( 'New Studio Cabin' )
				
			'supports' => array( 'title', 'editor', 'custom-fields' ),
	
			),
			'public' => true,
		)
	);
}




