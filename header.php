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
                <?php
                if(function_exists('the_custom_logo')){
                    the_custom_logo();
                }
                ?>
			</div>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger hamburger--slider">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            	</span>
			</button>

          <div class="collapse navbar-collapse" id="navbarResponsive">
              <?php
              wp_nav_menu( array(
                  'menu'           => 'menu-1',
                  'theme_location'	=> 'menu-1',
                  'container'	=> false,
                  'menu_class'		=> 'navbar-nav text-uppercase ml-auto'
              ) );
              ?>
          </div>
		</div>
	</nav>

<!--
    Display custom header only on the front page
-->
<?php if(is_front_page()) : ?>
    <header id="masterheader" style="background-image: url(<?php echo( get_header_image() ); ?>);">
		<div class="container my-auto">
			<div class="row">
				<div class="main-content">
					<div class="content-inner">
						<h2 class="welcome">Welcome To</h2>
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

<?php else: ?>




<?php while(have_posts()) : the_post(); ?>
    <!--
    check if about has feature image
    grab the feature and size from the array using the get_attachment_image function and store it int he $page_page variable
     if the page doesn't have a feature image, default to the static image
    -->
    <?php
        $page_bg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        $page_bg = $page_bg[0];
    ?>
    <?php if($page_bg) : ?>
    <header id="section-header" style="background-image: url(<?php echo $page_bg; ?>);">
        <?php else: ?>
            <header id="section-header"">
    <?php endif; ?>
        <div class="container">
            <div class="section-area text-center">
                <h2><?php the_title(); ?></h2>
                <hr class="header-divider">
                <p>Lorem ipsum dolor sit amet, consectetur axime placeat quibusdam quo.</p>
            </div>
        </div><!--container-->
    </header>
    <?php endwhile; ?>
<?php endif; ?>









