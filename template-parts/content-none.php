
<section class="no-results not-found">
  <header class="page-header">
   <h1 class="page-title"><?php echo esc_html( '投稿が見つかりませんでした。' ); ?></h1>
  </header><!-- .page-header -->

  <div class="page-content">
  <?php
  if ( is_home() && current_user_can( 'publish_posts' ) ) :

    printf(
      '<p>' . wp_kses(
         'まだ記事が１つも投稿されていません。 <a href="%1$s">ここから始める</a>.',
        array(
          'a' => array(
            'href' => array(),
          ),
        )
      ) . '</p>',
      esc_url( admin_url( 'post-new.php' ) )
    );

  elseif ( is_search() ) :
  ?>

    <p><?php echo esc_html( '申し訳ありません。検索結果が見つかりませんでした。' ); ?></p>
    <?php
    get_search_form();

  else :
  ?>

    <p><?php echo esc_html( 'お探しのものが見つかりませんでした。以下の検索フォームから検索してみてください。' ); ?></p>
    <?php
    get_search_form();

  endif;
  ?>
  </div><!-- .page-content -->
</section><!-- .no-results -->
