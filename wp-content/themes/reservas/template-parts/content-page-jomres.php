<?php
/**
 * The template used for displaying page content in page_home.php
 *
 * Please browse readme.txt for credits and forking information
 * @package Reservas
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('post-content-jomres'); ?>>

	<?php reservas_featured_image_disaplay(); ?>

	<header class="entry-header">
		<span class="screen-reader-text"></span>

	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'reservas' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
