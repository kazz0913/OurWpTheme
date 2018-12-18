<?php get_header(); ?>

<?php
  if ( have_posts() ):
    while ( have_posts() ):
      the_post();
?>

  <header class="singleHeader">
    <?php posted_on(); ?>
    <?php posted_by(); ?>
    <h1 class="singleHeader_title"><?php the_title(); ?></h1>
    <!-- カテゴリー -->
    <?php post_thumbnail(); ?> 
  </header>

  <section>
    <?php
      the_content() ;
    ?>
  </section>

  <?php
    endwhile;
    else:
      get_template_part( 'template-parts/content', 'none' );
    endif;
  ?>

<?php get_footer(); ?>