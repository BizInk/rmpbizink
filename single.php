<?php

/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
get_template_part('global-templates/inner-banner');
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row justify-content-between">
			<div class="col-md-12 col-lg-7 col-xl-8">
				<?php
				while (have_posts()) {
					the_post();
					get_template_part('loop-templates/content', 'single');
				}
				get_template_part('global-templates/right-sidebar-check');
				?>
			</div>

			<?php 
			$postcats = get_the_category(get_the_id());
			$postcat_ids = array();

			if( !empty($postcats) ){

				foreach($postcats as $postcat){
					$postcat_ids[] = $postcat->term_id;
				}
			}

			$related_posts_args = array(
			    'post_status' => 'publish',
			    'posts_per_page' => 3,
			    'order'  => 'ASC',
			    'category__in'	=> $postcat_ids,
			    'post__not_in'	=> array(get_the_id()),
			);

			$related_posts_loop = new WP_Query( $related_posts_args );
			if( $related_posts_loop->have_posts() ){ ?>

				<section class="four-col-team-section blog-list-secion comman-padding">
					<div class="full-width-wysiwyg text-left">					
						<h2>Related Post</h2>
					</div>
					<div class="team-wrap">
						<div class="row g-md-5">
							<?php
		                    while ( $related_posts_loop->have_posts() ) {
		                        $related_posts_loop->the_post();

		                        $post_content = get_the_content();
		                        $post_content = strip_tags($post_content);

		                        if ( strlen($post_content) > 100 ) {
		                            $post_content = substr($post_content, 0, 100); 
		                        } ?>

								<div class="col-md-6 col-xl-4 team-member">
									<div class="team-member-wrap">
										
										<?php if( has_post_thumbnail() ){ ?>
											
											<a href="<?php the_permalink(); ?>" class="member-img">
												<img src="<?= get_the_post_thumbnail_url(); ?>" alt="member-img">
											</a>
										<?php } ?>

										<div class="member-details">

											<div class="meta-desciption">
												<div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By <?php the_author(); ?></span></div><small></small>
												<div><i class="fa fa-calendar" aria-hidden="true"> </i><span><?= get_the_date('d M, Y'); ?></span></div>
											</div>
											<a href="<?php the_permalink(); ?>" class="member-name"><h6><?php the_title(); ?></h6></a>
											<p><?= $post_content; ?></p>

											<a href="<?php the_permalink(); ?>">Read More</a>
										</div>
									</div>
								</div>
							<?php }
							wp_reset_query(); ?>
						</div>
					</div>
				</section>
			<?php } ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
