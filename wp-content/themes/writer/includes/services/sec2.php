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
                                    require($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/writer/includes/card.php');
                                ?>
                            </div>
                        <?php } 
                    ?>
                </div>
            </div>
            </div>