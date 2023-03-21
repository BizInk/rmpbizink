<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
get_template_part('global-templates/inner-banner');

$category = get_queried_object();
$category_id = $category->term_id;

?>

<section class="four-col-team-section blog-listing-section comman-padding greadiant-bg content-topic-section">

	<?php get_template_part('global-templates/background-shapes'); ?>

    <div class="container">
          <!-- <div class="team-wrap blog-posts-cont"> -->
        <div class="team-wrap">
            <?php 
            $ppp = 9;
            $counter = 1;
           
            
            $posts_args = array(
                'post_type' => 'resource', 
                'post_status' => 'publish', 
                'order' => 'DESC',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'content-topic',
                        'field'    => 'term_id',
                        'terms'    => $category_id,
                    ),
                ),
            );

            $posts_loop = new WP_Query( $posts_args );

            if( $posts_loop->have_posts() ){ ?>

                <div class="row g-lg-5">

                <?php
                while( $posts_loop->have_posts() ){
                    $posts_loop->the_post();

                    $post_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : DEFAULT_IMG;

                    $post_content = get_the_content();
                    $post_content = strip_tags($post_content);

                    if ( strlen($post_content) > 125 ) {
                        $post_content = substr($post_content, 0, 125); 
                    }
                    ?>
                    <div class="col-md-6 col-xl-4 blog <?= $counter; ?>" <?= $counter > $ppp ? 'style="display:none;"' : ''; ?> data-pagenumber="resources<?= ceil($counter/$ppp); ?>">
                        <div class="blog-inner-wrap">
                            
                            <div class="blog-details">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none"><h6><?php the_title(); ?></h6></a>                        
                                <div class="description">
                                    <p><?= $post_content . '...'; ?></p>
                                </div> 
                                <a class="btn blue-btn" href="<?php the_permalink(); ?>">Read More…</a>                       
                            </div>
                        </div>
                    </div>
                <?php $counter++; 
                } ?>                
                </div>
            <?php }

            if( $posts_loop->found_posts > $ppp ){ ?>
                    
                    <a href="javascript:void(0);" class="btn blue-btn resources-load-more" data-pagenumber="1">Load More</a>
            <?php } ?>
                
            <script>
                // Script to load more resources
                jQuery(document).on('click', '.resources-load-more', function(e){
                    e.preventDefault();
                    var pagenumber = parseInt(jQuery(this).attr('data-pagenumber'));
                    pagenumber = parseInt(pagenumber+1);
                    jQuery('[data-pagenumber="resources'+ pagenumber +'"]').show();
                    jQuery(this).attr('data-pagenumber', pagenumber);
                    pagenumber = parseInt(pagenumber+1);
                    
                    if( jQuery('[data-pagenumber="resources'+ pagenumber +'"]').length == 0 ){
                        jQuery(this).remove();
                    }
                });
            </script>

            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php 
get_footer();
?>