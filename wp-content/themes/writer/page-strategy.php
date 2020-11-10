<?php 
    get_header();
    require_once('includes/hero.php');
?>
<div class="container py-5">
    <h1><?php the_title()?></h1>
</div>
<div class="container">
    <div class="container">
        <?php the_content() ?>
    </div>
</div>
<?php get_footer();