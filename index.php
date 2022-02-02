<?php get_header(); ?>
<!-- header.phpを読み込むテンプレートタグ -->

<main class="l-main-wrapper">
  <article class="p-front-main">
    <div class="p-front-main__hero c-hero">
      <h2 class="p-front-main__hero__title c-hero__title">ダミーサイト</h2>
    </div>
    <div class="p-branch-menu c-container">
      <article class="p-take-out p-br-menu">
        <h2 class="p-br-menu__title">Take Out</h2>
        <span class="p-br-menu__partition c-partition">仕切り</span>
        <dl class="p-br-menu__dl"><a href="page.html">
            <dt class="p-br-menu__dt">Take OUT</dt>
            <dd class="p-br-menu__dd">当店のテイクアウトで利用できる商品を掲載しています</dd>
          </a></dl>
        <dl class="p-br-menu__dl"><a href="page.html">
            <dt class="p-br-menu__dt">Take OUT</dt>
            <dd class="p-br-menu__dd">当店のテイクアウトで利用できる商品を掲載しています</dd>
          </a></dl>
      </article>
      <article class="p-eat-in p-br-menu">
        <h2 class="p-br-menu__title">Eat In</h2>
        <span class="p-br-menu__partition c-partition">仕切り</span>
        <dl class="p-br-menu__dl"><a href="page.html">
            <dt class="p-br-menu__dt">Eat IN</dt>
            <dd class="p-br-menu__dd">当店のイートインで利用できる商品を掲載しています</dd>
          </a></dl>
        <dl class="p-br-menu__dl"><a href="page.html">
            <dt class="p-br-menu__dt">Eat IN</dt>
            <dd class="p-br-menu__dd">当店のイートインで利用できる商品を掲載しています</dd>
          </a></dl>
        </dl>
      </article>
    </div>
  </article>
  <article class="p-access">
    <div class="p-store-description">
      <h2>見出しが入ります</h2>
      <span class="c-partition">仕切り</span>
      <p>
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div>
  </article>
</main>
<?php get_sidebar(); ?>
<div class="c-cover">
</div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php get_footer(); ?>