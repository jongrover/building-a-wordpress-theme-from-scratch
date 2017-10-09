  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php if (is_active_sidebar('footer-1')) {
            dynamic_sidebar('footer-1');
          } ?>
        </div>
        <div class="col-md-3">
          <?php if (is_active_sidebar('footer-2')) {
            dynamic_sidebar('footer-2');
          } ?>
        </div>
        <div class="col-md-3">
          <?php if (is_active_sidebar('footer-3')) {
            dynamic_sidebar('footer-3');
          } ?>
        </div>
        <div class="col-md-3">
          <?php if (is_active_sidebar('footer-4')) {
            dynamic_sidebar('footer-4');
          } ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="copyright"><small>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>, <?php bloginfo( 'description' ); ?>. All Rights Reserved.</small></p>
        </div><!-- .col -->
      </div><!-- .row -->
    </div><!-- .container -->
  </footer>

  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/popper.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
