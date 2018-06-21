<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alan-wp-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,300i,400,400i,600,800|Bahiana" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alan-wp-portfolio' ); ?></a>

	<img src="<?php echo get_template_directory_uri()?>/assets/images/menu.svg" class="nav-toggle" />

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="nav-primary">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary_mavigation',
				'menu_id'        => 'nav',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
