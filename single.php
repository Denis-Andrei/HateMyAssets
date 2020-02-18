<?php get_header(); ?>


  <?php  while(have_posts()){ 
        the_post(); ?>
    
    
        
    <header class="blog-header" style="background-image: linear-gradient(to bottom, rgba(37, 37, 37, 0.9), rgba(0, 0, 0, 0.9)), url(<?php echo get_field('post_image')['url']; ?>);">
            

            <div class="blog-header__info">
                <h1 class="blog-header__info-heading heading-1" ><?php the_title();?></h1>
                <p class="blog-header__info-subheading subheading-thin subheading-thin--white">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n M Y'); ?> in <?php echo get_the_category_list(', ') ?></p>
                <form method="get" class="blog-header__info-form" action="<?php echo esc_url(site_url('/')) ?>">
                    <input class="blog-header__info-form-search" type="search" placeholder="Search here" name="s">
                    <input class="blog-header__info-form-btn btn btn--simple btn--simple--blog" type="submit" value='Search'> 
                </form>
            </div>

        
    </header>
        
   

    <main class="single-post">

        <div class="single-post__container">
            <article class="single-post__text text-default"><?php the_content();?></article>
        </div>

       </main>

    
    <?php }

    get_footer();
?>








