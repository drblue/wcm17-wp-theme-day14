<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class('col-md-9'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

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

<aside class="col-md-3 bg-dark text-light">
	<div class="entry-meta">
		<p>
			Eleven går i klassen/erna:
			<?php
				the_terms(get_the_ID(), 'ms_class', '<ul><li>', '</li><li>', '</li></ul>');
			?>
		</p>

		<p>
			Betyg:
			<?php
				$grade = get_post_meta(get_the_ID(), 'grade', true);
				if ($grade == "VG") {
					echo "<span class='fa fa-star'></span>";
				} else if ($grade == "G") {
					echo "<span class='fa fa-star-half'></span>";
				} else if ($grade == "IG") {
					echo "<span class='fa fa-star-o'></span>";
				} else {
					echo "<span class='fa fa-thumbs-o-down'></span>";
				}
			?>
		</p>

		<p>
			Närvaro:
			<?php
				$attendance = get_post_meta(get_the_ID(), 'attendance', true);
				for ($i = 1; $i <= $attendance; $i++) {
					echo "<span class='fa fa-thumbs-up'></span> ";
				}
				// echo "({$attendance})";
			?>
		</p>

		<p>
			Telefonnummer:<br />
			<?php
				$phone_numbers = get_post_meta(get_the_ID(), 'phone_number', false);
				foreach ($phone_numbers as $phone_number) {
					echo "{$phone_number}<br />";
				}
				echo implode(", ", $phone_numbers);
			?>
		</p>
	</div><!-- .entry-meta -->
</aside>
