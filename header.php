<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, header and top navigation areas
 *
 * @package blm_basic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php get_template_part( 'inc/favicons' ); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">	
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blm_basic' ); ?></a>

	<header id="masthead" class="site-header row" role="banner">	
		<div class="container header-wrapper">	
		
			<div id="branding" class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php else: ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			<?php endif; ?>
			</div>
		
			<nav id="site-navigation" class="site-navigation main-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Menu', 'blm_basic' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>	

		</div>	
	</header>

	<div id="content" class="site-content">