<?php

/**
 * Template Name: Home
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

 get_header()  ?>

 <!--Services -->
<section id="services">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-section-col-3 col-lg-4 d-flex main-container hvr-grow-shadow">
                <div class="card card-column align-item-stretch w-100 service-single ">
                    <div class="card-body pb-1 pos-rel">
                        <span class="service-icon rounded-circle">
                            <i class="fas fa-pencil-alt fa-fw"></i>
                        </span>
                        <h3 class="section-title mb-3">Web Design</h3>
                        <div class="column-text mt-1">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quas quia magni molestiae soluta qui cum autem et quasi, distinctio,
                            </p>
                        </div><!--column-text-->
                    </div><!--card-body-->

                    <div class="card-footer">
                        <a class="btn btn-link btn-line">Learn More</a>
                    </div>
                </div><!--card-->

            </div><!--col-lg-4-->


            <div class="col-section-col-3 col-lg-4 d-flex hvr-grow-shadow">
                <div class="card card-column align-item-stretch w-100 service-single ">
                    <div class="card-body pb-1 pos-rel">
                        <span class="service-icon rounded-circle">
                            <i class="fas fa-code"></i>
                        </span>
                        <h3 class="section-title mb-3">Web Design</h3>
                        <div class="column-text mt-1">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quas quia magni molestiae soluta qui cum autem et quasi, distinctio,
                            </p>
                        </div><!--column-text-->
                    </div><!--card-body-->

                    <div class="card-footer">
                        <a class="btn btn-link btn-line">Learn More</a>
                    </div>
                </div><!--card-->

            </div><!--col-lg-4-->

            <div class="col-section-col-3 col-lg-4 d-flex  hvr-grow-shadow">
                <div class="card card-column align-item-stretch w-100 service-single">
                    <div class="card-body pb-1 pos-rel">
                            <span class="service-icon rounded-circle">
                                <i class="fas fa-chart-line"></i>
                            </span>
                        <h3 class="section-title mb-3">Web Design</h3>
                        <div class="column-text mt-1">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Quas quia magni molestiae soluta qui cum autem et quasi, distinctio,
                            </p>
                        </div><!--column-text-->
                    </div><!--card-body-->

                    <div class="card-footer">
                        <a class="btn btn-link btn-line">Learn More</a>
                    </div>
                </div><!--card-->

            </div><!--col-lg-4-->
        </div><!--row-->
    </div><!--container-->
</section>

<section id="aboutMe" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-7 g-mb-30">
                <div class="g-mb-20 header-inner">
                    <span class="subTitle">Welcome, my name is:</span>
                    <h3 class="about-title">Aj Jardiah Jr</h3>
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque minima iure, veritatis deserunt odit eius repudiandae cum, officiis maiores deleniti quidem.
                        Perspiciatis, porro! Facere est numquam error accusantium quam! Aut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum non similique ea iure esse, id
                         maxime fugiat eius quam quibusdam suscipit, delectus animi, fugit eveniet ut. Non fugit consequuntur eligendi.
                    </p>
                </div>
            </div>

            <div class="col-md-5 g-mb-30">
                <div class="image-container">
                    <img class="img-fluid mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/img1.png" alt="place holder">
                    <div class="text-center">
                        <span class="more-info-arrow">
                            Learn more:
                            <a class="-g-links" href="#">about me
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                </div>

            </div><!--col-md-5-->


        </div>
    </div>
</section>

<section id="aboutMe" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="header">
            <div class="header-content">
                <h3>Recent Projects</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div><!--header-->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <article class="project-single">
                    <figure class="project-img">
                        <img class="img-fluid mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project3.jpg" alt="place holder">
                    </figure>
                    <div class="project-info">
                        <h4 class="project-title">
                            <a class="a-title" href="#">Henry Couture Paris</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <ul class="list-inline category-item">
                        <li class="list-inline-item"><a hre="#">ECommerce</a></li>
                        <li class="list-inline-item"><a hre="#">SASS</a></li>
                        <li class="list-inline-item"><a hre="#">Wordpress</a></li>
                    </ul>
                </article>

            </div><!--col-lg-4-->

            <div class="col-lg-4 col-md-6">
                <article class="project-single">
                    <figure class="project-img">
                        <img class="img-fluid mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project3.jpg" alt="place holder">
                    </figure>
                    <div class="project-info">
                        <h4 class="project-title">
                            <a class="a-title" href="#">Henry Couture Paris</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <ul class="list-inline category-item">
                        <li class="list-inline-item"><a hre="#">ECommerce</a></li>
                        <li class="list-inline-item"><a hre="#">SASS</a></li>
                        <li class="list-inline-item"><a hre="#">Wordpress</a></li>
                    </ul>
                </article>
            </div><!--col-lg-4-->

            <div class="col-lg-4 col-md-6">
                <article class="project-single">
                    <figure class="project-img">
                        <img class="img-fluid mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project3.jpg" alt="place holder">
                    </figure>
                    <div class="project-info">
                        <h4 class="project-title">
                            <a class="a-title" href="#">Henry Couture Paris</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <ul class="list-inline category-item">
                        <li class="list-inline-item"><a hre="#">ECommerce</a></li>
                        <li class="list-inline-item"><a hre="#">SASS</a></li>
                        <li class="list-inline-item"><a hre="#">Wordpress</a></li>
                    </ul>
                </article>

            </div><!--col-lg-4-->
        </div><!--row-->

    </div>
</section>








 <?php get_footer(); ?>