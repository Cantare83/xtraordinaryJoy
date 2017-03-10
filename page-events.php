<?php

/* Template Name: Events Page */

get_header(); ?>
<!-- Events Header Section -->
    <section class="row Eventshead">
      <div class="twelve columns">
          <?php dynamic_sidebar('eventstop-widget'); ?>
        <div class="eventstitle">
            <h3>We Put the Fun in Fundraising!</h3>
        </div>
      </div>
    </section>
<!-- End events header section -->
<!-- Events Foosball Section -->
    <section class="row Eventsfoosball">
      <div class="five columns">
      </div>
      <div class="seven columns">
        <?php dynamic_sidebar('events2-widget'); ?>
      </div>
    </section>
<!-- Dnd foosball section -->
<!-- Ball Section -->
    <section class="row Eventsfoosball">
      <div class="five columns">
      </div>
      <div class="seven columns">
        <?php dynamic_sidebar('events2-widget'); ?>
      </div>
    </section>
<!-- End Ball Section -->

<?php get_footer(); ?>
