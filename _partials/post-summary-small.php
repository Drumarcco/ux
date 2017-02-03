<article class="post-summary post-summary--small">
  <h2 class="post-summary-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <?php the_post_thumbnail('square'); ?>
  <p class="post-summary-meta"><?php the_time('F j, Y') ?>, by <?php the_author() ?>.</p>
</article>
