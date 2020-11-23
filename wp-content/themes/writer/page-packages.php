<?php 
    get_header();
    require_once('includes/banner.php');
?>


<div class="container py-5 text-center">
    <h1>Standard Packages</h1>
    <hr class="w-25 bgLightPink">
    <div class="row py-5">

    <?php 
            $showChildren = new WP_Query(array(
                'post_type' => 'page',
                'post_per_page' => 3,
                'post_parent' =>  $post->ID,
                // 'child_of' => $post->ID,
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ));

                $count = 0;

            while($showChildren->have_posts()){
                $showChildren->the_post()?>
                <div class="col-sm-4 text-center">
                    <div class="container card <?php if($count == 0 or $count == 2) {echo 'bgLightGrey mt-5 py-3'; }else {echo 'mt-3 py-5';} ?>  ">
                        <h4><?php the_title()?></h4>  
                        <p>Starting at</p>
                        <h1>$<?php echo get_field('price_one')?></h1>
                        <div class="container m-0 p-0 text-center">
                            <ul class="josefinLight" style="list-style-type:none;line-height:2; margin:0; padding:0;">
                                <li><?php echo get_field('feature_one_package_one')?> <hr class="w-75 bgLightPink"></li>
                                <li><?php echo get_field('feature_two_package_one')?><hr class="w-75 bgLightPink"></li>
                                <li><?php echo get_field('feature_three_package_one')?><hr class="w-75 bgLightPink"></li>
                                <li><?php echo get_field('feature_four_package_one')?><hr class="w-75 bgLightPink"></li>
                            </ul>
                        </div>
                        <div class="container">
                            <a href="<?php the_permalink()?>" class="btn btnDarkPurple josefinLight lightGrey">More Details</a>
                        </div>
                    </div>
                </div>
            <?php 
            
            $count++; 
            }
                wp_reset_postdata();
    ?>

    </div>  
</div>

<?php 
require('includes/about/aboutSec2.php');
require('includes/Sec5.php');
require('includes/sec8.php');
get_footer();