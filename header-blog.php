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

  <meta name="description" content="<?php the_field('meta-description'); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<title>
		<?php
		global $page, $paged;
		wp_title( ' ', true, 'right' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo " $site_description";
		?>
	</title>
	
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/nearsoft.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ux.css">
  <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.bxslider.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/twentytwenty.css" />
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal.css">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/remodal-default-theme.css">
  <link rel="stylesheet" href="http://www.protranscript.com/embeds/toolv1/protranscript.css">
	
	
	<!-- Scripts -->
	
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/ux.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bxslider/jquery.bxslider.js"></script>
	<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.event.move.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.twentytwenty.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/swfobject/2.2/swfobject.min.js"></script>
  <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/protranscript.js"></script>
	
	
	<!-- Twitter Cards -->
	
	<?php if (is_single() || is_page()){ ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@uxclinic">
		<meta name="twitter:title" content="<?php the_title(); ?>">
		<meta name="twitter:description" content="<?php echo substr(strip_tags(get_the_content()),0,130) . '…'; ?>">
		<meta name="twitter:image" content="<?php the_post_thumbnail_url('large'); ?>">
	<?php endwhile; else : ?>
	<?php endif; ?>
	<?php } ?>

  
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
	
	<!-- Facebook Pixel Code -->
	
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  
  fbq('init', '538049813071125');
  fbq('track', "PageView");</script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=538049813071125&ev=PageView&noscript=1"
  /></noscript>
	
  <?php wp_head() ?>

</head>

<body <?php body_class(); ?> id="body">

<nav class="top">
	<?php include('_partials/nav-global.php'); ?>
	
	<?php include('_partials/nav-local.php'); ?>
</nav>

<nav class="mobilenav">
  <ul>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
		</ul>
</nav>
