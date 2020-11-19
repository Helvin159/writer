<div class="container-fluid sectionOne">
    <div class="container text-center p-5">
        <h2><?php echo strtoupper(get_field('top_title')); ?></h2>
        <hr class="w-25">
        <div class="container text-center px-5 d-none d-sm-none d-md-none d-lg-block">
        <p class="text-center">
            <?php the_content(); ?>
        </p>
        </div>
        
    </div>
    <div class="container">
        <div class="row">
            <?php 
            $showPages = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'page',
                'paged' => false,
                'meta_key' => 'featured',
                'meta_value' => 'yes',
            ));

            while($showPages->have_posts()){
                $showPages->the_post() 
                
                ?>
                    <div class="col-md-4 my-4">
                        <div class="row">
                            <div class="col-2 pl-4 ">
                                <i class=" fontSize30  darkPurple <?php echo get_field('icon')?>"></i>
                            </div>
                            <div class="col-10 text-left">
                            <h3><a href="<?php the_permalink()?>" class="darkPurple"><?php the_title()?></a></h3>
                            <p class="text-justify">
                                <?php echo substr(get_the_excerpt(),0,170); echo '...'; ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php } 
            wp_reset_postdata();
            ?>
    </div>
    
    <div id="workNumbers" class="container  text-center py-5">
        <a class="btn btn-md btnPurple josefinLight fontSize18 lightGrey" href="<?php echo esc_url(site_url('/prevwork'))?>">See Previous Work</a>
    </div>
    <div class="d-none d-sm-none d-md-block d-lg-block">
        <div class="row text-center  py-5">
            <div class="col-md-3">
                <input id="consultNum" type="hidden" value="<?php echo get_field('incrementing_number_1')?>">
                <h1 id="consultationsNum" class="purple display-3"><i>0</i></h1>
                <h4><?php echo get_field('incrementing_number_1_title')?></h6>
            </div>
        <div class="col-md-3">
            <input id="editNum" type="hidden" value="<?php echo get_field('incrementing_number_2')?>">
            <h1 id="editorialNum" class="purple display-3"><i>0</i></h1>
            <h4><?php echo get_field('incrementing_number_2_title')?></h6>
        </div>
        <div class="col-md-3">
            <input id="webContNum" type="hidden" value="<?php echo get_field('incrementing_number_3')?>">
            <h1 id="webContent" class="purple display-3"><i>0</i></h1>
            <h4><?php echo get_field('incrementing_number_3_title')?></h6>
        </div>
        <div class="col-md-3">
            <input id="copyrightnum" type="hidden" value="<?php echo get_field('incrementing_number_4')?>">
            <h1 id="copyrightProjects" class="purple display-3"><i>0</i></h1>
            <h4><?php echo get_field('incrementing_number_4_title')?></h6>
        </div>
    </div>
    </div>

</div>