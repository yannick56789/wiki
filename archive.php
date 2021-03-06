<?php
/*
Theme Name:         Wiki
Beschreibung:       Das Archiv File zeigt Beiträge sortiert nach Kategorien an
Version:            0.9
Author:             Yannick Bach
*/

get_header(); ?>

<div class="container">
	<div class="row main">
		<div class="col-md-8">
			<div class="crumb">
				<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?> <!-- Breadcrumb Navigation Funktion -->
			</div>
			<div class="kategorietitel">
				<h2>Kategorie: <?php single_cat_title(); ?></h2> <!-- Der jeweilige kategoriename -->
				<p><?php echo category_description(); ?></p> <!-- Die Beschreibung der jeweiligen Kategorie -->
			</div>
			<?php if ( have_posts() ) : // Beginn Post Loop //?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; // Ende Post Loop //?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?> <!-- WordPress Seitennavigation -->
		</div>
	</div> <!-- Row -->
</div> <!-- Container -->

<?php get_footer();
