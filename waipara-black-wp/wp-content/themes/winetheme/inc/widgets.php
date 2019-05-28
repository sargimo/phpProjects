<?php if ( !function_exists('wine_widgets_init')) :
    function wine_widgets_init(){
        register_sidebar(array(
            'name'  => __( 'Sidebar name', 'theme_text_domain' ),
	        'id' => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
	        'description' => 'Add widgets here'
        ));
    }
endif;

add_action('widgets_init', 'wine_widgets_init');
?>
