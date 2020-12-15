<div class="container-fluid bgBlack">
    <div class="container pt-5 pb-2">
        <h3 class="lightGrey">Related Information</h3>
        <hr class=" lightGrey bgLightGrey">
    </div>
    <div class="container">
        <div class="row">
        <div class="col-md-4 links">
            <?php 
            $classes = 'navbar-nav m-auto lightGrey lindenHillRegular fontSize20'; 

            wp_nav_menu( array( 
                'menu' => 'related-links-col-1',
                'container' => false,
                'menu_class' => $classes,
                'menu_id' => 'rellinksmenu',      
            ) ); ?>
        </div>
        <div class="col-md-4 links">
            <?php wp_nav_menu( array( 
                'menu' => 'related-links-col-2',
                'container' => false,
                'menu_class' => $classes,
      
            ) ); ?>
        </div>
        <div class="col-md-4 links">
            <?php wp_nav_menu( array( 
                'menu' => 'related-links-col-3',
                'container' => false,
                'menu_class' => $classes,
            ) ); ?>
        </div>
    </div>
    </div>
    
</div>