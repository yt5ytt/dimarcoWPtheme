<?php
  get_header();

  if(have_posts()):
    while(have_posts()): the_post();
?>
      <h1><?php the_title(); ?></h1>
<?php
      the_content();
    endwhile;
  endif;

  wp_nav_menu(array('theme_location' => 'mainMenu'));

  get_footer();
 ?>
