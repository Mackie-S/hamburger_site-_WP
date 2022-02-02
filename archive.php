<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div>
    <?php the_content(); ?>
  </div>
</article>
<?php endwhile; ?>
<?php if( is_category() ) : ?>
echo 'カテゴリ:' . single_cat_title('',false) . 'の投稿一覧';
<?php elseif( is_tag() ): ?>
echo 'タグ:'. single_tag_title('',false) . 'の投稿一覧';
<?php elseif( is_day() ): ?>
echo get_the_date('Y年m月d日') . 'の投稿一覧';
<?php elseif( is_month() ): ?>
echo get_the_date('Y年m月') . 'の投稿一覧';
<?php elseif( is_year() ): ?>
echo get_the_date('Y年') . 'の投稿一覧';
<?php endif; ?>
<main class="l-main-wrapper">
  <article class="p-archive-main">
    <div class="p-archive-main__hero c-hero">
      <h2 class="p-archive-main__hero__title c-hero__title">Menu:</h2>
      <p class="p-archive-main__hero__title-sub c-hero__title-sub">チーズバーガー</p>
    </div>
    <div class="c-container">
      <article class="p-archive__description">
        <h2 class="p-archive__description__title">小見出しが入ります</h2>
        <p class="p-archive__description__title-p">
          テキストが入ります。テキストが入ります。テキストがストが入りります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りまます。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </article>
      <article class="p-card">
        <img src="images/cheese_burger.svg" alt="チーズバーガー" class="p-card__image">
        <img src="images/cheese_burger_tab.svg" alt="チーズバーガー" class="p-card__image--tab">
        <div class="p-card__desc">
          <h4>チーズバーガー</h4>
          <dl>
            <dt>小見出しが入ります</dt>
            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
          </dl>
          <button class="p-card__desc-button c-button" type="button"
            onclick="location.href='single.html'">詳しく見る</button>
        </div>
      </article>
      <article class="p-card">
        <img src="images/cheese_burger.svg" alt="ダブルチーズバーガー" class="p-card__image">
        <img src="images/cheese_burger_tab.svg" alt="ダブルチーズバーガー" class="p-card__image--tab">
        <div class="p-card__desc">
          <h4>ダブルチーズバーガー</h4>
          <dl>
            <dt>小見出しが入ります</dt>
            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
          </dl>
          <button class="p-card__desc-button c-button" type="button">詳しく見る</button>
        </div>
      </article>
      <article class="p-card">
        <img src="images/cheese_burger.svg" alt="スペシャルチーズバーガー" class="p-card__image">
        <img src="images/cheese_burger_tab.svg" alt="スペシャルチーズバーガー" class="p-card__image--tab">
        <div class="p-card__desc">
          <h4>スペシャルチーズバーガー</h4>
          <dl>
            <dt>小見出しが入ります</dt>
            <dd>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</dd>
          </dl>
          <button class="p-card__desc-button c-button" type="button">詳しく見る</button>
        </div>
      </article>
    </div>
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
<?php get_footer(); ?>