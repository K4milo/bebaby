<footer class="site-footer">
  <div class="site-sub-footer__wrapper container">
    <div class="row site-footer__top">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <hr/>
    <div class="row">
      <div class="col-lg-3 site-footer__bottom">
        <p><a href="/terminos-y-condiciones/" target=_blank>Términos y Condiciones</a> </p>
      </div>
      <div class="col-lg-3 site-footer__bottom">
        <p> <a href="/politicas-de-uso/" target=_blank>Políticas de uso </a></p>
      </div>
      <div class="col-lg-3 site-footer__bottom"></div>
      <div class="col-lg-3 site-footer__bottom">
        <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
