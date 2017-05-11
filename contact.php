<?php
/**
 * Template Name: Contact Page Template
 */
?>
<section id="contact">
<div class="container">
  <div class="row">
    <div class="col-md-5 head" data-aos="fade" data-aos-once="true" data-mh="contact">
      <div class="contact-info">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="/wp-content/uploads/2017/04/TRUE-NORTH-LOGO-COLOR-2016.png" class="img-fluid">
          <h5 style="margin-top:1em;line-height: 3rem;font-weight: 300;">Have any questions about our services? Contact us directly by phone, email or the form provided. A representative will be with you as soon as possible.</h5>
        </div>
        <hr style="border-top: 1px solid rgba(0,0,0,.1);height: 1px;width: 100%;">
        <div class="col-md-12 text-center">
          <h4><a href="tel:9492699263"><i class="fa fa-mobile"></i> 949.269.9263</a></h4>
        </div>
        <div class="col-md-12 text-center">
          <p>2183 Fairview Rd, Suite 100</p>
          <p>Costa Mesa, CA 92627</p>
        </div>
        <div class="col-md-4 col-4 text-center">
          <a href="tel:9492699263">
          <i class="fa fa-mobile fa-5x"></i>
          <p>Phone</p>
          </a>
        </div>
        <div class="col-md-4 col-4 text-center">
          <a href="https://www.google.com/maps/place/2183+Fairview+Rd+%23100,+Costa+Mesa,+CA+92627/@33.6537412,-117.9104342,17z/data=!3m1!4b1!4m5!3m4!1s0x80dcdf9c3cf375ed:0x893a4fb449770b66!8m2!3d33.6537412!4d-117.9082455" target="_blank">
          <i class="fa fa-map fa-5x"></i>
          <p>Directions</p>
          </a>
        </div>
        <div class="col-md-4 col-4 text-center">
          <a href="mailto:true-northlabs.com">
          <i class="fa fa-envelope fa-5x"></i>
          <p>Email</p>
        </a>
        </div>
      </div>
    </div>
  </div>
    <div class="col-md-5 offset-md-2 offset-lg-2 offset-xl-2 head" data-aos="fade" data-aos-once="true" data-mh="contact">
      <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>
</section>
