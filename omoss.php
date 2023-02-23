<?php
/*
Template Name: Om oss
*/

?>
<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 mx-auto">
    <div class="flex flex-col lg:flex-row justify-between items-end">

       <div class="lg:w-1/2">
        <h2 class="mb-12"><?php the_field('vi_er_undero_overskrift'); ?></h2>
         <?php if( get_field('portrett_bilde') ): ?>
    


   <img class="flex-1 lg:hidden" src="<?php the_field('portrett_bilde'); ?>" alt="">
   <?php endif; ?>
       
   <p class="mb-24"><?php the_field('vi_er_hovedtekst'); ?></p>

    </div>

   <?php if( get_field('portrett_bilde') ): ?>

   <img class="hidden lg:block lg:w-2/3" src="<?php the_field('portrett_bilde'); ?>" alt="">
   <?php endif; ?>

   
    </div><!-- /.flex -->
 
   
<div id="profiler" class="sm:grid grid-cols-12 gap-8">
   <img class="col-span-full lg:col-span-7 lg:col-start-6 mb-8" src="/wp-content/uploads/2023/02/studiotavare-1-scaled-1.jpg" alt="">

  <p class="sm:col-span-6 lg:col-span-4 lg:col-start-4"><?php the_field('portrett_tekst_kjersti'); ?></p>
   <div class="sm:col-span-6 lg:col-span-4 pt-24"><p><?php the_field('portrett_tekst_sunniva'); ?></p>
</div><!-- /grid -->
   


 

 </div><!-- /.flex-initail -->
 <div class="grid col-span-2">

 
 

 </div><!-- /.grid-span-2 -->
 </div>
  

</div><!-- /.grid -->



    
   </div><!-- /.container -->
</section><!-- /#main.min-h- -->



<?php get_footer(); ?>