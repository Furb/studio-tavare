<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />


</head>

<body class="min-h-screen bg-white">

    <header class="flex justify-between py-6 items-center container mx-auto">
      <a href="<?php echo get_home_url(); ?>" class="logo uppercase"><img class=" h-2 | sm:h-3 |md:h-4" src="/wp-content/uploads/2023/02/st-500.svg" alt="studio tavara"></a><!-- /.logo -->


      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => 'false',
          'menu_class' => 'main_nav hidden md:flex space-x-12'

        ),
      );
      ?>

         
      <button id="menu_icon" class="menu-icon md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
</svg>

      </button><!-- /#menu-icon -->
 

    </header>

  <div id="mobile_nav" class="hidden absolute bg-white w-full h-full py-24">
          <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => 'false',
          'menu_class' => 'mobile_nav space-y-12 container flex flex-col justify-center'

        ),
      );
      ?>
  </div>  
   
     
