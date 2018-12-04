<div class="headerSpNav">
  <nav>
  <!--SPメニュー-->
  <?php wp_nav_menu(array(
      'theme_location' => 'header',
      'container' => false,
      'menu_class' => 'headerSpNav_menu'
  )); ?>
  </nav>
  <button id="menuToggle" class="headerSpNav_btn">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>


<nav class="headerPcNav">
  <!--PCメニュー-->
  <?php wp_nav_menu(array(
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'headerPcNav_menu'
  )); ?>
</nav>