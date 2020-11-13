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
                    
                    <div class="myCard my-3">
                        <img src="<?php the_post_thumbnail_url('MediumLandscape')?>"  alt="Missing" class="img-fluid">
                    
                        <div class="container pt-4">
                            <h5 class="purple josefinLight">My Work</h6>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
                            <p class="px-2">
                                <?php 
                                    echo    substr(get_the_excerpt(),0,150);                         
                                ?>  
                                <a href="<?php the_permalink()?>">[...]</a>
                            </p>
                        </div>
                        <hr>
                        <div class="container pb-3">
                            <a class="josefinLight fontSize18" href="<?php the_permalink()?>">View Full Job</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
</div>
</div>

<?php get_footer();