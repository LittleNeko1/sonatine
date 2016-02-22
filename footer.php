<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonatine
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<div class="container">
		<div class="row">
	<?php
			if(is_active_sidebar('footer-area')){		
					 dynamic_sidebar('footer-area'); 
				}
			?>
<div class="col-md-12">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sonatine' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sonatine' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sonatine' ), 'sonatine', '<a href="http://www.little-neko.com/" rel="designer">Little Neko</a>' ); ?>
		</div><!-- .site-info -->
	</div>
		</div>
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
