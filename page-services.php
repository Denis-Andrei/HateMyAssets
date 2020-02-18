<?php /* Template Name: Services Template */ ?>
<?php get_header(); ?>

    <header >
        <?php include 'header-custom.php';?>

        <div class="header-page">
            <div class="header-page__container">
                <h1 class="header-page__container-heading heading-1 heading-1--green">Our services</h1>
                <p class="header-page__container-subheading subheading-thin subheading-thin--gray">We provide a wide range of technologic services at Hate My Phone, including asset recycling, device repairs and shredding.</p>
            </div>
        </div>

    </header>


    <main class="services-section">
        <div class="services-section__container">

            <?php 
            $services = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'services',
            ));
            while($services->have_posts()) {
                $services->the_post();?>
            <div class="service-cards">
                <div class="service-card">
                    <div class="service-card__circle">
                        <img class="service-card__circle-img" src="<?php echo get_field('service_image')['url'];?>" alt="">
                    </div>
                    <h2 class="service-card__title heading-2 heading-2--green-thin"><?php the_title() ?></h2>
                    <p class="service-card__text text-default">
                    <?php the_field('service_description'); ?></p>
                </div>

                <?php } ?>


               
            </div>

            
            
        </div>
    </main>    


  <?php get_footer();
?>