<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootscores
 */

?>
<!-- Begin footer.php -->
	</div><!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">


		<div class="row">


		<div class="col-md-4">

			<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
		</div>
		<div class="col-md-4">

			<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>
		</div>
		<div class="col-md-4">

			<?php
if(is_active_sidebar('footer-sidebar-3')){
dynamic_sidebar('footer-sidebar-3');
}
?>
		</div>
	</div>
</div>
		<div class="site-info container">
			<div class="attribution">
            	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootscores' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bootscores' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				&copy; <?php echo date('Y'); ?> <? echo get_bloginfo('name'); ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
