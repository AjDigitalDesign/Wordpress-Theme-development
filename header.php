<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJ_Digital_Design
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ajdigitaldesign' ); ?></a>

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top ajdigitaldesignNav" id="mainNav">
      <div class="container">
        	<div class="navbar-brand" href="#page-top">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png" alt="logo">
			</div>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger hamburger--slider">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            	</span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#services">Services</a>
					</li>
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#team">Team</a>
					</li>
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>


		<header id="masterheader">
		<div class="container my-auto">
			<div class="row">
				<div class="main-content">
					<div class="content-inner">
						<h6 class="welcome">Welcome To</h6>
						<h1 class="hero-title">Aj Digital Design</h1>
						<p class="lead-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate delectus? Non nesciunt molestias ipsum corrupti. Obcaecati,
							magnam veritatis.
						</p>
						<div class="input-group">
							<input type="text" class="form-control subscribe-input" aria-label="email" placeholder="YourEmail@me.com">
							<div class="input-group-append">
								<button class="btn ubtn-primary" type="submit">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>







