<?php get_header(); ?>

<!-- Begin Main Content -->
<section class="row hpIntro">  <!-- Intro Section -->
    <div class="six columns">
      <?php dynamic_sidebar('home-intro1-widget'); ?>
    </div>
    <div class="six columns">
      <?php dynamic_sidebar('home-intro2-widget'); ?>
    </div>
</section>
<section class="row hpAbout">  <!-- About Section -->
    <div class="five columns">
      <?php dynamic_sidebar('home-about1-widget'); ?>
    </div>
    <div class="seven columns">
      <?php dynamic_sidebar('home-about2-widget'); ?>
    </div>
</section>
<!-- Become a Sponsor Section -->
<section class="row">
    <div class="events-difference">
      <div class="six columns">
        <?php dynamic_sidebar('home-sponsor-image-widget'); ?>
      </div>
      <div class="six columns">
            <?php dynamic_sidebar('home-sponsor-text-widget'); ?>
      </div>
    </div>
</section>
<!-- End of Become a Sponsor Section -->
<section class="row hpEvents">  <!-- Events Section -->
    <div class="five columns">
      <?php dynamic_sidebar('home-events2-widget'); ?>
    </div>
    <div class="seven columns">
      <?php dynamic_sidebar('home-events1-widget'); ?>
    </div>
</section>
<!-- End Main Content -->

<?php get_footer(); ?>
