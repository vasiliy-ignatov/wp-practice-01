<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<!-- Цикл WordPress -->
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h1 class="card-title"><?php the_title() ?></h1>
						<p class="card-text"><?php the_content('Продолжить...') ?></p>
					</div>
				</div>
			</div>
		<?php endwhile?>

		<?php get_footer(); ?>
	</div>
</div>

