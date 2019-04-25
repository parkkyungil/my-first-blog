<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
	<?php if ( is_tag() ) {
			echo 'Tag Archive for &quot;'.$tag.'&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'name' ); 
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} else {
			echo wp_title( ' | ', false, right ); bloginfo( 'name' );
		} ?>
	</title>
	<meta name="keywords" content="<?php wp_title(); echo ' , '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo get_option('mytheme_favicon'); ?>" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
    	<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" &nbsp;alt="" /></a>
    </div>
  <![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/grid.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
  <!--[if lt IE 9]>
  	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/ie_style.css" />
  <![endif]-->
  
  <script type="text/javascript">
  	// initialise plugins
		jQuery(function(){
			// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay:       <?php if (get_option('theme1283_sf_delay')!='') { echo get_option('theme1283_sf_delay'); } else {echo '1000';} ?>, 		// one second delay on mouseout 
				animation:   {opacity:'<?php echo get_option('theme1283_sf_fade_in'); ?>',height:'<?php echo get_option('theme1283_sf_slide_down'); ?>'}, // fade-in and slide-down animation 
				speed:       '<?php echo get_option('theme1283_sf_speed'); ?>',  // faster animation speed 
				autoArrows:  <?php if (get_option('theme1283_sf_arrows')!='') { echo get_option('theme1283_sf_arrows'); } else {echo 'true';} ?>,        // generation of arrow mark-up (for submenu) 
				dropShadows: false    // drop shadows (for submenu)
			});
			// social
			jQuery(".social-networks img").hover(function(){
				jQuery(this).stop().animate({opacity:".7"}, "fast");
			},function(){
				jQuery(this).stop().animate({opacity:"1"}, "fast");
			});
			// carousel
			jQuery(".carousel").jCarouselLite({
				  btnNext: ".next",
				  btnPrev: ".prev",
				  vertical:true,
				  visible:1,
				  easing:"easeInOutCubic",
				  speed:400,
				  auto:9000
			 });
			 // carousel Latest News
			jQuery(".carousel_2").jCarouselLite({
				  btnNext: ".next",
				  btnPrev: ".prev",
				  vertical:true,
				  visible:10,
				  easing:"easeInOutCubic",
				  speed:400,
				  circular:false,
				  easing:"easeInOutCubic",
				  beforeStart:(function(){
				  	jQuery(".carousel-box.latest-news .prev").show();
				  })
			 });
		});
  </script>
  
  <script type="text/javascript">
		jQuery(window).load(function() {
			// nivoslider init
			jQuery('#slider').nivoSlider({
				effect: '<?php echo get_option('theme1283_sl_effects'); ?>',
				animSpeed:<?php if (get_option('theme1283_sl_animspeed')!='') { echo get_option('theme1283_sl_animspeed'); } else {echo '500';} ?>,
				pauseTime:<?php if (get_option('theme1283_sl_pausetime')!='') { echo get_option('theme1283_sl_pausetime'); } else {echo '5000';} ?>,
				startSlide:<?php if (get_option('theme1283_sl_startSlide')!='') { echo get_option('theme1283_sl_startSlide'); } else {echo '0';} ?>,
				slices:<?php if (get_option('theme1283_sl_slices')!='') { echo get_option('theme1283_sl_slices'); } else {echo '15';} ?>,
				directionNav:<?php if (get_option('theme1283_sl_directionNav')!='') { echo get_option('theme1283_sl_directionNav'); } else {echo 'false';} ?>,
				directionNavHide:<?php if (get_option('theme1283_sl_directionNavHide')!='') { echo get_option('theme1283_sl_directionNavHide'); } else {echo 'true';} ?>,
				controlNav:<?php if (get_option('theme1283_sl_controlNav')!='') { echo get_option('theme1283_sl_controlNav'); } else {echo 'true';} ?>,
				controlNavThumbs:false,
				keyboardNav:<?php if (get_option('theme1283_sl_keyboardNav')!='') { echo get_option('theme1283_sl_keyboardNav'); } else {echo 'true';} ?>,
				pauseOnHover:<?php if (get_option('theme1283_sl_pauseOnHover')!='') { echo get_option('theme1283_sl_pauseOnHover'); } else {echo 'true';} ?>,
				captionOpacity:1
			});
		});
	</script>
  
  <!-- Custom CSS -->
  <?php $theme1283_custom_css = get_option('theme1283_custom_css'); ?>
	<?php if($theme1283_custom_css){?>
  <style type="text/css">
  	<?php echo get_option('theme1283_custom_css'); ?>
  </style>
  <?php }?>
</head>

<body <?php body_class(); ?> onLoad="new ElementMaxHeight();">

<div id="main"><!-- this encompasses the entire Web site -->
	<header id="header">
		<div class="container_24 clearfix">
			<div class="grid_24">
      	<div class="logo">
					<?php $theme1283_logo = get_option('theme1283_logo'); ?>
          <?php if($theme1283_logo){?>
            <a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('theme1283_logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>"></a>
          <?php } else { ?>
            <?php if( is_front_page() || is_home() || is_404() ) { ?>
              <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php } else { ?>
              <h2><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h2>
            <?php } ?>
          <?php }?>
        </div>
        <nav class="primary">
          <?php wp_nav_menu( array(
            'container'       => 'ul', 
            'menu_class'      => 'sf-menu', 
            'menu_id'         => 'topnav',
            'depth'           => 0,
            'theme_location' => 'header_menu' 
            )); 
          ?>
        </nav><!--.primary-->
      </div>
		</div><!--.container-->
	</header>
   <div id="cont-box">
   	<?php if( is_front_page() ) { ?>
    <div class="container_24 clearfix">
      <div class="grid_24" id="slider-wrapper">
      	<div class="inside"><?php include_once(TEMPLATEPATH . '/slider.php'); ?></div>
      </div>
    </div>
  <?php } ?> 
	<div class="container_24 primary_content_wrap clearfix" id="content">	