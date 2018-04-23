<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">

			<span class="movie-genres">Genres:
				<?php
					the_terms(get_the_ID(), 'hk_movie_genres');
				?>
			</span>

			<span class="movie-rating">Rating:
				<?php
					the_terms(get_the_ID(), 'hk_movie_rating');
				?>
			</span>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php echo get_the_post_thumbnail( $post->ID, 'large', [ 'class' => 'alignright' ] ); ?>

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
