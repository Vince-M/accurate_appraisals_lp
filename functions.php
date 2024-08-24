<?php 

function accurate_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Roboto+Slab:wght@700&display=swap');
  wp_enqueue_style('accurate_main_styles', get_theme_file_uri('style.css'));
  wp_enqueue_style('accurate_styles', get_theme_file_uri('main.css'));
}
add_action('wp_enqueue_scripts', 'accurate_files');

?>