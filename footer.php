
<footer class="mt-24 pb-12 sticky top-[100vh]">
    <div class="container"><hr class="opacity-25"></div><!-- /.container -->
    <div class="container sm:flex justify-between items-end pt-28">

    
      
        <div class="footer_tekst">

        <p class="font-bold mb-4"><?php echo esc_html(get_theme_mod('address_title_setting', 'Default Title')); ?></p><!-- /.font-700 -->

         <p class="mb-8 sm:mb-4 font-light">
         <?php echo wp_kses_post(get_theme_mod('address_content_setting', '')); ?>

        </p>

        

        </div><!-- /.flex -->
       

        <p class="sm:mb-2 text-sm font-light uppercase">© Studio Tavare 2023</p>


 


    </div><!-- /.container -->

    <?php wp_footer(); ?>
   
</footer>


</body>

</html>