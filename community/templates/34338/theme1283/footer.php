     	</div><!--.container-->
	</div>	
	<footer id="footer">
		<div class="container_24 clearfix" id="widget-footer">
			<div class="grid_4 suffix_1">
				<ul>
					<?php if ( ! dynamic_sidebar( 'First footer widget area' ) ) : ?>
					<!--Widgetized Footer-->
				   <?php endif; ?>
				</ul>
			</div>
			<div class="grid_4 suffix_1">
				<ul>
					<?php if ( ! dynamic_sidebar( 'Second footer widget area' ) ) : ?>
					<!--Widgetized Footer-->
				   <?php endif; ?>
				</ul>
			</div>
			<div class="grid_4 suffix_3">
				<ul>
					<?php if ( ! dynamic_sidebar( 'Third footer widget area' ) ) : ?>
				<!--Widgetized Footer-->
			   <?php endif; ?>
				</ul>
			</div>
			<div class="grid_7">
				<ul>
					<?php if ( ! dynamic_sidebar( 'Fourth footer widget area' ) ) : ?>
				<!--Widgetized Footer-->
			   <?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="container_24 clearfix">
			<div class="grid_24">
        <?php if ( get_option('theme1283_footermenu') == 'true') { ?>  
          <nav class="footer">
						<?php wp_nav_menu( array(
              'container'       => 'ul', 
              'menu_class'      => 'footer-nav', 
              'depth'           => 0,
              'theme_location' => 'footer_menu' 
              )); 
            ?>
          </nav>
        <?php } ?>
	   
	   
	   <div id="copy">
	   	<?php if ( ! dynamic_sidebar( 'Social' ) ) : ?>
          <!--Widgetized Footer-->
          <?php endif; ?>
	   
	   
        <?php $theme1283_footer_text = get_option('theme1283_footer_text'); ?>
          
          <?php if($theme1283_footer_text){?>
            <p><?php echo get_option('theme1283_footer_text'); ?></p>
          <?php } else { ?>
		  <p><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="alt"><?php bloginfo('name'); ?></a> &copy; <?php echo date("Y") ?> | <a href="<?php bloginfo('url'); ?>/?page_id=315">Privacy policy</a><br />
<!-- {%FOOTER_LINK} --></p>
          <?php } ?>
	   </div>
        
      </div>
		</div><!--.container-->
	</footer>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->

<?php echo stripslashes(get_option('theme1283_ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>