            <div class="container-fluid  py-5 bgLightGrey">
            <div class="container">
                <div class="row">
                    <?php 
                        // echo $_SERVER['DOCUMENT_ROOT'] . '/pages/writer/wp-content/themes/writer/includes/card.php';

                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $showPages = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_type' => 'services',
                            'paged' => false,
                        ));

                        while($showPages->have_posts()){
                            $showPages->the_post() ?>  
                            <div class="col-md-6 my-4">
                                <?php 
                                // echo $_SERVER['DOCUMENT_ROOT'];
                                    if($_SERVER['SERVER_NAME'] == 'danielle.local'){
                                        require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/card.php');
                                    }else{
                                        require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/card.php');
                                    }


                                ?>
                            </div>
                        <?php } ?>
                </div>
                    <div class="container text-center my-4">
                <a href="<?php echo esc_url(site_url('/services'))?>" class="btn btnDarkPurple fontSize18 josefinLight lightGrey">View All My Services</a>
                    </div>
                </div>
            </div>