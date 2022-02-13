<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- 電話番号っぽくてもリンクにするな！という意味 -->
  <meta name="description" content="WordPress theme development static data of Hamburger site">
  <meta name="keywords" content="WordPress, Theme, development,Hamburger site">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header">
    <div class="p-header">
      <!--FLOCSSのPDFを模して記述、試しにこれで流してみる-->
      <h2 class="p-header__menu">
        Menu
      </h2>
      <h1 class="p-header__title">
        <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a>
      </h1>
      <p class="p-header__description">
        <?php bloginfo('description'); ?></p>
      <div class=" p-search">
        <?php get_search_form(); ?>
      </div>
    </div>
  </header>