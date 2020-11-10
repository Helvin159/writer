<?php 
    get_header();
    require_once('includes/banner.php');
?>
<div class="container-fluid py-5">
    <div class="container">
        <h1><?php the_title()?></h1>
    </div>
    <div class="container py-5">
        <?php the_content() ?>
    </div>
</div>

<?php get_footer();