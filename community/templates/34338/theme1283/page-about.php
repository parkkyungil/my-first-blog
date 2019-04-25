<?php
/*
 * Template Name: About us
 */

get_header(); ?>

<div class="grid_24">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article>
		<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
      
          <div id="page-content" class="alt">
            <?php the_content(); ?>
          </div><!--#pageContent -->
        </article>
      <?php endwhile; ?>
	 
	 <div class="top-indent extra">
	 <?php if ( ! dynamic_sidebar( 'Latest News' ) ) : ?>
		<!--Widgetized About Us page-->
	   <?php endif; ?>
	   </div>
	   <div class="top-indent extra">
	 <?php if ( ! dynamic_sidebar( 'Our Team' ) ) : ?>
		<!--Widgetized About Us page-->
	   <?php endif; ?>
	   </div>
</div>
	 
<?php get_footer(); ?>
