<?php

function EWD_US_Upgrade_Box() {
$this_screen = get_current_screen();
$this_screen_id = $this_screen->id;
if($this_screen_id == 'ultimate_slider_page_us-options'){
	?>	
	<!-- Upgrade to pro link box -->
	<div id="ewd-us-dashboard-top-upgrade">
		<div id="ewd-us-dashboard-top-upgrade-left">
			<div class="ewd-us-dashboard-new-upgrade-banner">
				<div class="ewd-us-dashboard-banner-icon"></div>
				<div class="ewd-us-dashboard-banner-buttons">
					<a class="ewd-us-dashboard-new-upgrade-button" href="https://www.etoilewebdesign.com/plugins/ultimate-slider/#plugin-sales-plans" target="_blank">UPGRADE NOW</a>
				</div>
				<div class="ewd-us-dashboard-banner-text">
					<div class="ewd-us-dashboard-banner-title">
						GET FULL ACCESS WITH OUR PREMIUM VERSION
					</div>
					<div class="ewd-us-dashboard-banner-brief">
						Lightbox integration, slide transitions and title effects, watermarks and more!
					</div>
				</div>
			</div>
			<div class="clear"></div>

			<?php 
				$premium_info = '<div class="ewd-us-dashboard-new-widget-box ewd-widget-box-full">';
				$premium_info .= '<div class="ewd-us-dashboard-new-widget-box-top">';
				$premium_info .= sprintf( __( '<a href="%s" target="_blank">Visit our website</a> to learn how to upgrade to premium.'), 'https://www.etoilewebdesign.com/premium-upgrade-instructions/' );
				$premium_info .= '</div>';
				$premium_info .= '</div>';

				echo apply_filters( 'ewd_dashboard_top', $premium_info, 'US', 'https://www.etoilewebdesign.com/plugins/ultimate-slider/#buy' );
			?>

		</div> <!-- ewd-us-dashboard-top-upgrade-left -->
		<?php if (get_option("EWD_US_Trial_Happening") != "No") { ?>
			<div id="ewd-us-dashboard-top-upgrade-right">
				<div class="ewd-us-dashboard-new-widget-box ewd-widget-box-full" id="ewd-us-dashboard-get-premium-widget-box">
					<div class="ewd-us-dashboard-new-widget-box-top">Get Premium</div>
					<?php if (get_option("EWD_US_Trial_Happening") == "Yes"){ do_action( 'ewd_trial_happening', 'US' ); } ?>
					<div class="ewd-us-dashboard-new-widget-box-bottom">
						<div class="ewd-us-dashboard-get-premium-widget-features-title"<?php echo ( get_option("EWD_US_Trial_Happening") == "Yes" ? "style='padding-top: 20px;'" : ""); ?>>GET FULL ACCESS WITH OUR PREMIUM VERSION AND GET:</div>
						<ul class="ewd-us-dashboard-get-premium-widget-features">
							<li>Integrated Lightbox Effect</li>
							<li>Advanced Styling Options</li>
							<li>Advanced Control Options</li>
							<li>WooCommerce integration</li>
							<li>Add Watermarks</li>
							<li>+ More</li>
						</ul>
						<a href="https://www.etoilewebdesign.com/license-payment/?Selected=US&Quantity=1" class="ewd-us-dashboard-get-premium-widget-button" target="_blank">UPGRADE NOW</a>
						<?php if ( ! get_option( "EWD_US_Trial_Happening" ) ) { 
							$trial_info = sprintf( __( '<a href="%s" target="_blank">Visit our website</a> to learn how to get a free 7-day trial of the premium plugin.'), 'https://www.etoilewebdesign.com/premium-upgrade-instructions/' );
						
							echo apply_filters( 'ewd_trial_button', $trial_info, 'US' );
						} ?>
					</div>
				</div>
			</div> <!-- ewd-us-dashboard-top-upgrade-right -->
		<?php } ?>
	</div> <!-- ewd-us-dashboard-top-upgrade -->
	<?php 
} // end this_screen_id conditional
?>

<script>
jQuery(document).ready(function() {
	<?php echo 'var slider_news = "' . EWD_US_Get_EWD_Blog() . '";'; ?>
	jQuery('.tablenav.bottom').append('<div class="ewd-us-news">' + slider_news + '</div>');
});
</script>

<?php
}

function EWD_US_Upgrade_Notice() {
?>
	<div id="side-sortables" class="metabox-holder ">
	<div id="upcp_pro" class="postbox " >
		<div class="handlediv" title="Click to toggle"></div><h3 class='hndle'><span><?php _e("Upgrade Complete!", 'ultimate-slider') ?></span></h3>
		<div class="inside">
			<ul><li><?php _E("Thanks for upgrading!", 'ultimate-slider'); ?></li></ul>
		</div>
	</div>
	</div>

<?php
}

function EWD_US_Get_EWD_Blog() {
	$Blog_URL = EWD_US_CD_PLUGIN_PATH . 'Blog.html';
	$Blog = file_get_contents($Blog_URL);

	return $Blog;
}
?>