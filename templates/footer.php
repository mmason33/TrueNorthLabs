<footer>
<div class="container"  data-aos="fade" data-aos-once="true">
  <div class="row justify-content-center">
    <div class="col-md-5 text-center">
      <img src="/wp-content/uploads/2017/03/TRUE-NORTH-LOGO-COLOR-2016-big.png" class="img-fluid">
    </div>
  </div>
  <hr>
  <div class="row footer-info">
    <div class="col-md-12 text-center">
      <h2>Get In Touch</h2>
    </div>
  </div>
  <div class="row footer-info">
    <div class="col-sm-4 text-center">
      <h4><a href="#"><i class="fa fa-mobile"></i> 888.888.8888</a></h4>
      <h5>4343 Von Karman Avenue</h5>
      <h5>Suite 200</h5>
      <h5>Irvine, CA 92614</h5>
      <h5><a href="#">info@truenorthlab.com</a></h5>

    </div>
    <div class="col-sm-4 text-center">
      <?php
           wp_nav_menu( array(
               'menu'              => 'Footer',
               'theme_location'    => 'primary',
               'menu_class'        => 'footer-menu'
            ));
       ?>
    </div>
    <div class="col-sm-4 text-center">
        <?php echo do_shortcode('[contact-form-7 id="33" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>

</footer>
