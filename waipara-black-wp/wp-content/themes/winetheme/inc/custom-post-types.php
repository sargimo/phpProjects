<?php 
if ( !function_exists('wine_create_post_types')) :
    function wine_create_post_types(){
        register_post_type(
            'wine_wines',
            array('labels' => array(
                'name' => __('Wines'),
                'singular_name' => __('Wine')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array('thumbnail', 'title', 'editor'),
            'taxonomies' => array('genres'),
            // 'taxonomies' => array('categories', 'post_tag')
            // 'register_meta_box_cb' => 'wine_post_class_meta_box'
        ));
    }
endif;

add_action('init', 'wine_create_post_types');

?>