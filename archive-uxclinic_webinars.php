<?php get_header(); ?>
<section id="webinars-home" class="post-type-archive-uxclinic_webinar">
	<?php 
		$args = array(
			'numberposts' => 1,
			'orderby' => 'postdate',
			'post_status' => 'publish',
			'post_type' => 'uxclinic_webinars'
		);

		$latest_webinar = wp_get_recent_posts($args)[0];
		$latest_permalink = get_post_permalink($latest_webinar["ID"]);
		$webinar_meta = get_post_meta($latest_webinar["ID"]);
		$background_url = wp_get_attachment_image_src($webinar_meta["webinar_background_image"][0], array(530, 800))[0];
		$latest_webinar_date = $webinar_meta["webinar_date"][0];
		$title_keywords = $webinar_meta["title_keywords"][0];
	?>
	<div class="webinars-home-hero" 
		style="background-image: url(<?php echo $background_url ?>)">
		<div class="datetime">
			<div class="time">
				<div class="countdown">
					0:0:0:0
				</div>
				<div class="description">
					<span class="time-unit">Seconds</span> Left
				</div>
			</div>
			<div class="date">
				<img class="hideOnMobile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/ic_calendar.svg">
				<span class="date-string"><?php echo $latest_webinar_date ?></span>
			</div>
		</div>
		<div class="white-block">
			<h1><?php echo $latest_webinar["post_title"] ?></h1>
			<a href="<?php echo $latest_permalink ?>" class="button orange arrow-button">
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

<script>
	(function timer(){
		var timeUnits = 'Days';
		var webinarDate = new Date('<?php echo $latest_webinar_date ?>');

		var timerInterval = setInterval(function timer() {
			var now = new Date();
			var distance = webinarDate - now;

			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			if (days) {
				timeUnits = 'Days';
			} else if (hours) {
				timeUnits = 'Hours'
			} else if (minutes) {
				timeUnits = 'Minutes';
			} else if (seconds) {
				timeUnits = 'Seconds';
			}

			$('.countdown').text(days + ':' + hours + ':' + minutes + ':' + seconds);
			$('.time-unit').text(timeUnits);

			if (distance < 0) {
				clearInterval(timerInterval);
				$('.countdown').text('0:0:0:0');
				$('.time-unit').text('seconds');
			}
		}, 1000);
	})();

	(function titleKeywords() {
		var keywords = '<?php echo $title_keywords ?>';
		keywords = keywords.split(' ');
		var titleDOMText = $('.white-block h1').text();

		keywords.forEach(function highlight(keyword) {
			var capitalizedKeyword = keyword.charAt(0).toUpperCase() + keyword.slice(1);
			titleDOMText = titleDOMText.replace(' ' + capitalizedKeyword + ' ', 
				' <span class="purple">' + capitalizedKeyword + '</span> ');
		});

		$('.white-block h1').html(titleDOMText);
	})();
</script>
<?php get_footer(); ?>
