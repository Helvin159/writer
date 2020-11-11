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
                <div class="col-6">
                    <div class="container my-4">
                        <img src="<?php the_post_thumbnail_url('MediumLandscape')?>"  alt="Missing" class="img-fluid w-50">
                    </div>
                    <h1><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>
                    <p>
                        <?php the_excerpt()?>
                    </p>
                </div>
            <?php } ?>
</div>
</div>

<?php get_footer();