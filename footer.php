<div class="footer-wrapper">
  <footer class="footer-container">
    <div class="row">
        <!-- Begin Research & Resources -->
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
          <!-- End Research and Resources -->

         <!-- Begin Sponsor Links  -->
    <div class="row">
      <div class="twelve columns">
          <?php dynamic_sidebar('footer-four'); ?>
      </div>
    </div>
          <!-- End Sponsor Links -->
          <!-- Begin Footer Contact Space -->
    <div class="row">
      <div class="eight columns">
          <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/xtraordinaryJoyLogo.png" alt="Xtraordinary Joy Logo" /></a>
          <!-- Address and contact widget here? <?php dynamic_sidebar(''); ?> -->
      </div>
      <div class="four columns">
          <a class="button" href="http://www.chrisihendricks.net/wie-final2016/contact-us/">Donate</a>
      </div>
    </div>
          <!-- End Footer Contact Space -->
  </footer>
</div>
</body>
</html>
