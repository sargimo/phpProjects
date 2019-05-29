<?php 
if ( !function_exists('pirate_create_post_types')) :
    function pirate_create_post_types(){
        register_post_type(
            'pirate-about-us',
            array('labels' => array(
                'name' => __('Abouts'),
                'singular_name' => __('About')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('thumbnail', 'title', 'editor'),
            // 'taxonomies' => array('categories', 'post_tag')
            // 'register_meta_box_cb' => 'wine_post_class_meta_box'
        ));
    }
endif;

add_action('init', 'pirate_create_post_types');

?>