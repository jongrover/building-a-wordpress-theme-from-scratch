<?php get_header(); ?>

  <main>
    <div class="container">

      <div class="row">

        <section class="col">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    				get_template_part( 'single', 'product', get_post_format());
    			endwhile; endif;

          if (comments_open() || get_comments_number()) {
            comments_template();
          } ?>
        </section>

      </div><!-- .row -->
    </div><!-- .container -->
  </main>

<?php get_footer(); ?>
