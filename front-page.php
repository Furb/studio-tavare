<?php
/*
Template Name: Homepage
*/

?>
<?php get_header(); ?>
<section id="main" class="min-h-[50vh]">
   <div class="container mt-16 flex justify-between items-center mx-auto">
    <div class="flex flex-col gap-8 | sm:grid sm:grid-cols-2 | lg:grid-cols-12 | xl:gap-12">

    
  
        <div id="card_01 omOss" class="col-span-4 group | lg:mt-32"><a href="/vi-er"><?php 

        // don't forget to replace 'image' with your field name
$omOss = get_field('bilde_1');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';


if ($omOss) {
    // creates the img tag
    echo wp_get_attachment_image($omOss, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Vi er</p></a></div><!-- /.1 -->


         <div id="card_02 naerNatur" class=" | col-span-3 col-start-10 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$naerNatur = get_field('bilde_3');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($naerNatur) {
    // creates the img tag
    echo wp_get_attachment_image($naerNatur, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Nærnatur</p></a><!-- /.label --></div><!-- /.2 -->
         
         
         <div id="card_03 process" class="col-start-4 col-span-2 group | lg:place-self-end"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$prosess = get_field('bilde_6');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($prosess) {
    // creates the img tag
    echo wp_get_attachment_image($prosess, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Prosess</p></a><!-- /.label --></div><!-- /.3 -->
         
         
         <div id="card_04 logo" class="col-start-7 col-span-5 flex | lg:-mt-32"><?php 

        // don't forget to replace 'image' with your field name
$logo = get_field('bilde_2');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($logo) {
    // creates the img tag
    echo wp_get_attachment_image($logo, $size);
}
    
    ?></div><!-- /.4 -->
         
         
            <div id="card_05 intro" class="col-span-6 flex items-center"><h3 class="pt-8 pr-8"><?php the_field('forside_tekst'); ?></h3></div><!-- /.5 -->
            
            
            
            <div id="card_06 byKulturArv" class="col-start-8 col-span-4 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$byKultur = get_field('bilde_4');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($byKultur) {
    // creates the img tag
    echo wp_get_attachment_image($byKultur, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Byrom og kulturarv</p></a><!-- /.label --></div><!-- /.6 -->




             <div id="card_07" class="col-span-4 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$byLiv = get_field('bilde_8');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($byLiv) {
    // creates the img tag
    echo wp_get_attachment_image($byLiv, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Byliv</p></a><!-- /.label --></div><!-- /.7 -->
           
           
           <div id="card_08" class="col-start-7 col-span-3 | lg:mt-32"><?php 

        // don't forget to replace 'image' with your field name
$munch = get_field('bilde_5');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($munch) {
    // creates the img tag
    echo wp_get_attachment_image($munch, $size);
}
    
    ?></div><!-- /.8 -->

    <div id="formidling" class="col-start-3 col-span-3 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$formidling = get_field('bilde_13');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($formidling) {
    // creates the img tag
    echo wp_get_attachment_image($formidling, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Formidling</p></a><!-- /.label --></div><!-- /.10 -->

    <div id="card_11 sirkulaer" class="col-start-1 col-span-2 group | lg:place-self-end"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$sirkulaer = get_field('bilde_10');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($sirkulaer) {
    // creates the img tag
    echo wp_get_attachment_image($sirkulaer, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Sirkulær materialbruk</p></a><!-- /.label --></div><!-- /.10 -->

            
            

    
           
            <div id="card_10 landForstaa" class="col-start-4 col-span-3 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$forstaa = get_field('bilde_9');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($forstaa) {
    // creates the img tag
    echo wp_get_attachment_image($forstaa, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Landskapsforståelse</p></a><!-- /.label --></div><!-- /.12 -->

    <div id="card_09 vann" class="col-start-8 col-span-3 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$vann = get_field('bilde_7');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($vann) {
    // creates the img tag
    echo wp_get_attachment_image($vann, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Vann</p></a><!-- /.label --></div><!-- /.9 -->

     <div id="card_10 formgivning" class="col-start-9 col-span-4 group"><a href="/vi-vil"><?php 

        // don't forget to replace 'image' with your field name
$formgivning = get_field('bilde_12');
// can be one of the built-in sizes ('thumbnail', 'medium', 'large', 'full' or a custom size)
$size = 'full';

if ($formgivning) {
    // creates the img tag
    echo wp_get_attachment_image($formgivning, $size);
}
    
    ?><p class="label group-hover:underline underline-offset-2">Formgivning</p></a><!-- /.label --></div><!-- /.12 -->
             
           
</div><!-- /.flex flex-wrap md:flex-nowrap -->

   </div><!-- /.container -->
</section><!-- /#main.min-h- -->



<?php get_footer(); ?>