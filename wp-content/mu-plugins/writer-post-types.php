<?php 

// Post Types
function writer_post_types(){
  
    
    // Portrait 
  register_post_type('prevwork', array(
    
    'capability_type' => 'prevwork',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'prevwork'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Previous Work',
      'add_new_item' => 'Add New Previous Work',
      'edit_item' => 'Edit Previous Work',
      'all_items' => 'All Previous Work',
      'singular_name' => 'Previous Work',
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));
  
  
  
  
}

add_action('init', 'writer_post_types');