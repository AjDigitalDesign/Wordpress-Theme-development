<?php
/**
 * Template Name: Services
 * The template for displaying all services
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


<?php while ( have_posts() ) : the_post(); ?>
<section id="services-page" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="our-services">
                    <div class="services-heading">
                        <h3>Our Services</h3>
                        <hr class="section-divider">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, sit.</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores at atque beatae consectetur corporis delectus distinctio dolore doloremque, dolores, ea esse excepturi explicabo facere fuga impedit inventore ipsam iusto maxime minus natus necessitatibus nisi non nostrum numquam optio perspiciatis possimus quas quia quo quos voluptas voluptatem voluptatibus! Deserunt, laborum.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-hero-img">
                    <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/assets/images/img102.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cta" class="section-groups-top section-groups-bottom cta cta-services">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8">
                <div class="cta-text">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut cum deserunt, dolor et modi praesentium quasi quod rerum similique!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cta-button">
                    <a class="btn btn-lg btn-link btn-line cta-btn">Get a quote</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="ourservices" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="project-section-title">
            <h2>Our Latest Work</h2>
            <hr class="section-divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. tempore! Expedita, fugiat.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/web-design.png">
                        </div>
                        <div class="media-body">
                            <h5>Web Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/web-development.png">
                        </div>
                        <div class="media-body">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/SEO.png">
                        </div>
                        <div class="media-body">
                            <h5>SEO</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/site-maintenance.png">
                        </div>
                        <div class="media-body">
                            <h5>Site Maintenance</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/SEO.png">
                        </div>
                        <div class="media-body">
                            <h5>Email Newsletter</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="service-single">
                    <div class="media">
                        <div class="media-img">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/SEO.png">
                        </div>
                        <div class="media-body">
                            <h5>Email Newsletter</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                            <div class="btn-services">
                                <a class="btn btn-link btn-line btn-service">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
