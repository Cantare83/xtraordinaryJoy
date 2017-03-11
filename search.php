<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="row">
    <div class="nine columns">
        <?php if( have_posts() ) :?>
            <h1><?php printf(
                __('Search Results for: %s'),
                '<span class="searchresult">' . get_search_query() . '</span>' );
            ?></h1>
            <?php
            while (have_posts()) : the_post(); ?>
              <div class="search">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(__('Continue reading »','example')); ?>
                <div class="readmore">
                    <p><a class="button" href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
              </div>
            <?php endwhile;
         else : ?>
            <h1>Nothing Found</h1>
            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>
    </div>
    <div class="three columns">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
