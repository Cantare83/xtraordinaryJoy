<div class="footer-wrapper">
  <footer class="footer-container">
  <!-- Begin Research & Resources -->
    <section class="row footerResources">
      <div class="resourcesbox">
        <div class="researchtitle">
          <h3>Research and Resources</h3>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('resources1-widget'); ?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('resources2-widget'); ?>
        </div>
        <div class="four columns">
            <?php dynamic_sidebar('resources3-widget'); ?>
        </div>
      </div>
  </section>
          <!-- End Research and Resources -->

         <!-- Begin Sponsor Links  -->
    <section class="row footerLogos">
      <div class="twelve columns">
          <?php dynamic_sidebar('footer-four'); ?>
      </div>
    </section>
          <!-- End Sponsor Links -->

          <!-- Begin Footer Contact Space -->
  <section class="row footerContact">
    <div class="four columns">
        <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/xtraordinaryJoyLogo.png" alt="Xtraordinary Joy Logo" /></a>
          <!-- Address and contact widget here? <?php dynamic_sidebar(''); ?> -->
    </div>
    <div class="two columns">
        <a class="button" href="http://www.chrisihendricks.net/xtraordinaryjoy/donations/donate-today/">Donate</a>
    </div>
    <div class="three columns">
        <?php dynamic_sidebar('footer-nav'); ?>
    </div>
    <div class="three columns">
        <?php dynamic_sidebar('footer-nav2'); ?>
    </div>
  </section>
          <!-- End Footer Contact Space -->
          <!-- Copyright -->
  <section class="copyrightinfo">
    <div class="twelve columns">
      <h6>&copy; 2017 Xtraordinary Joy Inc. All Rights Reserved. Designed by ACA Creative.</h6>
    </div>
  </section>
      <!-- End Copyright -->
  </footer>
</div>
</body>
</html>
