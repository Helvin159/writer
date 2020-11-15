<?php 
    get_header();
    require_once('includes/banner.php'); ?>

     <div class="container pt-5 px-5 text-left">
         <h1>What I've been up to... </h1>
         <hr>
     </div>
     <div class="container py-5">
    <?php   
      while(have_posts()){
        the_post()?>
        <div class="myCard my-4">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php the_post_thumbnail_url('SmallLandscape')?>"  alt="Missing" class="img-fluid">  
                </div>
                <div class="col-sm-9 pt-4">
                    <h3 class="px-4"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
                    <p class="text-justify px-4">
                        <?php 
                            echo    substr(get_the_excerpt(),0,200);                         
                        ?>  
                        <a href="<?php the_permalink()?>">[...]</a>
                    </p>
                    <hr>
                    <div class="container text-left pb-3">
                        <a class="josefinLight fontSize18 px-4" href="<?php the_permalink()?>">View Full Post</a>
                    </div>
                </div>
            </div>
            <!-- <div class="container">
                <div class="myCard my-3">
                             
                        <div class="container pt-4">
                        </div>
 
                </div>
            </div>     -->
        </div>    

<?php } ?>    
</div>


<?php get_footer();