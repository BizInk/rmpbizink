<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
$container = get_theme_mod('understrap_container_type');

get_template_part('sidebar-templates/sidebar', 'footerfull');

// logo-section-start
$general_settings = get_field('general_settings', 'options'); 
$general_class = '';

if( in_array('Add Common Padding', $general_settings) ){
	$general_class .= ' comman-padding';
}

if( in_array('Add Common Margin', $general_settings) ){
	$general_class .= ' comman-margin';
}

$facebook = get_field('facebook', 'options'); 
$twitter = get_field('twitter', 'options'); 
$linkedin = get_field('linkedin', 'options');
$instagram = get_field('instagram', 'options');
$threads = get_field('threads', 'options');
$youtube = get_field('youtube', 'options');

$logo_title = get_field('logo_title', 'options');
$logo_description = get_field('logo_description', 'options');

if( have_rows('logos', 'options') ): ?>

	<section class="logo-section<?= $general_class; ?>" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/Partners.jpg);">
		<div class="full-width-wysiwyg text-center">
			<div class="container">
				<div class="editor-design">
					<?= !empty($logo_title) ? '<h2>'. $logo_title .'</h2>' : null; ?>
					<?= !empty($logo_description) ? $logo_description : null; ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="logo-slider">
				<?php while( have_rows('logos', 'options') ):
					the_row();

					$slider_image = get_sub_field('slider_image', 'options');
					$slider_link = get_sub_field('slider_link', 'options');

					if( !empty($slider_image) ){ ?>

						<div class="logo">
							<a href="<?= $slider_link; ?>" target="_blank" tabindex="0">
								<img src="<?php echo $slider_image; ?>" class="img-fluid" alt="">
							</a>
						</div>
					<?php }
				endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- logo-section-end -->

<?php 
$newsletter_background_image = get_field('newsletter_background_image', 'options');
$newsletter_title = get_field('newsletter_title', 'options');
$newsletter_content = get_field('newsletter_content', 'options');
$gravity_forms = get_field('gravity_forms', 'options');
?>
<section class="newsletter-section">
	<div class="full-width-wysiwyg text-center">
		<div class="container" style="background-image:url(<?php echo $newsletter_background_image; ?>);">
			<div class="editor-design">
				<?php if( !empty($newsletter_title) ){ ?>
					<h2><?= $newsletter_title; ?></h2>
				<?php }
				echo $newsletter_content;
				if( !empty($gravity_forms) ){
					echo do_shortcode('[gravityform id="'. $gravity_forms .'" title="false" ajax="true"]');
				} ?>
			</div>
		</div>
	</div>
</section>

<?php 
$footer_background_image = get_field('footer_background_image', 'options');
$footer_logo = get_field('footer_logo', 'options');
$social_title = get_field('social_title', 'options');
$footer_menu_1_title = get_field('footer_menu_1_title', 'options');
$footer_menu_2_title = get_field('footer_menu_2_title', 'options');

$footer_contact_us_title = get_field('footer_contact_us_title', 'options');
$company_phone = get_field('company_phone', 'options');
$company_email = get_field('company_email', 'options');
?>
<footer style="background-image:url(<?php echo $footer_background_image; ?>);">
	<div class="container">
		<div class="row footer-wrap">
			<div class="col-md-6 col-lg-4">
				<div class="footer-logo">

					<?php if( !empty($footer_logo) ){ ?>
						
						<a href="<?= home_url(); ?>"><img src="<?php echo $footer_logo; ?>" alt=""></a>
					<?php } ?>
				</div>
				<div class="footer-contact">
					<?php if( !empty($footer_contact_us_title) ){ ?>
						
						<h6><?= $footer_contact_us_title; ?></h6>
					<?php } ?>
					<nav>
						<ul>
							<?php if( !empty($company_phone) ){ ?>
								
								<li><a href="tel:<?= $company_phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?= $company_phone; ?></a></li>						
							<?php }

							if( !empty($company_email) ){ ?>
								
								<li><a href="mailto:<?= $company_email; ?>"><i class="fa fa-globe" aria-hidden="true"></i><?= $company_email; ?></a></li>
							<?php } ?>
						</ul>
					</nav> 
				</div>	
				<div class="footer-content">
					<?php if( !empty($social_title) ){ ?>
						<h6><?= $social_title; ?></h6>
					<?php } ?>
					<nav class="social-nav">
					<ul>
						<?php if( !empty($facebook) ){ ?>
							<li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<?php }

						if( !empty($twitter) ){ ?>
							<li>
								<a href="<?= $twitter; ?>" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
										<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
									</svg>
									<!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
								</a>
							</li>
						<?php }

						if( !empty($linkedin) ){ ?>
							<li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						<?php }
						
						if( !empty($instagram) ){ ?>	
							<li><a href="<?= $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<?php } 

						if( !empty($youtube) ){ ?>
							<li><a href="<?= $youtube; ?>" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
						<?php } ?>
					</ul>
					</nav>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">

				<?php if( !empty($footer_menu_1_title) ){ ?>
					
					<h6><?= $footer_menu_1_title; ?></h6>
				<?php
				}

				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu1',
						'container'	=> 'nav',
						'container_class' => '',
						'fallback_cb' => false
					)
				); ?>
			</div>
			<div class="col-md-3 col-lg-3">

				<?php if( !empty($footer_menu_2_title) ){ ?>
					
					<h6><?= $footer_menu_2_title; ?></h6>
				<?php
				}

				wp_nav_menu(
					array(
						'theme_location' => 'footer-menu2',
						'container'	=> 'nav',
						'container_class' => '',
						'fallback_cb' => false
					)
				); ?>
			</div>
		</div>
	</div>

	<?php 
	$copyright = get_field('copyright', 'options');
	$footer_website_by = get_field('footer_website_by', 'options');
	?>
	<div class="copyright-wrap">
		<div class="container">	
			
			<?php if( !empty($copyright) ){ ?>		
				
				<p><?= do_shortcode($copyright); ?></p>							
			<?php }

			echo $footer_website_by; ?>
		</div>
	</div>
</footer>
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>

<script type="text/javascript">

	var bizinklucaAjax = {"ajaxurl":"https:\/\/rmpcpa.bizinkonline.com\/wp-admin\/admin-ajax.php"};

	function fetch_blog_posts(category='', pagenumber=1){
        
        console.log(bizinklucaAjax.ajaxurl);
		// Check if we are on correct page
		if( jQuery('.blog-posts-cont').length ){

			if( pagenumber == 1 ){

				jQuery('.blog-posts-cont').html('Loading...');
			}else{
				jQuery('.load-more').text('Loading...');
			}
           
			jQuery.ajax({
				type : "post",
				url  :  "<?php echo admin_url( 'admin-ajax.php' ); ?>",
				data : {action: "fetch_blog_posts", category: category, pagenumber: pagenumber},
				success: function(response) {
					var result = JSON.parse(response);

					if( pagenumber == 1 ){
						
						jQuery('.blog-posts-cont').html(result.content);
					}else{
						jQuery('.load-more').remove();
						jQuery('.blog-posts-cont .row').append(result.content);
					}
					jQuery('.blog-posts-cont').append(result.load_more);
				}
			}); 
		}
	}
</script>
<script type="text/javascript">

		fetch_blog_posts(); 

		jQuery(document).on('click', '.filter-wrap li', function(e){
			e.preventDefault();

			jQuery('.filter-wrap li.active').removeClass('active');
			jQuery(this).addClass('active');

			fetch_blog_posts(jQuery(this).attr('data-cat'));

			console.log("data cat ", jQuery(this).attr('data-cat') )
		});

		jQuery(document).on('click', '.load-more', function(e){
			e.preventDefault();

			fetch_blog_posts(jQuery('.filter-wrap li.active').attr('data-cat'), jQuery(this).attr('data-pagenumber'));
		});
</script>

</body>

</html>