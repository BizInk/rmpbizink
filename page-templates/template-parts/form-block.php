<?php
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

  $general_class .= ' comman-margin';
}

$form_title = get_sub_field('form_title');
$form_content = get_sub_field('form_content');
$gravity_forms = get_sub_field('gravity_forms');
$form_show_title = get_sub_field('form_show_title');
$form_show_title_var = $form_show_title ? 'true' : 'false';
?>
<!-- form-section-start -->
<section class="form-section<?= $general_class; ?>">
    <div class="top-left-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="bottom-right-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">
                <?php if( $form_title ) { ?> 
                    
                    <h2><?php echo $form_title; ?></h2>
                <?php }
                
                if( $form_content ) { ?>
                    
                    <p><?php echo $form_content; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center comman-callto-action">
            
            <?php if( !empty($gravity_forms) ) {
                
                echo do_shortcode('[gravityform id="'. $gravity_forms .'" title="'. $form_show_title_var .'"]');
            } ?>
        </div>
    </div>
</section>
<!-- form-section-end -->