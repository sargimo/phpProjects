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

require_once get_template_directory() . '/inc/widgets.php';

require_once get_template_directory() . '/inc/custom-post-types.php';
 
require_once get_template_directory() . '/inc/taxonomies.php';

require_once get_template_directory() . '/inc/custom-meta-boxes.php';

require_once get_template_directory() . '/inc/customization/customization.php';


