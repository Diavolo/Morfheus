<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Morpheus
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<i class="fa fa-code"></i> by <a href="<?php echo esc_url( __( 'https://gahd.net', 'morfheus' ) ); ?>"><?php printf( esc_html__( '%s', 'morfheus' ), 'GNUstav Huarcaya' ); ?></a>
            <span class="sep"> </span>
            <?php printf( esc_html__( 'with %1$s, %2$s, %3$s and %4$s.', 'morfheus' ), '<i class="fa fa-heart-o"></i>', '<a href="https://wordpress.org">WordPress</a>', 'Skeletor', 'Morpheus' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
