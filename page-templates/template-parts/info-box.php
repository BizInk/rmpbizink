<!-- infobox-section-start -->
<?php 
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

  $general_class .= ' comman-margin';
}

$info_box_title = get_sub_field('info_box_title');
$info_box_content = get_sub_field('info_box_content');
$info_box_bg = get_sub_field('info_box_bg');

if( have_rows('information_box') ):
?>
    <section class="infobox-section<?= $general_class; ?>" style="background-image:url(<?php echo $info_box_bg; ?>);">
        
        <div class="full-width-wysiwyg text-center">   
            <div class="container">
                <div class="editor-design">
                    <?php if( !empty($info_box_title) ){ ?>  

                        <h2><?= $info_box_title; ?></h2>
                    <?php } 

                    echo $info_box_content; ?>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="infobox-warp">
                <div class="row gy-5 g-md-5">
                    <?php 
                    if( have_rows('information_box') ):
                        
                        while( have_rows('information_box') ):
                            the_row();

                            $info_image = get_sub_field('info_image');
                            $info_title = get_sub_field('info_title');
                            $info_description = get_sub_field('info_description');
                            $info_link = get_sub_field('info_link');
                            ?>

                            <div class="col-md-6 col-xl-3">
                                <a href="<?= !empty($info_link) ? $info_link : '#'; ?>" class="info-box text-center h-100">
                                    
                                    <?php if( !empty($info_image) ) { ?>
                                        
                                        <img src="<?php echo $info_image; ?>" class="img-fluid" alt="">
                                    <?php }

                                    if( !empty($info_title) ) { ?>
                                        
                                        <h6><?php echo $info_title; ?></h6>
                                    <?php }

                                    if( !empty($info_description) ) { ?>
                                        
                                        <div class="info-description"><?php echo $info_description; ?></div>
                                    <?php } ?>

                                    <span class="btn btn-outline-navyblue round-btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </div>
                        <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- infobox-section-end -->