<div class="container-fluid sectionSix">
    <div class="container py-5">
        <h1>TESTIMONIALS &amp; FEATURED CLIENTS</h1>
        <hr class="w-25">
        <div class="container">
            <div class="row">
                <?php 
                    $showPost = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'testimonial',
                        'paged' => false,
                    ));

                    while($showPost->have_posts()){
                        $showPost->the_post() ?>
                        <div class="col-md-4">
                            <?php require('testimonials.php') ?>
                        </div>
                    <?php }
                ?>
            </div>
            <div class="container py-5 text-center">
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sunt provident sapiente sit praesentium, consectetur reprehenderit doloremque vitae delectus deleniti quas distinctio odit magni fugit reiciendis eaque excepturi accusantium sed.
            </p>
            <div class="container">
                <a href="<?php echo esc_url(site_url('testimonial'))?>" class="btn btn-lg btnDarkPurple josefinLight lightGrey">All Reviews</a>
            </div>
            </div>
            
        </div>

        
    </div>

</div>