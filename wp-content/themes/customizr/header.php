<?php
/**
 * The Header for Customizr.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrapper">
 *
 * @package Customizr
 * @since Customizr 1.0
 */
if ( apply_filters( 'czr_ms', false ) ) {
    //in core init => add_action( 'czr_ms_tmpl', array( $this , 'czr_fn_load_modern_template_with_no_model' ), 10 , 1 );
    //function czr_fn_load_modern_template_with_no_model( $template = null ) {
    //     $template = $template ? $template : 'index';
    //     $this -> czr_fn_require_once( CZR_MAIN_TEMPLATES_PATH . $template . '.php' );
    // }
    do_action( 'czr_ms_tmpl', 'header' );
    return;
}
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
	<?php
		//the '__before_body' hook is used by CZR_header_main::$instance->czr_fn_head_display()
		do_action( '__before_body' );
	?>

	<body <?php body_class(); ?>
		  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47902424 = new Ya.Metrika2({ id:47902424, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47902424" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!--Openstat-->
<span id="openstat1"></span>
<script type="text/javascript">
var openstat = { counter: 1, next: openstat };
(function(d, t, p) {
var j = d.createElement(t); j.async = true; j.type = "text/javascript";
j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
})(document, "script", document.location.protocol);
</script>
<!--/Openstat-->

		  <?php echo apply_filters('tc_body_attributes' , 'itemscope itemtype="http://schema.org/WebPage"') ?>>

    <?php do_action( '__before_page_wrapper' ); ?>

    <div id="tc-page-wrap" class="<?php echo implode( " ", apply_filters('tc_page_wrap_class', array() ) ) ?>">

  		<?php do_action( '__before_header' ); ?>

  	   	<header class="<?php echo implode( " ", apply_filters('tc_header_classes', array('tc-header' ,'clearfix', 'row-fluid') ) ) ?>" role="banner">
  			<?php
  				// The '__header' hook is used with the following callback functions (ordered by priorities) :
  				//CZR_header_main::$instance->tc_logo_title_display(), CZR_header_main::$instance->czr_fn_tagline_display(), CZR_header_main::$instance->czr_fn_navbar_display()
  				do_action( '__header' );
  			?>
  		</header>
  		<?php
  		 	//This hook is used for the slider : CZR_slider::$instance->czr_fn_slider_display()
  			do_action ( '__after_header' )
  		?>