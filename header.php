<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
          <!-- Links to our Style.css file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    </head>
    <body>
      <div class="container"> <!-- Begin Container Div -->
        <header>
          <section class="row">
            <div class="five columns">
                <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/xtraordinaryJoyLogo.png" alt="Xtraordinary Joy Logo" /></a>
            </div>
            <div class="four columns">
              <p>info@xtraordinaryjoy.org</p>
            </div>
            <div class="three columns">
              <a class="button" href="http://www.chrisihendricks.net/wie-final2016/contact-us/">Donate</a>
            </div>
          </section>
          <section class="row">
              <div class="twelve columns">
                  <?php
                      wp_nav_menu( array(
                          'sort_column' => 'menu-order',
                          'container_class' => 'menu-header'
                      ));
                  ?>
              </div>
            </section>
        </header>
