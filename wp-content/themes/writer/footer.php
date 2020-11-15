

<?php 
  // echo $_SERVER['REQUEST_URI'];
  require_once('includes/rellinks.php')
?>
<!-- Just an image -->
<nav class="footerNav navbar navbar-dark bg-dark">
  <a class="navbar-brand josefinLight fontSize28" href="#">
    Danielle
    <!-- <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" loading="lazy"> -->
  </a>
</nav>


  <?php 
    require_once('includes/overlay.php');
    
    if($_SERVER['REQUEST_URI'] != '/book-a-meeting/' and $_SERVER['REQUEST_URI'] != '/pages/writer/book-a-meeting/'){
      require_once('includes/calendlyBtn.php');
    }

    
    wp_footer();

?>
</body>
</html>