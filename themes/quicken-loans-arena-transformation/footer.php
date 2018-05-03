<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quicken_Loans_Arena_Transformation
 */

?>

        <!-- footer starts from here -->
	    <div class="footer-container">
	        <?php
				dynamic_sidebar( 'footer-widget' );
	        ?>
	        <div class="row footer copy-right-footer">
	            <div class="col-md-8">
	            	<?php 
	            		if(get_field("hide_or_show_footer_menu", "option")){
	            			wp_nav_menu( array(
	                            'theme_location' => 'footer_menu',
	                            'menu_id'        => 'footer-menu',
	                            'menu_class'     => 'list-unstyled footer-menu',
	                        ) );
	            		}
	            	?>
	            </div>
	            <div class="col-md-4">
	                <dl>
	                    <dt>
	                        <ul style="padding: 0;list-style: none;font-size: 10px;font-weight:400;">
	                        	<li><?php echo get_field("footer_copy_right_text", "option") ?></li>
	                        </ul>
	                    </dt>
	                </dl>
	            </div>
	        </div>
	    </div>
	    <!-- footer ends here -->
	    
	    <!-- page content divs -->
	    </div>
	</div>
	<!-- =======Start from header.php====== -->

<!-- main div starts from header.php -->
</div>
<div class="back-to-top"></div>

<?php wp_footer(); ?>
<script type="text/javascript">
	jQuery(document).ready(function(e){
		// adding span tag in menu item 
		jQuery("li.menu-item.menu-item-has-children > a").after("<span class='my-icon icon-close'></span>");
		
		// expanding current menu item
		jQuery(".current-menu-parent > ul.sub-menu").slideDown();

		// cutomize side menu scroll bar
		jQuery("#side-header").mCustomScrollbar({
		    axis:"y",
		    // theme:"dark"
		});
		// back to top function
		jQuery('.back-to-top').hide();
		
		jQuery(".back-to-top").click(function() {
		  jQuery("html, body").animate({ scrollTop: 100 }, "slow");
		  return false;
		});
		
		jQuery(window).scroll(function() {
		    if (jQuery(window).scrollTop() > 300) {
		      jQuery('.back-to-top').show();
		    } else {
		      jQuery('.back-to-top').hide();
		    }
		});
		
		// expand sub menu
		jQuery(".menu-item").unbind().click(function(e){
			if(jQuery(this).hasClass("menu-item-has-children")){
				jQuery(this).children("ul.sub-menu").slideToggle();
				jQuery(this).children("span.my-icon").toggleClass("icon-open");
			}else{
				event.stopImmediatePropagation();
				// var page_target = jQuery(this).attr("href");
				// alert(page_target);
				// window.location.href = page_target;
			}
		});
		
		// mobile burger menu slide
		jQuery(".burger-menu").click(function(e){
			jQuery(".row.mobile-nav-menu").slideToggle();
		});
		
		// adding taget attribute in rss feed links
		jQuery(".rfnb_readmore, a.rfnb_title").attr("target","_blank");
		
		// customizing html of rss feed
		var  html_data = jQuery(".rfnb").html();
		jQuery(".rss-feeds-block").html(html_data);
		<?php if(!empty(get_field("theme_temp_logo", "option"))){ ?>
			jQuery(".rfnb_item").prepend("<img class='rss-feeds-post-image' src='<?php echo get_field("theme_temp_logo", "option") ?>' />");
		<?php } ?>

		jQuery(".rfnb_readmore").text("Read More");

		jQuery(window).load(function(){
			jQuery('.vc_grid-page').live('click',function(){
				jQuery("html, body").animate({ scrollTop: 0 }, "slow");
					return false;
			});
		});

	}); // document ready bracket close here
</script>


</body>
</html>
