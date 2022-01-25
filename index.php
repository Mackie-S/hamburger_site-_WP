<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburger</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://mplus-fonts.osdn.jp/webfonts/basic_latin/mplus_webfonts.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/favicon.ico">
</head>
<body>
  <header class="l-header">
    <div class="p-header"><!--FLOCSSのPDFを模して記述、試しにこれで流してみる-->
      <h2 class="p-header__menu">
        Menu
      </h2>
      <h1 class="p-header__title">
        <a href="index.html">Hamburger</a>
      </h1>
      <!--サイト内検索の仕組みがまだ理解できてないので追々理解-->
      <div class="p-search">
        <form method="get" action="archive_search.html" class="p-search__box">
          <input type="search" name="search" class="p-search__box__text">
          <button type="submit" name="submit" class="p-search__box__button c-button">検索</button>
        </form>
      </div>
    </div>
  </header>
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
        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
    </article>
  </main>
  <aside class="p-sidebar">
    <h2 class="p-sidebar__menu">Menu</h2>
    <button class="p-sidebar__close c-close">
      <span class="c-close--slash1">閉じるボタン</span>
      <span class="c-close--slash2">閉じるボタン</span>
    </button>
    <h3 class="p-sidebar__unit"><a href="archive.html">バーガー</a></h3>
    <ul class="p-sidebar__list">
      <li>ハンバーガー</li>
      <li>チーズバーガー</li>
      <li>テリヤキバーガー</li>
      <li>アボカドバーガー</li>
      <li>フィッシュバーガー</li>
      <li>BLTバーガー</li>
      <li>チキンバーガー</li>
    </ul>
    <h3 class="p-sidebar__unit"><a href="archive.html">サイド</a></h3>
    <ul class="p-sidebar__list">
      <li>ポテト</li>
      <li>サラダ</li>
      <li>ナゲット</li>
      <li>コーン</li>
    </ul>
    <h3 class="p-sidebar__unit"><a href="archive.html">ドリンク</a></h3>
    <ul class="p-sidebar__list">
      <li>コーラ</li>
      <li>レモネード</li>
      <li>オレンジジュース</li>
      <li>アップルジュース</li>
      <li>ビール</li>
      <li>レモンサワー</li>
      <li>紅茶(HOT/COLD)</li>
      <li>コーヒー(HOT/COLD)</li>
    </ul>
  </aside>
  <footer class="l-footer">
    <div class="p-footer">
      <ul class="p-footer__menu">
        <li><a href="page.html">ショップ情報</a></li>
        <span class="p-footer__menu__partition c-partition">仕切り</span>
        <li><a href="#">ヒストリー</a></li>
      </ul>
      <p class="p-footer__cop"><small>Copyright: RaiseTech</small></p>
    </div>
  </footer>
  <div class="c-cover"></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>