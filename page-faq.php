<?php /* Template Name: FAQ Template */ ?>
<?php get_header(); ?>

    <header >
        
    <?php include 'header-custom.php';?>

        <div class="header-page">
            <h1 class="header-page__container-heading heading-1 heading-1--green">FAQ - Frequently Asked Questions</h1>  
        </div>

    </header>


    <main class="faq-section">

        <div class="faq-section__container">
        <?php $faq = new WP_Query(array(
                'posts_per_page' => 50,
                'post_type' => 'faq'
            ));
            while($faq->have_posts()) {
                $faq->the_post();
                
            ?>

            <div class="collapsible-menu">
                <button class="collapsible-menu__btn heading-3 heading-3--gray"><?php the_title() ?><span class="collapsible-menu__btn-icon">&#9660;</span></button>
                <div class="collapsible-menu__content text-bigger">
                    
                    <?php the_field('faq_answer'); ?>
                  
                </div>
            </div>

        <?php } ?>
        
    </main>    




  <?php get_footer();
?>