<?php 

function accurate_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Roboto+Slab:wght@700&display=swap');
  wp_enqueue_style('accurate_main_styles', get_theme_file_uri('style.css'));
  wp_enqueue_style('accurate_styles', get_theme_file_uri('main.css'));
  wp_enqueue_script( 'accurate_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', false);
}
add_action('wp_enqueue_scripts', 'accurate_files');

function accurate_features() {
  add_theme_support( "wp-block-styles" );
  add_theme_support( 'title-tag' );
  add_theme_support( 'align-wide' );
}

add_action( 'after_setup_theme', 'accurate_features');

function accurate_theme_menus() {
  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu'
    )
    );
}
add_action( 'init', 'accurate_theme_menus');


function add_comment_to_body_open() {
  printf( "<!-- THIS SHOULD RENDER AFTER THE BODY TAG OPENS --" );
}
add_action( 'wp_body_open', 'add_comment_to_body_open' );

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );