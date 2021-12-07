<?php 

if ( ! function_exists( 'website_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since HQonline
*/
function website_setup() 
{ 
	
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'website' ),
		'secondary' => __( 'Secondary Menu', 'website' ),
		'footer_moreinfo' => __( 'Footer Meer informatie', 'website' ),
		'footer_services' => __( 'Footer Diensten', 'website' )
	) );
	
	if ( ! isset ( $content_width) )
    $content_width = 1200;

	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_theme_support( 'custom-background' );
	add_post_type_support( 'page', 'excerpt' );
	

	
}
endif; // website setup
add_action( 'after_setup_theme', 'website_setup' );


/* Adding breadcrubs */
function the_breadcrumb() {
	if (!is_home()) {
		echo '<span class="breadcrumbs"><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a> / ";

			echo the_title();
	
		echo '</span>';
	}
}


/* Posibility to add a custom logo */
function website_custom_logo_setup() {
    $defaults = array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'website_custom_logo_setup' );


add_theme_support( 'post-thumbnails' ); 


/* Create post type teammembers */
function create_post_type() {
	$supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => 'Team',
        'singular_name' => 'Team',
        'menu_name' => 'Teamleden',
        'name_admin_bar' => 'Team',
        'add_new' => 'Toevoegen',
        'add_new_item' => 'Voeg teamlid toe',
        'new_item' => 'Teamlid',
        'edit_item' => 'Bewerk teamlid',
        'view_item' => 'Bekijk teamlid',
        'all_items' => 'Alle teamleden',
        'search_items' => 'Zoek teamlid',
        'not_found' => 'Geen teamleden gevonden',
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-tag',
        'hierarchical' => false,
		'taxonomies'  => array( 'category' ),
    );
    register_post_type('team', $args);
}
add_action('init', 'create_post_type');

/* Create post type specialities */
function create_post_type2() {
	$supports = array(
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
        'post-formats',
    );
    $labels = array(
        'name' => 'Vakgebied',
        'singular_name' => 'Vakgebied',
        'menu_name' => 'Vakgebieden',
        'name_admin_bar' => 'Vakgebied',
        'add_new' => 'Toevoegen',
        'add_new_item' => 'Voeg vakgebied toe',
        'new_item' => 'Teamlid',
        'edit_item' => 'Bewerk vakgebied',
        'view_item' => 'Bekijk vakgebied',
        'all_items' => 'Alle vakgebieden',
        'search_items' => 'Zoek vakgebied',
        'not_found' => 'Geen vakgebieden gevonden',
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'vakgebieden'),
        'has_archive' => true,
        'menu_icon' => 'dashicons-tag',
        'hierarchical' => false,
		'taxonomies'  => array( 'category' ),
    );
    register_post_type('vakgebied', $args);
}
add_action('init', 'create_post_type2');



/* Optionpage*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Algemene instellingen',
		'menu_title'	=> 'Algemeen',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header instellingen',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer instellingen',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
}
?>