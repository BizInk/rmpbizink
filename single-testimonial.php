<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();

$reviewer_main_image = get_field('reviewer_main_image');
$reviewer_name = get_field('reviewer_name');
$full_review_content_1 = get_field('full_review_content_1');
$full_review_content_2 = get_field('full_review_content_2');
$reviewer_facebook = get_field('reviewer_facebook');
$reviewer_twitter = get_field('reviewer_twitter');
$reviewer_linkedin = get_field('reviewer_linkedin');

get_template_part('global-templates/inner-banner');
?>

<section class="testimonial-individual-section comman-padding">
    <div class="top-left-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="bottom-right-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="member-img">

                    <?php if( !empty($reviewer_main_image) ){ ?>

                        <img src="<?php echo $reviewer_main_image; ?>" class="img-fluid" alt="reviewer-main-image">
                    <?php } ?>
                    <div class="my-4">
                        <?php if( !empty($reviewer_name) ){ ?>

                            <h4><?= $reviewer_name; ?></h4>
                        <?php } ?>
                        
                        <ul class="social-nav">

                            <?php if( !empty($reviewer_facebook) ){ ?>
                                
                                <li><a href="<?= $reviewer_facebook; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="Facebook"></a></li>
                            <?php }

                            if( !empty($reviewer_twitter) ){ ?>
                                
                                <li><a href="<?= $reviewer_twitter; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="Twitter"></a></li>
                            <?php }

                            if( !empty($reviewer_linkedin) ){ ?>
                                
                                <li><a href="<?= $reviewer_linkedin; ?>" target="_blank"><img src="<?= get_stylesheet_directory_uri(); ?>/images/Linkedin.png" alt="Linkedin"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <?php if( !empty($full_review_content_1) ){ ?>
            
                <div class="col-md-8">
                    <div class="editor-design">
                        <?= $full_review_content_1; ?>                   
                    </div>
                </div>
            <?php }

            if( !empty($full_review_content_2) ){ ?>
                
                <div class="col-md-12">
                    <div class="editor-design">                   
                        <?= $full_review_content_2; ?>                   
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>