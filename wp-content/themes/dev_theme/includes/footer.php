<footer class="site-footer">
  <div class="site-sub-footer__wrapper container">
    <div class="row site-footer__top">
      <div class="col-lg-2 site-footer__widget">
        <?php dynamic_sidebar('footer-column-1'); ?>
      </div>
      <div class="col-lg-3 site-footer__widget">
        <?php dynamic_sidebar('footer-column-2'); ?>
      </div>
      <div class="col-lg-3 site-footer__widget">
        <?php dynamic_sidebar('footer-column-3'); ?>
      </div>
    </div>
    <hr/>
    <div class="row site-footer__bottom">
      <div class="col-lg-8"><?php dynamic_sidebar('footer-column-4'); ?></div>
      <div class="col-lg-4 text-align-right"><p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p></div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
