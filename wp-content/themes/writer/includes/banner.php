<div class="container-fluid banner" >
        <div class="container fadeIn beforeLoad bannerText text-center">
        <?php 
                if($_SERVER['REQUEST_URI'] == '/blog/'){ ?>
                        <h1 class="display-3">Blog</h1>
                    <?php } else if($_SERVER['REQUEST_URI'] == '/prevwork/'){ ?>
                        <h1 class="display-3">My Previous Work</h1>
                    <?php }else if($_SERVER['REQUEST_URI'] == '/services/'){ ?>
                        <h1 class="display-3">Services</h1>
                        <?php }else { ?>
                        <h1 class="display-3"><?php the_title()?></h1>
                    <?php } ?>    
            </div>
        </div>