<div class="myCard my-3">
    <?php 
    //if(the_post_thumbnail_url('MediumLandscape')){ ?>
        <!-- <img src="<?php // the_post_thumbnail_url('MediumLandscape')?>"  alt="Missing" class="img-fluid"> -->
    <?php // } ?>
        <?php if(get_the_post_thumbnail_url() !== false){ ?>
            <img src="<?php the_post_thumbnail_url('MediumLandscape')?>"  alt="Missing" class="img-fluid">
        <?php }?>
    <div class="container pt-4">
        <h5 class="purple josefinLight"><?php if(get_post_type() == 'post'){ echo 'Blog';}else if(get_post_type() == 'prevwork'){echo 'My Work'; }else{echo ucfirst(get_post_type());} ?></h5>
        <?php if(get_post_type() == 'post'){ echo '<h5>'.get_the_date('M d, Y').'</h5>'; } ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title()?></a></h3>
        <p class="px-2">
            <?php   echo  substr(get_the_excerpt(),0,140); ?>  
            <a href="<?php the_permalink()?>">...</a>
        </p>
    </div>
    <hr>
    <div class="container pb-3">
        <a class="josefinLight fontSize18" href="<?php the_permalink()?>">View More</a>
    </div>
</div>