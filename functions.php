<?php
// ======================= Стили и скрипты =============================
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
// =====================================================================


// ================== Регистрация места для меню =======================

add_filter('script_loader_tag', 'add_module_to_main_js', 10, 3);
function add_module_to_main_js($tag, $handle, $src) {
   if ($handle === 'main-js') {
      return '<script type="module" src="'.esc_url($src). '"></script>';
   }
   return $tag;
}
// Регистрация мест для меню
function landing_setup() {
   add_theme_support('title-tag');
   add_theme_support('website-logo');
   register_nav_menus(array(
      'header-menu' => 'Меню в шапке' // 'header-menu' — это ID, по которому мы будем вызывать его в коде
   ));
}
add_action('after_setup_theme', 'landing_setup');

// Добавляем класс header__item ко всем <li> в меню
function filter_header_menu_item_class($classes, $item, $args) {
   if (isset($args->theme_location) && $args->theme_location === 'header-menu') {
      $classes[] = 'header__item'; // Добавляем твой класс в массив классов WP
   }
   return $classes;
}
add_filter('nav_menu_css_class', 'filter_header_menu_item_class', 10, 3);

// =====================================================================

