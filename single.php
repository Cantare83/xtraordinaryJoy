<?php get_header(); ?>

    <section class="row postcontainer">
        <div class="nine columns">

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

                      <div class="seven columns">
                        <h3><?php the_title(); ?></h3>
                      </div>
                </div>
                <?php the_content(); ?>

                <div class ="postlinks">
                    <ul>
                        <li><?php previous_post_link(); ?></li>
                        <li><?php next_post_link(); ?></li>
                    </ul>
                </div>

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
