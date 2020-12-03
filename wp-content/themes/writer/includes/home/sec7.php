<div class="container-fluid py-5">
    <div class="container ">
        <div class="container text-center">
            <h1>Sometimes I Write About Writing</h1>
        </div>
        <hr class="w-25">
        <div class="container p-5">
            <div class="row">
                <?php 
                    $showPost = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'paged' => false
                    ));

                    while($showPost->have_posts()){
                        $showPost->the_post() ?>
                        <div class="col-lg-4">
                            <?php 
                            if($_SERVER['SERVER_NAME'] == 'danielle.local'){
                                require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/smallcard.php');
                            }else{
                                require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/smallcard.php');
                            } ?>
                        </div>
                    <?php   }    
                    wp_reset_postdata();
                    ?>
            
            </div>
            <div class="container pt-5 text-center">
                <a href="<?php echo esc_url(site_url('/blog'))?>" class="btn btn-md btnPurple lightGrey josefinLight">MORE FROM MY BLOG</a>
            </div>
        </div>
        
    </div>

</div>