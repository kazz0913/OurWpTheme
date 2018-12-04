<?php

// テーマのセットアップ
if ( ! function_exists( 'theme_setup' ) ) :

  function theme_setup() {
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'header' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー'
    ) );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', array(
      'height' => '250',
      'width' => '250',
      'flex-height' => true,
      'flex-width' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

?>