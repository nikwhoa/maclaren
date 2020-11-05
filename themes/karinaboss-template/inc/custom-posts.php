<?php

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

/* Register a custom post type  */

function wpdocs_codex_products_init() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Product', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Products', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Products', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add Product', 'textdomain' ),
		'add_new_item'          => __( 'Add New Product', 'textdomain' ),
		'new_item'              => __( 'New Product', 'textdomain' ),
		'edit_item'             => __( 'Edit Product', 'textdomain' ),
		'view_item'             => __( 'View Products', 'textdomain' ),
		'all_items'             => __( 'All Products', 'textdomain' ),
		'search_items'          => __( 'Search Product', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'textdomain' ),
		'not_found'             => __( 'No Products found.', 'textdomain' ),
		'not_found_in_trash'    => __( 'No Products found in Trash.', 'textdomain' ),
		'featured_image'        => _x( 'Products Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'              => _x( 'Products archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'      => _x( 'Insert into products', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this products', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'     => _x( 'Filter products list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation' => _x( 'Products list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'            => _x( 'Products list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'products' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'taxonomies'         => array('post_tag'),
		'supports'           => array('page-attributes', 'title', 'editor', 'author', 'thumbnail'),
		'menu_icon'          => 'dashicons-cart',
	);

	register_post_type( 'products', $args );
}

add_action( 'init', 'wpdocs_codex_products_init' );

