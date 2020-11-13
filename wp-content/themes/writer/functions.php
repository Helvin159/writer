<?php 
// Files
function writer (){
  
  // Font Awesome
  wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', null, '1.0', 'all');
  // Bootstrap
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', null, '1.0', 'all');
  
  if(strstr($_SERVER['SERVER_NAME'], 'enya.local')){
    // Bundled Files
    wp_enqueue_script('main-writer-scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);// CSS
    wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'), null, '1.0', 'all');
  } else{
      // CSS
    //   wp_enqueue_style('my-style', get_theme_file_uri('/css/styles.css'), null, '1.0', 'all');
      wp_enqueue_style('my-style', get_theme_file_uri('/bundled-assets/styles.2e91ecd4dc4efdd7f974.css'), null, '1.0', 'all');
      // wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
      wp_enqueue_script('main-writer-scripts', get_theme_file_uri('/bundled-assets/scripts.2e91ecd4dc4efdd7f974.js'), NULL, '1.0', true);
    }

  // Jquery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js', NULL, '1.0', true);

  // Popper
  wp_enqueue_script('popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', NULL, '1.0', true);
  // Bootstrap JS
  wp_enqueue_script('bootsrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'writer');


// Features
function writer_features(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('MediumLandscape', 800, 460, true);
  add_image_size('SmallLandscape', 400, 260, true);
  add_image_size('SmallSquare', 220, 220, true);
  add_image_size('HomeBlog', 350, 250, true);
  add_image_size('flexible', 9999, 9999, true);
}

add_action('after_setup_theme', 'writer_features');


// Remove Admin Bar for All Other Users
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}