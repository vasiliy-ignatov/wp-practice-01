<!doctype html>
<html lang="en">
<head>
		<meta charset=<?php bloginfo('charset'); ?>>
		<meta name="viewport"
					content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<!-- Вывод объекта кастомайзера -->
<?php // debug(get_theme_mods()); ?>
<?php // echo get_theme_mod('background_color'); ?>

<?php if(is_front_page()): ?>
	<div class="header-image" style="background: url(<?php echo get_custom_header()->url; ?>) center no-repeat; background-size: cover; height: 50vh;"></div>
<?php endif; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<?php if(has_custom_logo()) : the_custom_logo(); ?>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo home_url($path); ?>">
				<?php bloginfo('name'); ?>
			</a>
	<?php endif; ?>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php wp_nav_menu(
			array(
				'theme_location'  => 'header_menu',
				'menu_class' => 'navbar-nav mr-auto',
				'walker' => new Test_menu
			)
		); ?>
		
		<!-- <form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form> -->
	</div>
</nav>
<main class="main">
