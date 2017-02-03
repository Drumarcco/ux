<?php
/*
Template Name: PORTFOLIO REQUEST
*/
?>

<?php get_header('new'); ?>

<div class="blog-background">
<div class="post-card">

<div class="wa-hero bg-port">
	<h1>Team with Us to Power up Your User Experience</h1>
	<p>We help software companies accelerate their business by powering up their user experience.</p>
</div>

<section class="onlytitle">
	<h2>We have helped companies like...</h2>
</section>

<section class="shopwell p-cs-block">
  <div id="shopwell-home"></div>
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>ShopWell</h2>
			<div class="p-test-desc">
			A free website and iPhone / Android app that scores foods depending how well they meet people's unique needs.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Increase user retention and engagement.
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcase-container">
			<div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before1.jpg" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after1.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before2.jpg" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after2.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell Menu</h3>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell Homescreen</h3>
	    </div>
		</div>
	</div>
</section>


<section class="cogia p-cs-block">
	<div class="p-cs-hero">
  	<div id="cogia-home"></div>
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Cogia Intelligence</h2>
			<div class="p-test-desc">
			A web-based app to monitor websites and social media trends.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Restructure information and layout according to users' expectations.
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_after.png" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Cogia Intelligence before and after our UX improvements</h3>
	</div>
	
</section>

<section class="ux-p-process">
	<h2>Our User Experience Process</h2>
	
	<div class="timelinebar"></div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-01"></div>
		<div class="process">
			<h2>Planning</h2>
			<p>We analyze your product and define with you the main area we'll focus on. Since each product is unique we take this time to deeply understand your needs. We then select the UX approach that best suits your product.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-02"></div>
		<div class="process">
			<h2>Research</h2>
			<p>We conduct 1-on-1 feedback sessions with your users to discover how they interact with your product. We analyze this information to generate UX improvements.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-03"></div>
		<div class="process">
			<h2>Outcome</h2>
			<p>We deliver detailed documentation of your improvements, including UI High Fidelity Mockups, Styleguide, and Library of assets ready for implementation.</p>
		</div>
	</div>
	
	<div class="ux-p-process-single">
		<div class="icon-button button-04"></div>
		<div class="process">
			<h2>Follow Up</h2>
			<p>If you need it, we will work hand by hand with your development team to implement the new designs enhancements.</p>
		</div>
	</div>
	
</section>

<div class="ux-p-hero ux-p-hero-request">
	<h3>See how we have helped these and other companies</h3>
	<span>Request our portfolio</span>
	
	<div class="request-form">
      <form id="contactrequestdos" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send-reqp.php" method="post">
        <p class="error"></p>
        <input type="text" class="namedos" id="namedos" name="namedos" placeholder="Name">
        <input type="text" class="emaildos" id="emaildos" name="emaildos" placeholder="E-mail">
        <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
        <input type="button" value="Request" class="button green-btn" onclick="requestSubmit()"><a href="#" class="close"><i class="icon-remove"></i></a>
        <input type="hidden" id="company" name="company" value="nearsoft">
      </form>
  </div>
	
</div>

</div>
</div>

<script>
  $(window).on("load", function() {
    $(".p-shopwellslider").twentytwenty();
  });
</script>

<script>
  $(window).on("load", function() {
    $(".p-showcaseslider").twentytwenty();
  });
</script>



<!--

<div class="footerholder"></div>
-->

<?php get_footer(); ?>