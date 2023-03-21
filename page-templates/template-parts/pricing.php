<?php
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$pricing_sub_title = get_sub_field('pricing_sub_title');
$pricing_title = get_sub_field('pricing_title');
$pricing_description = get_sub_field('pricing_description');
$columns_number = get_sub_field('columns_number');
$pricing_packages = get_sub_field('pricing_packages');
$columns_classes = 'col-md-6 col-lg-4';

if( $columns_number == 4 ){

    $columns_classes = 'col-md-6 col-xl-4 col-xxl-3';
} ?>
<section class="pricing-section<?= $general_class; ?>">
    <!-- new added div comman-shape-->
    <div class="top-left-image comman-shape">        
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>

    <div class="bottom-right-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>

    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">

                <?php if( $pricing_sub_title ) { ?>
                    
                    <h4 class="dark"><?php echo $pricing_sub_title; ?></h4>
                <?php }
                
                if( $pricing_title ) { ?>
                    
                    <h2><?php echo $pricing_title; ?></h2>
                <?php }
                
                if( $pricing_description ) { ?>
                    
                    <p><?php echo $pricing_description; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row gy-5 g-md-5 <?= $columns_number == 5 ? 'row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5' : null; ?>">
            <?php
            $args = array(
                'post_type' => 'fixed-price-packages',
                'posts_per_page' => $columns_number,
                'post_status' => 'publish',
            );

            $pricing_loop = new WP_Query( $args );
            
            if( !empty($pricing_packages) ) {
                
                foreach( $pricing_packages as $pricing_package ) {
                //$pricing_loop->the_post();

                    $price = get_field('price', $pricing_package);
                    $intprice = floor( $price );
                    $floatprice = $price - $intprice;

                    $price_subtitle_text = get_field( 'price_subtitle_text', $pricing_package);
                    $show_price_per_period = get_field( 'show_price_per_period', $pricing_package);
                    $price_button = get_field('price_button', $pricing_package);
                    ?>
                
                    <div class="<?= $columns_classes; ?>">
                        <div class="card">
                            <div class="card-header text-center">

                                <h6><?php echo $pricing_package->post_title; ?></h6>
                                <?= $price_subtitle_text; ?>
                                
                                <?php if( !empty($show_price_per_period) ) { ?>
                                    
                                    <h2 class="card-title pricing-card-title">$<?php echo $intprice; ?><sup>,<?= $floatprice > 0 ? ($floatprice*100) : '00'; ?></sup><small>/ <?php echo $show_price_per_period; ?></small></h2>
                                <?php } ?>  
                            </div>

                            <?php if( have_rows('price_features', $pricing_package) ): ?>
                                
                                <div class="card-body editor-design pt-0">
                                    <ul>
                                        <?php
                                        while( have_rows('price_features', $pricing_package) ): 
                                            the_row();

                                            $features = get_sub_field('features');
                                            
                                            if( !empty($features) ) { ?>
                                                
                                                <li><span><?php echo $features; ?></span></li>
                                            <?php }
                                        endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <div class="card-footer">
                                <?php
                                if( !empty($price_button['url']) && !empty($price_button['title']) ) { ?>
                                    
                                    <a href="<?php echo $price_button['url']; ?>" class="btn navyblue-btn w-100" target="<?php echo $price_button['target']; ?>"><?php echo $price_button['title']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } 
            } wp_reset_postdata(); ?>
        </div>
    </div>
</section>