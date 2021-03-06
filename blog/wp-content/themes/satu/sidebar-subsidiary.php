<?php
/**
 * Subsidiary Sidebar Template
 *
 * Displays widgets for the Subsidiary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @since      1.0
 * @author     Satrya <satrya@satrya.me>
 * @copyright  Copyright (c) 2013 - 2014, Satrya
 * @link       http://satrya.me/wordpress-themes/satu/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( is_active_sidebar( 'subsidiary' ) ) : // Check, if subsidiary sidebar at least has one widget ?>

	<?php 
		// Action hook for placing content before opening #sidebar-subsidiary
		do_action( 'satu_sidebar_subsidiary_before' ); 
	?>

	<aside id="sidebar-subsidiary" class="sidebar sidebar-subsidiary" role="complementary">

		<?php 
			// Action hook for placing content before subsidiary sidebar
			do_action( 'satu_sidebar_subsidiary_open' ); 
		?>

		<div class="container">

			<?php 
				// Calls each of the active widgets in subsidiary sidebar
				dynamic_sidebar( 'subsidiary' ); 
			?>

		</div><!-- .container -->

		<?php 
			// Action hook for placing content after subsidiary sidebar
			do_action( 'satu_sidebar_subsidiary_close' ); 
		?>

	</aside><!-- #sidebar-subsidiary .aside -->

	<?php 
		// Action hook for placing content after closing #sidebar-subsidiary
		do_action( 'satu_sidebar_subsidiary_after' ); 
	?>

<?php endif; ?>