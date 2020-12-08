<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container">
<div class="row py-5">
        <?php  
            while(have_posts()){
                the_post() ?>
                <div class="col-md-4">
                    <?php require('includes/smallcard.php')?>
                </div>
            <?php } 
            wp_reset_postdata();
            ?>
</div>
</div>

<?php get_footer();