<?php
// =============================== My Post Cycle widget ======================================
class MY_CycleWidget extends WP_Widget {
    /** constructor */
    function MY_CycleWidget() {
        parent::WP_Widget(false, $name = 'My - Post Cycle');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$limit = apply_filters('widget_title', $instance['limit']);
				$category = apply_filters('widget_category', $instance['category']);
				$count = apply_filters('widget_count', $instance['count']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php if($category=="testi"){?>
						
						<div class="carousel-box">
							<a href="#" class="prev"></a><a href="#" class="next"></a>
							<div class="carousel">
								<ul class="testimonials">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=". $count ."&post_type=" . $category);?>
								
								<?php while (have_posts()) : the_post(); ?>	
								
									<?php 
									$custom = get_post_custom($post->ID);
									$testiname = $custom["testimonial-name"][0];
									$testiurl = $custom["testimonial-url"][0];
									$post = $custom["testimonial-post"][0];
									?>
								
								<li class="testi_item">

								<?php if($limittext=="" || $limittext==0){ ?>
									<div class="name-testi">
									 <a class="user" href="http://<?php echo $testiurl; ?>"><?php echo $testiname; ?></a> <?php if ($post!="") { ?> <em>(<?php echo $post; ?>)</em> <?php } ?>
									 </div>
									<blockquote class="quote">
										<?php the_excerpt(); ?>
                  </blockquote>
									 
								<?php }else{ ?>
									<div class="name-testi">
									 <a class="user" href="http://<?php echo $testiurl; ?>"><?php echo $testiname; ?></a> <?php if ($post!="") { ?> <em>(<?php echo $post; ?>)</em> <?php } ?>
								    </div>
									<blockquote class="quote">
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
                  </blockquote>
									 
								<?php } ?>
								</li>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of testimonials -->
							</div>
						</div>
						
						<?php } elseif($category=="team"){?>
						
						<ul class="team wrapper">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0; $i=1;?>
								<?php query_posts("posts_per_page=" . $count . "&post_type=" . $category . "&portfoliocat=" . $slug);?>
								<?php while (have_posts()) : the_post(); if(($i%6) == 0){ $addclass = "nomargin"; } ?>
								
								<?php 
									$custom = get_post_custom($post->ID);
									$teamname = $custom["team-name"][0];
									$teampost = $custom["team-post"][0];
									?>
									
								<li class="<?php echo $addclass; ?>">
									<a href="<?php the_permalink(); ?>"><figure class="thumb"><?php the_post_thumbnail('medium-post-thumbnail'); ?></figure></a>
												   <h4><a href="<?php the_permalink(); ?>"><?php echo $teamname; ?></a><br />
									<?php echo $teampost; ?></h4>
								</li>
								<?php $i++; $addclass = ""; endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of post_cycle -->	
            
						<?php } else { ?>
						
							<ul class="post_cycle">
								
								<?php $limittext = $limit;?>
								<?php global $more;	$more = 0;?>
								<?php query_posts("posts_per_page=" . $count . "&post_type=" . $category . "&portfoliocat=" . $slug);?>
								<?php while (have_posts()) : the_post(); ?>	
								<li class="cycle_item">
									<?php if($limittext=="" || $limittext==0){ ?>
                  <a href="<?php the_permalink(); ?>"><figure class="featured-thumbnail small"><?php the_post_thumbnail('small-post-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<?php the_excerpt(); ?>
									<?php }else{ ?>
                  <a href="<?php the_permalink(); ?>"><figure class="featured-thumbnail small"><?php the_post_thumbnail('small-post-thumbnail'); ?></figure></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); ?>
									<?php } ?>
								</li>
								<?php endwhile; ?>
                <?php wp_reset_query(); ?>
							</ul>
							<!-- end of post_cycle -->
							<?php }?>
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
			$limit = esc_attr($instance['limit']);
			$category = esc_attr($instance['category']);
			$count = esc_attr($instance['count']);
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1283'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>
      <p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Posts per page:'); ?><input class="widefat" style="width:30px; display:block; text-align:center" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Post Type:', 'theme1283'); ?><br />

      <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:150px;" > 
      <option value="testi" <?php echo ($category === 'testi' ? ' selected="selected"' : ''); ?>>Testimonials</option>
	 <option value="team" <?php echo ($category === 'team' ? ' selected="selected"' : ''); ?>>Our team</option>
      <option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
      </select>
      </label></p>
      <?php 
    }

} // class Cycle Widget


?>