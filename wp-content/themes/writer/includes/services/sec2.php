            <div class="container-fluid  py-5 bgLightGrey">
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
                            <div class="col-md-6 my-4">
                                <?php 
                                // echo $_SERVER['DOCUMENT_ROOT'];
                                    if($_SERVER['SERVER_NAME'] == 'danielle.local'){
                                        require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/card.php');
                                    }else{
                                        require($_SERVER['DOCUMENT_ROOT'] . '/pages/writer/wp-content/themes/writer/includes/card.php');
                                    }


                                ?>
                            </div>
                        <?php } 
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            </div>