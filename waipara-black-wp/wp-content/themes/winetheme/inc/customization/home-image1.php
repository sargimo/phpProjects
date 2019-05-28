<?php

$wp_customize->add_section(
    'wine-home-image',
    array(
        'title'     => 'Home Image 1',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'home-image1',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'home-image1-control',
        array(
            'label'    => 'Image 1',
            'settings' => 'home-image1',
            'section'  => 'wine-home-image'
        )
    )
);