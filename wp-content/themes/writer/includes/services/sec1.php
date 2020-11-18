        <div class="container-fluid text-center  p-5 bgWhite">
            <h2>What I Do</h2>
            <hr class="w-25">
            <div class="container">
                <div class="row">
                    <?php 
                        $showPages = new WP_Query(array(
                            'posts_per_page' => 6,
                            'post_type' => 'services',
                            'paged' => false,
                        ));

                        while($showPages->have_posts()){
                            $showPages->the_post() ?>  
                            <div class="col-md-4 my-4">
                                <div class="row">
                                    <div class="col-2 pl-4 ">
                                        <i class=" fontSize30  darkPurple <?php echo get_field('icon')?>"></i>
                                    </div>
                                    <div class="col-10 text-left">
                                        <h3><a href="<?php the_permalink()?>" class="darkPurple"><?php the_title()?></a></h3>
                                        <p class="text-justify">
                                            <?php echo substr(get_the_excerpt(),0,170); echo '...'; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="container">
                    <a href="<?php echo esc_url(site_url('/prevwork'))?>" class="btn btnDarkPurple fontSize18 josefinLight lightGrey">Full Portfolio</a>
                </div>
            </div>
        </div>

    