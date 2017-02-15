<?php
/*
Template Name: TRAVEL
*/
?>
<?php get_header('new'); ?>

<section class="home-hero">
  <div class="white-block">
    <h1>Optimize your <span class="purple">booking</span> Experience</span></h1>
    <span class="tagline">Pay attention to your users</span>
  </div>
</section>

<div class="circle-know-more">
  <a class="circle-button orange-btn" href="#process-anchor"></a>
</div>


  <div class="margin-container">
  <div class="home-process">
    <a name="process-anchor" class="process-anchor"></a>
  
  <h2>Turn your visitors into customers</h2>
  <p>Make it easy for them to search, find and purchase a trip.</p>

  <div class="travel-process">
    <div class="travel-process-left">
      <div class="travel-process-item">
        <div class="icon"></div>
        <div class="text">
          Help them find the information they need quickly.
        </div>
      </div>
      
      <div class="travel-process-item">
        <div class="icon"></div>
        <div class="text">
          Customize your search results to their needs.
        </div>
      </div>
      
      <div class="travel-process-item">
        <div class="icon"></div>
        <div class="text">
          Lead your users through the experience.
        </div>
      </div>
    </div>
    <div class="travel-process-right"></div>
    <div class="clear"></div>
  </div>

  <div class="process-carousel">
    <ul class="h-carousel">
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/travel-icon-01.png" />
          </div>
          <div class="process-card-content">
            <p>Help them find the information they need quickly.</p>
          </div>
        </div>
      </li>
      
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/travel-icon-02.png" />
          </div>
          <div class="process-card-content">
            <p>Customize your search results to their needs.</p>
          </div>
        </div>
      </li>
      
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/travel-icon-03.png" />
          </div>
          <div class="process-card-content">
            <p>Lead your users through the experience.</p>
          </div>
        </div>
      </li>
    </ul>
    
    <div id="bx-pager">
      <a data-slide-index="0" href="">User-Centered Research</a>
      <a data-slide-index="1" href="">Analysis & Interpretation </a>
      <a data-slide-index="2" href="">UI Solutions</a>
    </div>
  </div>

  <script>

      $('ul.h-carousel').bxSlider({
        infiniteLoop : false,
        mode: 'fade',
        pager: 'true',
        pagerCustom: '#bx-pager',
        speed: 900
      });

  </script>

</div>
</div>
</div>

<div class="margin-container">
  <div class="home-process travel-big-image">
    <h2>Optimize Your Site</h2>
    <div class="t-optimize">
      <div class="optimize-left">
        <h1>Make online booking an <span class="purple">awesome</span> experience</h1>
        <div class="icon-row"></div>
      </div>
      
      <div class="optimize-right">
        <ul>
          <li>
            <h3>User-Centered Design</h3>
            <p>Understand what your travelers are looking for and how they struggle through the booking experience.</p>
          </li>
          
          <li>
            <h3>UI Solutions</h3>
            <p>We’ll deliver you visual solutions based on curated feedback from your user.</p>
          </li>
          
          <li>
            <h3>Data Analysis</h3>
            <p>We’ll unravel the needs and motivations of your visitors when planning a trip with your product.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="no-scroll-area">

<div class="margin-container">
<section class="section-showcase">
  <div class="section-showcase-header">
    <div class="left-column">
      <h2>Our Clients</h2>
      <p>These are some of the products we've powered up</p>
    </div>
    
  </div>
  
  <div class="two_column">
    <div class="column">
      <a href="https://ux.nearsoft.com/casestudies/6-scenario-swimlanes-olset/">
      <div class="image olset-travel-back"></div>
      </a>
      <div class="content-shadow"></div>
      <div class="content">
        <h3 class="purple"><a class="purple" href="https://ux.nearsoft.com/casestudies/6-scenario-swimlanes-olset/">Olset</a></h3>
        <span class="client-description">- (IaaS) Company that automates travel bookings.</span>
        <p>We Restructured their Evernote integration workflow to increase convertions.</p>
        <a class="learn-more" href="https://ux.nearsoft.com/casestudies/6-scenario-swimlanes-olset/">Learn more</a>
      </div>
    </div>
    
    <div class="column">
      <a href="https://ux.nearsoft.com/casestudies/4-kano-analysis-bidaway/">
      <div class="image bidaway-travel-back"></div>
      </a>
      <div class="content-shadow"></div>
      <div class="content">
        <h3 class="purple"><a class="purple" href="https://ux.nearsoft.com/casestudies/4-kano-analysis-bidaway/">Bidaway</a></h3>
        <span class="client-description">- Bidding platform to win unique travel experiences.</span>
        <p>We validated and designed features that fulfill user expectations to increase engagement.</p>
        <a class="learn-more" href="https://ux.nearsoft.com/casestudies/4-kano-analysis-bidaway/">Learn more</a>
      </div>
    </div>
  </div>
</section>
</div>



<div class="margin-container">
  <?php include 'inc-contact.php'; ?>
</div>

<div class="margin-container">
<section class="section-showcase blog-showcase">
  <div class="section-showcase-header">
    <div class="left-column">
      <h2>Travel & UX</h2>
      <p>A resource for you to learn more about UX, including our own findings, and hints of where the UX world is going.</p>
    </div>
    
    <div class="right-column">
      <a class="button white arrow-button" href="<?php echo get_home_url(); ?>/blog">Go to our Blog</a>
    </div>
  </div>
  
  <div class="three_column">
    
  <?php $the_query = new WP_Query( 'posts_per_page=3&cat=22' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  
    <div class="column">
      <a href="<?php the_permalink() ?>">
      <div class="image" style="background-image: url( <?php the_post_thumbnail_url( $size ); ?> );"></div>
      </a>
      <div class="content-shadow"></div>
      <div class="content">
        <h3 class="purple"><?php the_title(); ?></h3>
        
        <p><?php echo excerpt(18); ?></p>
        <a class="learn-more" href="<?php the_permalink() ?>">Learn more</a>
      </div>
    </div>
    
    	<?php endwhile; wp_reset_postdata(); ?>
	<?php wp_reset_query(); ?>
    
  </div>
</section>
</div>






<?php get_footer(); ?>