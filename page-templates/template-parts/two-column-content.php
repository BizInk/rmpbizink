<?php 
$two_column_content_general_settings = get_sub_field('two_column_content_general_settings'); 
$two_column_content_section_title = get_sub_field('two_column_content_two_column_content_section_title'); 
$two_column_content_section_image = get_sub_field('two_column_content_two_column_content_section_image'); 

$two_column_content_left_contentimage = get_sub_field('two_column_content_left_contentimage'); 
$two_column_content_left_title = get_sub_field('two_column_content_left_title'); 
$two_column_content_left_content = get_sub_field('two_column_content_left_content'); 
$two_column_content_left_button = get_sub_field('two_column_content_left_button'); 
$two_column_content_left_image = get_sub_field('two_column_content_left_image'); 

$two_column_content_right_contentimage = get_sub_field('two_column_content_right_contentimage'); 
$two_column_content_right_title = get_sub_field('two_column_content_right_title'); 
$two_column_content_right_content = get_sub_field('two_column_content_right_content'); 
$two_column_content_right_button = get_sub_field('two_column_content_right_button'); 
$two_column_content_right_image = get_sub_field('two_column_content_right_image'); 

$general_class = '';

if( in_array('Add Common Padding', $two_column_content_general_settings) ){

  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $two_column_content_general_settings) ){

  $general_class .= ' comman-margin';
} ?>

<section class="two-col-content-section<?= $general_class; ?>" style="background-image:url(<?= $two_column_content_section_image; ?>);">
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design">                
                <h2><?= $two_column_content_section_title; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="editor-design">
                    <?php if( $two_column_content_left_contentimage == 'Content' ){ ?>
                        
                        <h2><?= $two_column_content_left_title; ?></h2>
                        <?= $two_column_content_left_content; ?>

                         <?php
                            if(!empty($two_column_content_left_button['url'])){
                                ?>
                                    <a href="<?= $two_column_content_left_button['url']; ?>" target="<?= $two_column_content_left_button['target']; ?>" class="btn"><?= $two_column_content_left_button['title']; ?></a>
                                <?php
                            }
                        ?>
                    <?php }else{ ?>

                        <img src="<?= $two_column_content_left_image; ?>">
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="editor-design">
                    <?php if( $two_column_content_right_contentimage == 'Content' ){ ?>
                        
                        <h2><?= $two_column_content_right_title; ?></h2>
                        <?= $two_column_content_right_content; ?>

                        <?php
                            if(!empty($two_column_content_right_button['url'])){
                                ?>
                                    <a href="<?= $two_column_content_right_button['url']; ?>" target="<?= $two_column_content_right_button['target']; ?>" class="btn"><?= $two_column_content_right_button['title']; ?></a>
                                <?php
                            }
                        ?>
                        
                    <?php }else{ ?>

                        <img src="<?= $two_column_content_right_image; ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>