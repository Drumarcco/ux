<ul class="nav-local">
	<li class="logo"><a href="<?php bloginfo( 'url' ); ?>" title="Go to Nearsoft's Homepage"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/ux-clinic-design-logo.png" alt="Nearsoft" alt="Nearsoft Brand Logo"></a></li>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
	<li>
		<?php get_search_form(true); ?>
	</li>
</ul>
<a href="#" class="toggle"><i class="icon-list"></i></a>