<?php /* Template Name: About Template */ ?>
<?php get_header(); ?>

    <header >
        
    <?php include 'header-custom.php';?>

    <div class="header-page">
        <div class="header-page__container">
            <?php $about = new WP_QUERY(array(
                'posts_per_page' => 6,
                'post_type' => 'about'
                ));
                while($about->have_posts()) {
                $about->the_post();
                
                ?>
                <h1 class="header-page__container-heading heading-1 heading-1--green">About us</h1>
                <p class="header-page__container-subheading subheading-thin subheading-thin--gray"><?php the_field('about_description') ?></p>
            </div>
        </div>

    </header>


    <main class="about-section">
        
        <div class="about-info">
            <div class="about-info-experience">
                <img class="about-info-experience-img" src="/wp-content/themes/hatemyphone-theme/img/experience1.jpg" alt="">
                <h2 class="about-info-experience-heading heading-2 heading-2--green-thin">Experience</h2>
                <p class="about-info-experience-text text-default"><?php the_field('about_experience') ?></p>
            </div>

            <div class="about-info-goal">
                <img class="about-info-goal-img" src="/wp-content/themes/hatemyphone-theme/img/up1.jpg" alt="">
                <h2 class="about-info-goal-heading heading-2 heading-2--green-thin">Our Goal</h2>
                <p class="about-info-goal-text text-default"><?php the_field('about_goal') ?></p>
            </div>
        </div>
            <?php } ?>
        <div class="about-team"> 
            <h2 class="heading-2 heading-2--green-thin">Our Team</h2>
            <div class="about-team-members">
            <?php $team = new WP_QUERY(array(
                'posts_per_page' => 6,
                'post_type' => 'team'
                ));
                while($team->have_posts()) {
                $team->the_post();
                 
                ?>
                <div class="member-card">
                    <img src="<?php echo get_field('member_photo')['url'];?>" class="member-card__img">
                    <h3 class="heading-3 heading-3--green-thin"><?php the_title() ?></h3>
                    <p class="member-card__position text-default text-default--thin"><?php the_field('member_position') ?></p>
                    <a href="<?php the_field('member_linkedin') ?>" class="member-card__social-icon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>

                <?php } ?>
            </div>
        </div>

    </main>    


  <?php get_footer();
?>