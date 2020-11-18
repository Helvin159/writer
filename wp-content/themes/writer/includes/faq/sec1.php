<div class="container-fluid p-5">
    <div class="container p-5 bgLightGrey">
        <p>
            <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis est voluptas nobis corporis ab ratione sed.</b>
            <br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque consectetur unde doloremque enim consequatur quo, nam commodi facere recusandae id voluptatem, itaque ad, hic soluta dolore suscipit nisi maiores eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ex quibusdam iusto aliquid non temporibus sunt voluptatum eligendi quae sapiente illum, veniam dicta eveniet corporis dolore quod harum laboriosam omnis!
        </p>
    </div>
    <div class="container p-5">
        <ul>
            <?php 
            $showChildren = new WP_Query(array(
                'post_type' => 'page',
                'post_per_page' => 10,
                'post_parent' =>  $post->ID,
                // 'child_of' => $post->ID,
                'order' => 'DESC',
                'orderby' => 'menu_order'
            ));

            while($showChildren->have_posts()){
                $showChildren->the_post()?>
                    <li class="py-4 fontSize20 josefinRegular"><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
            <?php }
            wp_reset_postdata();
            ?>

        </ul>
    </div>
</div>