<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <h1><?php the_title()?></h1>
</div>

<hr class="w-75">

<div class="row  p-5 my-5">
    <div class="col-md-6 p-5 d-none d-sm-none d-md-block d-lg-block">
        <div class="bookingImg">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="calendlyWidget p-1">
            <?php require_once('includes/calendly.php'); ?>
        </div>
    </div>    
</div>


<?php get_footer();