<!doctype html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-grid.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- FOR PLUGINS TO LINK THEIR RESOURCES -->
    <?php wp_head(); ?>

  </head>

  <body>

    <div class="container">

        <header class="blog-header py-3">

            <div class="row">
            
                <div class="col-12">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/signature.png" alt="">
                </div>

                <div class="col-12" id="site-title">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                </div>
            
            <div class="col-12">
                <p><?php bloginfo( 'description' ); ?></p>
            </div>

            </div>

            <div class="nav-scroller py-1 mb-2">

                <nav class="nav d-flex">

                    <a class="p-2"
                        href="http://jordanalamilla.com"
                        target="_blank">Work</a>

                    <a class="p-2"
                        href="http://github.com/jordanalamilla"
                        target="_blank">Github</a>

                    <a class="p-2"
                        href="http://instagram.com/jordanalamilla"
                        target="_blank">Instagram</a>

                </nav>

            </div>

        </header>