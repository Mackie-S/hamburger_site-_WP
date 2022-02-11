<?php get_header(); ?>
<main class="l-main-wrapper">
  <article class="p-archive-main">
    <div class="p-archive-main__hero c-hero">

      <h2 class="p-archive-main__hero__title c-hero__title">Menu:</h2>
      <p class="p-archive-main__hero__title-sub c-hero__title-sub"><?php single_cat_title();?>
        <!-- カテゴリーの名前を吐き出す関数 -->
      </p>
    </div>
    <div class="c-container">
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
     if( has_excerpt() ){
          the_excerpt();
          echo '<a href="';
          the_permalink();
          echo '">続きを読む</a>';
     } else {
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
  </article>
  <?php the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
        'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>
  <nav class="p-pagination">
    <p class="p-pagination__number">page 1/10</p>
    <ul class="p-pagination__list">
      <li class="p-pagination__list-item--prev">
        <a href="#" aria-label="前のページへ">
          前へ
        </a>
      </li>
      <li class="p-pagination__list-item active"><a href="#">1</a></li>
      <li class="p-pagination__list-item"><a href="#">2</a></li>
      <li class="p-pagination__list-item"><a href="#">3</a></li>
      <li class="p-pagination__list-item"><a href="#">4</a></li>
      <li class="p-pagination__list-item"><a href="#">5</a></li>
      <li class="p-pagination__list-item"><a href="#">6</a></li>
      <li class="p-pagination__list-item"><a href="#">7</a></li>
      <li class="p-pagination__list-item"><a href="#">8</a></li>
      <li class="p-pagination__list-item"><a href="#">9</a></li>
      <li class="p-pagination__list-item--next">
        <a href="#" aria-label="次のページへ">
          次へ
        </a>
      </li>
    </ul>
  </nav>
</main>
<?php get_sidebar(); ?>
<div class="c-cover">
</div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php get_footer(); ?>