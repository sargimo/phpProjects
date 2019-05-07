<!-- Wine theme functions and definitions -->
<?php
if ( !function_exists('wine_setup')) :
    function wine_setup()
    {
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
            'primary-menu' => __('Primary'),
            'footer-menu' => __('Footer'),
            'social-menu' => __('Social'),
        ));

        //set the permalink structure
        global $wp_rewrite;
        $wp_rewrite->set_permalink_structure('/%postname%/');

    }

endif;
add_action('after_setup_theme', 'wine_setup');

if ( !function_exists('wine_enqueue_scripts')) :
    function wine_enqueue_scripts(){
        //enqueue styles
        wp_enqueue_style('wine-style', get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style('responsive-nav', get_stylesheet_directory_uri() . '/assets/css/responsive-nav.css');

        //enqueue scripts
        wp_enqueue_script('wine-main', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('responsive-nav', get_template_directory_uri() . '/assets/js/responsive-nav.min.js');

    }
endif;

add_action('wp_enqueue_scripts', 'wine_enqueue_scripts');

if ( !function_exists('wine_widgets_init')) :
    function wine_widgets_init(){
        register_sidebar(array(
            'name'  => __( 'Sidebar name', 'theme_text_domain' ),
	        'id' => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
	        'description' => 'Add widgets here'
        ));
    }
endif;

add_action('widgets_init', 'wine_widgets_init');