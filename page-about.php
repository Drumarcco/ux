<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>

<div class="blog-background">
<div class="post-card">
  
<section class="wa-hero au-hero">
  <div>
    <h1>About Us</h1>
    <p>We help software companies accelerate their business by powering up their user experience.</p>
  </div>
</section>

<div class="aboutus">
  <section class="about-content">
    <div class="right-column2">
    </div>
    <div class="left-column">
      <h2><?php the_field('about_content_title'); ?></h2>
      <p><?php the_field('about_content_description'); ?></p>
    </div>
  </section>
</div>

<div class="not-p">
	<?php include 'inc-experts.php'; ?>
</div>

</div>
<?php include 'inc-contact.php'; ?>
</div>

<?php get_footer(); ?>
<script>
  function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link-anchor").click(function() {
   scrollToAnchor('link-anchor');
});
$("#link-anchor2").click(function() {
   scrollToAnchor('link-anchor');
});
</script>
