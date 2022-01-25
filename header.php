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