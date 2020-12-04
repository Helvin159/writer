            <div class="container-fluid  py-5 bgLightGrey">
            <div class="container">
                <div class="row">
                    <?php 
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $showPages = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_type' => 'services',
                            'paged' => $paged,
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
                <div class="container text-center">
                    <?php
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $showPages->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i class="paginationLabels"></i> %1$s', __( 'Prev', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i class="paginationLabels"></i>', __( 'Next', 'text-domain' ) ),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                        
                        wp_reset_postdata();

                    ?>
                </div>
            </div>
            </div>