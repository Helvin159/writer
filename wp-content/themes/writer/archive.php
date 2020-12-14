<?php 
    get_header();
    require_once('includes/banner.php');
?>

<div class="container">
    <div class="row py-5">
        <?php  
            while(have_posts()){
                the_post() ?>
                <div class="col-md-6">
                    <?php require('includes/card.php')?>
                </div>
            <?php } 
            wp_reset_postdata();
            ?>
    </div>

    <?php if($_SERVER['REQUEST_URI'] == '/testimonial/'){ ?>
    <div class="container py-5 text-right">
        <button class="btn btn-md btnPurple lightGrey josefinLight fontSize18 my-2" id="newTestimonialBtn">Want to leave a review?</button>
    </div>
    <?php }?>

</div>

<?php get_footer();