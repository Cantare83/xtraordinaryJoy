<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="nine columns">
        <h2>Archives</h2>
        <?php if ( have_posts() ) : ?>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>

    <div class="three columns">
        <h3>Archives by Month:</h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <h3>Archives by Category:</h3>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>
