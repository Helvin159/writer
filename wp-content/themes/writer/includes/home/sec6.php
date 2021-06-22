<div class="container-fluid sectionSix">
    <?php 
        $showPost = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'testimonial',
            'paged' => false,
        ));

        if($showPost->have_posts() !== false){ ?>
            <div class="container py-5">
                <h1 class="text-center">TESTIMONIALS</h1>
                <hr class="w-25">
                <div class="container">
                    <div class="row">
                        <?php 
                            while($showPost->have_posts()){
                                $showPost->the_post() ?>
                                <div class="col-md-4">
                                    <?php 
                                        if($_SERVER['SERVER_NAME'] == 'danielle.local'){
                                            require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/testimonials.php');
                                        }else{
                                            require($_SERVER['DOCUMENT_ROOT'] . '/pages/writer/wp-content/themes/writer/includes/testimonials.php');
                                        } ?>
                                </div>
                            <?php }
                        wp_reset_postdata(); ?>
                    </div>
                <div class="container py-5 text-center">
                    <a href="<?php echo esc_url(site_url('testimonial'))?>" class="btn btn-lg btnDarkPurple josefinLight lightGrey">All Reviews</a>
                </div>
            </div>
        </div>
        <?php } ?>

    


    <?php 
    $showClients = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type' => 'clients',
        'paged' => false,
    ));
    
    if($showClients->have_posts() !== false){ ?>
        <div class="container py-5">
            <h1 class="text-center">FEATURED CLIENTS</h1>
            <hr class="w-25">
            <div class="container">
                <div class="row">
                    <?php 
                        while($showClients->have_posts()){
                            $showClients->the_post() ?>
                            <div class="col-md-2">
                                <?php 
                                    require($_SERVER['DOCUMENT_ROOT'] . '/pages/writer/wp-content/themes/writer/includes/clients.php');
                                ?>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="container py-5 text-center">
                    <a href="<?php echo esc_url(site_url('clients'))?>" class="btn btn-lg btnDarkPurple josefinLight lightGrey">All Featured Clients</a>
                </div>
            </div>        
        </div>
    <?php } ?>
    


</div>



    

            