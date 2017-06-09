<?php
function cns_enqueue_style() {
  wp_enqueue_script('jquery');

    // load active styles
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/style.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/ie.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/print.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/screen.css' ), false );

}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

// Removes admin bar
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

?>
