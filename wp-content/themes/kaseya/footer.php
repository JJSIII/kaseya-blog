<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kaseya
 */
?>

	</div><!-- #content -->

		<div class="page-container">

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">
					<?php do_action( 'kaseya_credits' ); ?>

					&copy; 2000-2013 Kaseya Int'l Ltd.

					<span class="sep"> | </span>

					<a href="http://www.kaseya.com">www.kaseya.com</a>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>