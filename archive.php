<?php get_header(); ?>
<main class="l-main-wrapper">
  <article class="p-archive-main">
    <div class="p-archive-main__hero c-hero">
      <h2 class="p-archive-main__hero__title c-hero__title">Menu:</h2>
      <p class="p-archive-main__hero__title-sub c-hero__title-sub"><?php single_cat_title();?>
        <!-- カテゴリーの名前を吐き出す関数 -->
      </p>
    </div>
    <div class="c-container c-container--archives">
      <article class="p-archive__description">
        <h2 class="p-archive__description__title"><?php single_cat_title();?></h2>
        <?php if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
        <?php echo category_description(); ?>
        <?php endif; ?>
      </article>
      <?php
    if(have_posts()):
      while(have_posts()):the_post();
      ?>
      <article class="p-card">
        <div class="p-card__image">
          <?php the_post_thumbnail('large',array('class' =>'p-card__image' )); ?>
        </div>
        <div class=" p-card__desc">
          <h4><?php the_title();?></h4>
          <?php
$check_content = get_the_content();
if(strpos($check_content,'more-') !== false){//moreタグの判定
  the_content('','true');
}else{
  the_excerpt();
}
?>
          <button class="p-card__desc-button c-button" type="button"
            onclick="location.href='<?php the_permalink(); ?>'">詳しく見る</button>
        </div>
      </article>
      <?php
    endwhile;
  endif;
  ?>
      <?php wp_pagenavi(); ?>
  </article>
</main>
<?php get_sidebar(); ?>
<div class="c-cover">
</div>
<?php get_footer(); ?>