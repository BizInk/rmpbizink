<?php 
$google_reviews_bg = get_sub_field('google_reviews_bg');
$google_reviews_title = get_sub_field('google_reviews_title');
$google_reviews_subtitle = get_sub_field('google_reviews_subtitle');
$google_reviews_header = get_sub_field('google_reviews_header');
$google_reviews_slider = get_sub_field('google_reviews_slider');
?>
<section class="google-reviews-section comman-padding" style="background-image:url(<?php echo $google_reviews_bg; ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xl-4">
				<div class="editor-design">

					<?php if( !empty($google_reviews_title) ){ ?>				
						
						<h2><?= do_shortcode($google_reviews_title); ?></h2>
					<?php }

					if( !empty($google_reviews_subtitle) ){ ?>				
						
						<p><?= do_shortcode($google_reviews_subtitle); ?></p>					
					<?php } ?>
				</div>
				<div class="review-rating">
				
				<?php if( !empty($google_reviews_header) ){ 				
				
					echo do_shortcode('[grw id="'. $google_reviews_header .'"]');
				} ?>
				</div>
			</div>
			<div class="col-md-6 col-xl-8">

				<?php if( !empty($google_reviews_slider) ){ 				
					
					echo do_shortcode('[grw id="'. $google_reviews_slider .'"]');
				} ?>
			</div>
		</div>
	</div>	
</section>