<?php get_header(); ?>

<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- Цикл WordPress -->
			<div class="col-12">
				<div class="card">
					
<!--                    <img src="..." class="card-img-top" alt="...">-->
					<div class="card-body">
						<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('my-thumb'); ?>
						<?php else: ?>
							<img src="https://i.picsum.photos/id/73/150/150.jpg" alt="">
						<?php endif; ?>
						<h5 class="card-title">
						<a href="<?php the_permalink() ?>">
							<?php the_title() ?>
						</a>
						</h5>
						<p class="card-text"><?php the_excerpt();//the_content('Продолжить...') ?></p>
						<a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		<?php endwhile; else : ?>
			<p>Записей нет.</p>
		<?php endif; ?>

		<?php get_footer(); ?>
	</div>
</div>

