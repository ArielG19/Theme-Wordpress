<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="">

    <title>Hello, world!</title>

    <!-- Caragamos CSS con wordpress -->
    <?php wp_head() ?>

  </head>
  <body>

    <!--Menu-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!--Cargamos nuestro menu-->
              <?php
                wp_nav_menu( array(
                  'theme_location'    => 'menu-principal', //nombre del menu con el que lo registramos
                  'depth'             => 2,
                  'container'         => 'div', //inicio de menu, lo siguiente son sus clases.
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'navbarNavDropdown',
                  'menu_class'        => 'nav navbar-nav ml-auto',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(), //configuraciones al archivo navbar.php
                ) );
              ?>
              <!--Cargamos nuestro menu-->
        </div>
      </nav>
      <!--Menu-->

      <!--Blog-->
      <div class="container">
        <h2 class="my-5 text-center text-primary">Mis Post</h2>
        <hr>
