<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="search grid_16 top-indent">
  <h1><?php echo 'Search for "'; the_search_query(); echo '"'; ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <div class="post-meta">
        <div class="fleft"><?php if (get_post_type()==post) { ?>Posted in: <?php the_category(', ') ?> &nbsp;|&nbsp; <?php } ?><time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('M d'); ?> at <?php the_time() ?></time> , by <?php the_author_posts_link() ?></div>
        <div class="fright"><?php comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?></div>
      </div><!--.post-meta-->
      <a href="<?php the_permalink() ?>" class="featured-thumbnail"><?php the_post_thumbnail(); ?></a>
      
      <div class="post-content">
        <div class="excerpt"><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,50);?></div>
        <a href="<?php the_permalink() ?>" class="button">Read more</a>
      </div>
    </article>

  <?php endwhile; else: ?>
    <div class="no-results">
      <h2>No Results</h2>
      <p>Please feel free try again!</p>
      <?php get_search_form(); ?> <!-- outputs the default Wordpress search form-->
    </div><!--noResults-->
  <?php endif; ?>

  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <nav class="oldernewer">
      <div class="older">
        <?php next_posts_link('&laquo; Older Entries') ?>
      </div><!--.older-->
      <div class="newer">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
      </div><!--.newer-->
    </nav><!--.oldernewer-->
  <?php endif; ?>

</div><!-- #content -->
<?php get_footer(); ?>