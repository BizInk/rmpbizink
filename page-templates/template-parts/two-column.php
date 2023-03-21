<?php 
$general_settings = get_sub_field('general_settings'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

  $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

  $general_class .= ' comman-margin';
}

if( have_rows('column_section') ):

    while( have_rows('column_section') ):
        the_row();

        $two_column_column_bg = get_sub_field('two_column_column_bg');
         ?>

        <section class="two-col-section<?= $general_class; ?>" style="background-image:url(<?php echo $two_column_column_bg; ?>);">
            <div class="container">  
                <?php 
                $column_image_position_class = '';
                $column_image_position = get_sub_field('column_image_position');
                $column_small_title = get_sub_field('column_small_title');
                $column_hero_title = get_sub_field('column_hero_title');
                $column_hero_description = get_sub_field('column_hero_description');
                $column_hero_button = get_sub_field('column_hero_button');
                $column_hero_image = get_sub_field('column_hero_image');
                
                if( $column_image_position == 'right' ){
                
                    $column_image_position_class = ' flex-md-row';
                }else if( $column_image_position == 'left' ){
                
                    $column_image_position_class = ' flex-md-row-reverse';
                } ?>

                <div class="row align-item-center<?php echo $column_image_position_class; ?> flex-column-reverse">
                    <div class="col-md-6 col-left">
                        <div class="col-content">
                            
                            <?php if( !empty($column_small_title) ) { ?>
                                
                                <h5 class="dark"><?php echo $column_small_title; ?></h5>
                            <?php }
                            
                            if( !empty($column_hero_title) ) { ?>
                                
                                <h2><?php echo $column_hero_title; ?></h2>
                            <?php }
                            
                            echo $column_hero_description;
                            
                            if( isset($column_hero_button['url']) && !empty($column_hero_button['url']) && isset($column_hero_button['title']) && !empty($column_hero_button['title']) ) { ?>
                                
                                <a href="<?php echo $column_hero_button['url']; ?>" class="btn navyblue-btn mt-3" target="<?php echo $column_hero_button['target']; ?>"><?php echo $column_hero_button['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-right mb-5 mb-md-0">
                        
                        <?php if( !empty($column_hero_image) ) { ?>
                            
                            <img src="<?php echo $column_hero_image; ?>" class="img-fluid" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile;
endif; ?>