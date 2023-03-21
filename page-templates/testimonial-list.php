<?php
/**
* Template Name: Testimonial List
*
* Template for displaying a page without sidebar even if a sidebar widget is published.
*
* @package Understrap
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
get_template_part('global-templates/inner-banner');
 
$testimonials_args = array(  
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'  => 'ASC', 
);

$testimonials_loop = new WP_Query( $testimonials_args );

if( $testimonials_loop->have_posts() ){ ?>

    <section class="testimonials-list-section comman-margin">
       <div class="top-left-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="bottom-right-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row g-5">  

            <?php while ( $testimonials_loop->have_posts() ) {
                $testimonials_loop->the_post();

                $reviewer_image = get_field('reviewer_image');
                $reviewer_name = get_field('reviewer_name');
                $review_content = get_field('review_content');
                $reviewer_facebook = get_field('reviewer_facebook');
                $reviewer_twitter = get_field('reviewer_twitter');
                $reviewer_linkedin = get_field('reviewer_linkedin');
                ?>

                <div class="col-md-6 col-xl-4">
                    <div class="testimonial-card-wrap">
                        <div class="client-word-wrap">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bxs-quote-alt-left.png" class="img-fluid" alt="">

                            <?php if( !empty($review_content) ){ ?>
                                
                                <p><i><?= $review_content; ?></i></p>
                            <?php } ?>
                        </div>
                        <div class="client-details" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/portfoilo-shape.png);">
                            <a href="<?php the_permalink(); ?>" class="member-img">
                                
                                <?php if( !empty($reviewer_image) ){ ?>

                                    <img src="<?php echo $reviewer_image; ?>"  alt="<?= $reviewer_name; ?>">
                                <?php } ?>
                            </a>
                            
                            <?php if( !empty($reviewer_name) ){ ?>
                                
                                <a href="<?php the_permalink(); ?>">
                                    <h6><?= $reviewer_name; ?></h6>
                                </a>
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
            <?php }
            wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php
}
get_footer(); ?>