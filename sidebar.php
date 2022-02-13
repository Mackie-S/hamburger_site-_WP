<aside class="p-sidebar">
  <h2 class="p-sidebar__menu">Menu</h2>
  <button class="p-sidebar__close c-close">
    <span class="c-close--slash1">閉じるボタン</span>
    <span class="c-close--slash2">閉じるボタン</span>
  </button>
  <?php wp_nav_menu(
  array(
    'menu'  => 'sidebar', //メニュー管理画面で登録したメニュー名
    'container' => '',
    'container_id' => '',
    'container_class' => '',
    'menu_id' => '',
    'menu_class' => 'p-sidebar__unit',
    'walker'  => new custom_walker_nav_menu,
    'theme_location' => 'sidebar'
  )
); ?>

</aside>