<?php
function cns_enqueue_style() {
  wp_enqueue_script('jquery');

    // load active styles
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/style.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/ie.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/print.css' ), false );
    wp_enqueue_style( 'theme-stylesheet', get_theme_file_uri( '/stylesheets/screen.css' ), false );

    if( is_home() ){
      wp_enqueue_script( 'theme-stylesheet', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), true );
      wp_enqueue_style( 'slick', trailingslashit( get_template_directory_uri() ) . '/slick/slick.css', false );
      wp_enqueue_style( 'slick-theme', trailingslashit( get_template_directory_uri() ) . '/slick/slick-theme.css', false );

      // Script for Dynamic dropdown menu for make, model, etc.
      wp_enqueue_script( 'dynamic-search', get_template_directory_uri() . '/assets/js/cns-dynamicsearch.js', array( 'jquery' ), true );
      global $wp_query;
      wp_localize_script( 'cns-dynamicsearch', 'cnsdynamicsearch', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
      ));

    }

}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

// Removes admin bar
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Creates FET Listing custom post type
add_action( 'init', 'fet_listing_post_type' );
function fet_listing_post_type() {
  register_post_type( 'fet_listing',
    array(
      'labels' => array(
        'name' => __( 'Listings' ),
        'singular_name' => __( 'Listing' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

// Creates a custom taxonomy for equipment, etc. in the FET Listing CPT
function equipment_init() {
  // create a new taxonomy
  register_taxonomy(
    'fet_equipment',
    'fet_listing',
    array(
      'label' => __( 'Equipment' ),
      'rewrite' => array( 'slug' => 'equipment' ),
      'hierarchical'  => true,
    )
  );
}
add_action( 'init', 'equipment_init' );

?>
