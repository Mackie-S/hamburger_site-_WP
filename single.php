<?php get_header(); ?>
<main class="l-main-wrapper">
  <article class="p-single-main">
    <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
    <div class="p-single-main__hero c-hero">
      <h1 class="p-single-main__hero__title c-hero__title"><?php the_title();?></h1>
    </div>
    <div class="c-container">
      <article id="post-<?php the_ID(); ?>" <?php post_class('c-description'); ?>>
        <?php the_content(); ?>
    </div>
    <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>
  </article>
</main>
<?php get_sidebar(); ?>
<div class="c-cover"></div>
<?php get_footer(); ?>