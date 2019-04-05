<?php setup_postdata( $post ); ?>

<?php get_header(); ?>

  <main>
    <div class="container">

      <div class="row">
        <section class="col">
					<article id="post-<?php the_ID(); ?>">
						<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					  <p><?php the_content(); ?></p>
						<p><?php echo "Price: $".get_field('_price').".00"; ?></p>
					</article>
	       </section>
      </div><!-- .row -->
    </div><!-- .container -->
</main>

<?php get_footer(); ?>
