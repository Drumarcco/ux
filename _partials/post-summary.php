<article class="post-summary">
  <h2 class="post-summary-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <?php the_post_thumbnail('square'); ?>
  <p class="post-summary-meta"><?php the_time('F j, Y') ?>, by <?php the_author() ?>.</p>
  <?php
    if ($pos=strpos($post->post_content, '<!--more-->')){
      the_content('',FALSE,'');;
    }else{
      the_excerpt();
    }
  ?>
  <p class="post-summary-readmore"><a href="<?php the_permalink() ?>" class="more">Continue reading</a></p>
</article>
