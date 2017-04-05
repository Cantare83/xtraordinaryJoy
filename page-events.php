<?php

/* Template Name: Events Page */

get_header(); ?>
<!-- Events Header Section -->
    <section class="row-Eventshead">
      <div class="events1">
        <div class="twelve columns">
            <?php dynamic_sidebar('eventstop-widget'); ?>
          <div class="eventstitle">
              <h3>We Put the Fun in Fundraising!</h3>
          </div>
        </div>
      </div>
    </section>
<!-- End events header section -->
<!-- Events Foosball Section -->
    <section class="row events-foosball">
        <div class="six columns">
              <?php dynamic_sidebar('eventsfoosball-widget'); ?>
        </div>
        <div class="six columns">
          <?php dynamic_sidebar('events2-widget'); ?>
        </div>
    </section>
<!-- End foosball section -->
<!-- Ball Section -->
    <section class="row events-ball">
     <!--<div class="events-ball"> -->
        <div class="six columns">
            <?php dynamic_sidebar('events3-widget'); ?>
        </div>
        <div class="six columns">
              <?php dynamic_sidebar('eventsmball-widget'); ?>
        </div>
    <!--</div> -->
  </section>
<!-- End Ball Section -->
<!-- End of Become a Sponsor Section -->
  <section class="row">  <!-- Sponsor Section -->
    <div class="sponsorsection">
      <div class="tweleve columns">
        <?php dynamic_sidebar('sponsortext-widget'); ?>
      </div>
    </div>
  </section>
  <section class="row sponsors1"> <!--Sponsor Boxes 4-->
      <div class="six columns">
        <?php dynamic_sidebar('sponsor1-widget'); ?>
      </div>
      <div class="six columns">
        <?php dynamic_sidebar('sponsor2-widget'); ?>
      </div>
  </section>
  <section class="row sponsors2">
      <div class="six columns">
        <?php dynamic_sidebar('sponsor3-widget'); ?>
      </div>
      <div class="six columns">
        <?php dynamic_sidebar('sponsor4-widget'); ?>
      </div>
  </section>
<?php get_footer(); ?>
