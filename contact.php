<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

    <section class="row contactcontainer">
      <div class="contactcontainer">
          <div class="six columns">

              <div class="contactimage">
                  <?php dynamic_sidebar('Contact Image Widget'); ?>
              </div>

              <div class="contactinfo">
                  <?php dynamic_sidebar('Contact Info Widget'); ?>
              </div>

          </div>

          <div class="six columns">

            <div class="contactform">
                <?php dynamic_sidebar('Contact Form Widget'); ?>
            </div>

          </div>
      </div>
    </section>

<?php get_footer(); ?>
