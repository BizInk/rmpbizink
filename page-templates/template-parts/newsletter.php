<!-- newsletter-section-start -->
<section class="call-to-action-section">
  <div class="container">
    <div class="row text-center comman-callto-action">
    <?php if(get_sub_field('newsletter_title')) { ?>
      <h2><?php echo get_sub_field('newsletter_title'); ?></h2>
      <?php } ?>

      <?php if(get_sub_field('newsletter_subtitle')) { ?>
      <p><?php echo get_sub_field('newsletter_subtitle'); ?></p>
      <?php } ?>
      <!-- <button class="btn navyblue-btn mt-2">Signup</button>              -->
    </div>
  </div>
</section>

<!-- newsletter-section-end -->