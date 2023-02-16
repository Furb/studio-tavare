<?php
/*
Template Name: Vi vill
*/

?>

<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 justify-between items-center mx-auto">
   
   <h2 class="mb-12"><?php the_field('underoverskrift'); ?></h2> 

   <?php if( get_field('image') ): ?>
    


   <img class="mb-8" src="<?php the_field('bilde_vi_vill'); ?>" alt="">
   <?php endif; ?>

   <p class="mb-8"><?php the_field('hovedtekst_vi_vill'); ?></p>


    
   </div><!-- /.container -->
</section><!-- /#main.min-h- -->
<?php get_footer(); ?>