<!-- tab-section-start -->
<section class="tab-section">
  <div class="container">
    <div class="tab-wrap">
      <div class="row align-item-center flex-md-row flex-column-reverse">
        <div class="col-md-6">
          <div class="container responsive-tabs">
            <?php if( have_rows('tabbing_and_description') ): ?>
            <ul class="nav nav-tabs" role="tablist">
              <?php $i=0; while ( have_rows('tabbing_and_description') ) : the_row(); ?>
              <li class="nav-item">
                <a id="tab-<?php echo $i; ?>" href="#pane-A<?php echo $i; ?>" class="nav-link <?php if($i==0){ echo "active"; } ?>" data-bs-toggle="tab" role="tab"><?php echo get_sub_field('tab_titile');  ?></a>
              </li>
              <?php $i++; endwhile; ?>
            </ul>
            <div id="content" class="tab-content" role="tablist">
              <?php $i=0; while ( have_rows('tabbing_and_description') ) : the_row(); ?>
              <div id="pane-A<?php echo $i; ?>" class="card tab-pane fade <?php  if ($i==0) { echo "active show"; } ?>" role="tabpanel" aria-labelledby="tab-A<?php echo $i; ?>">
                <div class="card-header" role="tab" id="heading-A<?php echo $i; ?>">
                  <h5 class="mb-0">
                    <a data-bs-toggle="collapse" href="#collapse-A<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-A<?php echo $i; ?>">
                      <?php echo get_sub_field('tab_titile');  ?>
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  </h5>
                </div>
                <div id="collapse-A<?php echo $i; ?>" class="collapse <?php  if ($i==0) { echo "active show"; } ?>" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A<?php echo $i; ?>">
                  <div class="card-body editor-design">
                   <?php echo get_sub_field('tab_description'); ?>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 text-end mb-5 mb-md-0">
          <?php $tab_right_image = get_sub_field('tab_right_image'); ?>
          <?php if($tab_right_image) { ?>
            <img src="<?php echo $tab_right_image; ?>" class="img-fluid" alt="">
          <?php } ?>  
        </div>
      </div>
    </div>
  </div>
</section>
<!-- tab-section-end -->
