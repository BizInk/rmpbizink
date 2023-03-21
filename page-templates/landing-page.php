<?php

/**
 * Template Name: Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 * @package Understrap
 *
 */
?>

<?php
get_header();
?>


<section class="team-section">
    <div class="container">
    <div class="text-center mb-md-2 pb-md-2 mb-lg-5 pb-lg-5">        
        <h2>Meet the team</h2>
        <p>psum dolor sit amet, consectetur tempor incididun psum <br> sit amet, consectetur tempor incididunt</p>
      </div>
        <div class="team-wrap">
            <div class="team-slider">
                <div class="team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team1.png" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team2.png" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team3.png" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>   
                <div class="team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team3.png" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</section>


<section class="team-section four-col-team-section">
    <div class="container">
    <div class="mb-md-2 pb-md-2 mb-lg-5 pb-lg-5 d-flex justify-content-between align-items-center flex-md-row flex-column text-center text-md-start">        
        <h2>Get to know us, we're<br>dedicated</h2>
        <p>psum dolor sit amet, consectetur tempor incididun psum <br> sit amet, consectetur tempor incididunt</p>
      </div>
        <div class="team-wrap">
            <div class="row">
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team4.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team4.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team4.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>   
                <div class="col-md-4 col-lg-3 team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/team4.jpg" alt="">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name">Jhon</h4>
                            <h6 class="designation">Web Designer</h6>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</section>
  
<?php
get_footer();
?>