<?php
/*
Template Name: LANDING PAGE WORKSHOP
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
  <div class="uxworkshop-label">taller de UX</div>
  <h1>Mapea tus Servicios, Haz felices a tus Clientes<span>Descubre oportunidades para empatar tu modelo de negocios con la experiencia de tus usuarios.</span></h1>
  <!-- <a href="https://mapea-tus-servicios.boletia.com/" class="boleto-submit">Comprar Boleto</a> -->
  <div class="soldout">
<img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/04/sold-out-1.png">
  </div>
  <div class="date"><span>Fecha:</span>Jueves 28 de Abril  -  6 pm a 9 pm  <span>Lugar:</span> Nearsoft  CDMX</div>
</section>
<section class="catapulta">
  <h1>En colaboración con:</h1>
  <div class="logos">
<!--     <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/03/ns-logo.png"> -->
    <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/03/ebc-logo.png">
    <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/03/catapulta-logo.png">
  </div>
</section>

<section class="e-can uxcontent">
  <h2>¿Por qué asistir al Taller?</h2>
<ul>
<li>Crearás una experiencia de usuario positiva, que te ayudará a mantener activo el crecimiento y lealtad de tus clientes.</li>
<li>Analizarás tu compañía y aprenderás a detectar los puntos claves de tus procesos y como éstos afectan la experiencia tus clientes.</li>
<li>Tendrás las herramientas necesarias para diseñar nuevos procesos enfocados en alcanzar tus objetivos de negocio y mejorar la experiencia de usuario.
</li>
</ul>
</section>

<section class="e-can uxcontent">
  <h2>Objetivos del programa</h2>
<ul>
<li>A hacer visibles los puntos de interacción de tus clientes con tu producto.</li>
<li>Detectar oportunidades de mejora en tu proceso.</li>
<li>Hacer <i>brainstorming</i> en equipo e iterar antes de implementar cambios.</li>
<li>Interpretar resultados de investigación con argumentos de diseño.</li>
<li>Alinear tus objetivos de negocio con la experiencia de tus usuarios.</li>
</ul>
</section>

<section class=" e-can experts">
  <h2>Instructores</h2>
<div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-designer-diana.jpg" />
    </div>
      <div class="content-container">
        <h3>Diana Arvayo</h3>
        <h4>UX Researcher</h4>
        <p>Diana es experta diseñando experiencias y soluciones basadas en investigación, atendiendo tanto las necesidades del usuario como los objetivos de negocio.</p>
        <div class="social-box">
          <a href="https://mx.linkedin.com/in/darvayo/en" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="http://twitter.com/dianonina" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

  <div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ui-designer-miguel.jpg" />
    </div>
      <div class="content-container">
        <h3>Miguel Medina</h3>
        <h4>UX/UI Designer</h4>
        <p>Miguel tiene más de 5 años de experiencia construyendo sitios web. Su objetivo es crear interfaces funcionales y atractivas, atendiendo a las necesidades de los usuarios.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/miguel-angel-medina-fontes-9b818a4a" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="http://twitter.com/MiigueelMediina" target="_blank"><div class="social-link twitter"></div></a>
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
        <p>Denisse se enfoca en el diseño centrado en el usuario para planear y lanzar productos de software con una experiencia agradable y positiva.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/neniza" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="http://twitter.com/neniza_" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

</section>

<div class="footer-padding-div"></div>



<?php get_footer(); ?>
