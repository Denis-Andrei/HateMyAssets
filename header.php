<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>

    <div class="top-bar">
        
            <ul class="top-bar__social-icons">
                <li class="top-bar__social-icons-item"><a class="top-bar__social-icons-link" href="https://www.facebook.com/hatemyphone/" class="social-color-facebook" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="top-bar__social-icons-item"><a class="top-bar__social-icons-link" href="https://twitter.com/hatemyphoneltd" class="social-color-twitter" target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="top-bar__social-icons-item"><a class="top-bar__social-icons-link" href="https://www.linkedin.com/company/hate-my-phone-ltd" class="social-color-linkedin" target='_blank'><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>

            <p class="top-bar__email">b2b@hatemyphoneb2b.co.uk </p>

            <div class="top-bar__phone">
                <p class="top-bar__phone-number"><i class="	fa fa-phone" aria-hidden="true"></i><span class="color-black">0121 439 3590</span></p>
            </div>
        </div>
    <nav class="navigation">
        <div class="navigation__container">
            
            <a href="<?php  echo site_url('/')?>"><img class="navigation__logo" src="<?php echo get_theme_file_uri('/img/logo.png') ?>" alt=""></a>
           
              
            

            <ul class="navigation__list">
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/'))?>">Home</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/process'))?>">How it works</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/services') )?>">Services</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/about-us'))?>">About Us</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/contact-us'))?>">Contact</a></li>
                <li class="navigation__item"><a class="navigation__link" href="<?php  echo esc_url(site_url('/blog'))?>">Blog</a></li>
            </ul>
 
            <div class="navigation__hamburger"><span class="navigation__hamburger-icon ">&nbsp;</span></div>
        </div>
    </nav>

 

