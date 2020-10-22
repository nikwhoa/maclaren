<?php
/**
 * karinaboss-template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package karinaboss-template
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'karinaboss_template_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function karinaboss_template_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on karinaboss-template, use a find and replace
		 * to change 'karinaboss-template' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'karinaboss-template', get_template_directory() . '/languages' );

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
				'header-menu' => esc_html__( 'Header Menu', 'karinaboss-template' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'karinaboss-template' ),
				'footer-menu-contacts' => esc_html__( 'Footer Menu Contacts', 'karinaboss-template' ),
				'footer-menu-social' => esc_html__( 'Footer Menu Social', 'karinaboss-template' ),
				'footer-menu-bottom' => esc_html__( 'Footer Menu Bottom', 'karinaboss-template' ),
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
				'karinaboss_template_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'karinaboss_template_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function karinaboss_template_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'karinaboss_template_content_width', 640 );
}
add_action( 'after_setup_theme', 'karinaboss_template_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function karinaboss_template_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'karinaboss-template' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'karinaboss-template' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'karinaboss_template_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function karinaboss_template_scripts() {
	/* reset styles */
//	wp_enqueue_style( 'karinaboss-reset', get_template_directory_uri().'/assets/css/reset.min.css', array(), _S_VERSION );

	/* main template styles */
//	wp_enqueue_style( 'karinaboss-template-style', get_template_directory_uri().'/assets/css/style.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'karinaboss-template-style', get_template_directory_uri().'/assets/css/clientlib-site.min.css', array(), _S_VERSION );

	/* template styles */
//	wp_enqueue_style( 'karinaboss-header-style', get_template_directory_uri().'/assets/css/header.min.css', array(), _S_VERSION );

	/* file with js scripts */
//	wp_enqueue_script( 'karinaboss-template-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'karinaboss-template-script', get_template_directory_uri() . '/assets/js/clientlib-site.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'karinaboss_template_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Register a custom post type  */

add_action('init', 'models_init');
function models_init(){
	register_post_type('models', array(
		'labels'             => array(
			'name'               => 'MODELS', // Основное название типа записи
			'singular_name'      => 'MODELS', // отдельное название записи типа slider
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую MODELS',
			'edit_item'          => 'Редактировать MODELS',
			'new_item'           => 'Новая MODELS',
			'view_item'          => 'Посмотреть MODELS',
			'search_items'       => 'Найти MODELS',
			'not_found'          =>  'MODELS не найдено',
			'not_found_in_trash' => 'В корзине MODELS не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'MODELS'


		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'show_in_rest'       => false,
//		'menu_position'      => 4,
//		'taxonomies' => array('post_tag'),
		'menu_icon'          => 'dashicons-screenoptions',
		'supports'           => array('title','thumbnail', 'page-attributes')
	) );
}


/* Register a custom post type  */

function wpdocs_codex_slider_init() {
	$labels = array(
		'name'                  => _x( 'Slides', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Slider', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Slides', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Slides', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Slide', 'textdomain' ),
		'new_item'              => __( 'New Slide', 'textdomain' ),
		'edit_item'             => __( 'Edit Slide', 'textdomain' ),
		'view_item'             => __( 'View Slide', 'textdomain' ),
		'all_items'             => __( 'All Slides', 'textdomain' ),
		'search_items'          => __( 'Search Slides', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Slide:', 'textdomain' ),
		'not_found'             => __( 'No slides found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No slides found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Slider Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon'          => 'dashicons-slides',
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'wpdocs_codex_slider_init' );

/* Image size for slider on the main page */
add_image_size( 'slider_image', 750, 1360, true);



/* Register a custom post type  */

function wpdocs_codex_mclaren_posts_init() {
	$labels = array(
		'name'                  => _x( 'McLaren Posts', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'McLaren Posts', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'McLaren Posts', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'McLaren Posts', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Slide', 'textdomain' ),
		'new_item'              => __( 'New Slide', 'textdomain' ),
		'edit_item'             => __( 'Edit Slide', 'textdomain' ),
		'view_item'             => __( 'View Slide', 'textdomain' ),
		'all_items'             => __( 'All McLaren Posts', 'textdomain' ),
		'search_items'          => __( 'Search McLaren Posts', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Slide:', 'textdomain' ),
		'not_found'             => __( 'No McLaren Posts found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No McLaren Posts found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'McLaren Posts Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'McLaren Posts archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into mclaren_posts', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this mclaren_posts', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter mclaren_postss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'McLaren Posts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'McLaren Posts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'mclaren_posts' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
		'menu_icon'          => 'dashicons-car',
	);

	register_post_type( 'mclaren_posts', $args );
}

add_action( 'init', 'wpdocs_codex_mclaren_posts_init' );

/* Register a custom post type  */

function wpdocs_codex_blog_posts_init() {
	$labels = array(
		'name'                  => _x( 'Blog', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Blog', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Blog', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Blog', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Slide', 'textdomain' ),
		'new_item'              => __( 'New Blog Post', 'textdomain' ),
		'edit_item'             => __( 'Edit Blog Post', 'textdomain' ),
		'view_item'             => __( 'View Blog Post', 'textdomain' ),
		'all_items'             => __( 'All Blog Posts', 'textdomain' ),
		'search_items'          => __( 'Search Blog Posts', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Blog:', 'textdomain' ),
		'not_found'             => __( 'No Blog Posts found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Blog Posts found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Blog Posts Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Blog Posts archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into blog_posts', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this blog_posts', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter blog_posts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Blog Posts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Blog Posts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'blog_posts' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
		'menu_icon'          => 'dashicons-welcome-write-blog',
	);

	register_post_type( 'blog_posts', $args );
}

add_action( 'init', 'wpdocs_codex_blog_posts_init' );


## Добавляем блоки в основную колонку на страницах постов и пост. страниц
add_action('add_meta_boxes', 'myplugin_add_custom_box');
function myplugin_add_custom_box(){
	$screens = array( 'post', 'page', 'mclaren_posts' );
	add_meta_box( 'myplugin_sectionid', 'Название мета блока', 'myplugin_meta_box_callback', $screens );
}

// HTML код блока
function myplugin_meta_box_callback( $post, $meta ){
	$screens = $meta['args'];

	// Используем nonce для верификации
	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );

	// значение поля
	$value = get_post_meta( $post->ID, 'my_meta_key', 1 );

	// Поля формы для введения данных
	echo '<label for="myplugin_new_field">' . __("Description for this field", 'myplugin_textdomain' ) . '</label> ';
	echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="'. $value .'" size="25" />';
}

## Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'myplugin_save_postdata' );
function myplugin_save_postdata( $post_id ) {
	// Убедимся что поле установлено.
	if ( ! isset( $_POST['myplugin_new_field'] ) )
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename(__FILE__) ) )
		return;

	// если это автосохранение ничего не делаем
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return;

	// проверяем права юзера
	if( ! current_user_can( 'edit_post', $post_id ) )
		return;

	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$my_data = sanitize_text_field( $_POST['myplugin_new_field'] );

	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'my_meta_key', $my_data );
}


function wpdocs_channel_nav_class( $classes, $item, $args ) {

	if ( 'footer-menu' === $args->theme_location ) {
		$classes[] = "copy-02 link-item";
	}
	if ( 'footer-menu-contacts' === $args->theme_location ) {
		$classes[] = "copy-02 contact-link";
	}
	if ( 'footer-menu-social' === $args->theme_location ) {
		$classes[] = "copy-02 contact-link";
	}
	if ( 'footer-menu-bottom' === $args->theme_location ) {
		$classes[] = "cta footer-link";
	}

	return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );