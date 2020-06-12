<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<!-- // вывод сайдбара -->
		<?php get_sidebar(); ?>

		<div class="col">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- Цикл WordPress -->
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">
									<a href="<?php the_permalink() ?>">
										<?php the_title() ?>
									</a>
								</h5>
							</div>
							<div class="card-body">
								<?php if(has_post_thumbnail()): ?>
									<?php the_post_thumbnail('my-thumb', array('class' => 'float-left mr-3')); ?>
								<?php else: ?>
									<img class="float-left mr-3" src="https://i.picsum.photos/id/73/150/150.jpg" alt="">
								<?php endif; ?>
								<p class="card-text"><?php the_excerpt(); ?></p>
							</div>
							<div class="card-footer">
								<a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
					<?php the_posts_pagination(array(
						'show_all' => false,
						'prev_text' => __('« Назад'),
						'next_text' => __('Далее »')
					)) ?>
				<?php else : ?>
					<p>Записей нет.</p>
				<?php endif; ?>
			</div>
		</div>

		<?php get_footer(); ?>
	</div>
</div>

