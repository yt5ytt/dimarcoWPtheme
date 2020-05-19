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

  ?>
    <div class="container-fluid bg-dark">
      <div class="container bg-light">
        <div class="row">
          <div class="col-xs-12 col-sm-8">
            Ovo je glavni container
          </div>
          <div class="col-xs-12 col-sm-4">
            Ovo bi trebalo da bude sidebar.
          </div>
        </div>
      </div>
    </div>


  <?php

  get_footer();
 ?>
