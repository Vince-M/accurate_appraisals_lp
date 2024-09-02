
  </main>
  <!-- ============================================== -->

  <!-- FOOTER
  =================================================== -->
  <footer class="footer" role="content-info">
    <h2 class="visually-hidden">Footer</h2>
    <div class="wrapper footer__wrapper">
      <h2>Wally Hanaway at 204.795.1653</h2>
      <a href="<?php echo site_url(); ?>">
        <img class="footer__logo" src="<?php echo get_theme_file_uri() ?>/img/footer_accurate.svg" alt="Accurate Appraisals logo" width="110">
      </a>
    </div>
    <div class="wrapper footer__wrapper">
    <p class="footer-info">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> / <a href="<?php echo site_url( '/privacy-policy' ); ?>" class="privacy">Privacy Policy</a></p>
    </div>
  </footer>
  <!-- ============================================== -->

  <?php wp_footer(); ?>
</body>
</html>