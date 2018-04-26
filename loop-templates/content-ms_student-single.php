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

		<h3>Relatives</h3>
		<?php the_field('relatives'); ?>

		<h3>Photos</h3>
		<?php
			$photo_id = get_field('photos');
			echo wp_get_attachment_image($photo_id, 'full');
		?>

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
				$grade = get_field('swedish_grade');
				if ($grade == "vg") {
					echo "<span class='fa fa-star'></span>";
				} else if ($grade == "g") {
					echo "<span class='fa fa-star-half'></span>";
				} else if ($grade == "ig") {
					echo "<span class='fa fa-star-o'></span>";
				} else {
					echo "<span class='fa fa-thumbs-o-down'></span>";
				}
			?>
		</p>

		<p>
			Sifferbetyg:
			<?php
				$grade = get_field('grade');
				for ($i = 1; $i <= $grade; $i++) {
					echo "<span class='fa fa-thumbs-up'></span> ";
				}
			?>
		</p>

		<p>
			Svenskt betyg:<br />
			<?php
				$swedish_grade = get_field('swedish_grade');
				echo $swedish_grade;
			?>
		</p>

		<p>
			Närvaro:
			<?php
				$attendance = get_field('attendance');
				echo $attendance . "%";
			?>
		</p>

		<!-- samma som nedan fast på fem rader -->
		<p>
			E-post:
			<?php
				$email = get_field('email');
				echo "<a href='mailto:{$email}'>{$email}</a>";
			?>
		</p>

		<!-- samma sak som ovan fast på en enda rad -->
		<p>
			E-post: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
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
