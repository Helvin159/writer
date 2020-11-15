<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container pt-5">
    <h1><?php the_title()?></h1>
<?php 
    if(the_post_thumbnail()){
        the_post_thumbnail();
    }
?>
</div>
<hr class="w-75">


<div class="container py-5">
    <div class="container">
        <?php the_content() ?>
        
    </div>
</div>


<?php get_footer();