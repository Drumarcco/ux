<?php

register_nav_menus( array(
	'header-menu' => 'Header Menu',
) );

add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
if ( is_home() && false == $query->query_vars['suppress_filters'] )
$query->set( 'post_type', array( 'post', 'page') );
return $query;
}


add_theme_support( 'post-thumbnails' );

// Add Custom Post "Episodes"

add_action( 'init', 'create_posttype_casestudy' );
function create_posttype_casestudy() {
	register_post_type( 'uxclinic_casestudy',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'casestudies'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

add_action( 'init', 'create_posttype_webinars' );
function create_posttype_webinars() {
	register_post_type( 'uxclinic_webinars',
		array(
			'labels' => array(
				'name' => __( 'Webinars' ),
				'singular_name' => __( 'Webinar' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'webinars'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

add_action( 'init', 'create_posttype_diy' );
function create_posttype_diy() {
	register_post_type( 'uxclinic_diy',
		array(
			'labels' => array(
				'name' => __( 'DIYs' ),
				'singular_name' => __( 'DIY' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'diy'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

add_action( 'init', 'create_posttype_workshop' );
function create_posttype_workshop() {
	register_post_type( 'uxclinic_workshop',
		array(
			'labels' => array(
				'name' => __( 'Workshops' ),
				'singular_name' => __( 'Workshop' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'workshops'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

add_action( 'init', 'create_posttype_events' );
function create_posttype_events() {
	register_post_type( 'uxclinic_event',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('with_front' => false, 'slug' => 'events'),
			'supports' => array('title', 'editor', 'author', 'thumbnail'),
		)
	);
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


?>
