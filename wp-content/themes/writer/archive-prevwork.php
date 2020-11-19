<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <!-- <h1>My Previous Work</h1> -->
    <hr class="w-25 bgPurple ">
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eveniet saepe architecto, odit repellendus quam dolor. Ratione magni in voluptatem rerum quibusdam, ea dolores accusantium. Lorem ipsum adipisicing elit. Amet eveniet accusamus aspernatur. Non consequatur nihil ab deleniti vitae necessitatibus soluta facilis, nam obcaecati! Error fugit aliquam quas consequuntur iste ducimus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga iure laborum. Facilis quam possimus cum officiis iste similique suscipit asperiores dolores, ex assumenda itaque fugit earum saepe provident temporibus.
        </p>
</div>

<?php 
require_once('includes/about/aboutSec2.php');
?>
<div class="container py-5">
    <div class="row p-2">
        <?php  
            while(have_posts()){
                the_post() ?>
                <div class="col-md-6">
                    <?php require('includes/card.php')?>
                </div>
            <?php } 
            wp_reset_postdata();
            ?>
    </div>
</div>


<?php 
require_once('includes/sec8.php');
get_footer();