<?php get_header(); ?>

  <main>
    <div class="container">

      <div class="row">

        <section class="col-md-9">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    				get_template_part( 'content', get_post_format() );
    			endwhile; endif; ?>
        </section>

        <?php get_sidebar(); ?>

      </div><!-- .row -->
    </div><!-- .container -->
  </main>

<?php get_footer(); ?>
