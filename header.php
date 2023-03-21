<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap5');
$navbar_type       = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<header id="wrapper-navbar" class="">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<div class="top-nav">
				<div class="container">
					<div class="client-area-wrap">
						<div class="client-area-anchor">Client Area <i class="fa fa-angle-down" aria-hidden="true"></i></div>
						<div class="client-area-cont">
							<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'client-area',
									'menu_class' => 'menu',
									'menu_id'	=> 'menu-client-area',
									'fallback_cb' => false
								)
							); ?>
						</div>
					</div>
				</div>
			</div>
			<?php get_template_part('global-templates/navbar', $navbar_type . '-' . $bootstrap_version); ?>

		</header>