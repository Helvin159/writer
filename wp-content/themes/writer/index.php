<?php 
    get_header();
    require_once('includes/banner.php'); 
?>

    <div class="container mt-5">
    <div class="row py-5">
        <?php   
            while(have_posts()){
            the_post(); ?>
            <div class="col-sm-4">
                <?php require('includes/card.php'); ?>
            </div>
        <?php } 
        wp_reset_postdata();
        ?>    
    </div>
</div>

<?php get_footer();