<?php
    add_theme_support('menus'); //管理画面のメニュー追加
    add_theme_support('title-tag'); //タイトルタグサポートの許可
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画の取り扱い許可
    add_editor_style('editor-style.css');
    
    //タイトル出力記述-------------------------------------------
    // "hamburgersitewp"という名前はlocalディレクトリ直下のディレクトリ名
    function hamburgersitewp_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburgersitewp_title' );
    //タイトル出力記述終了-----------------------------------------
    
    //もともと<head>で読み込んでたファイルの読み込み---------------
    function hamburgersitewp_script() {
        wp_enqueue_style( 'mplus1m', '//mplus-fonts.osdn.jp/webfonts/basic_latin/mplus_webfonts.css', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array() );
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/modern-css-reset.css', array(), );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script('jquery', get_template_directory_uri().'//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0');
        wp_enqueue_script('js-file', get_template_directory_uri().'/script.js', array(), '1.0.0');
    }
    add_action( 'wp_enqueue_scripts', 'hamburgersitewp_script' );
    //読み込み記述終了----------------------------------------------

    // 使わないかも知れないけどウィジェット機能追加-------------
    function hamburgersitewp_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburgersitewp_widgets_init' );
    //ウィジェット記述終わり-------------------------------------

    //カスタムウォーカー編集(カスタムメニューのulに勝手につくsub-menuを退かしたいため記述)
    class custom_walker_nav_menu extends Walker_Nav_Menu {
        function start_lvl(&$output, $depth = 0, $args = array()) {
          $output .= '<ul class="p-sidebar__list"">';
        }
        function end_lvl(&$output, $depth = 0, $args = array()) {
          $output .= '</ul>';
        }
      }
    //カスタムウォーカー編集終わり-----------------------

    //wp-pagenaviの設定---------------------------------------

    function custom_wp_pagenavi( $html ) {
        $out = '';
        $out = str_replace( "<div", "", $html );
        $out = str_replace( "class='wp-pagenavi'>", "", $out );
        $out = str_replace( "<a", "<li><a", $out );
        $out = str_replace( "</a>", "</a></li>", $out );
        $out = str_replace( "<span", "<li><span", $out );
        $out = str_replace( "</span>", "</span></li>", $out );
        $out = str_replace( "</div>", "", $out );
        return '<nav class="p-pagination"><ul class="p-pagination__list"' . $out . '</ul></nav>';
      }
      add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );
    

//redirect
function set_redirect_template(){
    if (isset($_GET['s']) && empty($_GET['s'])) {
        include(TEMPLATEPATH . '/search.php');
        exit;
    }
}
add_action('template_redirect', 'set_redirect_template');