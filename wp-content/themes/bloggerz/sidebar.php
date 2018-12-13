<?php
/**
 * Sidebar that contain the main widget area.
 *
 * @package Bloggerz
 */

?>

	<div class="right-sidebar">

		<?php bloggerz_short_about_author(); ?><!--  .widgetbox -->

		<?php // Check if Sidebar has widgets.
		if ( is_active_sidebar( 'bloggerz-sidebar' ) ) :

			dynamic_sidebar( 'bloggerz-sidebar' );

			// Show hint where to add widgets.
			else : ?>

				<aside class="widget clearfix">
					<div class="widget-header"><h3 class="widget-title"><?php esc_html_e( 'Sidebar', 'bloggerz' ); ?></h3></div>
					<div class="textwidget">
						<p><?php esc_html_e( 'Please go to Appearance &#8594; Widgets and add some widgets to your sidebar.', 'bloggerz' ); ?></p>
					</div>
				</aside>

		<?php endif; ?>

	</div>
