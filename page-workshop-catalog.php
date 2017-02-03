<?php
/*
Template Name: WORKSHOP CATALOG
*/
?>

<?php get_header( 'new' ) ?>

<script>
$(document).ready(function() {

  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    if ($(window).scrollTop() > 475) {
      $('#bx-pager').addClass('pager-fixed');
    }
    if ($(window).scrollTop() > 475) {
      $('.wc-workshop').addClass('extra-margin');
    }
    if ($(window).scrollTop() < 476) {
      $('#bx-pager').removeClass('pager-fixed');
    }
    if ($(window).scrollTop() < 476) {
      $('.wc-workshop').removeClass('extra-margin');
    }
    
  });
});

</script>

<section class="wc-hero">
	<div class="wc-hero-shadow"></div>
	<h1>We accelerate your business by powering up your User Experience</h1>
</section>

<section class="text-only">
	<h2>Workshops</h2>
</section>

<div id="bx-pager" class="wc-pager">
  <a data-slide-index="0" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/i-human.png" /><h3>Human Centered Design</h3></a>
  <a data-slide-index="1" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/i-rpp.png" /><h3>Rapid Paper Prototyping</h3></a>
  <a data-slide-index="2" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/i-blue.png" /><h3>Service Blueprints</h3></a>
  <a data-slide-index="3" href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/i-oom.png" /><h3>Object-Oriented UX Mapping</h3></a>
</div>

<ul class="bxslider">
  <li>
<section class="wc-workshop">
	<div style="background-color: #616161; overflow: hidden;">
		<div class="wc-workshop-information">
			<h2>Human Centered Design</h2>
			<span>For: Everyone interested in product development</span>
			<ol>
				<li>12 participants</li>
				<li>1 facilitator, 3 UX coaches</li>
				<li>Estimated Time: 2.5hrs</li>
			</ol>
		</div>
	
		<div class="wc-workshop-image">
			<div class="wc-workshop-image-01"></div>
			<div class="wc-workshop-image-02"></div>
		</div>
		
		<div class="wc-workshop-description">
			<p>Learn to solve challenges with the basic concepts of Human-Centered Design. We all are born designers, we just have to understand how people behave to discover creative ways to help others.</p>
			<h3>Agenda</h3>
			<ol>
				<li>What is Human-Centered Design?</li>
				<li>Case Study</li>
				<li>Ice breaker activity - Visual telephone</li>
				<li>Uncovering the problem</li>
				<li><b>B R E A K</b></li>
				<li>User interviews</li>
				<li>Interpret User Feedback</li>
				<li>Prototype</li>
				<li>Presentation</li>
				<li>Q&A</li>
			</ol>
		</div>
	</div>
</section>
  </li>
  
  <li>
<section class="wc-workshop workshop02">
	<div style="background-color: #616161; overflow: hidden;">
		<div class="wc-workshop-information">
			<h2>Rapid Paper Prototyping</h2>
			<span>For: Designers, Software engineers, front-end devs, QA, project owners.</span>
			<ol>
				<li>12 participants</li>
				<li>1 facilitator, 1 UX coaches</li>
				<li>Estimated Time: 3hrs</li>
			</ol>
		</div>
	
		<div class="wc-workshop-image">
			<div class="wc-workshop-image-01"></div>
			<div class="wc-workshop-image-02"></div>
		</div>
		
		<div class="wc-workshop-description">
			<p>Bring your ideas to life through ideation and rapid prototyping at extremely low cost. Translate user’s needs into validated products with no need of code.</p>
			<h3>Agenda</h3>
			<ol>
				<li>Why Users Matter?</li>
				<li>UX Design Process</li>
				<li>Ice breaker activity - Yes and… !</li>
				<li>Discovery. Get user feedback</li>
				<li><b>B R E A K</b></li>
				<li>Ideation. From Insights to Prototype</li>
				<li>Testing. Validate your idea</li>
				<li>Prototype</li>
				<li>Presentation</li>
				<li>Q&A</li>
			</ol>
		</div>
	</div>
</section>
  </li>
  
  <li>
<section class="wc-workshop workshop03">
	<div style="background-color: #616161; overflow: hidden;">
		<div class="wc-workshop-information">
			<h2>Service Blueprints</h2>
			<span>For: Companies that want to improve their processes or services.</span>
			<ol>
				<li>3 participants per company (total 15 participants)</li>
				<li>1 facilitator, 3 UX coaches</li>
				<li>Estimated Time: 3hrs</li>
			</ol>
		</div>
	
		<div class="wc-workshop-image">
			<div class="wc-workshop-image-01"></div>
			<div class="wc-workshop-image-02"></div>
		</div>
		
		<div class="wc-workshop-description">
			<p>Discover opportunities to improve your business processes by mapping your service. The key to maintain active your users acquisition and engagement is to offer your customers a positive experience.</p>
			<h3>Agenda</h3>
			<ol>
				<li>Ice breaker activity</li>
				<li>What creates a Service Experience?</li>
				<li>What is your current challenge?</li>
				<li>Mapping your process</li>
				<li>Capturing observations</li>
				<li><b>B R E A K</b></li>
				<li>Ideation. Brainstorm the future</li>
				<li>Planning the future</li>
				<li>Showcase</li>
				<li>Q&A</li>
			</ol>
		</div>
	</div>
</section>
  </li>
  
  <li>
<section class="wc-workshop workshop04">
	<div style="background-color: #616161; overflow: hidden;">
		<div class="wc-workshop-information">
			<h2>Object-Oriented UX Mapping</h2>
			<span>For: Anybody with a product idea. Bring your laptop with Adobe XD installed.</span>
			<ol>
				<li>15 participants</li>
				<li>1 facilitator, 1 UX coach</li>
				<li>Estimated Time: 3hrs</li>
			</ol>
		</div>
	
		<div class="wc-workshop-image">
			<div class="wc-workshop-image-01"></div>
			<div class="wc-workshop-image-02"></div>
		</div>
		
		<div class="wc-workshop-description">
			<p>Map your product idea into a structured interface to produce a real-working prototype.</p>
			<h3>Agenda</h3>
			<ol>
				<li>Ice breaker activity</li>
				<li>What creates a Service Experience?</li>
				<li>What is your current challenge?</li>
				<li>Mapping your process</li>
				<li>Capturing observations</li>
				<li><b>B R E A K</b></li>
				<li>Ideation. Brainstorm the future</li>
				<li>Planning the future</li>
				<li>Showcase</li>
				<li>Q&A</li>
			</ol>
		</div>
	</div>
</section>
  </li>
  
</ul>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  pagerCustom: '#bx-pager'
  });
});
</script>




<div class="footerholder"></div>


<?php get_footer( 'new' ); ?>