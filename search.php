<?php get_header(); ?>
<main class="l-main-wrapper">
  <article class="p-archive-main">
    <div class="p-archive-main__hero c-hero">
      <h2 class="p-archive-main__hero__title c-hero__title">Search:</h2>
      <p class="p-archive-main__hero__title-sub c-hero__title-sub">
        <?php the_search_query(  );?>
      </p>
    </div>
    <div class="c-container c-container--archives">

      <article class="p-archive__description">
        <?php if(get_search_query()): ?>
        <h2 class="p-archive__description__title">
          <?php echo $wp_query->found_posts; ?>件の検索結果
        </h2>
        <?php endif; ?>
        <?php if(have_posts() && get_search_query()):
        while (have_posts(  )):the_post(  ); ?> <article class="p-card">
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
        <?php endwhile;?>
        <?php elseif(! get_search_query()): ?>
        <h2 class="p-archive__description__title">
          検索ワードが入力されてません。
        </h2>
        <?php else:?>
        <h2 class="p-archive__description__title">
          該当する記事はありませんでした。
        </h2>
        <?php endif;?>
        <?php if(empty(get_search_query())):
          ?>
        <?php wp_pagenavi(); ?>
      </article>
</main>
<?php get_sidebar(); ?>
<div class="c-cover">
</div>

<?php get_footer(); ?>