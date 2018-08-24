<?php
/*
 * Template Name: Project
 * The template for displaying all projects
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AJ_Digital_Design
 */

get_header();
?>
<?php while(have_posts()) : the_post(); ?>
<section id="portfolio-page" class="section-groups-top section-groups-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single transform-on-hover">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5>MPFashions</h5>
                                    <p class="list-category">Web Design, Web Development</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <h5>MPFashions</h5>
                                <p class="list-category">Web Design, Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <h5>MPFashions</h5>
                                <p class="list-category">Web Design, Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <h5>MPFashions</h5>
                                <p class="list-category">Web Design, Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <h5>MPFashions</h5>
                                <p class="list-category">Web Design, Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="portfolio-single">
                        <a href="">
                            <img class="img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/mpFashions.png">
                            <div class="portfolio-overlay">
                                <h5>MPFashions</h5>
                                <p class="list-category">Web Design, Web Development</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="cta" class="section-groups-top section-groups-bottom cta-projects">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8">
                    <div class="cta-text">
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut cum deserunt, dolor et modi praesentium quasi quod rerum similique!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-button">
                        <a class="btn btn-lg btn-link btn-line cta-btn cta-btn-project">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endwhile; ?>

<?php
get_footer();
