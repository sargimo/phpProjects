<?php

function wine_customize_register($wp_customize){

    require_once get_template_directory() . '/inc/customization/contact.php';
    require_once get_template_directory() . '/inc/customization/home-image1.php';

}
    add_action('customize_register', 'wine_customize_register');