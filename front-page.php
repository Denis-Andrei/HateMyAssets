<?php get_header(); ?>

<header class="header" style="background-image: linear-gradient(to bottom, rgba(37, 37, 37, 0.8), rgba(0, 0, 0, 0.8)),
        url('/wp-content/themes/hatemyphone-theme/img/jumbotron1.jpg');">
            
    <div class="header-info">

        <div class="header-info__text">

            <?php 
                $homepageTitle = new WP_Query(array(
                    'posts_per_page' => 1,
                    'post_type' => 'header'
                ));

                while($homepageTitle->have_posts()){
                    $homepageTitle->the_post();
                ?>
                <div class="header-info__text-box">
                    <h1 class="header-info__text-box-heading heading-1 heading-1--main" ><?php the_field('header_title'); ?></h1>
                    
                    <ul class="header-info__text-box-subheading subheading-thin">
                        <li>SHREDDING </li>
                        <li>REPAIRS </li>
                        <li>ASSET RECYCLING </li>
                    </ul>
                </div>
                <?php } ?>

            
            <div class="header-info__buttons">
                <a class="header-info__buttons-btn btn btn--normal" href="<?php  echo site_url('/contact/#booking')?>">BOOK A COLLECTION</a>
                <a class="header-info__buttons-btn btn btn--inverted" href="<?php  echo site_url('/process')?>">HOW IT WORKS</a>
            </div>
        </div>
        
        <a href="#features"><img class="header-info__img" src="/wp-content/themes/hatemyphone-theme/img/arrow.png" alt=""></a>

    </div>


</header>


<section id='features' class="features-section ">
    
    <div class="features-section__container">

        <?php 
        $features = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'features'
        ));
        while($features->have_posts()) {
            $features->the_post();?>

            <div class="feature-card ">
                <img class="feature-card__img u-margin-bottom-sm" src="<?php echo get_field('feature_image')['url']; ?>" />
                <!-- <h3 class="heading-3 heading-3--black u-margin-bottom-sm"><?php the_title() ?></h3> -->
                <p class="text-default"><?php the_field('feature_description'); ?></p>
            </div> 
        
        <?php } ?>
    </div>

</section>


<section id="recycle" class="mp-recycling-section">

    <?php 
        $recycling = new WP_Query(array(
            'posts_per_page' => 1,
            'post_type' => 'recycling'
        ));
        while($recycling->have_posts()) {
            $recycling->the_post();?>
    <div class="mp-recycling-section__container">
    <h2 class="mp-recycling-section__container-heading heading-2 heading-2--black"><?php the_field('recycling_title'); ?></h2>
    
        <img class="mp-recycling-section__container-img " src="/wp-content/themes/hatemyphone-theme/img/recycle-your-phone.png" alt="">
        <div class="mp-recycling-section__container-info">
            <p class="mp-recycling-section__container-info-subheading subheading-thin subheading-thin--gray"><?php the_field('recycling_description'); ?></p>
            <a class="mp-recycling-section__container-info-btn  btn btn--inverted" href="<?php  echo site_url('/services')?>">ALL SERVICES</a>
            
        </div>
    </div>
    <?php } ?>
</section>




<section class="choose-section" >

    
    <h2 class="choose-section__heading heading-2 heading-2--black">Why you should choose us</h2>
    <div class="choose-section__container">
   
        <div class="choose-section__container-column-1">

        <?php $features = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'choose'
            ));
            while($features->have_posts()) {
                $features->the_post();
                if(get_the_ID()%2 == 0){
                ?>
            <div class="collapsible-menu">
                <button class="collapsible-menu__btn text-default text-default--bold-green"><?php the_field('choose_us_title'); ?><span class="collapsible-menu__btn-icon">&#9660;</span></button>
                <div class="collapsible-menu__content text-default">
                    
                    <?php the_field('choose_us_description'); ?>
                  
                </div>
            </div>

              <?php  } } ?>
           
        </div>
        
        
    
        <div class="choose-section__container-column-2">

        <?php $features = new WP_Query(array(
                'posts_per_page' => 6,
                'post_type' => 'choose'
            ));
            while($features->have_posts()) {
                $features->the_post();
                if(get_the_ID()%2 !== 0){
                ?>
        <div class="collapsible-menu">
            
                <button class="collapsible-menu__btn text-default text-default--bold-green"><?php the_field('choose_us_title'); ?><span class="collapsible-menu__btn-icon">&#9660;</span></button>
                <div class="collapsible-menu__content text-default">
                    
                    <?php the_field('choose_us_description'); ?>
                    
                </div>
            </div>

                <?php } } ?>
        </div>
        

    </div>
    
    
</section>

<section class="how-it-works">
   
    <h2 class="how-it-works__heading heading-2 heading-2--black">Want to know more about how it works?</h2>

    <div class="how-it-works__container">
        <div class="how-it-works__container-info">
            <p class="how-it-works__container-info-subheading subheading-thin subheading-thin--gray">To find out all the information you'll need to know about our process at Hate My Phone, click on the button below!
            </p>
            <a class="how-it-works__container-info-btn btn btn--inverted" href="<?php  echo site_url('/process')?>">HOW IT WORKS</a>
        </div>
        
        <img class="how-it-works__container-img" src="/wp-content/themes/hatemyphone-theme/img/feature-img1.jpg" alt="">

    </div>
</section>

<section class="banner-section" style="background-image: linear-gradient(45deg, rgb(0,0,0, 0.6), rgb(0,0,0, 0.8)), url(/wp-content/themes/hatemyphone-theme/img/phones1.jpg);">
    <div class="banner-section__info">
        <h3 class="banner-section__info-heading heading-2 heading-2--black">Want to recycle your assets today?</h3>
        <a class="btn btn--simple" href="<?php  echo site_url('/contact-us/#booking')?>">Book a collection</a>
    </div>

    <ul class="banner-section__list">
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Mobile Phones</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>PCs</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Laptops</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Tablets</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>iPads</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>IP Phones</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Gaming Consoles</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Media Devices</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Accessories</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Printers</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Hard Drives</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Routers</li>
        <li class="banner-section__list-item"><i class="banner-section__list-item-img fa fa-check"></i>Switchboards</li>
    </ul>
</section>





        



  <?php get_footer();
?>