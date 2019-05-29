<?php

$wp_customize->add_section(
    'pirate-home-hero-image',
    array(
        'title'     => 'Home Hero Image',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'home-hero-image',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'hero-image-control',
        array(
            'label'    => 'Image 1',
            'settings' => 'home-hero-image',
            'section'  => 'pirate-home-hero-image'
        )
    )
);

//adds edit button. Also requires add_theme_support( 'customize-selective-refresh-widgets' );

$wp_customize->selective_refresh->add_partial( 'home-hero-image', array(
    'selector' => '.hero-section', //class of object
    'render_callback' => '__return_false',
) );