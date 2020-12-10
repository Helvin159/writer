<div class="container-fluid banner" >
        <div class="container fadeIn beforeLoad bannerText text-center">
        <?php 
            $blog_uri = $_SERVER['REQUEST_URI'];
                if(strpos($blog_uri, '/blog/') !== false){ ?>
                        <h1 class="display-3">Blog</h1>
                    <?php } else { ?>
                        <?php if($_SERVER['REQUEST_URI'] == '/prevwork/' or $_SERVER['REQUEST_URI'] == '/services/'){ ?>
                            <h1 class="display-3"><?php echo substr(get_the_archive_title(),10)?></h1>
                        <?php }else{ ?>
                            <h1 class="display-3"><?php the_title()?></h1>
                        <?php }
                        ?>
                    <?php } ?>    
            </div>
        </div>