<?php
/*
Template Name: Om oss
*/

?>
<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 mx-auto">
    <div class="flex flex-col lg:flex-row justify-between">

       <div>
        <h2 class="mb-12"><?php the_field('vi_er_undero_overskrift'); ?></h2>
         <?php if( get_field('portrett_bilde') ): ?>
    


   <img class="lg:hidden" src="<?php the_field('portrett_bilde'); ?>" alt="">
   <?php endif; ?>
       
   <p class="mb-8"><?php the_field('vi_er_hovedtekst'); ?></p>

    </div>

     <?php if( get_field('portrett_bilde') ): ?>
    


   <img class="hidden lg:block" src="<?php the_field('portrett_bilde'); ?>" alt="">
   <?php endif; ?>

    

    </div><!-- /.flex -->
 
   
   

   
 
   <div class="grid sm:grid-cols-2 gap-8 md:gap-16 mb-24">
    <p class="flex items-end">Kjersti Bjerke er utdannet fra Arkitektskolen Aarhus i 2011. Kjersti arbeider med et spekter av oppgaver innenfor landskapsarkitektur; fra konsept, stedsutvikling og regulering, til detaljprosjektering av byrom og spesielt kulturhistoriske anlegg. Hun var prosjektleder og fagansvarlig landskapsarkitekt i SLA, før etablering av Studio Tavare høsten 2022. Kjersti er en særlig sterk formgiver, som evner å se linjene fra den minste detaljen til den store by- og landskapsveven.
</p>
<img src="/wp-content/uploads/2023/02/kjersti.jpg" alt="Kjersti Bjerke">

    <p class="flex items-end">Sunniva Førland er landskapsarkitekt mnla, utdannet fra Arkitekt- og Designhøyskolen i Oslo i 2012. Hun har omfattende erfaring med utforming av offentlige gater og byrom, og var ansvarlig for flere komplekse detaljprosjekt i SLA med mange involverte fagdisipliner. Sunniva har et skarpt blikk for det visuelle og estetiske, og evner å skape godt samarbeidsklima uansett prosjektfase og skala, fra byggeoppfølging til strategiske byplaner.  
</p>
<img src="/wp-content/uploads/2023/02/sunniva.jpg" alt="Sunniva Førland">



   </div><!-- /.grid -->   



    
   </div><!-- /.container -->
</section><!-- /#main.min-h- -->



<?php get_footer(); ?>