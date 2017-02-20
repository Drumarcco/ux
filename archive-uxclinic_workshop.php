<?php get_header('new'); ?>

<section class="home-hero">
  <div class="white-block">
    <h1>Create Products Poeple <span class="purple">Love</span></h1>
    <span class="tagline">With the Scale Up! UX Workshop Series</span>
    <a class="button arrow-button" href="#process-anchor">See Our Workshops</a>
  </div>
</section>

<div class="circle-know-more">
  <a href="#intro" class="circle-button orange-btn"></a>
</div>

<div id="intro" class="margin-container wa-hide-on-mobile">
<section class="workshop-archive-intro">
  <div class="left">
    <div class="scaleup-logo"></div>  
      <ul>
        <li>Align your team around a common vision</li>
        <li>Understant your users' needs and behaviours</li>
        <li>Create innovative prototypes to solve user problems</li>
        <li>Validate product and feature ideas</li>
        <li>Measure progress and continue learning</li>
      </ul>  
  </div>
  
  <div class="right">
    <div class="workshop-archive-image-shadow"></div>
    <div class="workshop-archive-image"></div>
  </div>
</section>
</div>

<section class="workshop-archive-gallery">
  
  <div class="wa-gallery-intro">
    <a name="process-anchor" class="process-anchor"></a>
    <h2>Our Workshops</h2>
    <p>We can help you in <span class="purple">every phase</span> of your product's development
      <br><b>Which phase is your product in?</b>
    </p>
  </div>
  
  <div id="wa-pager">
    <a data-slide-index="0" href=""><img class="wa-pager-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-icon-01.png" /></a>
    <a data-slide-index="1" href=""><img class="wa-pager-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-icon-02.png" /></a>
    <a data-slide-index="2" href=""><img class="wa-pager-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-icon-03.png" /></a>
    <a data-slide-index="3" href=""><img class="wa-pager-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-icon-04.png" /></a>
    <a data-slide-index="4" href=""><img class="wa-pager-image" src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-icon-05.png" /></a>
  </div>
    
  
  <ul class="wa-gallery">
    <li>
      <div class="gallery-results">
        <?php 

        $posts = get_posts(array(
        	'post_type'			=> 'uxclinic_workshop',
          'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"discovery"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
        ));
        
        if( $posts ): ?>
        	
        	<ul>
        		
        	<?php foreach( $posts as $post ): 
        		
        		setup_postdata( $post );
        		
        		?>
        		<li class="wa-gallery-single">
        		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
        		  <div class="wa-gallery-single-content">
          		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
        			  <a class="purple" href="<?php the_permalink(); ?>">
          			  <h3><?php the_title(); ?></h3>
          		  </a>
          		  <?php the_field('w-description'); ?>
          		  <a class="button arrow-button" href="<?php the_permalink(); ?>">Learn More</a>
        		  </div>
        		</li>
        	
        	<?php endforeach; ?>
        	
        	</ul>
        	
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
      </div>
    </li>
    
    <li>
      <div class="gallery-results">
        <?php 

         $posts = get_posts(array(
        	'post_type'			=> 'uxclinic_workshop',
          'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"ideation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
        ));
        
        if( $posts ): ?>
        	
        	<ul>
        		
        	<?php foreach( $posts as $post ): 
        		
        		setup_postdata( $post );
        		
        		?>
        		<li class="wa-gallery-single">
        		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
        		  <div class="wa-gallery-single-content">
          		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
        			  <a class="purple" href="<?php the_permalink(); ?>">
          			  <h3><?php the_title(); ?></h3>
          		  </a>
          		  <?php the_field('w-description'); ?>
          		  <a class="button arrow-button" href="<?php the_permalink(); ?>">Learn More</a>
        		  </div>
        		</li>
        	
        	<?php endforeach; ?>
        	
        	</ul>
        	
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
      </div>
    </li>
    
    <li>
      <div class="gallery-results">
        <?php 

         $posts = get_posts(array(
        	'post_type'			=> 'uxclinic_workshop',
          'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"validation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
        ));
        
        if( $posts ): ?>
        	
        	<ul>
        		
        	<?php foreach( $posts as $post ): 
        		
        		setup_postdata( $post );
        		
        		?>
        		<li class="wa-gallery-single">
        		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
        		  <div class="wa-gallery-single-content">
          		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
        			  <a class="purple" href="<?php the_permalink(); ?>">
          			  <h3><?php the_title(); ?></h3>
          		  </a>
          		  <?php the_field('w-description'); ?>
          		  <a class="button arrow-button" href="<?php the_permalink(); ?>">Learn More</a>
        		  </div>
        		</li>
        	
        	<?php endforeach; ?>
        	
        	</ul>
        	
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
      </div>
    </li>
    
    <li>
      <div class="gallery-results">
        <?php 

         $posts = get_posts(array(
        	'post_type'			=> 'uxclinic_workshop',
          'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"implementation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
        ));
        
        if( $posts ): ?>
        	
        	<ul>
        		
        	<?php foreach( $posts as $post ): 
        		
        		setup_postdata( $post );
        		
        		?>
        		<li class="wa-gallery-single">
        		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
        		  <div class="wa-gallery-single-content">
          		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
        			  <a class="purple" href="<?php the_permalink(); ?>">
          			  <h3><?php the_title(); ?></h3>
          		  </a>
          		  <?php the_field('w-description'); ?>
          		  <a class="button arrow-button" href="<?php the_permalink(); ?>">Learn More</a>
        		  </div>
        		</li>
        	
        	<?php endforeach; ?>
        	
        	</ul>
        	
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
      </div>
    </li>
    
    <li>
      <div class="gallery-results">
        <?php 

         $posts = get_posts(array(
        	'post_type'			=> 'uxclinic_workshop'
        ));
        
        if( $posts ): ?>
        	
        	<ul>
        		
        	<?php foreach( $posts as $post ): 
        		
        		setup_postdata( $post );
        		
        		?>
        		<li class="wa-gallery-single">
        		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
        		  <div class="wa-gallery-single-content">
          		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
        			  <a class="purple" href="<?php the_permalink(); ?>">
          			  <h3><?php the_title(); ?></h3>
          		  </a>
          		  <?php the_field('w-description'); ?>
          		  <a class="button arrow-button" href="<?php the_permalink(); ?>">Learn More</a>
        		  </div>
        		</li>
        	
        	<?php endforeach; ?>
        	
        	</ul>
        	
        	<?php wp_reset_postdata(); ?>
        
        <?php endif; ?>
      </div>
    </li>
  </ul>
  
  
  <script>
    $('.wa-gallery').bxSlider({
      mode: 'fade',
      auto: false,
      pagerCustom: '#wa-pager',
      adaptiveHeight: true
    });
  </script>
</section>

<section class="workshop-archive-gallery mobile-wa-gallery display-wa-gallery-01">
  
  <div class="wa-gallery-intro">
    <h2>Our Workshops</h2>
    <p>We can help you in <span class="purple">every phase</span> of your product's development
      <br><b>Which phase is your product in?</b>
    </p>
  </div>
  
  <div class="wa-gallery-selector">
    <h4>SELECT YOUR WORKSHOPS PHASE</h4>
    <div class="wa-class-toggle">
      Select your product phase
    </div>
    <div class="wa-mobile-menu">
      <ul>
        <li class="close-mobile-wa-menu display-wa-01" onclick="changeName01()">Discovery</li>
        <li class="close-mobile-wa-menu display-wa-02" onclick="changeName02()">Ideation</li>
        <li class="close-mobile-wa-menu display-wa-03">Validation</li>
        <li class="close-mobile-wa-menu display-wa-04">Implementation</li>
        <li class="close-mobile-wa-menu display-wa-05">See all workshops</li>
      </ul>
    </div>
  </div>
  
  
  <div class="wa-category-01">
    <?php 

      $posts = get_posts(array(
      	'post_type'			=> 'uxclinic_workshop',
        'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"discovery"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
      ));
      
      if( $posts ): ?>
      	
      	<ul>
      		
      	<?php foreach( $posts as $post ): 
      		
      		setup_postdata( $post );
      		
      		?>
      		<li class="wa-gallery-single">
      		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
      		  <div class="wa-gallery-single-content">
        		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
      			  <a class="purple" href="<?php the_permalink(); ?>">
        			  <h3><?php the_title(); ?></h3>
        		  </a>
      		  </div>
      		</li>
      	
      	<?php endforeach; ?>
      	
      	</ul>
      	
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>
  </div>
  
  <div class="wa-category-02">
    <?php 

      $posts = get_posts(array(
      	'post_type'			=> 'uxclinic_workshop',
        'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"ideation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
      ));
      
      if( $posts ): ?>
      	
      	<ul>
      		
      	<?php foreach( $posts as $post ): 
      		
      		setup_postdata( $post );
      		
      		?>
      		<li class="wa-gallery-single">
      		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
      		  <div class="wa-gallery-single-content">
        		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
      			  <a class="purple" href="<?php the_permalink(); ?>">
        			  <h3><?php the_title(); ?></h3>
        		  </a>
      		  </div>
      		</li>
      	
      	<?php endforeach; ?>
      	
      	</ul>
      	
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>
  </div>
  
  <div class="wa-category-03">
    <?php 

      $posts = get_posts(array(
      	'post_type'			=> 'uxclinic_workshop',
        'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"validation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
      ));
      
      if( $posts ): ?>
      	
      	<ul>
      		
      	<?php foreach( $posts as $post ): 
      		
      		setup_postdata( $post );
      		
      		?>
      		<li class="wa-gallery-single">
      		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
      		  <div class="wa-gallery-single-content">
        		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
      			  <a class="purple" href="<?php the_permalink(); ?>">
        			  <h3><?php the_title(); ?></h3>
        		  </a>
      		  </div>
      		</li>
      	
      	<?php endforeach; ?>
      	
      	</ul>
      	
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>
  </div>
  
  <div class="wa-category-04">
    <?php 

      $posts = get_posts(array(
      	'post_type'			=> 'uxclinic_workshop',
        'meta_query' => array(
          array(
            'key' => 'workshop_category', // name of custom field
            'value' => '"implementation"', // matches exactly "red"
            'compare' => 'LIKE'
            )
          )
      ));
      
      if( $posts ): ?>
      	
      	<ul>
      		
      	<?php foreach( $posts as $post ): 
      		
      		setup_postdata( $post );
      		
      		?>
      		<li class="wa-gallery-single">
      		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
      		  <div class="wa-gallery-single-content">
        		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
      			  <a class="purple" href="<?php the_permalink(); ?>">
        			  <h3><?php the_title(); ?></h3>
        		  </a>
      		  </div>
      		</li>
      	
      	<?php endforeach; ?>
      	
      	</ul>
      	
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>
  </div>
  
  <div class="wa-category-05">
    <?php 

      $posts = get_posts(array(
      	'post_type'			=> 'uxclinic_workshop'
      ));
      
      if( $posts ): ?>
      	
      	<ul>
      		
      	<?php foreach( $posts as $post ): 
      		
      		setup_postdata( $post );
      		
      		?>
      		<li class="wa-gallery-single">
      		  <a href="<?php the_permalink(); ?>"><div class="wa-gallery-single-image" style="background-image: url(<?php the_field('w-archive-image'); ?>)"></div></a>
      		  <div class="wa-gallery-single-content">
        		  <span class="wa-gallery-category"><?php the_field('workshop_category'); ?> phase</span>
      			  <a class="purple" href="<?php the_permalink(); ?>">
        			  <h3><?php the_title(); ?></h3>
        		  </a>
      		  </div>
      		</li>
      	
      	<?php endforeach; ?>
      	
      	</ul>
      	
      	<?php wp_reset_postdata(); ?>
      
      <?php endif; ?>
  </div>
</section>


<div class="margin-container wa-hide-on-desktop">
<section class="workshop-archive-intro">
  <div class="left">
    <div class="scaleup-logo"></div>  
      <ul>
        <li>Align your team around a common vision</li>
        <li>Understant your users' needs and behaviours</li>
        <li>Create innovative prototypes to solve user problems</li>
        <li>Validate product and feature ideas</li>
        <li>Measure progress and continue learning</li>
      </ul>  
  </div>
  
  <div class="right">
    <div class="workshop-archive-image-shadow"></div>
    <div class="workshop-archive-image"></div>
  </div>
</section>
</div>

<section class="wa-partners">
  <h4>We Have Facilitated Workshops with:</h4>
  <div class="wa-partners-gallery">
    <div class="partner" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-partner-01.png);"></div>
    <div class="partner" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-partner-02.png);"></div>
    <div class="partner" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-partner-03.png);"></div>
    <div class="partner" style="background-image: url(<?php bloginfo( 'stylesheet_directory' ); ?>/img/wa-partner-04.png);"></div>
  </div>
</section>

<div class="margin-container">
<?php include 'inc-contact-workshops.php'; ?>
</div>

<?php get_footer(); ?>
