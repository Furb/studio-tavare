<?php
/*
Template Name: Vi vill
*/

?>

<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 justify-between items-center mx-auto">
      <div class="md:flex justify-between">
      <div class="md:w-1/2">
      
   
   <h2 class="mb-12"><?php the_field('underoverskrift'); ?></h2> 

   <p class="mb-8"><?php the_field('hovedtekst_vi_vill'); ?></p>

   </div>
   <div class="md:w-1/3 flex items-center">
       <?php if( get_field('bilde_vi_vill') ): ?>
    


   <img class="mb-8" src="<?php the_field('bilde_vi_vill'); ?>" alt="">
   <?php endif; ?>
   </div>
   </div><!-- /.flex -->


    
   </div><!-- /.container -->
</section><!-- /#main.min-h- -->
<?php get_footer(); ?>