<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

$title = get_field('404_title','options');
$sub_title = get_field('404_sub_title','options');
$description = get_field('404_description','options');
$button = get_field('404_button', 'options');
				
get_template_part( 'global-templates/inner-banner'); 
?>

<div class="wrapper" id="error-404-wrapper">
    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
        <div class="row">
            <div class="col-md-12 content-area" id="primary">
                <main class="site-main" id="main">
                    <section class="page-not-found comman-margin text-center">
                        <div class="container">
                            
                            <?php if( !empty($title) ) { ?>
                                
                                <h1><?= $title; ?></h1>
                            <?php }

                            if( !empty($sub_title) ) { ?>
                                
                                <h2><?= $sub_title; ?></h2>
                            <?php }

                            if( !empty($description) ) { ?>
                                
                                <p><?= $description; ?></p>
                            <?php }

                            if( !empty($button['url']) && !empty($button['title']) ) { ?>
                                
                                <a href="<?= $button['url']; ?>" class="btn mt-4" target="<?= $button['target']; ?>"><?= $button['title']; ?></a>
                            <?php } ?>

                        </div>
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .row -->
    </div><!-- #content -->
</div><!-- #error-404-wrapper -->

<?php
get_footer();
