<?php get_header(); ?>

<div class="wrapper">
   <div id="left-column" class="grid_8 maxheight">
      <div class="box maxheight">
         <div class="right maxheight">
            <div class="left maxheight">
               <div class="top maxheight">
                  <div class="bot maxheight">
                     <div class="left-top maxheight">
                        <div class="right-top maxheight">
                           <div class="left-bot maxheight">
                              <div class="right-bot maxheight">
                                 <div class="inner">
                                    <?php if ( ! dynamic_sidebar( 'Left Column' ) ) : ?>
                                    <!--Widgetized Content-->
                                    <?php endif; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="center-column" class="grid_8 maxheight">
      <div class="box maxheight">
         <div class="right maxheight">
            <div class="left maxheight">
               <div class="top maxheight">
                  <div class="bot maxheight">
                     <div class="left-top maxheight">
                        <div class="right-top maxheight">
                           <div class="left-bot maxheight">
                              <div class="right-bot maxheight">
                                 <div class="inner">
                                    <?php if ( ! dynamic_sidebar( 'Center Column' ) ) : ?>
                                    <!--Widgetized Content-->
                                    <?php endif; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="right-column" class="grid_8 maxheight">
      <div class="box maxheight">
         <div class="right maxheight">
            <div class="left maxheight">
               <div class="top maxheight">
                  <div class="bot maxheight">
                     <div class="left-top maxheight">
                        <div class="right-top maxheight">
                           <div class="left-bot maxheight">
                              <div class="right-bot maxheight">
                                 <div class="inner">
                                    <?php if ( ! dynamic_sidebar( 'Right Column' ) ) : ?>
                                    <!--Widgetized Content-->
                                    <?php endif; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="wrapper top-indent">
	<div class="grid_15 suffix_2">
		<?php if ( ! dynamic_sidebar( 'Testimonials' ) ) : ?>
		 <!--Widgetized Content-->
		 <?php endif; ?>
	</div>
	<div class="grid_7">
		<?php if ( ! dynamic_sidebar( 'Address' ) ) : ?>
		 <!--Widgetized Content-->
		 <?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
