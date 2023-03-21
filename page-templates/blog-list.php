<?php

/**
 * Template Name: Blog List
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
$path = get_template_directory_uri();
?>

<!-- add condition in call-to-action-section  for extra padding class-->
<section class="call-to-action-section extra-padding" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner-img.jpg);">
    <div class="full-width-wysiwyg text-center">
        <div class="container">
            <div class="editor-design center-content"> <!-- give option left content and right content, use right-content class for right content use radio button -->
                <h1>Blogs</h1>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
            </div>
        </div>
    </div>
</section>
<section class="four-col-team-section blog-list-secion comman-margin">
    <div class="top-left-image comman-shape">
        <img src="http://rmp.betatesting87.com/wp-content/themes/rmpbizink/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="bottom-right-image comman-shape">
        <img src="http://rmp.betatesting87.com/wp-content/themes/rmpbizink/images/dot-img.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="team-wrap">
            <div class="row g-md-5">
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 team-member">
                    <div class="team-member-wrap">
                        <a href="#" class="member-img">
                            <img src="http://rmp.betatesting87.com/wp-content/uploads/2022/11/Home-background-2.jpg" alt="member-img">
                        </a>
                        <div class="member-details">                           
                            <!-- meta-desciption Make it dynamic-->
                            <div class="meta-desciption">                                
                                <div> <i class="fa fa-user-o" aria-hidden="true"></i><span>By James Doe</span></div><small></small>
                                <div><i class="fa fa-calendar" aria-hidden="true"> </i><span>24 Jan, 2023</span></div>
                            </div>
                            <a href="#" class="member-name"><h6>Lorem Ipsum Dolor Sit Amet, Consetetur Sadipscing.</h6></a>
                            <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                            <!-- Read More Make it dynamic-->
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">					
				<a href="#" class="btn navyblue-btn">Load More</a>
			</div>
        </div>
    </div>
</section>


<?php
get_footer();
?>