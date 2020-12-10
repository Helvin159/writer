<?php 

// Post Types
function writer_post_types(){
  
    
    // Previous Work 
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
      'all_items' => 'All Previous Works',
      'singular_name' => 'Previous Work',
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));
    
    register_post_type('testimonial', array(
    
    'capability_type' => 'testimonial',
    'taxonomies' => array('category', 'recordings', 'foo'),
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'testimonial'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Testimonials',
      'add_new_item' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'all_items' => 'All Testimonials',
      'singular_name' => 'Testimonial',
    ),
    'menu_icon' => 'dashicons-thumbs-up'
  ));
    
    register_post_type('services', array(
    
    'capability_type' => 'services',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'services'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service',
    ),
    'menu_icon' => 'dashicons-performance'
  ));
    
    register_post_type('clients', array(
    
    'capability_type' => 'clients',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'clients'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Clients',
      'add_new_item' => 'Add New Client',
      'edit_item' => 'Edit A Client',
      'all_items' => 'All Clients',
      'singular_name' => 'Client',
    ),
    'menu_icon' => 'dashicons-groups'
  ));
    
    register_post_type('messages', array(
    
    'capability_type' => 'messages',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'messages'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Messages',
      'add_new_item' => 'Add New Message',
      'edit_item' => 'Edit Messages',
      'all_items' => 'All Messages',
      'singular_name' => 'Message',
    ),
    'menu_icon' => 'dashicons-email-alt2'
  ));
  
  
  
  
}

add_action('init', 'writer_post_types');