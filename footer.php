<section class="newsletter-section">
    <div class="newsletter-section__container">

        <img class="newsletter-section__container-img" src="/wp-content/themes/hatemyphone-theme/img/newsletter1.png" alt="">
        <?php  
            $newsletter = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'newsletter'
            ));
            while($newsletter->have_posts()) {
                $newsletter->the_post();
        ?>
        <div class="newsletter-section__container-info">

            <h2 class="newsletter-section__container-info-heading heading-2 heading-2--green-bold"><?php the_field('newsletter_title') ?></h2>
            <p class="newsletter-section__container-info-text subheading-thin"><?php the_field('newsletter_description') ?></p>
            <div class="newsletter-form">   
                
                <?php 
                    the_content();} 
                ?> 

            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer__container">
        <a class="footer__logo" href="<?php  echo site_url('/')?>"><img class="footer__logo-img" src="<?php echo get_theme_file_uri('/img/logo-footer.png') ?>" alt="" ></a>

        <nav class="footer__social-icons">
            <ul class="">
                <li><a href="https://www.facebook.com/hatemyphone/" class="social-color-facebook" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/hatemyphoneltd" class="social-color-twitter" target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/company/hate-my-phone-ltd" class="social-color-linkedin" target='_blank'><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <div class="footer__links">
            <a href="<?php  echo site_url('/faq')?>" class="footer__links-a">FAQ's</a>
            <a href="<?php  echo site_url('/privacy-policy')?>" class="footer__links-a">Privacy & Policy</a>
            <a href="<?php  echo site_url('/terms-conditions')?>" class="footer__links-a">Terms & Conditions</a>
        </div>

        <a class="footer__btn btn btn--inverted" href="<?php  echo site_url('/contact-us')?>" >Contact Us</a>

        <p class="footer__copyright">
            © HATE MY PHONE, ALL RIGHTS RESERVED, 2020. <br>CREATED BY <a href="https://www.denispeptanariu.info" target="_blank">DENIS</a>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>