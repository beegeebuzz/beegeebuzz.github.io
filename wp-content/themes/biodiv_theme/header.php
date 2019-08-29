<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <!-- Script pour l'affichage des icones -->
    <script src="https://kit.fontawesome.com/f879a4245a.js"></script>
	<?php wp_head(); ?>
</head>
	<body>
		<div>
			<header>
				<?php if (is_single()) : ?>
                    <p><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></p>
                    <p><?php bloginfo('description'); ?></p>
				<?php else : ?>
                    <h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2>
				<?php endif; ?>
            </header>

