<?php
/**
 * The template for the front page.
 *
 */

get_header();
?>

<section class="hero">
	<div class="container text-center">
		<div class="row">
			<div class="hero-image col-md-3">
				<img src="/wp-content/themes/understrap/img/cat-hero.png" />
			</div>
			<div class="hero-content col-md-9">
				<h1>Kapten Katt</h1>
				<h2>Webbutvecklare och katt</h2>
			</div>
		</div>
	</div>
</section>

<section class="usp">
	<div class="container">
		<h1 class="section-title">Roliga fakta</h1>

		<div class="row">
			<div class="col-md-4 text-center">
				<h1>18 min</h1>
				<p>intervall-träning/dag</p>
			</div>
			<div class="col-md-4 text-center">
				<h1>86 min</h1>
				<p>klösande/dag</p>
			</div>
			<div class="col-md-4 text-center">
				<h1>420 min</h1>
				<p>sovande</p>
			</div>
		</div>
	</div>
</section>

<section class="portfolio">
	<div class="container">
		<h1 class="section-title">Portfolio</h1>

		<div class="row">
			<div class="portfolio-item col-md-4 text-center">
				<img src="http://placehold.it/300x300/eee" />
				<h1>My first site</h1>
				<p>2016</p>
			</div>
			<div class="portfolio-item col-md-4 text-center">
				<img src="http://placehold.it/300x300/eee" />
				<h1>My second site</h1>
				<p>2017</p>
			</div>
			<div class="portfolio-item col-md-4 text-center">
				<img src="http://placehold.it/300x300/eee" />
				<h1>My third site</h1>
				<p>2018</p>
			</div>
		</div>
	</div>
</section>

<section class="contact">
	<div class="container">
		<h1 class="section-title">Contact me!</h1>

		<form>
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" id="email" placeholder="name@example.com">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea class="form-control" id="message" rows="3"></textarea>
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-primary">Mew!</button>
			</div>
		</form>
	</div>
</section>

<?php
get_footer();
