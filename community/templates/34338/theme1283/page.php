<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="grid_16">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
      <article>
        <h1><?php the_title(); ?></h1>
        <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?> <!-- loades the post's featured thumbnail, requires Wordpress 3.0+ -->
  
        <div id="page-content">
          <?php the_content(); ?>
          <div class="pagination">
            <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
          </div><!--.pagination-->
        </div><!--#pageContent -->
      </article>
    </div><!--#post-# .post-->

  <?php endwhile; ?>
</div><!--#content-->
<?php get_footer(); ?>