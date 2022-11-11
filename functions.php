<?php
/**
 * ivanna.ang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ivanna.ang
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ivang_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ivanna.ang, use a find and replace
		* to change 'ivang' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ivang', get_template_directory() . '/languages' );

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
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ivang' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ivang_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ivang_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ivang_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ivang_content_width', 640 );
}
add_action( 'after_setup_theme', 'ivang_content_width', 0 );

/**
 * Image Size Crops
 */
if ( ! function_exists( 'ivang_add_image_size' ) ) :
	function ivang_add_image_size() {
		add_image_size( 'iv_blog', 300, 415 , true );
	}
endif;
add_action( 'after_setup_theme', 'ivang_add_image_size' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ivang_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ivang' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ivang' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ivang_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ivang_scripts() {

	wp_enqueue_style( 'ivang-look-bootstrap', get_template_directory_uri() . '/assets/look/css/bootstrap.min.css', array(), _S_VERSION );
	// wp_enqueue_style( 'ivang-look-tailwind', get_template_directory_uri() . '/assets/css/output.css', array(), _S_VERSION );
	wp_enqueue_style( 'ivang-look-main', get_template_directory_uri() . '/assets/look/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'ivang-look-animations', get_template_directory_uri() . '/assets/look/css/animations.css', array(), _S_VERSION );
	wp_enqueue_style( 'ivang-look-fonts', get_template_directory_uri() . '/assets/look/css/fonts.css', array(), _S_VERSION );
	wp_enqueue_style('dashicons');
	wp_enqueue_style( 'ivang-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'ivang-jquery', get_template_directory_uri() . '/assets/look/js/vendor/jquery-3.1.0.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'ivang-modernizr', get_template_directory_uri() . '/assets/look/js/vendor/modernizr-2.6.2.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'ivang-compressed', get_template_directory_uri() . '/assets/look/js/compressed.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ivang-main', get_template_directory_uri() . '/assets/look/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ivang-flickity', get_template_directory_uri() . '/assets/flickity/flickity.pkgd.min.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'ivang_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Post Type
 */
require get_template_directory() . '/inc/post-type-course.php';
require get_template_directory() . '/inc/post-type-portofolio.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Option Setting
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Link Active
function link_active($link) {
	global $pagename;
	$active = '';
	$url = explode('/', $link);

	if (get_query_var( 'cat' ) || is_singular('post')) {
		// Category => Blog
		$active = in_array("blog", $url) ? 'active' : '';
	} elseif (is_singular('works')) {
		// CPT => work
		$active = in_array("latest-works", $url) ? 'active' : '';
	} elseif (is_front_page()) {
		// Homepage
		$active = $link ==  home_url( '/' ) ? 'active' : '';
	} elseif ($pagename) {
		// Default
		$active = $link == home_url( $pagename . '/' ) ? 'active' : '';
	} 

	return $active;
}

// Trim
function iv_blurb($trim = 20, $contents = null) {
	global $post;

	if ($contents) {
		$content = strip_tags($contents);
	} else {
		$content = strip_tags($post->post_content);
	}

	if ($content) {
		$old_arr = array_map('trim', explode(' ', $content));
		$new_arr = array_slice($old_arr, 0, $trim);

		$content = implode(' ',$new_arr).' ...';
		return $content;
	}
	return '';
}  