<?php
/*
Template Name: UX MAKES THE DIFFERENCE
*/
?>
<?php get_header(); ?>

<section class="e-hero">
  <h1>User Experience Makes a Difference in Software Development</h1>
</section>

<section class="e-can">
  <h2>UX Can Have a Lasting Impact in Your Company</h2>
  <h3>Our UX Team Can Help You To:</h3>
  <div class="e-can-container">
    <div class="e-can-item">
      <div class="e-can-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/intuitive-design.png" />
      </div>
      <div class="e-can-text">Make Your Products More Intuitive</div>
    </div>
    
    <div class="e-can-item">
      <div class="e-can-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-satisfaction.png" />
      </div>
      <div class="e-can-text">Increase Customer Satisfactions</div>
    </div>
    
    <div class="e-can-item">
      <div class="e-can-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user-engagement.png" />
      </div>
      <div class="e-can-text">Boost Your Engagement</div>
    </div>
    
  </div>
</section>

<section class="submit e-submit">
  <h2>Are You Ready to Power-up Your Product?</h2>
  <p style="margin-bottom: 0;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sandra-img.png" alt="Sandra UX business developer"> Talk to Sandra at<strong> (408) 890-2115</strong>
  </p>
  <div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">

      <p class="error"></p>
      <div><input type="text" id="site" class="contactform-name" name="site" placeholder="Name"></div>
      <div><input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input></div>
      <div><input type="text" id="telephone" class="contactform-email" name="telephone" placeholder="Phone [xxx-xxx-xxxx]:"></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <div class="center"><input type="button" value="Let's Talk" onclick="requestSubmit()" class="contactform-submit"></div>


    </form>
  </div>
  </div>
</section>

<section class="e-showcase">
  <h2>We Have a Good Record Helping Other Companies</h2>
  
  <div class="single-casestudy">
    <div class="details">
      <div class="case-logo social-centiv-logo"></div>
<!--       <span class="subtitle">DESKTOP APP</span> -->
      <p>Marketing tool that helps small businesses find new customers on Twitter. - <b>DESKTOP APP</b></p>
      <p class="challenge-title"><b>Challenge</b></p>
      <p class="challenge-text">Discover users value perception while interacting with ShopWell to improve User Engagement through User Experience Research.</p>
      
      <p class="challenge-title"><b>UX Findings & Solutions</b></p>
      <p class="challenge-text">After our research we figured we had to: </p>
      
      
      
      <div class="findingsslider">
    <ul class="bxslider">
      
        <li><div class="slider-item">
          <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2015/06/img01-1.png" /><div class="slider-description">1. Improve users first impressions by reducing the steps in the sign up process.</div>
        </div>
        
            <div class="slider-item">
          <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2015/06/img03.png" /><div class="slider-description">2. Guide users through the system by displaying key features right when they needed them.
</div>
        </div>
        </li>
        
        
        <li><div class="slider-item">
          <img src="http://ux.nearsoft.com/wp/wp-content/uploads/2015/06/img04.png" /><div class="slider-description">3. Make the system more intuitive by displaying features where the user is expecting them.</div>
        </div></li>
      
    </ul>
    
    <script>
      $(document).ready(function(){
        $('.bxslider').bxSlider();
      });
    </script>
    
    </div>
      
    </div>

  </div>
</section>  



<?php get_footer(); ?>
