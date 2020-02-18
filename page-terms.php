<?php /* Template Name: Terms Template */ ?>
<?php get_header(); ?>

    <header>
        
    <?php include 'header-custom.php';?>

        <div class="header-page">
            
            <h1 class="header-page__container-heading heading-1 heading-1--green">Terms and Conditions</h1>
                
        </div>

    </header>


    <main class="privacy-section">
        <?php while(have_posts()){
            the_post();

            the_content();    
        
        } ?>
    </main>    

  <?php get_footer();
?>