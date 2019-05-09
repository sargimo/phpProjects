<?php //create a custom taxonomy name it genres for your posts
if ( !function_exists('wine_create_taxonomies')) :
    function wine_create_taxonomies() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'genres', 'taxonomy general name' ),
    'singular_name' => _x( 'genre', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search genres' ),
    'all_items' => __( 'All genres' ),
    'parent_item' => __( 'Parent genre' ),
    'parent_item_colon' => __( 'Parent genre:' ),
    'edit_item' => __( 'Edit genre' ), 
    'update_item' => __( 'Update genre' ),
    'add_new_item' => __( 'Add New genre' ),
    'new_item_name' => __( 'New genre Name' ),
    'menu_name' => __( 'genres' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('genres',array('wine_wines'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'genre' ),
  ));
 
}
endif;

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wine_create_taxonomies', 0 );
?>