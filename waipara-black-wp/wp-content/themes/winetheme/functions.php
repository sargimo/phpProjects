<!-- Wine theme functions and definitions -->
<?php
function create_page($title) {
      
    $new_page_title = $title;
    // $new_page_content = 'This is the page content';
    $new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
  
    //don't change the code bellow, unless you know what you're doing
  
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        // 'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}

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

        //create pages
        if (isset($_GET['activated']) && is_admin()){
            $pages = array(
                array('title' => 'Home'),
                array('title' => 'Wines'),
                array('title' => 'About'),
                array('title' => 'Contact'),
            );
            foreach($pages as $page){
                create_page($page['title']);
            }
        }
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

//removing access to page editor unless admin - resource: https://wpmayor.com/how-to-remove-menu-items-in-admin-depending-on-user-role/
function wine_remove_menu_items() {
    if(!is_admin()) {
        remove_menu_page('edit.php?post_type=page');
    }
}

add_action('admin_menu', 'wine_remove_menu_items');

require_once get_template_directory() . '/inc/widgets.php';

require_once get_template_directory() . '/inc/custom-post-types.php';
 
require_once get_template_directory() . '/inc/taxonomies.php';

require_once get_template_directory() . '/inc/custom-meta-boxes.php';

require_once get_template_directory() . '/inc/customization/customization.php';


