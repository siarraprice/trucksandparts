<footer>

<!-- TOP FOOTER -->
  <div class="row slider-footer-area">
    <?php dynamic_sidebar('slider-footer'); ?>
  </div>

<!-- MIDDLE FOOTER -->
  <div class="row widget-footer-area">
    <div class="col-md-2 d-flex align-items-center">
      <?php dynamic_sidebar('left-footer'); ?>
    </div>

    <div class="col-md-5 d-flex align-items-center">
      <?php dynamic_sidebar('center-footer'); ?>
    </div>

    <div class="col-md-5 d-flex align-items-center">
      <?php dynamic_sidebar('right-footer'); ?>
    </div>
  </div>

<!-- LOWER FOOTER -->
  <div class="row social-media-area">
          <?php dynamic_sidebar('social-media-footer'); ?>
  </div>

</footer>
  <?php wp_footer(); ?>

  <p class="footer">1990-2020 Trucks & Parts of Tampa, LLC</p>
  </body>
</html>
