<?php get_header(); ?>
<h1>Привет, мир!</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Цикл WordPress -->
    <h4><?php the_title() ?></h4>
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>

<?php get_footer(); ?>