<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
get_template_part('global-templates/inner-banner');

$posts_args = array(
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order'  => 'ASC',
    'cat' => get_queried_object()->term_id,
);

$posts_loop = new WP_Query( $posts_args );

if( $posts_loop->have_posts() ){ ?>

    <section class="four-col-team-section blog-list-secion comman-padding">
        <div class="top-left-image comman-shape">
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
        </div>
        <div class="bottom-right-image comman-shape">
            <img src="<?= get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="team-wrap">
                <div class="row g-md-5">

                    <?php 
                    $posts_counter = 1;
                    $ppp = 3;

                    while ( $posts_loop->have_posts() ) {
                        $posts_loop->the_post();

                        $post_content = get_the_content();
                        $post_content = strip_tags($post_content);

                        if ( strlen($post_content) > 100 ) {
                            $post_content = substr($post_content, 0, 100); 
                        } ?>

                        <div class="col-md-6 col-xl-4 team-member" <?= $posts_counter > $ppp ? 'style="display:none;"' : ''; ?> data-pagenumber="posts<?= ceil($posts_counter/$ppp); ?>">
                            <div class="team-member-wrap">
                                <a href="<?php the_permalink(); ?>" class="member-img">
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="blog-post-img">
                                </a>
                                <div class="member-details">
                                    <div class="meta-desciption">                                
                                        <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By <?php the_author(); ?></span></div><small></small>
                                        <div><i class="fa fa-calendar" aria-hidden="true"> </i><span><?= get_the_date('d M, Y'); ?></span></div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="member-name"><h6><?php the_title(); ?></h6></a>
                                    <p><?= $post_content . '...'; ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php $posts_counter++;
                    } ?>
                </div>
                <?php if( $posts_loop->found_posts > $ppp ){ ?>
                    
                    <div class="d-flex justify-content-center">         
                        <a href="javascript:void(0);" class="btn navyblue-btn posts-loadmore" data-pagenumber="1">Load More</a>
                    </div>
                <?php }
                wp_reset_query(); ?>

                <script>
                    // Script to load more posts
                    jQuery(document).on('click', '.posts-loadmore', function(e){
                        e.preventDefault();

                        var pagenumber = parseInt(jQuery(this).attr('data-pagenumber'));
                        pagenumber = parseInt(pagenumber+1);

                        jQuery('[data-pagenumber="posts'+ pagenumber +'"]').show();

                        jQuery(this).attr('data-pagenumber', pagenumber);

                        pagenumber = parseInt(pagenumber+1);
                        
                        if( jQuery('[data-pagenumber="posts'+ pagenumber +'"]').length == 0 ){

                            jQuery(this).remove();
                        }
                    });
                </script>
            </div>
        </div>
    </section>
<?php }
get_footer();
