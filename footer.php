        <footer class="row">
          <!-- Begin Research & Resources -->
          <div class="researchtitle">
            <h1>Research and Resources</h1>
          </div>

            <div class="four columns">
                <?php dynamic_sidebar('footer-one'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('footer-two'); ?>
            </div>

            <div class="four columns">
                <?php dynamic_sidebar('footer-three'); ?>
            </div>
            <!-- End Research and Resources -->

            <!-- Begin Footer Contact Space -->
            <div class="five columns">
                <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/xtraordinaryJoyLogo.png" alt="Xtraordinary Joy Logo" /></a>
                <!-- Address and contact widget here? <?php dynamic_sidebar(''); ?> -->
            </div>

            <div class="three columns">
                <a class="button" href="http://www.chrisihendricks.net/wie-final2016/contact-us/">Donate</a>
            </div>

            <!-- End Footer Contact Space -->

            <!-- Begin Sponsor Links  -->

            <!-- End Sponsor Links -->

        </footer>
      </div> <!-- End Container Div -->
      <?php wp_footer(); ?>
    </body>
</html>
