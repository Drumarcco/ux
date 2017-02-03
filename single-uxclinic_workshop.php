<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<section class="ws-hero" style="background-image: url(<?php the_field('w-hero-image'); ?>);">
	<h1><?php the_title(); ?></h1>
	<span><?php the_field('w-hero-tagline'); ?></span>
	
	<div class="ws-description">
		<p><?php the_field('w-description'); ?></p>
	</div>
</section>

<section class="ws-benefits">
	<h2>Benefits</h2>
	
	<ol>
		<?php if( have_rows('w-benefits') ) : while ( have_rows('w-benefits') ) : the_row(); ?>
		
		<li><?php the_sub_field('w-benefit');?></li>	
					
    <?php endwhile; else : endif; ?>
		
	</ol>
</section>

<section class="ws-who">
	<ol>
		<?php if( have_rows('w-images') ) : while ( have_rows('w-images') ) : the_row(); ?>
		
		<li>
			<div style="background: url(<?php the_sub_field('w-image');?>) no-repeat center center; background-size: cover;"></div>
		</li>	
					
    <?php endwhile; else : endif; ?>
		
	</ol>
	
	<div class="forwho">
		<h2>For Who</h2>
		<span><?php the_field('w-for-who'); ?></span>
	</div>
</section>

<section class="ws-benefits">
	<h2>Agenda</h2>
	
	<ol>
		<?php if( have_rows('w-agenda') ) : while ( have_rows('w-agenda') ) : the_row(); ?>
		
		<li><?php the_sub_field('w-agenda_item');?></li>	
					
    <?php endwhile; else : endif; ?>
		
	</ol>
</section>

<?php include 'inc-wantwebinar.php'; ?>


<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
