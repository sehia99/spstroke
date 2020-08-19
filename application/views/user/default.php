<!DOCTYPE html>
<html lang="en">
  <?php include 'partials/head.php' ?>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    


<?php include 'partials/header.php' ?>
 <div class="site-section">
 <?php echo $content; ?>
    </div>
  
  

<!--     
  <?php include 'partials/footer.php' ?> -->  
  </div>

  
  <!-- <script src="<?php echo base_url() ?>assets/template/js/jquery-migrate-3.0.1.min.js"></script> -->
  <script src="<?php echo base_url() ?>assets/template/js/jquery-ui.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url() ?>assets/template/js/aos.js"></script>

  <script src="<?php echo base_url() ?>assets/template/js/main.js"></script>
    
  </body>
</html>