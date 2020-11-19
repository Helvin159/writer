<div class="container-fluid aboutSecThree text-center py-5">
    <div class="container ">
        <h1>My Skills</h1>
    </div>
    <hr class="w-25">
    <div class="container py-5">
        <p>
            <?php echo get_field('my_skills_text_area')?>
        </p>
    </div>
    <div class="container ">
        <div class="row px-5">
            <div class="col-sm-6 text-left">
                <p>
                    <?php echo get_field('my_skills_text_area_before_skills')?>
                </p>

                <div class="container">
                    <a href="<?php echo esc_url(site_url('/prevwork'))?>" class="btn btnDarkPurple josefinLight lightGrey">View Samples</a>
                </div>
            </div>
            <div class="col-sm-6 text-left ratingBars">
                <ul>
                    <li class="py-2">
                        <input id="ratingBarOne" type="hidden" value="<?php echo get_field('skill_rating_one')?>">
                        <h5><b><?php echo get_field('skill_rating_one_title')?></b></h5>
                        <div class="ratingBar bgPurple "></div>
                    </li>
                    <li class="py-2">
                        <input id="ratingBarTwo" type="hidden" value="<?php echo get_field('skill_rating_two')?>">
                        <h5><b><?php echo get_field('skill_rating_two_title')?></b></h5>
                        <div  class="ratingBar bgPurple "></div>
                    </li>
                    <li class="py-2">
                        <input id="ratingBarThree" type="hidden" value="<?php echo get_field('skill_rating_three')?>">
                        <h5><b><?php echo get_field('skill_rating_three_title')?></b></h5>
                        <div  class="ratingBar bgPurple "></div>
                    </li>
                    <li class="py-2">
                        <input id="ratingBarFour" type="hidden" value="<?php echo get_field('skill_rating_four')?>">
                        <h5><b><?php echo get_field('skill_rating_four_title')?></b></h5>
                        <div  class="ratingBar bgPurple "></div>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</div>