<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kaseya
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,300,300italic" rel="stylesheet" type="text/css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<div class="page-container">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/kaseya-logo.png" alt="Kaseya logo" class="kaseya-logo"></a>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="page-container">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="page-container">
