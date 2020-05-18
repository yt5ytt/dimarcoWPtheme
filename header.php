<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>DiMarco - <?php the_title(); ?></title>
  </head>
  <body <?php body_class(); ?>>

    <?php wp_nav_menu(array('theme_location' => 'topMenu')); ?>
