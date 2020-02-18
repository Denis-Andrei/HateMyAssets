<?php /* Template Name: Process Template*/ ?>
<?php get_header(); ?>

    <header >
        
        <?php include 'header-custom.php';?>

        <div class="header-page">
            <div class="header-page__container">
                <h1 class="header-page__container-heading heading-1 heading-1--green">How it works</h1>
                <p class="header-page__container-subheading  subheading-thin subheading-thin--gray">Following the steps below, the process is quick and simple, after sending an inquiry or booking request, we will arrange a free collection, assess and data-wipe the devices and provide you with a free quote, as listed in the steps below.</p>
            </div>
        </div>

    </header>


    <main class="process-section">
    
        <div class="steps">

            <?php $process = new WP_Query(array(
                'posts_per_page' => 10,
                'post_type' => 'process'
                ));
                while($process->have_posts()) {
                    $process->the_post();
                
            ?>
            <div class="step">
                <div class="step__image">
                    <div class="step__image-circle">
                        <?php the_field('process_index') ?>
                    </div>
                    <img class="step__image-img" src="<?php echo get_field('process_image')['url'];?>" alt="">
                </div>
                <h2 class="step__title heading-2 heading-2--green-thin"><?php the_title(); ?></h2>
                <p class="step__text text-default"><?php the_field('process_description'); ?></p>
            </div>

            <?php } ?>

        </div>
        

        <div class="requirements"  style="background-image: linear-gradient(45deg, rgb(0,0,0, 0.85), rgb(0,0,0, 0.85) 80% ), url(/wp-content/themes/hatemyphone-theme/img/banner-img.jpg);">
            <h2 class="heading-2 heading-2--green-thin  ">YOU WILL NEED TO: 
</h2>
            <ul class="requirements__list">
                <li class="requirements__list-item"><i class="fa fa-check"></i>Pack all the technology into boxes, ensuring they are safe, compact and ready for collection</li>
                <li class="requirements__list-item"><i class="fa fa-check"></i> Provide us with your address, preferred collection day and contact details</li>
                <li class="requirements__list-item"><i class="fa fa-check"></i>Inform us whether you require a certificate of data destruction</li>
                <li class="requirements__list-item"><i class="fa fa-check"></i>Tell us your preferred method of payment</li>
            </ul>
        </div>
        

    </main>



  <?php get_footer();
?>