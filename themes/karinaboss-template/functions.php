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
	wp_enqueue_style( 'karinaboss-template-second-style', get_template_directory_uri().'/assets/css/style.min.css', array(), _S_VERSION );

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

/* Custom posts file */
require get_template_directory() . '/inc/custom-posts.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



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



if ( ! function_exists( 'display_related_products' ) ) {

	function display_related_products($post_tag) {
		?>
		<div class="related-products">

			<!-- simple WP_Query -->
			<?php
			$args = array(
				'post_type' => 'products',
				'tag' => $post_tag, // Here is where is being filtered by the tag you want
				'orderby' => 'id',
				'order' => 'ASC'
			);

			$related_products = new WP_Query( $args );
			?>

			<?php while ( $related_products -> have_posts() ) : $related_products -> the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="related-product">
					<?php if( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'full', array( 'class' => 'related-product-img', 'alt' => get_the_title() ) ); ?>
					<?php endif; ?>
				</a>

			<?php endwhile; wp_reset_query(); ?>

		</div>
		<?php
	}
}