<?php 
    get_header();
    require_once('includes/banner.php');
?>
    <div class="container py-5">
        <p>
            <?php the_content();?>
        </p>
        <?php    
            require_once('includes/pageThumbnails.php');
            require_once('includes/pdfThumbs.php');
        ?>
    </div>
</div>

<?php get_footer();