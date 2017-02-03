<?php
/*
Template Name: LANDING PAGE MOBILE TEST
*/
?>

<?php
		if(isset($_COOKIE['pathcookie'])){
			$pathcookie = $_COOKIE['pathcookie'] . $_SERVER['REQUEST_URI'] . "\n";
		}
		else{
			$pathcookie = $_SERVER['REQUEST_URI'] . "\n";
		}
		setcookie("pathcookie", $pathcookie, time()+600, "/", "ux.nearsoft.com");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='116171998-17',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

  <meta name="description" content="Nearsoft’s UX team helps software companies accelerate their business by powering up their user experience" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
		?>
	</title>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css">

	<!-- Colorbox, to display a zoomed view of the images -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/colorbox.css">



<!-- 	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js"></script> -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/uxclinic.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.colorbox-min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bxslider/jquery.bxslider.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.bxslider.css" />
	
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.event.move.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.twentytwenty.js"></script>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/twentytwenty.css" />
  
	
	

	<?php wp_head() ?>

	<!-- Facebook Conversion Code for Conversion UX04 -->
    <script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
    }
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', '6015985729811', {'value':'0.00','currency':'USD'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6015985729811&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

    <script>
			$(document).ready(function(){
				$(".gallery").colorbox({rel:'Gallery'});
			});
		</script>

</head>

<body <?php body_class(); ?> id="body">
  
<div class="social-share">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=317016168398979";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-share-button facebook-share-button" data-href="https://ux.nearsoft.com" data-layout="icon"></div>
  <a class="buttons twitter-share-button" href="https://twitter.com/intent/tweet?text=We%20help%20software%20companies%20accelerate%20their%20business%20by%20powering%20up%20their%20user%20experience http://ux.nearsoft.com" target="_blank"></a>
</div>

  
<div class="wrapper">
	<header>
  <a href="<?php echo home_url(); ?>">
    <p class="logo"></p>
  </a>

<!--   <div class="mobilenav-toggle"></div> -->

<!--
  <div class="mobilenav">
    <ul>
  		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
  		</ul>
  </div>

  <nav>
    <ul>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
    </ul>
  </nav>
-->
	</header>


<section class="mobile-hero">
  <h1>Power up Your Mobile App with UX Research</h1>
</section>

<section class="mobile-problems">
  <h2>We Know You Are Dealing With</h2>
  <div class="half">
    <div class="illustration">
      <div class="onboarding-back"></div>
      <div class="onboarding-text"></div>
    </div>
    <div class="description">
      <h3>Users Not Converting</h3>
      Designing the onboarding process for your app is a tough call. First impressions are everything!
    </div>
  </div>
  
  <div class="half">
    <div class="illustration">
      <div class="illustration-frame">
        <div class="backhand-bg"></div>
        <div class="phone-phoneframe"></div>
        <div class="phone-homescreen"></div>
        <div class="phone-app"></div>
        <div class="fronthand-bg"></div>
      </div>
    </div>
    <div class="description">
      <h3>Users Quitting</h3>
      If your UX planning doesn’t include a simple and straightforward path, users will quit. 
    </div>
  </div>
  
</section>


<section class="mobile-process">
  <h2>Creating an Experience Is the Way Out</h2>
  
  <div class="services-cont">
  <div class="blocks">
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-research-uxteam.jpg" alt="User Research UX Team">
     <div class="block-text-cont">
        <h2>User Research</h2>
        <p>1-on-1 feedback sessions give us an idea of what your product is telling your users.</p>
     </div>
  </div>
    <div class="blocks">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/data-interpretation-uxteam.jpg" alt="User Research data interpretation">
     <div class="block-text-cont">
        <h2>Data Analysis</h2>
        <p>We work with you to analyze user feedback and turn it into actionable insights.</p>
     </div>
  </div>
    <div class="blocks">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-solutions-uxteam.jpg" alt="UX solutions to be implemented">
     <div class="block-text-cont">
        <h2>UX Solutions</h2>
        <p>We create visual solutions ready to be implemented in your next design iteration.</p>
     </div>
  </div>

  </div>
</section>


<section class="mobile-cs">
  <h2>Yup! We’ve Done It Before</h2>
  
  <div class="single-casestudy">
    <div class="details">
      <div class="case-logo shopwell-logo"></div>
      <span class="subtitle">iOS & ANDROID APP</span>
      <p class="challenge-title"><b>Challenge</b></p>
      <p class="challenge-text">Discover users value perception while interacting with ShopWell to improve User Engagement through User Experience Research.</p>
      
      <p><b>After our research we figured they should</b></p>
      <ul>
        <li>Concise information by making it fast and easy to access.</li>
        <li>Give users the Ability to have social validation in each product.</li>
        <li>Build user’s trust with personalized messages.</li>
      </ul>
      
    </div>
    
    <div class="phoneframe">
      <div class="shopwellslider">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopwell-ux-improvement-before.png" alt="ShopWell iOS app before ux research"/>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopwell-ux-improvement-after.png" alt="ShopWell iOS app after ux research improvements"/>
      </div>
  
<script>
  $(window).load(function() {
    $(".shopwellslider").twentytwenty();
  });
</script>


    </div>
  </div>
  
  
  <div class="separator"></div>
  
  <div class="single-casestudy">
    <div class="details">
      <div class="case-logo skedio-logo"></div>
      <span class="subtitle">ANDROID APP</span>
      <p class="challenge-title"><b>Challenge</b></p>
      <p class="challenge-text">Discover what are users’ first impressions when using the app, and why they end up uninstalling it.</p>
      
      <p><b>After our research we figured they should</b></p>
      <ul>
        <li>Promote Skedio as a Blank Canvas, a Digital Sketch Notebook.</li>
        <li>Update their User Interface.</li>
        <li>Simplify and organize tools.</li>
        <li>Use everyday examples.</li>
      </ul>
      
      <a class="button" href="http://ux.nearsoft.com/casestudies/episode-15-skedio-app/" target="_blank">See Full Case Study</a>
    
      
    </div>
    
    <div class="phoneframe">
      <div class="shopwellslider">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-ux-casestudy-skedio-before.png" alt="Skedio android app before ux research"/>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile-ux-casestudy-skedio-after.png" alt="Skedio android app after ux research improvements"/>
      </div>
  
<script>
  $(window).load(function() {
    $(".shopwellslider").twentytwenty();
  });
</script>


    </div>
  </div>
  
</section>


<?php include 'inc-submit.php'; ?>


<?php get_footer(); ?>
