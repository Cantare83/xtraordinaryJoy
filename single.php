<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">

<!-- Begin Page PHP -->
            <?php if( have_posts() ) {
              while( have_posts() ) {
                the_post();

                if ( has_post_thumbnail() ) { ?>
                  <div class="posttitle">
                      <div class="four columns postimage">
                          <?php the_post_thumbnail('thumbnail'); ?>
                      </div>

                      <?php } ?>

                      <div class="eight columns">
                        <h3><?php the_title(); ?></h3>
                      </div>
                </div>
                <?php the_content(); ?>
                <?php add_breadcrumbs(); ?>
            <?php
              }
            }
            ?>
<!-- End Page PHP -->

        </div>

        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
    </section>

<?php get_footer(); ?>
