<?php 
$full_width_alignment = get_sub_field('full_width_alignment');
$full_width_title = get_sub_field('full_width_title');
$full_width_content = get_sub_field('full_width_content');

$alignment_class = ' text-center';

if( $full_width_alignment == 'Left' ){

    $alignment_class = ' text-start';
}else if( $full_width_alignment == 'Right' ){

    $alignment_class = ' text-end';
}
?>

<section class="full-width-section comman-margin">
<div class="container full-width-innerwrap<?= $alignment_class; ?>">
    
        
        <?php if( !empty($full_width_title) ) { ?>
            
            <h2><?= $full_width_title; ?></h2>
        <?php } ?>
        <div class="editor-design">
            <?= $full_width_content; ?>
    
    </div>
</div> 
</section>
<!-- full-width-section-ends -->