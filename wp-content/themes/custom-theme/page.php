<?php get_header(); ?>

  <main>
    <div class="container">

      <div class="row">
        <section class="col">
          <?php while ( have_posts() ) : the_post(); ?>

            <article>
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </article>

    			<?php endwhile; ?>
        </section>
      </div><!-- .row -->
    </div><!-- .container -->
  </main>

<?php get_footer(); ?>
