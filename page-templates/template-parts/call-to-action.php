<?php
$general_settings = get_sub_field('general_settings'); 
$call_to_action_content_align = get_sub_field('call_to_action_content_align'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
  
  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
  
  $general_class .= ' comman-margin';
}

$background_imagecolor = get_sub_field('background_imagecolor');
$background_image = get_sub_field('background_image');
$background_color = get_sub_field('background_color');
$background_image_url = isset($background_image['url']) ? $background_image['url'] : '';
$button_with_color = get_sub_field('button_with_color'); 

if( $background_imagecolor == 'Image' && !empty($background_image_url) ){
    
    $background_html = 'style="background-image: url('. $background_image_url .');"';
}else if( $background_imagecolor == 'Color' ){
    
    $background_html = 'style="background-color: '. $background_color .';"';
}

$align_class = ' right-content';
if( $call_to_action_content_align == 'Left' ){
    
    $align_class = ' left-content';
}else if( $call_to_action_content_align == 'Center' ){
    
    $align_class = ' center-content';
}

$call_to_action_title = get_sub_field('call_to_action_title');
$call_to_action_description = get_sub_field('call_to_action_description');
?>

<!-- call-to-action-section-start -->
<section class="call-to-action-section<?= $general_class; ?><?= !is_front_page() ? ' medium-padding' : null; ?>" <?= $background_html; ?>>
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design<?= $align_class; ?>">

                <?php if( !empty($call_to_action_title) ) { ?>
                    
                    <h1><?php echo $call_to_action_title; ?></h1>
                <?php }

                if( !empty($call_to_action_description) ) { ?>
                    
                    <p><?php echo $call_to_action_description; ?></p>
                <?php }

                if( isset($button_with_color['title']) ) { ?>
                    
                    <a href="<?php echo $button_with_color['url']; ?>" target="<?php echo $button_with_color['target']; ?>" class="btn white-btn"><?php echo $button_with_color['title']; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>         
</section>
<!-- call-to-action-section-end -->