<?php
function cns_enqueue_style() {
  wp_enqueue_script('jquery');
    if ( is_child_theme() ) {
      // load parent stylesheet first if this is a child theme
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );

}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

// Removes admin bar
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

?>
