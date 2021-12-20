<footer class="site-footer">
  <div class="site-sub-footer__wrapper container">
    <div class="row site-footer__top">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <hr/>
    <div class="row">
      <div class="site-footer__bottom">
        <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
