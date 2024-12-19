<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfoilo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'portfoilo'); ?></a>

		<header id="header" class="header dark-background d-flex flex-column">
			<i class="header-toggle d-xl-none bi bi-list"></i>

			<div class="profile-img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
			</div>

			<a href="index.html" class="logo d-flex align-items-center justify-content-center">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""> -->
				<h1 class="sitename">Alex Smith</h1>
			</a>

			<div class="social-links text-center">
				<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
			</div>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
					<li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
					<li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
					<li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
					<li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
					<li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
				</ul>
			</nav>

		</header><!-- #masthead -->