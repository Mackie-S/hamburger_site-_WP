<form method="get" action="<?php echo home_url('/'); ?>" class="p-search__box">
  <label class="screen-reader-text" for="s">検索</label>
  <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="p-search__box__text" id="s">
  <button type=" submit" id="searchsubmit" class="p-search__box__button c-button">検索</button>
</form>