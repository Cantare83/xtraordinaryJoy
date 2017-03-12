<div class="footer-wrapper">
  <footer class="footer-container">
  <!-- Begin Research & Resources -->
    <section class="row footerResources">
        <div class="researchtitle">
          <h3>Research and Resources</h3>
        </div>
        <div class="resourcesbox">
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
          <div class="address">
           <ul>
              <li>Xtraordinary Joy Inc.</li>
              <li>2603 NW 13th St. Suite 327</li>
              <li>Gainesville, FL 32609 US</li>
              <li><a href="mailto:info@xtraordinaryjoy.org">info@xtraordinaryjoy.org</a></li>
          </ul>
        </div>
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
  <section class="copyright-text">
      <div class="twelve columns">
        <div class="copyright">
          <p>&copy; 2017 Xtraordinary Joy Inc. All Rights Reserved. Designed by ACA Creative.</p>
        </div>
      </div>
  </section>
          <!-- End Footer Contact Space -->
  </footer>
</div>
</body>
</html>
