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
        <div class="col-md-4">
            <div class="myCard my-3">
            <img src="<?php the_post_thumbnail_url('MediumLandscape')?>"  alt="Missing" class="img-fluid">                   
                        <div class="container pt-4">
                            <h5 class="purple josefinLight">Blog</h6>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
                            <p class="text-justify px-2">
                                <?php 
                                    echo    substr(get_the_excerpt(),0,100);                         
                                ?>  
                                <a href="<?php the_permalink()?>">[...]</a>
                            </p>
                        </div>
                        <hr>
                        <div class="container text-left pb-3">
                            <a class="josefinLight fontSize18" href="<?php the_permalink()?>">View Full Post</a>
                        </div>
                    </div>
    </div>    

<?php } ?>    
</div>
    </div>


<?php get_footer();