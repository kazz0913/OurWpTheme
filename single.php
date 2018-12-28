<?php
  get_header();
  get_template_part( 'breadcrumb' );
?>

<?php
  if ( have_posts() ):
    while ( have_posts() ):
      the_post();
?>

  <header class="singleHeader">
    <?php posted_on(); ?>
    <?php posted_by(); ?>
    <h1 class="singleHeader_title"><?php the_title(); ?></h1>
    <p class="catList"><?php category_list(); ?></p>
    <?php post_thumbnail(); ?>
  </header>

  <section class="singleContent">
    <?php
      the_content() ;
    ?>
  </section>

  <?php
    endwhile;
    else:
  ?>

  <p>投稿が見つかりません。</p>

  <?php
    endif;
  ?>

</article>

</main>

<?
	get_sidebar();
	get_footer();