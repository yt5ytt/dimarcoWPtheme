<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <title>DiMarco - <?php the_title(); ?></title>
  </head>
  <body <?php body_class(); ?>>

    <div class="row border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <?php
              if(@!$_SESSION['email']){
                echo 'Da biste naručili, morate se ulogovati';
              }
             ?>
          </div>
          <div class="col-xs-12 col-sm-8">

            <nav class="navbar navbar-expand-sm navbar-light">

                <?php
                  if(@!$_SESSION['email']){
                    wp_nav_menu(
                      array(
                        'theme_location' => 'topMenu',
                        'menu_class' => 'navbar-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'container_id' => 'navbarTogglerDemo03',
                        'before' => '<li class="nav-item"><a class="nav-link"',
                        'after' => '</a></li>'
                      )
                    );
                  }else{
                    wp_nav_menu(
                      array(
                        'theme_location' => 'mainMenu',
                        'menu_class' => 'navbar-nav',
                        'container_class' => 'collapse navbar-collapse justify-content-end',
                        'container_id' => 'navbarTogglerDemo03',
                        'before' => '<li class="nav-item"><a class="nav-link"',
                        'after' => '</a></li>'
                      )
                    );
                  }
                 ?>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>

          </div>
        </div>

      </div>


    </div>

    <?php //wp_nav_menu(array('theme_location' => 'topMenu')); ?>
