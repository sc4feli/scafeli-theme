<!doctype html>
<html lang="pt_BR">
  
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1a2737567a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/aos.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.min.css">

  </head>
  <?php wp_head(); ?>
  <body <?php body_class(); ?>>

  <header>
      <div class="container text-center">
      <nav class="navbar navbar-expand-md navbar-dark">

     <a class="navbar-brand" href="<?php bloginfo('home') ?>"><img src="<?php bloginfo('template_url') ?>/img/logo-scafeli.svg" alt=""></a>


     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <?php
     wp_nav_menu([
       'menu'            => 'top',
       'theme_location'  => 'top',
       'container'       => 'div',
       'container_id'    => 'bs4navbar',
       'container_class' => 'collapse navbar-collapse',
       'menu_id'         => false,
       'menu_class'      => 'navbar-nav ml-auto',
       'depth'           => 2,
       'fallback_cb'     => 'bs4navwalker::fallback',
       'walker'          => new bs4navwalker()
     ]);
     ?>

    </nav>
      </div>
    </header>