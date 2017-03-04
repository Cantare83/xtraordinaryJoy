<!--
Template Name: Blog
-->

<?php get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<div class="blogcontainer">
    <div class="row">
		<div class="twelve columns">
			   <div class="eight columns">
		         <?php
                if (have_posts() ) :
		                while (have_posts()) : the_post();
					   ?>

             <div class="blogposts">
                 <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                    }
                 ?>

                 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		             <?php the_excerpt(__('Continue reading »','example')); ?>
				         <p><a class="button" href="<?php the_permalink(); ?>">Read More</a></p>
            </div>

		                <?php endwhile; ?>

		            <?php else: ?>

						<div class="404-section">
		                    <p><?php _e('None found.','example'); ?></p>
		                </div>
		            <?php endif; wp_reset_query(); ?>
        </div>

        <div class="four columns">
  				<?php get_sidebar(); ?>
  			</div>
		</div>
    </div>
</div>

<?php get_footer(); ?>
