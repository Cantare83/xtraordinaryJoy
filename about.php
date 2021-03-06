<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
    <div class="about-container">
      <section class="row aboutTop">
        <div class="six columns">
            <?php dynamic_sidebar('about-image1-widget'); ?>
        </div>
        <div class="six columns">
            <?php dynamic_sidebar('about-copy1-widget'); ?>
        </div>
      </section>
      <section class="row aboutBottom">
        <div class="seven columns">
            <?php dynamic_sidebar('about-copy2-widget'); ?>
        </div>
        <div class="five columns">
            <?php dynamic_sidebar('about-image2-widget'); ?>
        </div>
      </section>
    </div>

<?php get_footer(); ?>
