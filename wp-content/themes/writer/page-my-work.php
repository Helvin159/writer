<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <div class="row py-5">
        <div class="col-sm-6">
            <hr class="w-25 bgPurple ml-0">
            <p>
                <?php the_content()?>
            </p>
            <a href="" class="btn btnDarkPurple josefinLight fontSize18 lightGrey">View Project</a>
        </div>
        <div class="col-sm-6">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
        </div>

    </div>
    
</div>

<?php 
require_once('includes/about/aboutSec2.php');
?>
<div class="container py-5">
    <div class="row p-2">
        <?php  
            $showPosts = new WP_Query(array(
                'post_type' => 'prevwork',
                'posts_per_page' => 4,
                'paged' => false
            ));

            while($showPosts->have_posts()){
                $showPosts->the_post() ?>
                <div class="col-md-6">
                    <?php require('includes/card.php')?>
                </div>
            <?php } 
            wp_reset_postdata();
            ?>
    </div>
    <div class="container text-center my-4">
        <a href="<?php echo esc_url(site_url('/prevwork'))?>" class="btn btnDarkPurple fontSize18 josefinLight lightGrey">View All My Previous Work</a>
    </div>
</div>


<?php 
require_once('includes/sec8.php');
get_footer();