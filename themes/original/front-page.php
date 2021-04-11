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
		<section>
			<h2>ABOUT</h2>
			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dolor fugit quisquam natus, iure harum id. Accusantium expedita, vel voluptas nesciunt aperiam ut quae, vitae alias maxime odit voluptates! Maxime?</p>
		</section>
		<section>
			<h2>NEWS</h2>
			<?php
				$args = [
					'category_name' => 'news',
					'orderby' => 'post_date',
					'order' => 'DESC',
				];
				$query = new WP_Query( $args );
			?>
			<?php if ( $query->have_posts() ) : ?>
				<ul>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p>まだ投稿がありません。</p>
			<?php endif; ?>
		</section>
		<section>
			<h2>OUR SERVICE</h2>
			<section>
				<h3>α</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam soluta a, rerum sapiente ipsam cumque adipisci, placeat quis voluptate dolorem animi harum veritatis quae aut repellat magnam saepe ipsum!</p>
			</section>
			<section>
				<h3>β</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam soluta a, rerum sapiente ipsam cumque adipisci, placeat quis voluptate dolorem animi harum veritatis quae aut repellat magnam saepe ipsum!</p>
			</section>
			<section>
				<h3>γ</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ullam soluta a, rerum sapiente ipsam cumque adipisci, placeat quis voluptate dolorem animi harum veritatis quae aut repellat magnam saepe ipsum!</p>
			</section>
		</section>
	</main>
	<?php get_template_part( 'template-parts/footer' ); ?>
	<?php wp_footer(); ?>
</body>
</html>
