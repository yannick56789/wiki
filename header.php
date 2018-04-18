<?php
/**
 * Theme: Wiki
 * Autor: Yannick Bach
 * Version: 0.2
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php // wp_head(); ?>
		<link rel="icon" href="<?php bloginfo ('template_directory') ?>/favicon.ico"> <!-- Einbettung des Favicon -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css"> <!-- Eigenes CSS -->
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

<header class="starter">
<div class="container">
	<div class="row main">
		<div class="col-lg">
			<?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?> <!-- Funktion für ein eigens bestimmtes Logo -->
		</div>
	</div>
	<div class="row main">
		<div class="col-lg">
			<nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
				<ul class="nav navbar-nav">
			<?php foundationpress_top_bar_r(); ?> <!-- Menüstruktur von Wordpress -->
				</ul>
			</nav>
		</div>
	</div>
</div> <!-- Container -->
</header>
