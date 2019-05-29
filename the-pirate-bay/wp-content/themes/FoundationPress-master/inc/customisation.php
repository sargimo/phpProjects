<?php
function pirate_customize_register($wp_customize) {
    require_once get_template_directory() . '/inc/custom-meta-boxes.php';
    require_once get_template_directory() . '/inc/custom-hero.php';
}

add_action('customize_register', 'pirate_customize_register');
