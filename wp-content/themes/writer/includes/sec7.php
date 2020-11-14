<div class="container-fluid py-5">
    <div class="container ">
        <div class="container text-center">
            <h1>Sometimes I Write About Writing</h1>
        </div>
        <hr class="w-25">
        <div class="container p-5">
            <div class="row">
                <?php 
                    $showPost = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'paged' => false
                    ));

                    while($showPost->have_posts()){
                        $showPost->the_post() ?>
                        <div class="col-lg-4">
                            
                            <div class="myCard my-3">
                        <img src="<?php the_post_thumbnail_url('HomeBlog')?>"  alt="Missing" class="img-fluid">
                    
                        <div class="container pt-4">
                            <h5 class="purple josefinLight">Blog</h6>
                            <h3><a href="<?php the_permalink() ?>"><?php $title = get_the_title(); if(strlen($title) > 20){echo substr($title,0 ,20); echo '<a href="'.get_the_permalink().'"> [...]</a>'; } else{ echo $title;}?></a></h3>
                            <p class="px-2">
                                <?php 
                                    echo    substr(get_the_excerpt(),0,100);                         
                                ?>  
                                <a href="<?php the_permalink()?>">[...]</a>
                            </p>
                        </div>
                        <hr>
                        <div class="container pb-3">
                            <a class="josefinLight fontSize18" href="<?php the_permalink()?>">View More</a>
                        </div>
                    </div>
                        </div>
                    <?php   }    ?>
            
            </div>
            <div class="container pt-5 text-center">
                <a href="<?php echo esc_url(site_url('/blog'))?>" class="btn btn-md btnPurple lightGrey josefinLight">MORE FROM MY BLOG</a>
            </div>
        </div>
        
    </div>

</div>