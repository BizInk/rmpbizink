<section class="team-section">
    <div class="container">
    <div class="text-center mb-md-2 pb-md-2 mb-lg-5 pb-lg-5">        
        <h2><?php echo get_field('meet_the_team_title')? get_field('meet_the_team_title') : 'Meet the team'; ?></h2>
        <p><?php echo get_field('meet_the_team_subtitle')? get_field('meet_the_team_subtitle') : 'Lorem dolor sit amet, consectetur tempor incididun psum <br> sit amet, consectetur tempor incididunt'; ?></p>
      </div>
     <?php if( have_rows('team_members') ): ?>
        <div class="team-wrap">
            <div class="team-slider">
               <?php while( have_rows('team_members') ): the_row(); 
                        if(get_sub_field('member_image')){
                            $member_image = get_sub_field('member_image')['url'];
                        }else{
                            $member_image = get_stylesheet_directory_uri().'/images/team1.png';
                        } ?>
                <div class="team-member">
                    <div class="team-member-wrap">
                        <div class="member-img">
                            <img src="<?php echo $member_image; ?>" alt="<?php echo get_sub_field('member_image')['alt']; ?>">
                        </div>
                        <div class="member-details">
                            <h4 class="member-name"><?php echo get_sub_field('member_name')? get_sub_field('member_name') : 'Jhon'; ?></h4>
                            <h6 class="designation"><?php echo get_sub_field('member_designation')? get_sub_field('member_designation') : 'Web Designer'; ?></h6>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_query(); ?>         
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>