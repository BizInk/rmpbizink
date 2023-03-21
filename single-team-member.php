<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

$member_image = get_field('member_image');
$member_position = get_field('member_position');
$member_short_description = get_field('member_short_description');
$member_about = get_field('member_about');
$member_my_story = get_field('member_my_story');
$linkedin = get_field('linkedin');
$twitter = get_field('twitter');
$facebook = get_field('facebook');

get_template_part('global-templates/inner-banner');
?>

<section class="member-details-section comman-padding">
    <div class="top-left-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="member-img">
                    
                    <?php if( !empty($member_image) ){ ?>
                        
                        <img src="<?php echo $member_image; ?>" class="img-fluid" alt="">                    
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="editor-design">
                    <div class="d-flex justify-content-between mb-4">
                        <h4>About Me</h4>
                        <ul class="social-nav">
                            
                            <?php if( !empty($facebook) ){ ?>
                                
                                <li><a href="<?= $facebook; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="Facebook"></a></li>
                            <?php }

                            if( !empty($twitter) ){ ?>
                                
                                <li><a href="<?= $twitter; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Twitter"></a></li>
                            <?php }

                            if( !empty($linkedin) ){ ?>
                                
                                <li><a href="<?= $linkedin; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/Linkedin.png" alt="Linkedin"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?= $member_about; ?>
                </div>
            </div>

            <?php if( !empty($member_my_story) ){ ?>

                <div class="col-md-12">
                    <div class="editor-design">
                        <h4>My Story</h4>
                        <?= $member_my_story; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>