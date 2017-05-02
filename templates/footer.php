<?php if(!is_page_template('contact.php') && !is_page(194)):?>
<footer>
<div class="container"  data-aos="fade" data-aos-once="true">
  <div class="row justify-content-center">
    <div class="col-md-5 text-center">
      <img src="/wp-content/uploads/2017/04/TRUE-NORTH-LOGO-COLOR-2016-big.png" class="img-fluid">
    </div>
  </div>
  <hr>
  <div class="row footer-info">
    <div class="col-md-12 text-center">
      <h2>Get In Touch</h2>
    </div>
  </div>
  <div class="row footer-info">
    <div class="col-md-4 offset-md-1 text-center">
      <h4><a href="#"><i class="fa fa-mobile"></i> 888.888.8888</a></h4>
      <h5>2183 Fairview Rd</h5>
      <h5>Suite 100</h5>
      <h5>Costa Mesa, CA 92627</h5>
      <a href="https://www.google.com/maps/place/2183+Fairview+Rd+%23100,+Costa+Mesa,+CA+92627/data=!4m2!3m1!1s0x80dcdf9c3cf375ed:0x893a4fb449770b66?sa=X&ved=0ahUKEwjw0ZnUpprTAhWBv7wKHXCMDJ8Q8gEIGTAA" target="_blank"><i class="fa fa-map"></i> Get Directions</a>
      <br/>
      <br/>
      <h6><a href="#">info@truenorthlab.com</a></h6>

    </div>
    <div class="col-md-4 offset-md-1 text-center">
      <?php
           wp_nav_menu( array(
               'menu'              => 'Footer',
               'theme_location'    => 'primary',
               'menu_class'        => 'footer-menu'
            ));
       ?>
    </div>
    <div class="col-sm-4 text-center hidden-sm-up">
        <?php echo do_shortcode('[contact-form-7 id="229" title="Contact 2"]'); ?>
    </div>
  </div>
</div>

</footer>

<?php endif; ?>
