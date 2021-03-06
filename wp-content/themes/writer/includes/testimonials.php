<div class="testimonialCard my-3 text-center">
    <?php 
    if(get_the_post_thumbnail_url() !== false){ ?>
        <img src="<?php the_post_thumbnail_url('SmallSquare')?>"  alt="Missing" class="img-fluid">
    <?php }?> 
    <div class="container pt-4 text-center">
    <h5 class="purple josefinLight"><?php if(get_post_type() == 'post'){ echo 'Blog';}else if(get_post_type() == 'prevwork'){echo 'My Work'; }else{echo ucfirst(get_post_type());} ?></h5>
    <h3><a href="<?php the_permalink() ?>"><?php $title = get_the_title(); if(strlen($title) > 20){echo substr($title,0 ,20); echo '<a href="'.get_the_permalink().'"> ...</a>'; } else{ echo $title;}?></a></h3>
    <p class="px-2 text-justify">
        <?php 
            echo    substr(get_the_excerpt(),0,100);                         
        ?>  
    </p>
    </div>

    <div class="container text-left">
        <a class="josefinLight fontSize18" href="<?php the_permalink()?>">View Full Review</a>
    </div>
</div>