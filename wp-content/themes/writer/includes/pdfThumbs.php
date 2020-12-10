<?php    
        if(get_field('pdf')){ ?>
            <div class="container ">
                <?php if(get_field('image_one')){ ?>
                    <div class="container py-5">
                        <h3><span><i class="far fa-file-pdf px-2"></i></span> PDF Files</h3>
                    </div>
                <div class="row">
                    <?php 
                    
                        if(get_field('pdf')){ ?>
                            <div class=" text-center <?php 
                                if(get_field('pdf3')){
                                echo 'col-md-6 my-2 col2ImgSize'; 
                                }else if( get_field('pdf2')){
                                echo 'col-md-6 my-2 col3ImgSize';
                                }else if (get_field('pdf1')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if(get_field('pdf')) {
                                echo 'col-md-6 my-2 col6ImgSize';
                                }                            
                            ?>" >
                            
                                <h4>File 1</h4>
                                <i class="far fa-file-pdf pdfThumbnails" src="<?php echo get_field('pdf')?>"></i>
                            </div>
                    <?php } 

                    if(get_field('pdf1')){ ?>
                            <div class=" text-center <?php 
                                if(get_field('pdf3')){
                                echo 'col-md-6 my-2 col4ImgSize'; 
                                }else if( get_field('pdf2')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if (get_field('pdf1')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if(get_field('pdf')) {
                                echo 'col-md-6 my-2 col4ImgSize';
                                }                            
                            ?>" >
                            <h4>File 2</h4>
                            <i class="far fa-file-pdf pdfThumbnails" src="<?php echo get_field('pdf1')?>"></i>
                        </div>
                    <?php } 

                    if(get_field('pdf2')){ ?>
                            <div class=" text-center <?php 
                                if(get_field('pdf3')){
                                echo 'col-md-6 my-2 col4ImgSize'; 
                                }else if( get_field('pdf2')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if (get_field('pdf1')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if(get_field('pdf')) {
                                echo 'col-md-6 my-2 col4ImgSize';
                                }                            
                            ?>" >
                            <h4>File 3</h4>
                            <i class="far fa-file-pdf pdfThumbnails" src="<?php echo get_field('pdf2')?>"></i>
                        </div>
                    <?php } 

                    if(get_field('pdf3')){ ?>
                            <div class=" text-center <?php 
                                if(get_field('pdf3')){
                                echo 'col-md-6 my-2 col4ImgSize'; 
                                }else if( get_field('pdf2')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if (get_field('pdf1')){
                                echo 'col-md-6 my-2 col4ImgSize';
                                }else if(get_field('pdf')) {
                                echo 'col-md-6 my-2 col4ImgSize';
                                }                            
                            ?>" >
                            <h4>File 4</h4>
                            <i class="far fa-file-pdf pdfThumbnails" src="<?php echo get_field('pdf3')?>"></i>
                        </div>
                    <?php } 
                    
                    ?>

                </div>
            <?php } ?>
        </div>
        <?php } ?>