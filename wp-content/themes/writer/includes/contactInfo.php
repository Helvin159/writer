<div class="container-fluid">
    <div class="row contactDetailsRow">
        <div class="col-lg-6">
            <div class="container">
                <h1>Contact Me</h1>
                <p>
                    <?php the_excerpt();?>
                </p>
            </div>
            <div class="container contactDetails">
                <ul>

                    <?php if(get_field('address')){
                        if(get_field('googlemaps_link')){?>
                            <li>
                                <b>Address</b><br>
                                <a href="<?php get_field('googlemaps_link')?>"><?php echo get_field('address')?><br></a>
                                <a href="<?php get_field('googlemaps_link')?>"><?php echo get_field('city'); echo ', '; echo  get_field('state'); echo ' '; echo get_field('zip_code');?></a>
                                
                            </li>
                        <?php }else{ ?>
                                <li>
                                    <b>Address</b><br>
                                    <?php echo get_field('address')?><br>
                                    <?php echo get_field('city'); echo ', '; echo  get_field('state'); echo ' '; echo get_field('zip_code');?>
                                </li>
                            <?php }
                        
                    } ?>
                        
                    <li>
                        <b>Phone</b><br>
                        <a href="tel:<?php echo get_field('phone')?>"><?php echo get_field('phone')?></a>
                    </li>
                    <li>
                        <b>Email</b><br>
                        <a href="mailto:<?php echo get_field('email')?>"><?php echo get_field('email')?></a>
                    </li>
                    
                </ul>
            </div>
        </div>
            <div class="col-lg-6">
                <img class="img-fluid contactImg" src="<?php echo get_field('extra_image')?>" alt="">
            </div>
    </div>
</div>