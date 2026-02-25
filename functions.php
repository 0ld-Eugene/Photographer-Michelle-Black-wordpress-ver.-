<?php

function photographer_theme_assets() {

   wp_enqueue_style(
      'main-style',
      get_stylesheet_uri(),
      array(),
      filemtime(get_stylesheet_directory(). '/style.css')
   );

   wp_enqueue_script(
      'main-js',
      get_template_directory_uri(). '/js/main.js',
      array(),
      filemtime(get_template_directory(). '/js/main.js'),
      true
   );
}
add_action('wp_enqueue_scripts', 'photographer_theme_assets');


add_filter('script_loader_tag', 'add_module_to_main_js', 10, 3);
function add_module_to_main_js($tag, $handle, $src) {
   if ($handle === 'main-js') {
      return '<script type="module" src="'.esc_url($src). '"></script>';
   }
   return $tag;
}