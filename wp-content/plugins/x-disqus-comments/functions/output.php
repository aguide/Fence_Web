<?php

// =============================================================================
// FUNCTIONS/OUTPUT.PHP
// -----------------------------------------------------------------------------
// Plugin output.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Disqus Embed
//   02. Disqus Count
//   03. Template
//   04. Comments Link
//   05. Output
// =============================================================================

// Disqus Embed
// =============================================================================

function x_disqus_comments_embed() {

  GLOBAL $post;

  require( X_DISQUS_COMMENTS_PATH . '/functions/options.php' );

  if ( is_singular() && comments_open() ) :

    // Page is on the list

    $display = ! ( $post && in_array( $post->post_type, $x_disqus_comments_exclude_post_types ) );

    if ( $display ) : ?>

  <script id="x-disqus-comments-embed-js" type="text/javascript">
    function x_disqus_comments_embed () {
      var disqus_shortname = '<?php echo $x_disqus_comments_shortname; ?>';
      (function() {
        var dsq = document.createElement('script');
        dsq.type = 'text/javascript';
        dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        //  dsq.src = 'http://' + disqus_shortname + '.' + disqus_domain + '/embed.js?pname=wordpress&pver=<?php echo DISQUS_VERSION; ?>';
      })();
    }

    <?php switch ( $x_disqus_comments_lazy_load ) :

      case 'on-scroll': ?>
        jQuery(function($){
          var ds_loaded = false;
          var top = $(".x-comments-area").offset().top; // WHERE TO START LOADING

          function check(){
            if ( !ds_loaded && $(window).scrollTop() + $(window).height() > top ) {
              ds_loaded = true;
              x_disqus_comments_embed ();
            }
          }

          $(window).scroll(check);
          check();
        });
      <?php
        break;

      case 'on-scroll-start': ?>
        jQuery(function($){
          var ds_loaded = false;

          function check(){
            if ( !ds_loaded ) {
              ds_loaded = true;
              x_disqus_comments_embed ();
            }
          }

          $(window).scroll(check);
          check();
        });
      <?php
        break;

      default:
        case 'normal': ?>
        x_disqus_comments_embed ();
      <?php
        break;
      endswitch; ?>
  </script>
  <?php
    endif;
  endif;
}



// Disqus Count
// =============================================================================

function x_disqus_comments_count() {

  require( X_DISQUS_COMMENTS_PATH . '/functions/options.php' ); ?>

  <script id="x-disqus-comments-count-js" type="text/javascript">
    var disqus_shortname = '<?php echo $x_disqus_comments_shortname; ?>';
    (function () {
      var s = document.createElement('script'); s.async = true;
      s.type = 'text/javascript';
      s.src = '//' + disqus_shortname + '.disqus.com/count.js';
      (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
  </script>

<?php }



// Template
// =============================================================================

function x_disqus_comments_template() {

  $template = X_DISQUS_COMMENTS_PATH . '/views/site/disqus-comments.php';

  return $template;

}



// Comments Link
// =============================================================================

function x_disqus_comments_link() {

  $link = get_permalink() . '#disqus_thread';

  return $link;

}



// Output
// =============================================================================

require( X_DISQUS_COMMENTS_PATH . '/functions/options.php' );

if ( isset( $x_disqus_comments_enable ) && $x_disqus_comments_enable == 1 ) {

  add_action( 'wp_footer', 'x_disqus_comments_embed' );
  add_action( 'wp_footer', 'x_disqus_comments_count' );
  add_filter( 'x_entry_meta_comments_link', 'x_disqus_comments_link' );
  add_filter( 'comments_template', 'x_disqus_comments_template' );

}
