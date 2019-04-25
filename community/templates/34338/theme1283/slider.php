<div id="slider" class="nivoSlider">
	<?php
		query_posts("post_type=slider&post_status=publish&posts_per_page=-1");
		while ( have_posts() ) : the_post();
	?>
	<?php
		$custom = get_post_custom($post->ID);
		$sl_thumb = $custom["thumb"][0];
		$sl_caption = $custom["caption"][0];
	?>
  <?php if(has_post_thumbnail( $the_ID) || $sl_thumb!=""){ ?>
  <?php 
		if($sl_thumb!=""){
			echo "<img src='" . $sl_thumb . "' alt='' title='" . $sl_caption . "' />";
		} else{
			the_post_thumbnail( 'slider-post-thumbnail' );
		}
		?>
  <?php } ?>
  <?php endwhile; ?>
</div>
<?php wp_reset_query();?>