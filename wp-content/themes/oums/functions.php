<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'migration_setup' );


/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'migration-style', get_stylesheet_uri() );

	/*
	 * Optional: Loads the Internet Explorer specific stylesheet.
	 */
	//wp_enqueue_style( 'migration-ie', get_template_directory_uri() . '/css/ie.css', array( 'migration-style' ), '20121010' );
	//$wp_styles->add_data( 'migration-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );


// Custom Post Types ========================================================
function my_custom_post_officer() {
    $labels = array(
        'name'               => _x( 'Officers', 'post type general name' ),
        'singular_name'      => _x( 'Officer', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Officer' ),
        'edit_item'          => __( 'Edit Officer' ),
        'new_item'           => __( 'New Officer' ),
        'all_items'          => __( 'All Officers' ),
        'view_item'          => __( 'View Officer' ),
        'search_items'       => __( 'Search Officers' ),
        'not_found'          => __( 'No graphics found' ),
        'not_found_in_trash' => __( 'No graphics found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Officers'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'All of the officers',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'officer', $args );
}
add_action( 'init', 'my_custom_post_officer' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'post-thumb', 125, 125, true );



function my_custom_post_member() {
    $labels = array(
        'name'               => _x( 'Members', 'post type general name' ),
        'singular_name'      => _x( 'Member', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Member' ),
        'edit_item'          => __( 'Edit Member' ),
        'new_item'           => __( 'New Member' ),
        'all_items'          => __( 'All Members' ),
        'view_item'          => __( 'View Member' ),
        'search_items'       => __( 'Search Members' ),
        'not_found'          => __( 'No graphics found' ),
        'not_found_in_trash' => __( 'No graphics found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Members'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'All of the Members',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'member', $args );
}
add_action( 'init', 'my_custom_post_member' );

function my_custom_post_alumnus() {
    $labels = array(
        'name'               => _x( 'Alumni', 'post type general name' ),
        'singular_name'      => _x( 'Alumnus', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Alumnus' ),
        'edit_item'          => __( 'Edit Alumnus' ),
        'new_item'           => __( 'New Alumnus' ),
        'all_items'          => __( 'All Alumni' ),
        'view_item'          => __( 'View Alumnus' ),
        'search_items'       => __( 'Search Alumni' ),
        'not_found'          => __( 'No graphics found' ),
        'not_found_in_trash' => __( 'No graphics found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Alumni'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'All of the Alumni',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
    register_post_type( 'alumnus', $args );
}
add_action( 'init', 'my_custom_post_alumnus' );




function remove_unneccesary_fields() {
    remove_meta_box( 'postexcerpt' , 'officer' , 'normal' );
    remove_meta_box( 'commentstatusdiv' , 'officer' , 'normal' );
    remove_meta_box( 'commentsdiv' , 'officer' , 'normal' );

    remove_meta_box( 'postexcerpt' , 'member' , 'normal' );
    remove_meta_box( 'commentstatusdiv' , 'member' , 'normal' );
    remove_meta_box( 'commentsdiv' , 'member' , 'normal' );


    remove_meta_box( 'postexcerpt' , 'alumnus' , 'normal' );
    remove_meta_box( 'commentstatusdiv' , 'alumnus' , 'normal' );
    remove_meta_box( 'commentsdiv' , 'alumnus' , 'normal' );

}
add_action( 'admin_menu' , 'remove_unneccesary_fields' );


add_action('do_meta_boxes', 'remove_thumbnail_box');

function remove_thumbnail_box() {
    remove_meta_box( 'postimagediv','member','side' );
    remove_meta_box( 'postimagediv','alumnus','side' );
}

function remove_pages_editor(){
    remove_post_type_support( 'officer', 'editor' );
    remove_post_type_support( 'member', 'editor' );
    remove_post_type_support( 'alumnus', 'editor' );
}
add_action( 'init', 'remove_pages_editor' );




