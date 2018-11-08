<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package laura-ellis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.typekit.net/bnl2hhu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text"
				href="#content"><?php esc_html_e('Skip to content', 'laura-ellis'); ?></a>

			<header id="masthead" class="site-header">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><p>Laura Ellis</p></a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu"
							  aria-expanded="false"><?php esc_html_e('Primary Menu', 'laura-ellis'); ?></button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
					));
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
