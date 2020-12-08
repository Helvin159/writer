<div class="container-fluid frontHero">
            <div class="container beforeLoad fadeIn frontHeroText text-center">
                <h1 ><?php echo strtoupper(get_field('hero_text_line_1'))?></h1>
                <h3 ><?php echo strtoupper(get_field('hero_text_line_2'))?></h3>
                <a href="<?php echo esc_url(site_url('/packages'))?>" class="btn btn-md btnDarkPurple lightGrey my-4"><?php echo get_field('hero_button_text')?></a>  
            </div>
        </div>