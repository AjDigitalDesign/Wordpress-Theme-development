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
<?php while(have_posts()) : the_post(); ?>
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

<section id="statement_cta" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="statement-cta text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="seo-analaystic" class="section-groups-top section-groups-bottom">

        <div class="row align-items-stretch no-gutters">
            <div class="col-lg-5 planning-process-img"></div><!--col-lg-5-->
            <div class="col-lg-7 align-self-center design-process-bg">
                <div class="container">
                    <div class="design-process">
                        <div class="heading-section">
                            <h3>Our Working Process</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/planning01.png">
                                    </div>
                                    <div class="media-body">
                                        <h5>Planning Process</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/analysis02.png">
                                    </div>
                                    <div class="media-body">
                                        <h5>Planning Process</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/coding03.png">
                                    </div>
                                    <div class="media-body">
                                        <h5>Planning Process</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-img">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testing04.png">
                                    </div>
                                    <div class="media-body">
                                        <h5>Planning Process</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, sunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!--col-lg-7-->
        </div>
</section>

<section id="cta" class="section-groups-top section-groups-bottom">
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

<section id="portfolio" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="project-section-title">
            <h2>Our Latest Work</h2>
            <hr class="section-divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at cum deleniti est necessitatibus officiis quisquam tempore! Expedita, fugiat.</p>
        </div>

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


<section id="testimonial-section" class="container-fluid section-groups-top section-groups-bottom">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testi1.jpg" alt=""></div>
                            <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                            <p class="overview blockquote-footer"><b>Paula Wilson</b>, Media Analyst</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testi1.jpg" alt=""></div>
                            <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            <p class="overview blockquote-footer"><b>Antonio Moreno</b>, Web Developer</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/testi1.jpg" alt=""></div>
                            <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                            <p class="overview blockquote-footer"><b>Michael Holz</b>, Seo Analyst</p>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-fw"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right fa-fw"></i>
                    </a>
                </div>
            </div>
        </div>
</section>

<section id="latest-blog-area" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="project-section-title">
            <h2>Latest Blog</h2>
            <hr class="section-divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at cum deleniti est necessitatibus officiis quisquam tempore! Expedita, fugiat.</p>
        </div>

        <div class="row">
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                            </div>
                        </div>
                        <div class="post-date">
                            <h5>14 Aprl</h5>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by fletcher</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Retail banks wake up to digital</h3>
                        </a>
                        <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>
                        </div>
                        <div class="bottom">
                            <div class="left float-left">
                                <a href="#">Read More</a>
                            </div>
                            <div class="right float-right">
                                <h5><span class="fas fa-comments"></span>15</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single blog item-->

            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                            </div>
                        </div>
                        <div class="post-date">
                            <h5>14 Aprl</h5>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by fletcher</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Retail banks wake up to digital</h3>
                        </a>
                        <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>
                        </div>
                        <div class="bottom">
                            <div class="left float-left">
                                <a href="#">Read More</a>
                            </div>
                            <div class="right float-right">
                                <h5><span class="fas fa-comments"></span>15</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single blog item-->

            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                            </div>
                        </div>
                        <div class="post-date">
                            <h5>14 Aprl</h5>
                        </div>
                    </div>
                    <div class="text-holder">
                        <ul class="meta-info">
                            <li><a href="#">by fletcher</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                        <a href="blog-single.html">
                            <h3 class="blog-title">Retail banks wake up to digital</h3>
                        </a>
                        <div class="text">
                            <p>know how to pursue pleasure rationally seds encounter consequences.</p>
                        </div>
                        <div class="bottom">
                            <div class="left float-left">
                                <a href="#">Read More</a>
                            </div>
                            <div class="right float-right">
                                <h5><span class="fas fa-comments"></span>15</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single blog item-->


        </div>
    </div>
</section>

<?php endwhile; ?>



 <?php get_footer(); ?>