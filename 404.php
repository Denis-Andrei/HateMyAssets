
<?php /* Template Name: 404 */

get_header(); 

while(have_posts()){
the_post();
}


?>
<div class="page-404">
  <h1 class="heading-1 u-margin-bottom-sm">OH NO!</h1>
  <h2 class="heading-2 heading-2--black u-margin-bottom-sm">The page you are looking for can't be found</h2>
  <h3 class="heading-2 heading-2--black">Go to: <a  href="<?php  echo site_url('/')?>">Home</a></h3>
</div>

<?php    get_footer();
?> 


