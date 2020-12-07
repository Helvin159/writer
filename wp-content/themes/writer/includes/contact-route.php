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
    'callback' => 'test2',
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
  $message = sanitize_text_field($data['comment']);
  
  $contentMessage = "Here are the details: 
  Name: $title 
  Email: $email
  Date Available: $date
  Time Available: $time
  
  Message
  $message";

    wp_insert_post(array(
      'post_type' => 'messages',
      'post_status' => 'private',
      'post_title' => $data['title'],
      'post_content' => $contentMessage
    ));


    // Email
      $to = "daniellelrymer@gmail.com, Helvin@HelvinRymer.com,danielle@daniellerymer.com"; // this is your Email address
      $from = $email; // this is the sender's Email address
      $subject = "New Email From DanielleRymer.com!";
      $subject2 = "Thank you!";

      $message = "$title

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
    wp_insert_post(array(
      'post_type' => 'testimonial',
      'post_status' => 'publish',
      'post_title' => 'New Testimonial',
      'post_content' => 'New'
    ));

    // Variables
    $name = sanitize_text_field($data['title']);
    $comment = sanitize_text_field($data['comment']);

    // ***************************************
    // Add email here

    // header('location:index.php');
  }

  // Email Code To Use
  function email($adressOne, $addressTwo){
      $to = "Melii@ManiacInk.com, Helvin@HelvinRymer.com,Meliisart03@gmail.com"; // this is your Email address
      $from = $email; // this is the sender's Email address
      $subject = "New Email From ManiacInk!";
      $subject2 = "Thank you!";

      $message = "$title

      $contentMessage" ;  

      $message2 = "Thank you for your email. I'll be in touch as soon as possible."
      ."\n"."
      Melii
      ManiacInk.com
      Melii@ManiacInk.com";

      $headers = "From:" . $from;
      $headers2 = "From:" . $to;

      mail($to,$subject,$message,$headers);
      mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
  }

  function test(){
    wp_insert_post(array(
      'post_type' => 'messages',
      'post_status' => 'private',
      'post_title' => 'Hi',
      'post_content' => 'hello',
    ));
  }
  
  function test2(){
    wp_insert_post(array(
      'post_type' => 'testimonial',
      'post_status' => 'publish',
      'post_title' => 'Hi',
      'post_content' => 'hello',
    ));
  }