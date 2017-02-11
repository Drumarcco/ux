<?php get_header(); ?>
<section id="webinars-home" class="post-type-archive-uxclinic_webinar">
	<?php 
		$args = array(
			'numberposts' => 10,
			'orderby' => 'postdate',
			'post_status' => 'publish',
			'post_type' => 'uxclinic_webinars'
		);

		$latest_webinar = wp_get_recent_posts($args)[0];
		$webinar_meta = get_post_meta($latest_webinar["ID"]);
		$background_url = wp_get_attachment_image_src($webinar_meta["webinar_background_image"][0], array(530, 800))[0];
	?>
	<div class="webinars-home-hero" 
		style="background-image: url(<?php echo $background_url ?>)">
		<div class="datetime">
			<div class="time">
				<div class="countdown">
					00:10:00
				</div>
				<div class="description">
					<span class="time-unit">Minutes</span> Left
				</div>
			</div>
			<div class="date">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/ic_calendar.svg">
				November 8th 2017 | 11:00 AM PST
			</div>
		</div>
		<div class="white-block">
			<h1><?php echo $latest_webinar["post_title"] ?></h1>
			<a href="" class="button orange arrow-button">
				Save your spot
			</a>
		</div>
	</div>
	<div class="webinars margin-container">
		<h2>Our webinars</h2>		
		<?php
			echo do_shortcode('[ajax_load_more id="webinars" container_type="ul" post_type="uxclinic_webinars" scroll="false" button_label="Load More" button_loading_label="Loading..."]');
		?>
	</div>
</section>
<?php get_footer(); ?>
