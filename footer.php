</article>
</main>

<footer class="footer">
  <div class="footer_wrapper">
    <?php wp_nav_menu(array(
      'theme_location' => 'footer',
      'container' => false,
      'menu_class' => 'footer_menu'
    )); ?>
  </div>

  <div class="copyright">
    <small class="copyright_txt">
      &copy; 2018 - <?php bloginfo( 'name' ); ?>
    </small>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>