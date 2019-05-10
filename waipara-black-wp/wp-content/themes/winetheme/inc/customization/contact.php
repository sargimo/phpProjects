<?php

    //Contact
    $wp_customize->add_section('wine_contact', array(
        'title' => __('Contact'),
        'priority' => 30
    ));

    $wp_customize->add_setting('wine_contact_blurb', array(
        'capibility' => 'edit_theme_options',
        'default' => __('I still don\'t like wordpress')
    ));

    $wp_customize->add_control('wine_contact_blurb_control', array(
        'type' => 'textarea',
        'section' => 'wine_contact',
        'settings' => 'wine_contact_blurb',
        'label' => __('Blurb')
    ));

?>