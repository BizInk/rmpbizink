<?php

/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content default-content">
		<div class="feature-img">
			<div class="top-left-image comman-shape">
        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-img.png" class="img-fluid" alt="">
   			</div>
			<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
		</div>
		<div class="single-content">
			<div class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</div> 
			<?php
			the_content(); 
			?>

		</div>
	</div><!-- .entry-content --> 

</article><!-- #post-## -->