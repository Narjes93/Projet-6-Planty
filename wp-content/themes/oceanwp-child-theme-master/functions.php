<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function ajouter_admin_menu( $items, $args ) {
    if ( $args->theme_location == 'main_menu' && is_user_logged_in() ) {
        $admin_link = '<li id="menu-item-264"><a class="text-wrap" href="' . admin_url( admin_url() ) . '">Admin</a></li>';
        
        $end_tags_positions = [];
        preg_match_all('/<\/li>/', $items, $end_tags_positions, PREG_OFFSET_CAPTURE);

        $middle_position = ceil( count( $end_tags_positions[0] ) / 2 );

        $position = $end_tags_positions[0][$middle_position - 1][1];

        $items = substr_replace( $items, $admin_link, $position + 5, 0 );
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_admin_menu', 10, 2 );

