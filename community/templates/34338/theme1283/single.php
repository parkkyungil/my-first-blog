<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="grid_16 top-indent">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header>
          <h1><?php the_title(); ?></h1>
          <div class="post-meta">
            <div class="fleft"><?php if (get_post_type()==post) { ?>Posted in: <?php the_category(', ') ?> &nbsp;|&nbsp; <?php } ?><?php the_time('M d'); ?> at <?php the_time() ?></div>
            <div class="fright"><?php comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?></div>
          </div><!--.post-meta-->
        </header>
        <?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ ?>
        <div class="post-content">
          <?php the_content(); ?>
          <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
        </div><!--.post-content-->
      </article>

        

			<?php /* If a user fills out their bio info, it's included here */ ?>
      <div id="post-author">
        <h3>Written by <?php the_author_posts_link() ?></h3>
        <p class="gravatar"><?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); /* This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address */  } ?></p>
        <div id="author-description">
          <?php the_author_meta('description') ?> 
          <div id="author-link">
            <p>View all posts by: <?php the_author_posts_link() ?></p>
          </div><!--#author-link-->
        </div><!--#author-description -->
      </div><!--#post-author-->

    </div><!-- #post-## -->
    
    
    <nav class="oldernewer">
      <div class="older">
        <?php previous_post_link('%link', '&laquo; Previous post') ?>
      </div><!--.older-->
      <div class="newer">
        <?php next_post_link('%link', 'Next Post &raquo;') ?>
      </div><!--.newer-->
    </nav><!--.oldernewer-->

    <?php comments_template( '', true ); ?>

  <?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_footer(); ?>