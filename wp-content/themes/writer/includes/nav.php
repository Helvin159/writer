<nav class="headerNav josefinLight fontSize22 navbar navbar-expand-lg navbar-dark ">
  <a class="navBrand navbar-brand darkPurple pl-5" href="<?php echo esc_url(site_url('/'))?>">Danielle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="far fa-compass fontSize30"></i></span>
  </button>

  <div class="collapse navbar-collapse px-0 headerNavMenu" id="navbarSupportedContent">
    <?php wp_nav_menu( array( 
      'theme_location' => 'header-menu',
      'container' => false,
      'menu_class' => 'navbar-nav m-auto pr-5 mr-5 lightgrey header-menu-nav',

     ) ); ?>
  </div>

    <!-- ********************** Placeholder ******************** -->
      <!-- <i class="searchIcon fas fa-search fontSize30 px-5 lightGrey"></i> -->
    <!-- ********************** Placeholder ******************** -->
</nav>