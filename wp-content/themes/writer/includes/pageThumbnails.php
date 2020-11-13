<?php 

        if(get_field('image_one')){ ?>

        
        <div class="container prevWorkImgs">
            <?php if(get_field('image_one')){ ?>
                <div class="container py-5">
                    <h1>Some Pictures...</h1>
                </div>
            <div class="row">
                <?php if(get_field('image_one')){ ?>
                    <div class="prevWorkThumbnails <?php if(get_field('image_five')){
                                    echo 'col-md-2 col2ImgSize';
                                    }else if( get_field('image_four')){
                                    echo 'col-md-3 col3ImgSize';
                                    }else if (get_field('image_three')){
                                    echo 'col-md-4 col4ImgSize';
                                    }else if(get_field('image_one')) {
                                    echo 'col-md-6 col6ImgSize';
                                    } ?>">
                        <img class="img-fluid" src="<?php 
                        $value = get_field('image_one');
                        echo $value; ?>" alt="">
                    </div>
                <?php } ?>
                <?php if(get_field('image_two')){ ?>
                    <div class="prevWorkThumbnails <?php if(get_field('image_five')){
                                    echo 'col-md-2 col2ImgSize';
                                    }else if( get_field('image_four')){
                                    echo 'col-md-3 col3ImgSize';
                                    }else if (get_field('image_three')){
                                    echo 'col-md-4 col4ImgSize';
                                    }else if(get_field('image_one')) {
                                    echo 'col-md-6 col6ImgSize';
                                    } ?>">
                        <img class="img-fluid" src="<?php 
                        $value = get_field('image_two');
                        echo $value; ?>" alt="">
                    </div>
                <?php }
                        ?>
                <?php if(get_field('image_three')){ ?>
                    <div class="prevWorkThumbnails <?php if(get_field('image_five')){
                                    echo 'col-md-2 col2ImgSize';
                                    }else if( get_field('image_four')){
                                    echo 'col-md-3 col3ImgSize';
                                    }else if (get_field('image_three')){
                                    echo 'col-md-4 col4ImgSize';
                                    }else if(get_field('image_one')) {
                                    echo 'col-md-6 col6ImgSize';
                                    } ?>">
                        <img class="img-fluid" src="<?php 
                        $value = get_field('image_three');
                        echo $value; ?>" alt="">
                    </div>
                <?php }
                        ?>                
                <?php if(get_field('image_four')){ ?>
                    <div class="prevWorkThumbnails <?php if(get_field('image_five')){
                                    echo 'col-md-2 col2ImgSize';
                                    }else if( get_field('image_four')){
                                    echo 'col-md-3 col3ImgSize';
                                    }else if (get_field('image_three')){
                                    echo 'col-md-4 col4ImgSize';
                                    }else if(get_field('image_one')) {
                                    echo 'col-md-6 col6ImgSize';
                                    } ?>">
                        <img class="img-fluid" src="<?php 
                        $value = get_field('image_four');
                        echo $value; ?>" alt="">
                    </div>
                <?php }
                        ?>
                <?php if(get_field('image_five')){ ?>
                    <div class="prevWorkThumbnails <?php if(get_field('image_five')){
                                    echo 'col-md-2 col2ImgSize';
                                    }else if( get_field('image_four')){
                                    echo 'col-md-3 col3ImgSize';
                                    }else if (get_field('image_three')){
                                    echo 'col-md-4 col4ImgSize';
                                    }else if(get_field('image_one')) {
                                    echo 'col-md-6 col6ImgSize';
                                    } ?>">
                        <img class="img-fluid" src="<?php 
                        $value = get_field('image_five');
                        echo $value; ?>" alt="">
                    </div>
                <?php }
                        ?>
            </div>
            <?php } ?>

        </div>
        <?php } ?>