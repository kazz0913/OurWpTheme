<ul class="breadcrumb">
  <li><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
  <?php if(is_single()):?>
  <?php
    $my_id = get_queried_object_id();
    $cat = get_the_category( $my_id );
    var_dump($cat[0]->cat_name);
  ?>
  <?php endif; ?>
</ul>
