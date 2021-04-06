<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php get_template_part( 'template-parts/meta' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php get_template_part( 'template-parts/noscript' ); ?>
	<?php wp_body_open(); ?>
	<?php get_template_part( 'template-parts/header' ); ?>

	<main role="main" id="main">
		<?php if ( have_posts() ) :?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<div class="">
					<?php the_content(); ?>
				</div>
			<?php endwhile?>
		<?php endif;?>
	</main>
	<?php get_template_part( 'template-parts/footer' ); ?>
	<?php wp_footer(); ?>
</body>
</html>
