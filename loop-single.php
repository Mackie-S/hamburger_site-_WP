<article class="p-single-main">
  <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
  <div class="p-new-hero c-hero">
    <?php the_post_thumbnail('full',array('class' =>'p-single-main__hero' )); ?>
    <h1 class="p-new-hero__title"><?php the_title();?></h1>
  </div>

  <div class="c-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class('c-description'); ?>>
      <?php the_content(); ?>
  </div>
  <?php wp_link_pages(); ?>
  <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>
</article>