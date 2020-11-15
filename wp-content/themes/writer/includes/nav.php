<nav class="headerNav josefinLight fontSize22 navbar navbar-expand-lg navbar-dark " >
  <a class="navBrand navbar-brand darkPurple pl-5" href="<?php echo esc_url(site_url('/'))?>">Danielle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse px-0" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto pr-5">
      <li class="nav-item <?php if($_SERVER['REQUEST_URI'] == '/' ){ echo 'active'; }?>">
        <a class="nav-link" href="<?php echo esc_url(site_url('/'))?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php if($_SERVER['REQUEST_URI'] == '/blog/' ){ echo 'active'; }?>">
        <a class="nav-link" href="<?php echo esc_url(site_url('/blog'))?>">Blog</a>
      </li>      
      <li class="nav-item <?php if($_SERVER['REQUEST_URI'] == '/prevwork/' ){ echo 'active'; }?>">
        <a class="nav-link" href="<?php echo esc_url(site_url('/prevwork'))?>">My Work</a>
      </li>
    </ul>
    </div>

    <!-- ********************** Placeholder ******************** -->
      <!-- <i class="searchIcon fas fa-search fontSize30 px-5 lightGrey"></i> -->
    <!-- ********************** Placeholder ******************** -->
</nav>