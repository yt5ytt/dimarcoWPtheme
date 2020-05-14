<?php
  function dimarco_scripts(){
    wp_enqueue_style('dimarcoWPtheme', get_template_directory_uri() . '/css/dimarco.css', array(), '1.0.0', 'all');
    wp_enqueue_script('dimarcoWPskripta', get_template_directory_uri() . '/js/dimarco.js', array(), '1.0.0', 'true');
  }

  add_action('wp_enqueue_scripts', 'dimarco_scripts', );

  function dimarco_menus(){

    add_theme_support('menus');

    register_nav_menu('topMenu', 'Top Navigation');
    register_nav_menu('mainMenu', 'Main Navigation');
    register_nav_menu('sidebarMenu', 'Sidebar Navigation');
    register_nav_menu('footerMenu', 'Footer Navigation');
  }

  add_action('init', 'dimarco_menus');

?>
