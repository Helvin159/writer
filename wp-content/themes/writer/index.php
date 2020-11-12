<?php 
    get_header();
    require_once('includes/banner.php'); ?>


<div class="container-fluid py-5">
     <div class="container py-5 text-left">
         <h1>What I've been up to... </h1>
         <hr>
     </div>
     <div class="row">
    <?php   
      while(have_posts()){
        the_post()?>
    <div class="col-md-4 text-center p-5">
        <div class="container">
            <img class="img-fluid my-4 blogImg" src="<?php the_post_thumbnail_url()?>" alt="">
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="container">
            <?php the_excerpt(); ?>
        </div>
    </div>    

<?php } ?>    
</div>
    </div>


<?php get_footer();