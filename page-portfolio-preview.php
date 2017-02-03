<?php
/*
Template Name: PORTFOLIO PREVIEW
*/
?>
<?php get_header(); ?>

<div class="porfolio-main">


<section class="p-hero">
	<div class="p-ns-bug"></div>
  <h1>UX Team Portfolio</h1>
</section>

<section class="p-about">
  <h2>About Us</h2>
  <h3>We help software companies accelerate their business by powering up their user experience.</h3>
  <h3 class="orange-title">How we do it</h3>
  <p>We talk directly with your users and discover how they interact with your product or service. conduct personalized UX methodologies and activities to understand your user's wants and needs.</p>
  <p>We gather insights and translate them into visual solutions.</p>
  <p>We work hand in hand with your development team to make the implementation process seamless to ultimately enhance the entire user experience.</p>
<!--   <div class="hero-image"></div> -->
  <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ns-ux-team.jpg" />
</section>

<?php include 'inc-experts.php'; ?>

<section class="p-ux-process">
	<h2>Nearsoft's UX Process</h2>
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ns-ux-process.png" />
</section>




<section class="shopwell p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>ShopWell</h2>
			<div class="p-test-desc">
			ShopWell is a free website and iPhone/Android app that scores foods on how well they meet your unique needs.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Increase user retention and engagement.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method-container">
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_002.jpg" />
				<h2>Remote Moderated Research</h2>
				<p>We conducted a Remote Moderated Research asking users a set of questions regarding how they feel and interact with the app.</p>
			</div>
		
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_004.jpg" />
				<h2>Card Sorting</h2>
				<p>And also, we did an activity called Card Sorting where users choose what features are most valuable for them.</p>
			</div>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcase-container">
			<div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before1.png" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after1.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_before2.png" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/shopwell_after2.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell Menu</h3>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>ShopWell homescreen</h3>
	    </div>
		</div>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Personalized content for users</li>
			<li>Social validation</li>
		</ul>
	</div>
	
</section>

<section class="cogia p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Cogia Intelligence</h2>
			<div class="p-test-desc">
			Cogia Intelligence is a web and social media monitoring system.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Discover how to improve the informa on structure in the Cogia Intelligence App.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/cogiaaffinity2.jpg" />
			<h2>Elito Method</h2>
			<p>We used the Elito Method to categorize user research observations and define main insights that can improve the Cogia experience.</p>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cogia_after.png" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Cogia Intelligence desktop app before and after conducting User Research</h3>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Workspaces to distill data from top-down (general to specific)</li>
			<li>Default Dashboards and Widgets</li>
			<li>Feedback from the system</li>
		</ul>
	</div>
	
</section>

<script>
  $(window).load(function() {
    $(".p-shopwellslider").twentytwenty();
  });
</script>

<script>
  $(window).load(function() {
    $(".p-showcaseslider").twentytwenty();
  });
</script>

<section class="p-register">
	<h2>Would you like us to send you the complete portfolio?</h2>
	<h3>Leave us your info</h3>
	
	<div class="signupform">
		
		<form id="contactrequest" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send-sandra-portfolio.php" method="post">

      <p class="error"></p>
      <input type="text" id="name" name="name" placeholder="Name">
      <input type="text" id="email" name="email" placeholder="Email:"></input>
      
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <input type="button" value="Let's Talk" onclick="requestSubmit()" class="contactform-submit">
    </form>
	</div>
</section>





</div><!-- portfolio-main -->
<?php get_footer(); ?>
