<div class="container-fluid py-5">
    <div class="container text-center">
        <h1>Sometimes I Write About Writing</h1>
        <hr class="w-25">
        <div class="container p-5">
            <div class="row text-center">
                <?php 
                    $showPost = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'paged' => false
                    ));

                    while($showPost->have_posts()){
                        $showPost->the_post() ?>
                        <div class="col-md-4">
                            <div class="container">
                                <img class="img-fluid py-3" src="<?php the_post_thumbnail_url('SmallSquare')?>"  alt="">
                                <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                                <div class="container">
                                    <p class="text-justify">
                                        <?php
                                           echo substr(get_the_excerpt(),0,155);
                                        ?>
                                        <a href="<?php the_permalink()?>"><i class="fas fa-external-link-alt fontSize18 px-2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php   }    ?>
            
            </div>
            <div class="container pt-5">
                <a href="" class="btn btn-md btnPurple lightGrey josefinLight">MORE FROM MY BLOG</a>
            </div>
        </div>
        
    </div>

</div>