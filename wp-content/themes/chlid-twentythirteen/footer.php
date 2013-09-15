<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

	<div class="footer">
	      <p>© SUDO 2013 <?php do_action( 'twentythirteen_credits' ); ?>
		      <a href="<?php echo esc_url( __( 'http://sudo.com.co/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Sudo Colombia', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'SUDO' ); ?></a>
	      </p>
              <p>
                  <a href="#"><?php _e( 'Back to top', 'chlid-twentythirteen'); ?></a>
              </p>
	</div>

	<?php wp_footer(); ?>
</div>
</body>
</html>