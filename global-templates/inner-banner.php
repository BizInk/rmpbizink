<?php 
$banner_image = get_field('global_banner_image');
if( empty($banner_image) ){

	$banner_image = get_field('global_banner_image', 'options');
}

$banner_title = get_field('global_banner_title');
if( empty($banner_title) ){
	$banner_title = get_field('global_banner_title', 'options');
}

$banner_content = get_field('global_banner_content');
if( empty($banner_content) ){
	$banner_content = get_field('global_banner_content', 'options');
}

// If is blog page
if( is_home() ){

	$banner_title = get_queried_object()->post_title;
}

if( is_category() ){

	$banner_title = single_cat_title('' , false );
}

if( is_tax() ){

	print_r(get_queried_object()->post_title);
	$banner_title = single_cat_title('' , false );
	$banner_content = category_description();
}

// If is search results page
if( is_search() ){

	$banner_title = !empty($_GET['s']) ? 'Search Results for '. $_GET['s'] : 'Search Results';
	$banner_content = '';
}

// If is 404 page
if( is_404() ){

	$banner_image = get_field('404_banner_image', 'options');
	$banner_title = get_field('404_banner_title', 'options');
	$banner_content = get_field('404_banner_content', 'options');
}

// If is single page
if( is_single() ){

	$banner_image = get_field('global_banner_image', 'options');
	$banner_title = get_the_title();
	$banner_content = '';
} ?>
<section class="call-to-action-section medium-padding" style="background-image:url(<?php echo $banner_image; ?>);">
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design center-content">
                <h1><?= $banner_title; ?></h1>
                <?= $banner_content; ?>
            </div>
        </div>
    </div>
</section>