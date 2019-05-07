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

    <header>
        <nav class='nav-collapse'>
            <?php wp_nav_menu(array(
                'menu_class' => false,
                'container' => false,
                'theme_location' => 'primary-menu'
            )); ?>
        </nav>
            <section>
                <div>
                    <?php the_custom_logo() ?>
                </div>
            </section>
    </header>