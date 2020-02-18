<?php
    get_header(); ?>

    <header class="blog-header" style="background-image: url(/wp-content/themes/hatemyphone-theme/img/about-img.png;" >
        <div class="blog-header__info">
            <h1 class="blog-header__info-heading heading-1" >Welcome to our blog</h1>
            <p class="blog-header__info-subheading subheading-thin subheading-thin--green">Stay informed with our latest news</p>
            <form method="get" class="blog-header__info-form" action="<?php echo esc_url(site_url('/')) ?>">
                <input class="blog-header__info-form-search" type="search" name="s" placeholder="Search here">
                <input class="blog-header__info-form-btn btn btn--simple btn--simple--blog" type="submit" value='Search'>
            </form>
            
        </div>
    </header>

    <main class="blog">

        <section class="blog__container">

            <?php 
                while(have_posts()) {
                    the_post(); ?>


                    <div class="blog-post">
                        <a href="<?php the_permalink(); ?>" class="blog-post__header heading-2 heading-2--green"><?php the_title(); ?></a>
                        <a href="<?php the_permalink();  ?>" class="blog-post__link"><img class="blog-post__link-img" src="<?php echo get_field('post_image')['url']; ?>" ></a>
                        <div class="blog-post__summary text-default"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="blog-post__button btn btn--simple btn--simple--blog">Continue reading &#8674;</a>
                        <div class="blog-post__info">
                            <p class="blog-post__info-author">Posted by <?php the_author_posts_link(); ?> on <?php the_time('d M Y'); ?> in <?php echo get_the_category_list(', ') ?></p>
                            
                        </div>  
                    </div>

                    <?php } 
                        
                    ?>
            
            
                <div class="pagination">
                    <?php 
                        echo paginate_links();
                    ?>
                </div>
        </section>
    

    
    </main>
       


       <?php
    
    get_footer();
?>