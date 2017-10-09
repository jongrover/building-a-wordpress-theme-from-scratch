<article id="post-<?php the_ID(); ?>">
	<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<small><?php the_date(); ?> by <?php the_author(); ?></small>
  <?php the_content(); ?>
</article>
