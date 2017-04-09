<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
          <!-- Links to our Style.css file -->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
    </head>
    <body>
      <div class="container"> <!-- Begin Container Div -->
        <header>
          <section class="row">
            <div class="five columns">
                <a href="<?php $url = home_url('/'); echo $url; ?>"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/images/xtraordinaryJoyLogo.png" alt="Xtraordinary Joy Logo" /></a>
            </div>
            <div class="four columns headerInfo">
              <p><a href="mailto:xtraordinaryjoy.org" target="_blank">info@xtraordinaryjoy.org</a></p>
            </div>
            <div class="three columns">
              <a class="button" href="http://www.chrisihendricks.net/xtraordinaryjoy/donations/donate-today/">Donate</a>
            </div>
          </section>
          <section class="row headerNav">
              <nav class="twelve columns">
                <a class="mobile_menu" title="menu" href="#"></a>
                  <?php
                      wp_nav_menu( array(
                          'sort_column' => 'menu-order',
                          'container_class' => 'menu-header'
                      ));
                  ?>
              </nav>
            </section>
        </header>
