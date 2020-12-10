<?php 
    get_header();
    require_once('includes/banner.php');
    // echo get_the_archive_title();
?>
    <div class="container py-5">
        <div class="row">

            <div class="<?php if(get_field('image_one') or get_field('pdf') ){ echo 'col-sm-9';}else{echo 'col-sm-12';} ?>">
                <p>
                    <?php the_content();?>
                </p>
            </div>
            <?php 
            if(get_field('image_one') or get_field('pdf')){?>
                <div class="col-sm-3">
                    <?php    
                        require_once('includes/pageThumbnails.php');
                        require_once('includes/pdfThumbs.php');
                    ?>
                </div>
            <?php } ?>

        </div>        
    </div>
</div>

<?php get_footer();