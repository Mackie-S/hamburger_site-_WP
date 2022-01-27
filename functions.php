<?php
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
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
    
    function hamburgersitewp_script() {
        wp_enqueue_style( 'mplus1m', '//mplus-fonts.osdn.jp/webfonts/basic_latin/mplus_webfonts.css', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array() );
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/modern-css-reset.css', array(), );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script('jquery', get_template_directory_uri().'//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0');
        wp_enqueue_script('js-file', get_template_directory_uri().'/script.js', array(), '1.0.0');
        
        
    }
    add_action( 'wp_enqueue_scripts', 'hamburgersitewp_script' );

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