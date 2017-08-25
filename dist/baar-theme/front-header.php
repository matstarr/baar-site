<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet'>
    <?php wp_head(); ?>
</head>
<body class="sparky bootstrap home">

  <header id="cover-top" class="fullpage">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Navigation an/aus</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="img/logo_baar.png">
                </a>
            </div>

            <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 3,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse js-navbar-collapse',
  		            'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>

        </div><!-- //containerfluid -->
    </nav>
    <div class="header-text">
        <h1>
          Beschriftung &amp; Stickerei Baar <br>
          <small>
            	Ihr kompetenter Ansprechpartner für Beschriftung und Stickerei in Bischofswiesen
          </small><br>
          <a class="slide-button" href="#leistungen"><button type="button" class="btn btn-lg btn-primary">Leistungen entdecken</button></a>
        </h1>
    </div>
  </header>
