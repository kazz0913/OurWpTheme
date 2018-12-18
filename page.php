<? get_header(); ?>

  <?php
    if ( have_posts() ):
      while ( have_posts() ):
      the_post();
    ?>
    <header class="pageHeader">
      <div class="pageHeader_wrapper">
        <h1 class="pageHeader_title"><?php the_title(); ?></h1>
      </div>
    </header>

    <section class="pageContent">
      <?php the_content(); ?>
    </section>

    <?php
      endwhile;
      else:
        get_template_part( 'template-parts/content', 'none' );
      endif;
    ?>

<? get_footer(); ?>