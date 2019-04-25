<?php
// =============================== My Recent Posts (News widget) ======================================
class MY_PostWidget extends WP_Widget {
    /** constructor */
    function MY_PostWidget() {
        parent::WP_Widget(false, $name = 'My - Latest News');	
    }

  /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
							<div class="carousel-box latest-news"><a href="#" class="prev"></a><a href="#" class="next"></a>
								<div class="carousel_2">
									<ul class="latestpost">
								<?php query_posts("showposts=12&post_type=post");?>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li>
								
								<span class="smalltext"><?php the_time('M d') ?></span>
								<h4><?php the_title(); ?></h4>
								<p><?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,24);?>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'theme1283');?> <?php the_title_attribute(); ?>">[...]</a></p>
								</li>
								<?php endwhile; endif; ?>
								</ul>
								</div>
						</div>		

								<?php wp_reset_query();?>
								
              <?php echo $after_widget; ?>
			 
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
      $title = esc_attr($instance['title']);
        ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1283'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      
        <?php 
    }

} // class  Widget
?>