<?php
/*
Template Name: WORKSHOP SANDRA
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

  <meta name="description" content="Nearsoft’s UX team helps software companies accelerate their business by powering up their user experience" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<meta property="og:url"                content="http://ux.nearsoft.com/workshop/" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="Mapea tus servicios, haz felices a tus clientes" />
	<meta property="og:description"        content="Descubre oportunidades para empatar tu modelo de negocios con la experiencia de tus usuarios." />
	<meta property="og:image"              content="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/img/uxteam-share.png" />


	<title>
		<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo "$site_description";
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

  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal.css">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal-default-theme.css">


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


<div class="wrapper">
	<header>
  <a href="<?php echo home_url(); ?>">
    <p class="logo"></p>
  </a>

  <div class="mobilenav-toggle"></div>

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
	</header>

<!-- header ends here -->






<section class="e-hero uxworkshop">
  <div class="uxworkshop-label">UX WORKSHOP</div>
  <h1>Powerful UX Techniques to Build Desirable Products<span>We'll share our expertise and insights gained from our findings with clients that have helped build more effective products through UX research.</span></h1>
  <a href="https://www.eventbrite.com/e/powerful-ux-techniques-to-build-desirable-products-tickets-25007730796" class="boleto-submit">Save your spot!</a>
<!--
  <div class="soldout">
<img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/04/sold-out-1.png">
  </div>
-->
  <div class="date"><span>Date:</span>Thursday, May 12  -  6:30 PM to 7:30 PM  <span>Place:</span> Nomad-A-What - 639 Clay St, San Francisco , California</div>
</section>
<section class="catapulta">
  <h1>In collaboration with:</h1>
  <div class="logos">
    <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo-nomad.png">
  </div>
</section>

<section class="e-can uxcontent">
  <h2>Why attend the talk?</h2>
  
  <p>Are you building a startup and want to improve users' conversion and/or retention?<br><br>
Join members of Nearsoft's UX Team to learn about the most common UX mistakes companies make that lead to poor service for their end customers.  We'll share our expertise and insights gained from our findings with clients that have helped build more effective products through UX research.</p>


<!--
<ul>
	<li>You'll create a positive user experience, that will help you maintain an active growth and loyalty of your clients.</li>
	<li>You'll analyse your company and learn to detect the key points of your processes and how these affect your clients experience.</li>
	<li>You'll have the right tools to design new processes focused on reaching your business goals and improve your user experience.</li>
</ul>
-->
</section>
<!--

<section class="e-can uxcontent">
  <h2>Program Objectives</h2>
<ul>
<li>Making the interaction points of your clients with your product visible.</li>
<li>Detect improvement opportunities on your process.</li>
<li>Make brainstorming in teams and iterate before implementing changes.</li>
<li>Interpret results of your research with design arguments.</li>
<li>Align business objectives with your users experience.</li>
</ul>
</section>
-->

<section class=" e-can experts">
  <h2>Instructors</h2>
<div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-business-developer-sandra.png" />
    </div>
      <div class="content-container">
        <h3>Sandra Vazquez</h3>
        <h4>Business Developer</h4>
        <p>Sandra is a business developer, her main strength is company growth with a focus on product development.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/sandradanielav" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="https://twitter.com/sandra_daniela" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>


   <div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-researcher-denisse.jpg" />
    </div>
      <div class="content-container">
        <h3>Denisse Gutiérrez</h3>
        <h4>UX Researcher</h4>
        <p>Denisse is a User Experience researcher with over 10 years of experience in software technology and advertising industries.
She make a product or service more lovable with human centered design.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/neniza" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="http://twitter.com/neniza_" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

</section>

<div class="footer-padding-div"></div>



<?php get_footer(); ?>