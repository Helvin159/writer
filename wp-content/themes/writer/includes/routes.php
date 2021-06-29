<?php 

// *****************************************
// ************ Initiate Routes ************
// *****************************************

//  New Message With Sec8 Contact Form 
add_action('rest_api_init', 'registerNewMessage');

//  New Testimonial Route 
add_action('rest_api_init', 'registerNewTestimonial');


// ********************************
// ************ Routes ************
// ********************************

//  New Message With Sec8 Contact Form 
function registerNewMessage(){
  register_rest_route('drymer/v1/', 'new-message', array(
    'methods' => 'POST',
    'callback' => 'message',
  ));
}

//  New Testimonial Route 
function registerNewTestimonial(){
  register_rest_route('drymer/v1/', 'new-testimonial', array(
    'methods' => 'POST',
    'callback' => 'newTestimonial',
  ));
}

// ***************************************
// ************ Route Actions ************
// ***************************************

// New Message includes/Sec8.php Contact Form
function message($data){
  $title = sanitize_text_field($data['title']);
  $date = sanitize_text_field($data['date']);
  $time = sanitize_text_field($data['time']);
  $email = sanitize_text_field($data['email']);
  $commentOne = sanitize_text_field($data['comment']);


  $contentMessage = "
  Here are the details: 
  Name: $title 
  Email: $email
  Date Available: $date
  Time Available: $time
  
  Message
  $commentOne";

  wp_insert_post(array(
      'post_type' => 'messages',
      'post_status' => 'private',
      'post_title' => $data['title'],
      'post_content' => $contentMessage
  ));

    // Email
      $to = "Helvin@HelvinRymer.com,danielle@daniellerymer.com"; // this is your Email address
      $from = $email; // this is the sender's Email address
      $subject = "New Email From DanielleRymer.com!";
      $subject2 = "Thank you!";

      $message = "
      $title

      $contentMessage" ;  

      $message2 = "Thank you for your email. I'll be in touch as soon as possible."
      ."\n"."
      Danielle Rymer
      DanielleRymer.com
      Danielle@DanielleRymer.com";

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;

      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
}

// New Testimonial
function newTestimonial($data){

    // only need these if performing outside of admin environment
    // require_once(ABSPATH . 'wp-admin/includes/media.php');
    // require_once(ABSPATH . 'wp-admin/includes/file.php');
    // require_once(ABSPATH . 'wp-admin/includes/image.php');

    $title = sanitize_text_field($data['title']);
    $status = sanitize_text_field($data['status']);
    // $date = sanitize_text_field($data['date']);
    // $time = sanitize_text_field($data['time']);
    // $email = sanitize_text_field($data['email']);
    // $image = sanitize_text_field($data['file']);
    $comment = sanitize_text_field($data['comment']);


    // $attachment_id = media_handle_upload($image, 30);
    // if (is_wp_error($attachment_id)) { 
    //   echo 'BIG TIME ERROR'; 
    // } else { 
    //   echo 'BIG TIME SUCCESS';
    // }

    $post = wp_insert_post(array(
      'post_type' => 'testimonial',
      'post_status' => $status,
      'post_title' => $title,
      'post_content' => $comment
    ));
  
    // set_post_thumbnail($post, $attachment_id);


    // Email
      $to = "Helvin@HelvinRymer.com"; // this is your Email address
      $from = $email; // this is the sender's Email address
      $subject = "New Testimonial For HelvinRymer.com!";
      $subject2 = "Thank you!";

      $message = "
      $title

      $comment" ;  

      $message2 = "Thank you for your review!!!!"
      ."\n"."
      Helvin Rymer
      HelvinRymer.com
      Helvin@HelvinRymer.com";

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;

      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
    
}