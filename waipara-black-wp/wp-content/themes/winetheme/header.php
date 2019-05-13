<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head <?php do_action('add_head_attributes'); ?>>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title <?php wp_title(); ?>>Waipara Black</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100i,400,700|PT+Serif:400,400i,700" rel="stylesheet">
        <?php wp_head();?>
    </head>
    <body <?php body_class() ?>>

    <header class="headroom">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="index.html" style="font-weight:bold;">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-end">
                        <a href="<?php echo site_url() ?>/" class="navbar-item is-active">HOME</a>
                        <a href="<?php echo site_url() ?>/wines" class="navbar-item">WINE</a>
                        <a href="restaurant.html" class="navbar-item">RESTAURANT</a>
                        <a href="accommodation.html" class="navbar-item">ACCOMMODATION</a>
                        <a href="vineyards.html" class="navbar-item">VINEYARDS</a>
                        <a href="club.html" class="navbar-item">CLUB</a>
                        <a href="contact.html" class="navbar-item">CONTACT</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>