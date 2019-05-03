<!-- Wine theme functions and definitions -->
<?php
if ( !function_exists('wine_setup')) :
    function wine_setup()
    {
        
        //enqueue styles
        wp_enqueue_style('wine-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('responsive-nav', get_stylesheet_directory_uri() . '/assets/css/responsive-nav.css');

        //enqueue scripts
        wp_enqueue_script('wine-main', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('responsive-nav', get_template_directory_uri() . '/assets/js/responsive-nav.min.js');

        //add theme support

        //featured image
        add_theme_support('post-thumbnails');

        //custom logo
        add_theme_support('custom-logo', array(
            'height' => 50,
            'width' => 50
        ));

        //register menus
        register_nav_menus(array(
            'primary-menu' => __('Primary')
        ));


    }

endif;
add_action('after_setup_theme', 'wine_setup');