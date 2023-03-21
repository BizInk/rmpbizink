<?php 
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

?>
<!-- counter-section-start -->
<section class="counter-section<?= $general_class; ?>">
  <div class="full-width-wysiwyg text-center">
    <div class="container">
      <div class="editor-design">
        <h2>We do this by providing you with:</h2>
        <p>Our Halifax-based accountants and bookkeepers are here to help you take control of your finances and grow your business. </p>
      </div>
    </div>
  </div>  
  <div class="container">
    <div class="row text-center gy-5 g-md-0">
      <?php if( have_rows('counter') ): ?>
      <?php while( have_rows('counter') ): the_row(); ?>
      <?php
      $counter_text = get_sub_field('counter_text');
      $icon = get_sub_field('icon');
      $counter_description = get_sub_field('counter_description');
      ?>
      <div class="col-md-4">
        <div id="counter-box" class="counter-box">
          <div class="counter-wrap">
            <?php if($counter_text) { ?>
            <h2 class="counter plus" data-number="<?php echo $counter_text; ?>"></h2>
            <?php } ?>
            <?php if($icon) { ?>
            <span><?php echo $icon; ?></span>
            <?php } ?>
          </div>
          <?php if($counter_description) { ?>
          <?php  echo $counter_description; ?>
          <?php } ?>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
  </div>
</section>
<!-- counter-section-end -->