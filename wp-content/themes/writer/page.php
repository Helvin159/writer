<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <div class="container">
        <?php the_content();
            if(get_field('calendly_embed')){?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="bookingImg">
                            <?php require_once('includes/svg/1.php') ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <?php echo get_field('calendly_embed')?>
                    </div>
                </div>
            <?php } 
        ?>
        
    </div>
</div>


<?php get_footer();