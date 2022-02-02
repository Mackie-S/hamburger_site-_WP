<?php get_header(); ?>
<main class="l-main-wrapper">
  <article class="p-single-main">
    <div class="p-page-main__hero c-hero">
      <h1 class="p-single-main__hero__title c-hero__title"><?php the_title();?></h1>
    </div>
    <div class="c-container">
      <article class=" c-description">
        <h2 class="c-description__title">見出しh2</h2>
        <p class="c-description__title-p">
          pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。
        </p>
      </article>
      <h3>見出しh3</h3>
      <h4>見出しh4</h4>
      <h5>見出しh5</h5>
      <h6>見出しh6</h6>
      <div class="p-quote c-background--gray  c-margin-15px--sp c-margin-30px--tab">
        <blockquote cite="#">
          <p>blockquote
            引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
          </p>
        </blockquote>
        <p>出典元: <a href="https://rish-design.com/">YATYATYATYATYAT</a></p>
      </div>
      <img src="/images/single_cheese_burger.svg" alt="チーズバーガーセット"
        class="u-width--100-percent c-column c-margin-15px--sp c-margin-30px--tab">
      <article class="p-figure c-column c-margin-15px--sp c-margin-30px--tab">
        <?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
	}
} ?>
      </article>
      <article class="p-figure c-column c-margin-15px--sp c-margin-30px--tab">
        <p>
          テキストが入ります。テキストが入ります。テキストがストが入りります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入りまます。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
      </article>
      <div class="p-stress c-margin-15px--sp c-margin-30px--tab">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
      </div>
      <div class="c-tile c-margin-15px--sp c-margin-30px--tab">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
        <img src="/images/single_cheese_burger_tile.svg" alt="チーズバーガーセット">
      </div>
      <div class="p-list c-margin-15px--sp c-margin-30px--tab">
        <ol>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ol>
        <ol>
          <li>リスト2リスト2リスト</li>
          <li>リスト2リスト2リスト</li>
        </ol>
        <ol>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ol>
      </div>
      <div class="p-list c-margin-15px--sp c-margin-30px--tab">
        <ul>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ul>
        <ul>
          <li>リスト2リスト2リスト</li>
          <li>リスト2リスト2リスト</li>
        </ul>
        <ul>
          <li>リストリストリスト</li>
          <li>リストリストリスト</li>
        </ul>
      </div>
      <pre class="p-preformatted-text c-background--gray">
          <code class="p-preformatted-text__code">
            &lt;html&gt;
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
            &lt;/html&gt;
          </code>
        </pre>
      <table class="p-table c-margin-15px--sp c-margin-30px--tab">
        <tr class="p-table__row">
          <td>テーブル</td>
          <td>テーブル</td>
        </tr class="p-table__row">
        <tr class="p-table__row">
          <td>テーブル</td>
          <td>テーブル</td>
        </tr class="p-table__row">
        <tr class="p-table__row">
          <td>テーブル</td>
          <td>テーブル</td>
        </tr class="p-table__row">
        <tr class="p-table__row">
          <td>テーブル</td>
          <td>テーブル</td>
        </tr class="p-table__row">
      </table>
      <button class="c-button c-button--single c-margin-15px--sp c-margin-30px--tab">ボタン</button>
      <p class="c-margin-15px--sp c-margin-30px--tab c-bold">boldboldboldboldboldbold</p>
    </div>
  </article>
</main>
<?php get_sidebar(); ?>
<div class="c-cover">
</div>
<?php get_footer(); ?>