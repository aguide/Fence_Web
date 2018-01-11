<?php

// =============================================================================
// VIEWS/GLOBAL/_FOOTER.PHP
// -----------------------------------------------------------------------------
// Includes the wp_footer() hook and closes out the <body> and <html> tags.
// =============================================================================

?>

  <?php do_action( 'x_before_site_end' ); ?>

  </div> <!-- END #top.site -->
  <script src="/wp-content/themes/Fenceweb/framework/js/site.js" type="text/javascript"></script>
  <script src="/wp-content/themes/Fenceweb/framework/js/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

  <?php do_action( 'x_after_site_end' ); ?>

<?php wp_footer(); ?>

</body>
</html>