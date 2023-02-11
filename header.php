<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <title>
    <?php wp_title(); ?>
  </title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />


</head>

<body class="min-h-screen bg-white">

    <header class="flex justify-between py-6 items-center container mx-auto">
      <a href="<?php echo get_home_url(); ?>" class="logo uppercase"><img class="h-4" src="/wp-content/uploads/2023/02/st-500.svg" alt="studio tavara"></a><!-- /.logo -->


      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => 'false',
          'menu_class' => 'main_nav hidden md:flex space-x-12'

        ),
      );
      ?>

      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
</svg>




    </header>