<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container py-5">
    <div class="row py-5">
        <div class="col-sm-6">
            <hr class="w-25 bgPurple ml-0">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eveniet saepe architecto, odit repellendus quam dolor. Ratione magni in voluptatem rerum quibusdam, ea dolores accusantium. <br> Lorem ipsum adipisicing elit. Amet eveniet accusamus aspernatur. Non consequatur nihil ab deleniti vitae necessitatibus soluta facilis, nam obcaecati! Error fugit aliquam quas consequuntur iste ducimus!
            </p>
            <a href="" class="btn btnDarkPurple josefinLight fontSize18 lightGrey">View Project</a>
        </div>
        <div class="col-sm-6">
            <img class="img-fluid" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
        </div>

    </div>
    
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
            <?php } ?>
    </div>
</div>


<?php 
require_once('includes/sec8.php');
get_footer();