<footer class="site-footer">
  <div class="site-sub-footer__wrapper container">
    <div class="row site-footer__top">
      <div class="col-lg-3 col-md-2 site-footer__widget">
        <?php dynamic_sidebar('footer-column-1'); ?>
      </div>
      <div class="col-lg-3 col-md-2 site-footer__widget">
        <?php dynamic_sidebar('footer-column-2'); ?>
      </div>
      <div class="col-lg-2 col-md-2 site-footer__widget">
        <?php dynamic_sidebar('footer-column-3'); ?>
      </div>
      <div class="col-lg-4 col-md-2 site-footer__widget">
        <?php dynamic_sidebar('footer-column-4'); ?>
      </div>
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
