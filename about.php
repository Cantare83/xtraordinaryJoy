<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
    <div class="container">
      <section class="row">
        <div class="twelve columns">
            <?php dynamic_sidebar('about-header-widget'); ?>
        </div>
      </section>
      <section class="row">
        <div class="five columns">
            <?php dynamic_sidebar('about-image1-widget'); ?>
        </div>
        <div class="seven columns">
            <?php dynamic_sidebar('about-copy1-widget'); ?>
        </div>
      </section>
      <section class="row">
        <div class="seven columns">
            <?php dynamic_sidebar('about-copy2-widget'); ?>
        </div>
        <div class="five columns">
            <?php dynamic_sidebar('about-image2-widget'); ?>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
