<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <h1 class="display-3"><?php echo substr(get_the_archive_title(),10)?></h1>
</div>


<div class="container">
<div class="row p-2">
        <?php  
            while(have_posts()){
                the_post() ?>
                <div class="col-md-6">
                    <?php require('includes/card.php')?>
                </div>
            <?php } ?>
</div>
</div>

<?php get_footer();