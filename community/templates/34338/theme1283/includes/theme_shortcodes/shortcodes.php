<?php
//one_half
function shortcode_one_half($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="one_half'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('one_half', 'shortcode_one_half');
	
	
//one_third
function shortcode_one_third($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="one_third'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('one_third', 'shortcode_one_third');
	
//two_third
function shortcode_two_third($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="two_third'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('two_third', 'shortcode_two_third');
		
	
//one_fourth
function shortcode_one_fourth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="one_fourth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('one_fourth', 'shortcode_one_fourth');
	
//three_fourth
function shortcode_three_fourth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="three_fourth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('three_fourth', 'shortcode_three_fourth');


//one_fifth
function shortcode_one_fifth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="one_fifth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('one_fifth', 'shortcode_one_fifth');

//two_fifth
function shortcode_two_fifth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="two_fifth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('two_fifth', 'shortcode_two_fifth');

//three_fifth
function shortcode_three_fifth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="three_fifth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('three_fifth', 'shortcode_three_fifth');

//four_fifth
function shortcode_four_fifth($atts, $content) {

	$last = '';
	if (isset($atts[0]) && trim($atts[0]) == 'last')  $last = ' last';

	return '<div class="four_fifth'.$last.'">'.do_shortcode($content).'</div>';
}

add_shortcode('four_fifth', 'shortcode_four_fifth');
	
	
//clear
function shortcode_clear() {
	return '<div class="clear"></div>';
}

add_shortcode('clear', 'shortcode_clear');
	

//figure	
	function myFigure($atts, $content = null) {
		extract(shortcode_atts(array(
			"class" => ''
		), $atts));
		return '<figure class="'.$class.'">'.$content.'</figure>';
	}
	add_shortcode("figure", "myFigure");

//link	
	function myReadmore($atts, $content = null) {
		extract(shortcode_atts(array(
			"href" => ''
		), $atts));
		return '<a class="button" href="'.$href.'"><span>'.$content.'</span></a>';
	}
	add_shortcode("more", "myReadmore");
	
	
//blockquote
	function myshortcodes_quotes( $atts, $content = null ) {
		$out = "<blockquote><span class='bq1'>&ldquo;</span>" .do_shortcode($content). "<span class='bq2'>&bdquo;</span></blockquote>";
		return $out;
	}
	add_shortcode('blockquote', 'myshortcodes_quotes');
	
// box	
	function myBox($atts, $content = null) {
	    extract(shortcode_atts(array(
			"class" => ''
	    ), $atts));	
	    $out = '<div class="box '.$class.'">
         <div class="right '.$class.'">
            <div class="left '.$class.'">
               <div class="top '.$class.'">
                  <div class="bot '.$class.'">
                     <div class="left-top '.$class.'">
                        <div class="right-top '.$class.'">
                           <div class="left-bot '.$class.'">
                              <div class="right-bot '.$class.'">
                                 <div class="inner">'.do_shortcode($content).'</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>'; 
	 return $out;
	}
	
	add_shortcode('box', 'myBox');
	
	
	
	//Popular Posts
	
	function shortcode_popular_posts($atts, $content = null) {
	
			extract(shortcode_atts(array(
					'num' => '5'
			), $atts));
	
			$popular = get_posts('orderby=comment_count&numberposts='.$num);
	
			$output = '<ul>';
	
			foreach($popular as $post){
					
					setup_postdata($post);
	
					$output .= '<li>';
							$output .= '<a href="'.get_permalink($post->ID).'" title="'.get_the_title($post->ID).'">';
									$output .= get_the_title($post->ID);
							$output .= '</a>';
					$output .= '</li>';
	
			}
	
			$output .= '</ul>';
	
			return $output;
	
	}
	
	add_shortcode('popular_posts', 'shortcode_popular_posts');
	
	
	
	
	//Tag Cloud
	
	function shortcode_tags($atts, $content = null) {
	
			$output = '<div class="tags-cloud">';
	
			$tags = wp_tag_cloud('smallest=12&largest=20&format=array');
	
			foreach($tags as $tag){
					$output .= $tag.' ';
			}
	
			$output .= '</div><!-- .tags-cloud (end) -->';
	
			return $output;
	
	}
	
	add_shortcode('tags', 'shortcode_tags');
	
	
	
	
//Horizontal Rule

function hr_shortcode($atts, $content = null) {

		$output = '<div class="hr"><!-- --></div>';

		return $output;

}
	
	add_shortcode('hr', 'hr_shortcode');

add_action( 'after_setup_theme', 'my_setup' );
?>