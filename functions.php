<?php
  function dimarco_scripts(){
    wp_enqueue_style('dimarcoWPtheme', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_script('dimarcoWPskripta1', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('dimarcoWPskripta2', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.0.0', 'true');
    wp_enqueue_script('dimarcoWPskripta3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(), '1.0.0', 'true');
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
