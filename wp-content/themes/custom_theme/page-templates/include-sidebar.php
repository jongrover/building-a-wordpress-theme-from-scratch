<?php
/*
 * Template Name: Include Sidebar
 * Description: Page template with sidebar included.
 */

get_header();
?>

  <main>
    <div class="container">

      <div class="row">
        <section class="col-md-9">
          <?php while ( have_posts() ) : the_post(); ?>

            <article>
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </article>

    			<?php endwhile; ?>
          <?php if (comments_open() || get_comments_number()) {
            comments_template();
          } ?>
        </section>

        <aside class="col-md-3">
          <?php if(get_field('about_blurb')) {
  	        echo '<p>'.get_field('about_blurb').'</p>';
          } ?>
        </aside>
      </div><!-- .row -->
    </div><!-- .container -->
  </main>

<?php get_footer(); ?>
