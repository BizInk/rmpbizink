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
					get_template_part('loop-templates/content', 'resource');
				}
				get_template_part('global-templates/right-sidebar-check');
				?>
			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
