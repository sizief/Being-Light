<?php
/**
 * @package light
 */
?>
<article id="post-fp post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title-fp"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta-fp">
			<?php light_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content-fp">
		<?php
			/* translators: %s: Name of current post */
			//the_excerpt();
			the_content( sprintf(
				__( 'ادامه‌ی نوشته %s ', 'light' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'light' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer-fa">
		<?php light_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->