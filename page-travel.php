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
    <div class="travel-process-left"></div>
    <div class="travel-process-right"></div>
    <div class="clear"></div>
  </div>
  
  <div class="process-carousel">
    <ul class="h-carousel">
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/home-icon01.png" />
          </div>
          <div class="process-card-content">
            <h3>User-Centered Research</h3>
            <p>Understanding user’s needs, limitations, and emotions will shape the way your product is developed. <span class="hideOnMobile">It allows you to build only what is necessary and gives you a validated approach that it will be well accepted.</span></p>
            <a class="learnmore" href="http://ux.nearsoft.com/user-research-is-key-to-understand-your-audience/">Learn More</a>
          </div>
        </div>
      </li>
      
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/home-icon02.png" />
          </div>
          <div class="process-card-content">
            <h3>Analysis & Interpretation</h3>
            <p>A correct interpretation of all the data will uncover what the motivations and emotions behind the feedback are. <span class="hideOnMobile">This means we need to translate the research conclusions into insights that will form and inform your product’s next design iteration.</span></p>
            <a class="learnmore" href="http://ux.nearsoft.com/finding-patterns-through-data-analysis/">Learn More</a>
          </div>
        </div>
      </li>
      
      <li>
        <div class="process-card">
          <div class="process-card-icon">
            <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/home-icon03.png" />
          </div>
          <div class="process-card-content">
            <h3>UI Solutions</h3>
            <p>A design solution must boost your product user experience as well as your business goals. <span class="hideOnMobile">We prototype and test the solutions with users and stakeholders. We also work with your development team to make the implementation seamless.</span></p>
            <a class="learnmore" href="http://ux.nearsoft.com/ui-design-must-reflect-the-ux-solution/">Learn More</a>
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

<div class="no-scroll-area">
<section class="section-centered_content">
  <h2>Speed up that process</h2>
  <p>We help you move forward by providing the data to power up your product.</p>
</section>

<div class="margin-container">
<section class="section-showcase">
  <div class="section-showcase-header">
    <div class="left-column">
      <h2>Our Clients</h2>
      <p>These are some of the products we've powered up</p>
    </div>
    
    <div class="right-column">
      <a class="button white arrow-button" href="<?php echo get_home_url(); ?>/portfolio">Go to our portfolio</a>
    </div>
  </div>
  
  <div class="two_column">
    <div class="column">
      <a href="https://ux.nearsoft.com/portfolio/#cogia-home">
      <div class="image cogia-home-back"></div>
      </a>
      <div class="content-shadow"></div>
      <div class="content">
        <h3 class="purple"><a class="purple" href="https://ux.nearsoft.com/portfolio/#cogia-home">Cogia Intelligence</a></h3>
        <span class="client-description">- An intelligent web and social media monitoring.</span>
        <p>We restructured their architecture information and redesign their UI to meet their users needs.</p>
        <a class="learn-more" href="https://ux.nearsoft.com/portfolio/#cogia-home">Learn more</a>
      </div>
    </div>
    
    <div class="column">
      <a href="https://ux.nearsoft.com/portfolio/#shopwell-home">
      <div class="image shopwell-home-back"></div>
      </a>
      <div class="content-shadow"></div>
      <div class="content">
        <h3 class="purple"><a class="purple" href="https://ux.nearsoft.com/portfolio/#shopwell-home">Shopwell</a></h3>
        <span class="client-description">- App to find healthy alternatives to your favorite foods.</span>
        <p>We improved their user engagement by analysing their customer motivations.</p>
        <a class="learn-more" href="https://ux.nearsoft.com/portfolio/#shopwell-home">Learn more</a>
      </div>
    </div>
  </div>
  
  <div class="mobile-hidden-button">
    <a class="button white arrow-button" href="<?php echo get_home_url(); ?>/portfolio">Go to our portfolio</a>
  </div>
</section>
</div>

<section class="home-testimonials">
  <h2>Our clients Love Our Work</h2>
  
  <div class="quote-cards">
    <ul class="card-slider">
      <li><div class="quote-card">The UX team was so helpful for us because a lot of times you need a fresh, 3rd party eyes to really get valuable feedback. It's very easy to get too used to your UX and start making bad decisions based on your own feelings.
        <div class="quote-author">
          <div class="quote-author-pic"><img src="https://ux.nearsoft.com/wp/wp-content/themes/ux/img/andrew-pic.jpg" /></div>
          <div class="quote-author-content">
            <h3><b class="purple">Andrew Miller</b> Marketing Director of Olset.</h3>
            <h4><a href="http://olset.com" target="_blank">www.olset.com</a></h4>
          </div>
        </div>
</div></li>
      <li><div class="quote-card">It is very easy to get too used to your own UX and UI. You start making bad decisions based on your own feelings. Working with the UX Team was extremely useful to get objective feedback on our product.
        <div class="quote-author">
          <div class="quote-author-pic"><img src="https://ux.nearsoft.com/wp/wp-content/themes/ux/img/dustin-pic.jpg" /></div>
          <div class="quote-author-content">
            <h3><b class="purple">Dustin Yoder</b> CEO at Sureify.</h3>
            <h4><a href="http://www.sureify.com/" target="_blank">www.sureify.com</a></h4>
          </div>
        </div>
</div></li>
    </ul>
  </div>
  
  <script>
    $('.card-slider').bxSlider({
      mode: 'fade',
      captions: true,
      pager: false,
      auto: true
    });
  </script>
  

  
</section>

<div class="margin-container">
<?php include 'inc-contact.php'; ?>
</div>

<div class="margin-container">
<section class="section-showcase blog-showcase">
  <div class="section-showcase-header">
    <div class="left-column">
      <h2>The UX Team Blog</h2>
      <p>A resource for you to learn more about UX, including our own findings, and hints of where the UX world is going.</p>
    </div>
    
    <div class="right-column">
      <a class="button white arrow-button" href="<?php echo get_home_url(); ?>/blog">Go to our Blog</a>
    </div>
  </div>
  
  <div class="three_column">
    
  <?php $the_query = new WP_Query( 'posts_per_page=3&category__not_in=15' ); ?>

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