<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <h1 class="display-3"><?php echo substr(get_the_archive_title(),10)?></h1>
</div>

<hr class="w-75">

<div class="container">
<div class="row py-5">
        <?php  
            while(have_posts()){
                the_post() ?>
                <div class="col-md-4">
                    <?php require('includes/smallcard.php')?>
                </div>
            <?php } 
            wp_reset_post_data();
            ?>
</div>
</div>

<?php get_footer();