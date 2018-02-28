<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
if ( apply_filters( 'czr_ms', false ) ) {
  do_action( 'czr_ms_tmpl', 'footer' );
  return;
}

  	do_action( '__before_footer' ); ?>
  		<!-- FOOTER -->
  		<footer id="footer" class="<?php echo czr_fn__f('tc_footer_classes', '') ?>">
  		 	<?php do_action( '__footer' ); // hook of footer widget and colophon?>
  		</footer>
    </div><!-- //#tc-page-wrapper -->
		<?php
    do_action( '__after_page_wrap' );
		wp_footer(); //do not remove, used by the theme and many plugins
	  do_action( '__after_footer' ); ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'vq1kVnTn8I';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
	</body>
	<?php do_action( '__after_body' ); ?>
</html>