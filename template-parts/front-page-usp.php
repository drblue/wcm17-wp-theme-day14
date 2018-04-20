<section class="usps" id="usps">
	<div class="container">
		<h1 class="section-title">Roliga fakta</h1>

		<?php
			// hämta ut alla blogginlägg från kategorin USPs
			$usps = new WP_Query([
				'post_type' => 'mp_usps',	// hämta inlägg från post-typen mp_usps
				'order_by' => 'post_title',	// sortera efter inläggets titel
				'order' => 'ASC',			// sortera i bokstavsordning (A-Z)
				'posts_per_page' => 3,		// hur många inlägg per sida vill vi visa
			]);

			if ($usps->have_posts()) :
				?>
					<div class="row">
						<?php while ($usps->have_posts()) : ?>
							<?php $usps->the_post(); ?>
							<div class="col-md-4 text-center">
								<div class="usp">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div>
							</div><!-- /.usp -->
						<?php endwhile; ?>
					</div><!-- /.row -->
				<?php
			endif;
		?>
</section>
