<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Kaseya
 */
?>
	<div id="secondary" class="widget-area" role="complementary">

		<aside id="banners" class="widget">

			<p><a href="#"><img src="http://placehold.it/300x120" alt=""></a></p>

			<p><a href="#"><img src="http://placehold.it/300x120" alt=""></a></p>

			<p><a href="#"><img src="http://placehold.it/300x120" alt=""></a></p>

			<p><a href="#"><img src="http://placehold.it/300x120" alt=""></a></p>

		</aside>

		<hr>

		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'kaseya' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'kaseya' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->

</div><!-- #.page-container -->
