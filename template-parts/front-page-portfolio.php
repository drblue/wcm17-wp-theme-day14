<section class="portfolio" id="portfolio">
	<div class="container">
		<h1 class="section-title">Portfolio</h1>

		<?php
			// hämta ut alla blogginlägg från kategorin USPs
			$portfoliolist = new WP_Query([
				'cat' => 8,					// hämta bara inlägg ifrån kategori med ID 8
				'order_by' => 'post_title',	// sortera efter inläggets titel
				'order' => 'ASC',			// sortera i bokstavsordning (A-Z)
				'posts_per_page' => 4,		// hur många inlägg per sida vill vi visa
			]);

			if ($portfoliolist->have_posts()) :
				?>
					<div class="row">
						<?php while ($portfoliolist->have_posts()) : ?>
							<?php $portfoliolist->the_post(); ?>
							<div class="portfolio-item col-md-4 text-center">
								<?php the_post_thumbnail('portfolio-image'); ?>
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					</div><!-- /.row -->
				<?php
			endif;
		?>
		</div>
	</div>
</section>
