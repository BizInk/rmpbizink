<?php

/**
 * Template Name: Our Team
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */
// Exit if accessed directly.



defined('ABSPATH') || exit;
get_header();
get_template_part('global-templates/inner-banner');

$team_args = array(  
    'post_type' => 'team-member',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'  => 'ASC', 
);

$team_loop = new WP_Query( $team_args );

if( $team_loop->have_posts() ){ ?>

<section class="teamlist-section comman-padding">
    <div class="top-left-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="bottom-right-image comman-shape">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row g-lg-5">

            <?php while ( $team_loop->have_posts() ) {
                $team_loop->the_post();

                $member_image = get_field('member_image');
                $member_position = get_field('member_position');
                $member_short_description = get_field('member_short_description');
                ?>

                <div class="col-md-6 col-lg-4 team-member">
                    <div class="team-member-wrap">
                        <a href="<?php the_permalink(); ?>" class="member-img">
                            <img src="<?php echo $member_image; ?>" class="img-fluid" alt="">
                        </a>
                        <div class="member-details">
                            <a href="<?php the_permalink(); ?>" class="member-name"> <h4><?php the_title(); ?></h4></a> 
                            <h6><?= $member_position; ?></h6>
                           <div class="member-word"><?php echo $member_short_description; ?></div>
                            <a href="<?php the_permalink(); ?>">Read More<i class="ms-3 fa fa-angle-right" aria-hidden="true"></i></a>
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

get_footer();
?>