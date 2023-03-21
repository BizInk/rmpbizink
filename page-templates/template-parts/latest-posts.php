<?php
$general_settings = get_sub_field('general_settings');
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){

    $general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){

    $general_class .= ' comman-margin';
}

$latest_posts_title = get_sub_field('latest_posts_title');
$latest_posts_background_image = get_sub_field('latest_posts_background_image');

$latest_posts_args = array(
    'post_type' => 'post',
    'posts_per_page'  => 3,
    'order' => 'DESC',
    'post_status' => 'publish',
);

$latest_posts_query = new WP_Query($latest_posts_args);

if ( $latest_posts_query->have_posts() ) {
?>
    <section class="four-col-team-section<?= $general_class; ?>">
        <div class="half-bg overlay" style="background-image: url(<?= $latest_posts_background_image; ?>)">
        </div>
        <div class="full-width-wysiwyg text-center">
            <div class="editor-design">
                
                <?php if( !empty($latest_posts_title) ){ ?>
                    
                    <h2><?= $latest_posts_title; ?></h2>
                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="team-wrap">
                <div class="row g-lg-5">
                    
                    <?php while ( $latest_posts_query->have_posts() ) {
                        
                        $latest_posts_query->the_post();
                        $excerpt = get_the_excerpt();
                        $latest_posts_image = has_post_thumbnail() ? get_the_post_thumbnail_url() : DEFAULT_IMG; ?>

                        <div class="col-md-6 col-xl-4 team-member">
                            <div class="team-member-wrap">
                                <a href="<?php the_permalink(); ?>" class="member-img">
                                    <img src="<?= $latest_posts_image; ?>" alt="member-img">
                                </a>
                                <div class="member-details">
                                    
                                   <a href="<?php the_permalink(); ?>" class="member-name"> <h6><?php the_title(); ?></h6></a>

                                    <div class="meta-desciption">
                                        <div><i class="fa fa-calendar" aria-hidden="true"> </i><span><?= get_the_date('M d, Y'); ?></span></div><small>|</small>
                                        <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By <?php the_author(); ?></span></div>
                                    </div>

                                    <?php if( !empty($excerpt) ){ ?>

                                        <p><?php echo wp_trim_words($excerpt, 15, '') . '...'; ?></p>
                                    <?php } ?>

                                    <a href="<?php the_permalink(); ?>">Read More <i class="ms-3 fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>