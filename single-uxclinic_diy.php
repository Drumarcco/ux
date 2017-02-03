<?php get_header(); ?>
  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_field('infographic_download_url'); ?>" class="downlaod-infographic" target="_blank"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/download-icon-infographics.png"></a>
	<div class="diy-header">
		<a href="http://theuxclinic.com/" target="_blank">
			<img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/uxclinic-logo-small.png" alt="UXClinic">
		</a>
		<div class="method-cont">
			<h1><?php echo get_the_title(); ?></h1>
			<p><?php the_field('diy_hero_description'); ?></p>
		</div>
	</div>
	<section class="section-bg">
		<div class="why-cont">
			<h1>Why?</h1>
			<p><?php the_field('why_description'); ?></p>
		</div>
	</section>
	
	<section class="orange">
		<div class="how-cont">
			<h1>How?</h1>
			<div class="steps">
				<ul>
  				<?php if( have_rows('diy_steps') ) : while ( have_rows('diy_steps') ) : the_row(); ?>
					<li>
					
  					<div class="how-cont-icon">
    					<?php $image = get_sub_field('diy_steps_icon'); if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
    					<?php endif; ?>
  					</div>
  					
  					<div class="how-cont-description">
    					<ul>
    					<?php if( have_rows('diy_steps_list') ) : while ( have_rows('diy_steps_list') ) : the_row(); ?>
    					  <li><?php the_sub_field('diy_steps_list_item');?></li>
              <?php endwhile; else : endif; ?>
    					</ul>
    					
  					</div>
					</li>

					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</div>
	</section>
	
	<section class="section-bg-takeaways">
		<div class="takeaways-cont">
			<h1>Takeaways</h1>
			<div class="takeaways-box">
				<ul>
  				
  				<?php if( have_rows('diy_takeaways') ) : while ( have_rows('diy_takeaways') ) : the_row(); ?>
  				
					<li><?php the_sub_field('diy_takeaways_list_item');?></li>	
					
          <?php endwhile; else : endif; ?>
          
				</ul>
			</div>
		</div>
	</section>
	
	<section class="gray">
		<div class="references-cont">
			<h1>References</h1>
			<?php if( have_rows('diy_references') ) : while ( have_rows('diy_references') ) : the_row(); ?>
			
			<p><?php the_sub_field('diy_reference_author');?>
			<a href="<?php the_sub_field('diy_reference_url');?>" target="_blank"><?php the_sub_field('diy_reference_displayed_text');?></a>
			</p>
			
      <?php endwhile; else : endif; ?>
		</div>
	</section>
	<footer class="orange">
		<h1>
			<a href="http://theuxclinic.com/" target="_blank"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/uxclinic-logo-small.png"></a>
			<a href="http://nearsoft.com/" target="_blank" class="nearsof-logo"><img src="<?php echo home_url(); ?>/wp/wp-content/themes/uxclinic/img/nearsoft-logo.png" alt="Nearsoft"></a>
		</h1>
	</footer>

<?php endwhile; ?><?php endif; ?>
</body>
</html>
