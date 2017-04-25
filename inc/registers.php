<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

/**
 * Register text domain
 */
add_action( 'after_setup_theme', 'aksvb_theme_local' );
function aksvb_theme_local(){
	load_theme_textdomain( 'aksvb', get_template_directory() . '/languages' );
}

/**
 * Registering main menu
 */
register_nav_menu( 'main_navigation', __( 'The main top header menu', 'aksvb' ) );

/**
 * Register CPT Slideshow
 *
 * @since  1.0
 * @author Geoffrey Crofte
 */
add_action( 'init', 'aksvb_register_slideshow_cpt' );
function aksvb_register_slideshow_cpt() {
	$labels = array(
		'name'                 => __( 'Slideshows', 'aksvb' ),
		'singular_name'        => __( 'Slideshow', 'aksvb' ),
		'menu_name'            => __( 'Slideshow', 'aksvb' ),
		'all_items'            => __( 'Slideshows', 'aksvb' ),
		'add_new'              => __( 'Add new slideshow', 'aksvb' ),
		'add_new_item'         => __( 'Add new slideshow', 'aksvb' ),
		'edit_item'            => __( 'Edit Slideshow', 'aksvb' ),
		'new_item'             => __( 'New Slideshow', 'aksvb' ),
		'view_item'            => __( 'View Slideshow', 'aksvb' ),
		'search_items'         => __( 'Search Slideshow', 'aksvb' ),
		'not_found'            => __( 'Nothing found', 'aksvb' ),
		'not_found_in_trash'   => __( 'Nothing found in Trash', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent slideshow', 'aksvb' ),
		'featured_image'       => __( 'Main Image', 'aksvb' ),
		'set_featured_image'   => __( 'Set Main Image', 'aksvb' ),
		'remove_featured_image'=> __( 'Remove Main Image', 'aksvb' ),
		'use_featured_image'   => __( 'Use Main Image', 'aksvb' ),
		'archives'             => __( 'Archives', 'aksvb' ),
		'insert_into_item'     => __( 'Insert into slideshow', 'aksvb' ),
		'uploaded_to_this_item'=> __( 'Uploaded to this slideshow', 'aksvb' ),
		'filter_items_list'    => __( 'Filters Slideshows List', 'aksvb' ),
		'items_list_navigation'=> __( 'Slideshow list navigation', 'aksvb' ),
		'items_list'           => __( 'Slideshow List', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent slideshow', 'aksvb' )
	);

	$args = array(
		'label'              => __( 'Slideshows', 'aksvb' ),
		'labels'             => $labels,
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => false,
		'rest_base'          => 'slideshow',
		'has_archive'        => false,
		'show_in_menu'       => true,
		'exclude_from_search'=> true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'hierarchical'       => false,
		'rewrite'            => array( 'slug' => 'slideshow', 'with_front' => true ),
		'query_var'          => 'slideshow',
		'menu_position'      => 25,'menu_icon' => 'dashicons-images-alt',
		'supports'           => array( 'title', 'thumbnail' )
	);

	register_post_type( 'slideshow', $args );
}

/**
 * Register CPT Licornes
 *
 * @since  1.0
 * @author Geoffrey Crofte
 */
add_action( 'init', 'aksvb_register_licornes_cpt' );
function aksvb_register_licornes_cpt() {
	$labels = array(
		'name'                 => __( 'Licornes', 'aksvb' ),
		'singular_name'        => __( 'Licorne', 'aksvb' ),
		'menu_name'            => __( 'Licornes', 'aksvb' ),
		'all_items'            => __( 'Licornes', 'aksvb' ),
		'add_new'              => __( 'Add new Licorne', 'aksvb' ),
		'add_new_item'         => __( 'Add new Licorne', 'aksvb' ),
		'edit_item'            => __( 'Edit Licorne', 'aksvb' ),
		'new_item'             => __( 'New Licorne', 'aksvb' ),
		'view_item'            => __( 'View Licorne', 'aksvb' ),
		'search_items'         => __( 'Search Licorne', 'aksvb' ),
		'not_found'            => __( 'Nothing found', 'aksvb' ),
		'not_found_in_trash'   => __( 'Nothing found in Trash', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent Licorne', 'aksvb' ),
		'featured_image'       => __( 'Main Image', 'aksvb' ),
		'set_featured_image'   => __( 'Set Main Image', 'aksvb' ),
		'remove_featured_image'=> __( 'Remove Main Image', 'aksvb' ),
		'use_featured_image'   => __( 'Use Main Image', 'aksvb' ),
		'archives'             => __( 'Archives', 'aksvb' ),
		'insert_into_item'     => __( 'Insert into Licorne', 'aksvb' ),
		'uploaded_to_this_item'=> __( 'Uploaded to this Licorne', 'aksvb' ),
		'filter_items_list'    => __( 'Filters Licornes List', 'aksvb' ),
		'items_list_navigation'=> __( 'Licorne list navigation', 'aksvb' ),
		'items_list'           => __( 'Licorne List', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent Licorne', 'aksvb' )
	);

	$args = array(
		'label'              => __( 'Licornes', 'aksvb' ),
		'labels'             => $labels,
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => false,
		'rest_base'          => 'licorne',
		'has_archive'        => false,
		'show_in_menu'       => true,
		'exclude_from_search'=> true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'hierarchical'       => false,
		'rewrite'            => array( 'slug' => 'licorne', 'with_front' => true ),
		'query_var'          => 'licorne',
		'menu_position'      => 25,'menu_icon' => 'dashicons-carrot',
		'supports'           => array( 'title', /*'editor',*/ 'thumbnail' )
	);

	register_post_type( 'licorne', $args );
}

/**
 * Register CPT Dragons
 *
 * @since  1.0
 * @author Geoffrey Crofte
 */
add_action( 'init', 'aksvb_register_dragons_cpt' );
function aksvb_register_dragons_cpt() {
	$labels = array(
		'name'                 => __( 'Dragons', 'aksvb' ),
		'singular_name'        => __( 'Dragon', 'aksvb' ),
		'menu_name'            => __( 'Dragons', 'aksvb' ),
		'all_items'            => __( 'Dragons', 'aksvb' ),
		'add_new'              => __( 'Add new Dragon', 'aksvb' ),
		'add_new_item'         => __( 'Add new Dragon', 'aksvb' ),
		'edit_item'            => __( 'Edit Dragon', 'aksvb' ),
		'new_item'             => __( 'New Dragon', 'aksvb' ),
		'view_item'            => __( 'View Dragon', 'aksvb' ),
		'search_items'         => __( 'Search Dragon', 'aksvb' ),
		'not_found'            => __( 'Nothing found', 'aksvb' ),
		'not_found_in_trash'   => __( 'Nothing found in Trash', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent Dragon', 'aksvb' ),
		'featured_image'       => __( 'Main Image', 'aksvb' ),
		'set_featured_image'   => __( 'Set Main Image', 'aksvb' ),
		'remove_featured_image'=> __( 'Remove Main Image', 'aksvb' ),
		'use_featured_image'   => __( 'Use Main Image', 'aksvb' ),
		'archives'             => __( 'Archives', 'aksvb' ),
		'insert_into_item'     => __( 'Insert into Dragon', 'aksvb' ),
		'uploaded_to_this_item'=> __( 'Uploaded to this Dragon', 'aksvb' ),
		'filter_items_list'    => __( 'Filters Dragons List', 'aksvb' ),
		'items_list_navigation'=> __( 'Dragon list navigation', 'aksvb' ),
		'items_list'           => __( 'Dragon List', 'aksvb' ),
		'parent_item_colon'    => __( 'Parent Dragon', 'aksvb' )
	);

	$args = array(
		'label'              => __( 'Dragons', 'aksvb' ),
		'labels'             => $labels,
		'description'        => '',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_rest'       => false,
		'rest_base'          => 'dragon',
		'has_archive'        => false,
		'show_in_menu'       => true,
		'exclude_from_search'=> true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'hierarchical'       => false,
		'rewrite'            => array( 'slug' => 'dragon', 'with_front' => true ),
		'query_var'          => 'dragon',
		'menu_position'      => 25,'menu_icon' => 'dashicons-carrot',
		'supports'           => array( 'title', /*'editor',*/ 'thumbnail' )
	);

	register_post_type( 'dragon', $args );
}

