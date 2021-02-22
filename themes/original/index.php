<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta property="og:type" content="website">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?>">
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp.jpg">
    <meta property="og:local" content="<?php bloginfo( 'language' ); ?>">
    <meta property="og:url" content="<?php echo get_pagenum_link(get_query_var('page')); ?>">
    <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link rel="alternate" href="<?php bloginfo( 'rss2_url' ); ?>" type="application/rss+xml" title="RSS">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<noscript>このサイトはJavaScriptを使用しております。</noscript>
<?php wp_body_open(); ?>
<main role="main" id="main">
<?php date_default_timezone_set ('Asia/Tokyo'); ?>
<?php echo date('Y-m-d H:i:s'); ?>
</main>
<?php wp_footer(); ?>
</body>
</html>
