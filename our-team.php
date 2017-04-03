<?php
/**
 * Template Name: Our Team Template
 */
?>

<div id="our-team">

<?php
    $args = array(
        'post_type' => 'staff',
        'posts_per_page' => -1,
    );
?>
    <?php //declare query ?>
    <?php $loop = new WP_Query( $args );?>
    <section class="<?php echo $categorie->slug ?> staff-wrap">
      <div class="container-fluid">
        <div class="row justify-content-center">


        <?php //start the loop ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>
                <?php $title = get_field('staff_title'); ?>
                <div class="col-md-6 col-xl-3 col-lg-4 text-center staff-member" data-aos="zoom-in" data-aos-once="true">
                    <div class="staff-image">
                      <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid rounded"></a>
                        <h4 class="staff-name"><a href="<?php the_permalink(); ?>" class="staff-anchor"><?php the_title(); ?></a></h4>
                      <p class="staff-title"><a href="<?php the_permalink(); ?>" class="staff-anchor"><?php echo $title; ?></a></p>
                  </div>
                  <div class="hidden-sm-up">
                    <a href="<?php the_permalink(); ?>">Read Bio</a>
                  </div>
                </div>
        <?php endwhile;?>
          </div>
        </div>
      </section>
        <?php wp_reset_postdata();
    ?>
</div>
