<?php get_header(); ?>

<!-- Begin Main Content -->
<section class="row">  <!-- Intro Section -->
    <div class="four columns">
      <?php dynamic_sidebar('home-intro1-widget'); ?>
    </div>
    <div class="eight columns">
      <?php dynamic_sidebar('home-intro2-widget'); ?>
    </div>
</section>
<section class="row">  <!-- About Section -->
    <div class="five columns">
      <?php dynamic_sidebar('home-about1-widget'); ?>
    </div>
    <div class="seven columns">
      <?php dynamic_sidebar('home-about2-widget'); ?>
    </div>
</section>
<section class="row">  <!-- Events Section -->
    <div class="eight columns">
      <?php dynamic_sidebar('home-events1-widget'); ?>
    </div>
    <div class="four columns">
      <?php dynamic_sidebar('home-events2-widget'); ?>
    </div>
</section>
<section class="row">  <!-- Resources Section -->
    <div class="four columns">
      <?php dynamic_sidebar('home-resources1-widget'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('home-resources2-widget'); ?>
    </div>
    <div class="three columns">
      <?php dynamic_sidebar('home-resources3-widget'); ?>
    </div>
</section>
<!-- End Main Content -->

<?php get_footer(); ?>
