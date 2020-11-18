<div class="container-fluid sectionTwo">
    <div class="container pt-5 text-center">
        <h1>MAKE YOUR CONTENT A PRIORITY.</h1>
        <h2>I CERTAINLY WILL!</h2>
        <hr class="w-25">
    </div>
    <div class="row py-5 secTwoRowOne ">
                    <!-- d-none d-sm-none d-md-block d-lg-block -->
        <div class="col-md-6 p-5">
            <div class="container ">
                <h4><?php echo get_field('title_one')?></h4>
                <p class="text-justify">
                    <?php echo get_field('first_message')?>
                </p>
                <a href="<?php echo esc_url(site_url('/services'))?>" class="btn btn-lg btnPurple lightGrey josefinLight">Learn More</a>
            </div>
        </div>
        <div class="col-md-6 p-5 d-none d-sm-none d-md-block d-lg-block">
            <div class="container p-5">
                <img class="img-fluid my-5" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
            </div>
        </div>
    </div>
    <div class="row  py-5 secTwoRowTwo">
        <div class="col-md-6 p-5 unskew d-none d-sm-none d-md-block d-lg-block">
            <div class="container px-5">
                <img class="img-fluid my-5" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
            </div>
        </div>
        <div class="col-md-6 p-5 unskew">
            <div class="container ">
                <h4><?php echo get_field('title_two')?></h4>
                <p class="text-justify">
                    <?php echo get_field('second_message')?>
                </p>
                <a href="<?php echo esc_url(site_url('/services'))?>" class="btn btn-lg btnPurple lightGrey josefinLight">Learn More</a>
            </div>
        </div>
    </div>
    <div class="row pt-5 secTwoRowThree">
        <div class="col-md-6 p-5">
            <div class="container">
                <h4><?php echo get_field('title_three')?></h4>
                <p class="text-justify">
                    <?php echo get_field('third_message')?>
                </p>
                <a href="<?php echo esc_url(site_url('/services'))?>" class="btn btn-lg btnPurple lightGrey josefinLight">Learn More</a>
            </div> 
        </div>
        <div class="col-md-6 d-none d-sm-none d-md-block d-lg-block">
            <div class="container p-5">
                <img class="img-fluid my-5" src="<?php echo get_theme_file_uri('assets/img/a3.png')?>" alt="">
            </div>
    </div>
        </div>

        
    </div>
</div>