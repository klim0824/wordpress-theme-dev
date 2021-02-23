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
		<h2>Page Not Found</h2>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">サイトトップへ戻る</a></p>
	</main>
	<?php get_template_part( 'template-parts/footer' ); ?>
	<?php wp_footer(); ?>
</body>
</html>
