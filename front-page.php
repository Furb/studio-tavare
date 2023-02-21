<?php
/*
Template Name: Homepage
*/

?>
<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 flex justify-between items-center mx-auto">
    <div class="flex flex-col lg:grid lg:grid-cols-4 gap-8 xl:gap-12">
        <div class="col-span-2"><a href="/vi-vil"><img src="/wp-content/uploads/2023/02/studio_tavare_om-oss.jpg" alt=""></a></div><!-- /.1 -->
         <div class="flex items-end"><img src="/wp-content/uploads/2023/02/logo_studio_tavare_moerk.png" alt=""></div><!-- /.2 -->
          <div class="3"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/05_naernatur.jpg" alt=""><p class="label">Nærnatur</p></a><!-- /.label --></div><!-- /.3 -->
            <div class="flex items-center"><h3 class="pt-8 pr-8"><?php the_field('forside_tekst'); ?></h3></div><!-- /.4 -->
            <div class="col-span-2"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/07_byrom_og_kulturarv.jpg" alt=""><p class="label">Byrom og kulturarv</p></a><!-- /.label --></div><!-- /.5 -->
            <div class="mt-[-4rem]"><img src="/wp-content/uploads/2023/02/sitat_much_01.jpg" alt=""></div><!-- /.6 -->
            <div class="7"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/09_prosess.jpg" alt=""><p class="label">Prosess</p></a><!-- /.label --></div><!-- /.7 -->
            <div class="col-span-2 col-end-5"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/10_vann.jpg" alt=""><p class="label">Vann</p></a><!-- /.label --></div><!-- /.8 -->
            <div class="col-span-2 col-end-4"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/11_byliv.jpg" alt=""><p class="label">Byliv</p></a><!-- /.label --></div><!-- /.9 -->
            <div class="11"><a href="/vi-er"><img class="mt-12" src="/wp-content/uploads/2023/02/08_landskapsforstaaelse.jpg" alt=""><p class="label">Landskapsforståelse</p></a><!-- /.label --></div><!-- /.12 -->
             <div class="col-span-2"><a href="/vi-er"><img src="/wp-content/uploads/2023/02/12_Sirkulaer_materialbruk.jpg" alt=""><p class="label">Sirkulær materialbruk</p></a><!-- /.label --></div><!-- /.10 -->
           
</div><!-- /.flex flex-wrap md:flex-nowrap -->

   </div><!-- /.container -->
</section><!-- /#main.min-h- -->



<?php get_footer(); ?>