<?php
/**
 * Link Content Template
 *
 * Template used to show posts with the 'link' post format.
 *
 * @since      1.0
 * @author     Satrya <satrya@satrya.me>
 * @copyright  Copyright (c) 2013 - 2014, Satrya
 * @link       http://satrya.me/wordpress-themes/satu/
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Action hook for placing content before post content
do_action( 'satu_entry_before' ); 
?>

	<article <?php hybrid_post_attributes(); ?>>

		<?php 
			// Action hook for placing content after opening post content
			do_action( 'satu_entry_open' ); 
		?>

		<?php if ( ! is_singular() ) { ?>

			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( satu_get_link_url() ) . '" title="' . the_title_attribute( array( 'echo' => false ) ) . '">', ' <span class="meta-nav">&rarr;</span></a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-wrap">

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'satu' ), 'after' => '</p>' ) ); ?>
				</div><!-- .entry-summary -->

				<?php 
					// Loads entry-published, entry-author, entry-terms & entry-comments-link shortcode
					// Please open library/functions/shortcodes.php for more information
					echo apply_atomic_shortcode( 'byline', '<footer class="byline">' . '[post-format-link] &middot; [entry-published] &middot; [entry-author] &middot; [entry-permalink] &middot; [entry-comments-link]' . '</footer><!-- .byline -->' ); 
				?>

			</div><!-- .entry-wrap -->

		<?php } else { ?>
			
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php echo esc_url( satu_get_link_url() ); ?>"><?php single_post_title(); ?> <span class="meta-nav">&rarr;</span></a></h1>
			</header>

			<div class="entry-wrap">

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'satu' ), 'after' => '</p>' ) ); ?>
				</div><!-- .entry-content -->

				<?php 
					// Loads entry-terms shortcode
					// Please open library/functions/shortcodes.php for more information
					echo apply_atomic_shortcode( 'entry_meta', '<footer class="entry-meta">' . __( '[post-format-link] &middot; [entry-published] &middot; [entry-author] &middot; [entry-terms taxonomy="category" before="Posted in "] &middot; [entry-terms before="Tagged "]', 'satu' ) . '</footer><!-- .entry-meta -->' ); 
				?>

			</div><!-- .entry-wrap -->

		<?php } ?>

		<?php 
			// Action hook for placing content before closing post content
			do_action( 'satu_entry_close' ); 
		?>

	</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	// Action hook for placing content after post content
	do_action( 'satu_entry_after' ); 
?>