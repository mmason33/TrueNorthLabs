<?php
$bgImageLeft = (get_sub_field('bg_image_left') != '' ? 'style="background:url('.get_sub_field('bg_image_left').') no-repeat '.get_sub_field('bg_position_left').';background-size:cover;"' : '');
$bgImageRight = (get_sub_field('bg_image_right') != '' ? 'style="background:url('.get_sub_field('bg_image_right').') no-repeat '.get_sub_field('bg_position_right').';background-size:cover;"' : '');
$contentLeft = (get_sub_field('content_left') != '' ? get_sub_field('content_left') : '');
$contentRight = (get_sub_field('content_right') != '' ? get_sub_field('content_right') : '');
$bgColorLeft = (get_sub_field('bg_color_left') != '' && $bgImageLeft === '' ? 'style="background-color:'.get_sub_field('bg_color_left').';"' : '');
$bgColorRight = (get_sub_field('bg_color_right') != '' && $bgImageRight === '' ? 'style="background-color:'.get_sub_field('bg_color_right').';"' : '');
$textCenter = (get_sub_field('text_center') != false ? 'text-center' : '');
$bgPositionLeft = get_sub_field('bg_position_left');
$bgPositionRight = get_sub_field('bg_position_right');
?>

<section id="half-and-half" class="container-fluid">
<div class="row">
  <div class="col-md-6 half-left <?php echo $textCenter; ?>" <?php echo $bgImageLeft; ?><?php echo $bgColorLeft;?>>
    <?php
      if(!empty($contentLeft)):
        echo '<div class="half-content has-text">';
        echo $contentLeft;
        echo '</div>';
      else:
        echo '';
      endif;
    ?>
  </div>
  <div class="col-md-6 half-right <?php echo $textCenter;?>" <?php echo $bgImageRight; ?><?php echo $bgColorRight;?>>
    <?php
      if(!empty($contentRight)):
        echo '<div class="half-content has-text">';
        echo $contentRight;
        echo '</div>';
      else:
        echo '';
      endif;
    ?>
  </div>
</div>
</section><!-- end Half and Half -->
