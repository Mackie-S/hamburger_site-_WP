<?php
/*
Template Name: 私のカスタムページ
*/
?>
<?php get_header(); ?>
<main class="l-main-wrapper">
  <!-- ループここから -->
  <?php get_template_part( 'loop-single' ); ?>
  <!-- ループここまで -->
</main>
<?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>