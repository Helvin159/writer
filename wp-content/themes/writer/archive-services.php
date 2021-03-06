<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <div class="row p-2">
        <?php  
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $showPost = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post_type' => 'prevwork',
                        'paged' => $paged,
                    ));
            $count = 0;
            while($showPost->have_posts()){
                $showPost->the_post() ?>
                <div class="col-md-6">
                    <?php require('includes/card.php')?>
                </div>
            <?php  $count++ ;} ?>
    </div>
    <div class="container text-center py-4">
<?php 


        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $showPost->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i class="paginationLabels"></i> %1$s', __( 'Newer Work', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i class="paginationLabels"></i>', __( 'Older Work', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );

        

        wp_reset_postdata();
    ?>
    </div>
    
</div>


<?php 
require_once('includes/sec8.php');
get_footer();