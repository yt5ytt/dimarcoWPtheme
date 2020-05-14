<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title>DiMarco - <?php the_title(); ?></title>
  </head>
  <body <?php body_class(); ?>>

    <?php wp_nav_menu(array('theme_location' => 'topMenu')); ?>
