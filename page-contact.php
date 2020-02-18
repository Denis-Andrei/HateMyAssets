<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>

    <header >
        
    <?php include 'header-custom.php';?>

        <div class="header-page">
            <div class="header-page__container">
                <h1 class="header-page__container-heading heading-1 heading-1--green">Contact us</h1>
                <p class="header-page__container-subheading subheading-thin subheading-thin--gray">Hate My Phone specialises in IT asset recycling for businesses around the United Kingdom. We buy redundant equipment in any condition and either recycle or dispose of it. Our method is quick, efficient and profitable for your business. We offer an environmentally friendly method, a simple solution for your electronic waste and the highest rebates for your mobile devices and IT equipment.</p>
            </div>
        </div>

    </header>


    <main class="contact-section">
        <?php $contact = new WP_QUERY(array(
            'posts_per_page' => 6,
            'post_type' => 'contact'
            ));
            while($contact->have_posts()) {
            $contact->the_post();
            
        ?>
        <div class="contact-section__container">

            <div class="contact-info">
                <img class="contact-info-img" src="/wp-content/themes/hatemyphone-theme/img/contact-image-copy.png" alt="">
                <h2 class="contact-info-heading heading-2 heading-2--green-thin"> Contact details</h2>

                <ul class="contact-info-list">
                     <li class="contact-info-list-item text-default"><span>Phone number:</span> <?php the_field('contact_phone') ?></li> 
                     <li class="contact-info-list-item text-default"><span>Email:</span> <?php the_field('contact_email') ?></li> 
                     <li class="contact-info-list-item text-default"><span>Address:</span> <?php the_field('contact_address') ?></li> 
                     <li class="contact-info-list-item text-default"><span>Working hours:</span> <?php the_field('contact_program') ?></li> 
                     <li class="contact-info-list-item text-default"> <?php the_field('contact_map') ?></li> 
                </ul>

            </div>

            <div id='booking' class="booking" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
            url('/wp-content/themes/hatemyphone-theme/img/cont.jpg');">

                <div class="booking__info">
                    <h2 class="booking__info-heading heading-2 heading-2--green-thin">Book a collection</h2>
                    <p class="booking__info-text text-default"><?php the_field('contact_form_info') ?></p>
                </div>
                <div class="booking__form" >
                        

                        <?php the_content(); ?>
                    </div>
                
               
                <?php } ?>

            </div>


        </div>
    </main>    




  <?php get_footer();
?>