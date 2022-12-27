

<?php 
  // echo $_SERVER['REQUEST_URI'];
  require_once('includes/rellinks.php')
?>
<!-- Just an image -->
<nav class="footerNav navbar navbar-dark bg-dark">
  <a class="navbar-brand josefinLight fontSize28" href="#">
    Writer
    <!-- <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy"> -->
  </a>
</nav>


  <?php 
    // ************
    // Overlay
    // ************
    require_once('includes/overlay.php');
    
    // ************
    // Calendly
    // ************
    if($_SERVER['REQUEST_URI'] != '/contact/'){
      require_once('includes/calendlyBtn.php');
    }
    // ************
    // Footer Scripts, etc...
    // ************
    wp_footer();

?>
</body>
</html>