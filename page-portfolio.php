<?php
/*
Template Name: PORTFOLIO
*/
?>
<?php get_header('banner'); ?>

<div class="blog-background">
<div class="post-card">

<section class="p-hero">
	<div class="p-ns-bug"></div>
  <h1>UX Team Portfolio</h1>
</section>

<section class="p-about">
  <h2>About Us</h2>
  <h3>We help software companies accelerate their business by powering up their user experience.</h3>
  <h3 class="orange-title">How we do it</h3>
  <p>We talk directly with your users and discover how they interact with your product or service. We conduct personalized UX methodologies and activities to understand your user's wants and needs.</p>
  <p>We gather insights and translate them into visual solutions.</p>
  <p>We work hand in hand with your development team to make the implementation process seamless to ultimately enhance the entire user experience.</p>
</section>

<?php include 'inc-experts.php'; ?>

<section class="p-ux-process">
	<h2>Nearsoft's UX Process</h2>
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ns-ux-process.png" />
</section>



<a id="shopwell"></a>
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

<section class="cloudfinder p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Cloudfinder</h2>
			<div class="p-test-desc">
			Cloudfinder is a simple, secure, and future-proof seamless solution for cloud-to-cloud backup needs of MSPs, and VARs. Currently the service allows to back up major SaaS services, including Office 365, Salesforce, Google Apps, and Box.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Redesign the old-looking interface and turn it into a more intuitive experience based on actual habits of use of channel partners.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method-container">
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/cloudfinder_research1.jpg" />
				<h2>Interviews + Usability Testing</h2>
				<p>We conducted a series of interviews and Usability Testings to understand habits of use and validate initial ideas.</p>
			</div>
		
			<div class="p-cs-method-half">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/cloudfinder_research2.jpg" />
				<h2>Affinity Diagram</h2>
				<p>We organized our findings by clustering similar ideas in order to find common patterns of use.</p>
			</div>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/p-cloudfinder-before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/cloudfinder_after.jpg" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Cloudfinder desktop app before and after conducting User Research</h3>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Simplification of navigation adding a sense of multitenancy</li>
			<li>Focus on error reporting by giving options to resolve issues</li>
			<li>Dashboard was turned into a very clear system health indicator</li>
			<li>Standarization of data management across the system</li>
		</ul>
	</div>
	
</section>

<section class="breaktrough p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>BreakThrough</h2>
			<div class="p-test-desc">
			BreakThrough is a mobile app for iOS and Android that helps users to find licensed therapist or psychiatrists, schedule appointments and talk to them via video conference when users find it convenient.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Discover how patients interact with the app and improve usability.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/BreakThroughHeuristic_016.jpg" />
			<h2>Heuristic Evaluation</h2>
			<p>We identified usability problems at the User Interface Level conducting a Heuristic Evaluation</p>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcase-container">
			<div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/breakthrough-before1.png" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/breakthrough-after-1.jpg" alt="Skedio android app after ux research improvements"/>
	    </div>
    
	    <div class="p-shopwellslider">
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/breakthrough-before2.jpg" alt="Skedio android app before ux research"/>
	      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/breakthrough-after-2.png" alt="Skedio android app after ux research improvements"/>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>Breakthrough sign up screen</h3>
	    </div>
	    
	    <div class="p-cs-item-caption">
		    <h3>Breakthrough home screen</h3>
	    </div>
	    
		</div>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Reducing the amount of information the user has to fill out as an entry point</li>
			<li>Use color coding that communicates the appropriate user conventions</li>
		</ul>
	</div>
	
</section>

<section class="anchor p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Anchor</h2>
			<div class="p-test-desc">
			Anchor allows the mobile worker to securely access and share files wherever they go, on any device. Access can happen from laptops, tablets and phones, as employee content and corporate data is synced on the fly. Team Shares streamline file changes, ensuring that teams have real-time access to the most recent file versions.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Redesign the old-looking interface into a more modern, intuitive and human-centered experience.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		<div class="p-cs-method-container">
		<div class="p-cs-method-half">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_002.jpg" />
			<h2>Interviews + Usability Testing</h2>
			<p>We validated our initial assumptions by conducting a series of interviews and Usability Testings.</p>
		</div>
	
		<div class="p-cs-method-half">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ShopWellAnalyzed_004.jpg" />
			<h2>Information Architecture + Workflows</h2>
			<p>Based on our research findings we created a series of lo-fi wireframes to exemplify the ideal layout and workflow.</p>
		</div>
	</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/p-anchor-before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/p-anchor-after.png" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Anchor desktop app before and after conducting User Research</h3>
	</div>
	
	<div class="p-cs-bfaf singleproject">
		<div class="p-doubleimage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/anchor_after4.jpg" alt="Skedio android app before ux research"/>
      
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/anchor_after5.jpg" alt="Skedio android app before ux research"/>
    </div>
    <h3>Mobile UI</h3>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>Full collaboration through Anchor’s Permissions Model</li>
			<li>Consolidation of accounts into Subscribers</li>
			<li>Dissolve the friction between Shared Folders & Team Shares</li>
			<li>Focus on Revisions Management</li>
			<li>Creation of Recycle Bin for easy restore</li>
			<li>Search-based file management system</li>
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

<section class="aeries p-cs-block">
	<div class="p-cs-hero">
		<div class="p-test-hero-bg"></div>
		<div class="p-test-hero-content">
			<h2>Aeries</h2>
			<div class="p-test-desc">
			Aeries is a student data management system so ware that grants complete and immediate access to educational information.
			</div>
		</div>
		<div class="p-test-challenge">
			<h3>Challenge:</h3>
			Undercover how parents would make sense of the information available in the system.
		</div>
	</div>
	
	<div class="p-cs-research">
		<h2>Research Process</h2>
		
		<div class="p-cs-method">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/portfolio/cardsorting1.png" />
			<h2>Card Sorting</h2>
			<p>We used card sorting to guide users to generate a category tree and analyze how they arranged and interpret the system’s information.</p>
		</div>
	</div>
	
	<div class="p-cs-bfaf">
		<h2>Before & After</h2>
		<div class="p-showcaseslider">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/aeries_before.png" alt="Skedio android app before ux research"/>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/aeries_after.png" alt="Skedio android app after ux research improvements"/>
    </div>
    <h3>Aeries desktop app before and after conducting User Research</h3>
	</div>
	
	<div class="p-cs-improvements">
		<h2>Our UX Improvement:</h2>
		<ul>
			<li>The final implementa on phase was done in HTML and CSS for liquid responsive design for desktop and mobile devices.</li>
		</ul>
	</div>
	
</section>

<section class="p-cs-block">
	<div class="p-cs-bfaf singleproject">
		<h2>Matchclick</h2>
		<div class="p-singleimage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/ui_matchlick.jpg" alt="Skedio android app before ux research"/>
    </div>
    <h3>From branding to implementation.</h3>
	</div>
</section>

<section class="p-cs-block">
	<div class="p-cs-bfaf singleproject">
		<h2>SalesCaddy</h2>
		<div class="p-singleimage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/ui_salescaddy.jpg" alt="Skedio android app before ux research"/>
    </div>
    <h3>New User Interface by UX Team.</h3>
	</div>
</section>

<section class="p-cs-block">
	<div class="p-cs-bfaf singleproject">
		<h2>Incroud</h2>
		<div class="p-doubleimage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/ui_mobileINCrowd1.jpg" alt="Skedio android app before ux research"/>
      
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/portfolio/ui_mobileINCrowd2.jpg" alt="Skedio android app before ux research"/>
    </div>
    <h3>New User Interface by UX Team.</h3>
	</div>
</section>

<section class="p-cs-block p-thankyou">
	<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ns-ux-team.jpg" />
	<div class="thankyou-msg">
		<dir  class="bug"></dir>
		<h2>Thank You!</h2>
		<a href="mailto:svazquez@nearsoft.com">svazquez@nearsoft.com</a>
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

</div>
</div>







<?php get_footer(); ?>
