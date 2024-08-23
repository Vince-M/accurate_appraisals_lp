<?php 

function accurate_files() {

  
  wp_enqueue_style('accurate_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style('accurate_styles', get_theme_file_uri('style.css'));
}
add_action('wp_enqueue_scripts', 'accurate_files');

?>