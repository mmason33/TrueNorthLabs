<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('body-offcanvas'); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
      if(!is_page(420)):
        get_template_part('includes/hero-section');
      endif;
    ?>
    <?php if(get_field('main_bg_color') != ''): ?>
      <section class="section-title" style="background-color:<?php echo get_field('main_bg_color'); ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <?php include Wrapper\template_path(); ?>
          </div>
        </div>
      </div>
    </section>
  <?php else: ?>
      <?php include Wrapper\template_path(); ?>
  <?php endif; ?>
    <?php
      do_action('get_builder');
      get_template_part('includes/builder');
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
      ?>
  </body>
</html>
