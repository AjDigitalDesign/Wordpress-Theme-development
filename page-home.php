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
                    <img class=" mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/img1.png" alt="place holder">
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

<section id="projects" class="section-groups-top section-groups-bottom">
    <div class="container">
        <h3>Recent Projects</h3>
        <hr class="header-divider">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cupiditate </p>


        <div class="row">
            <div class="col-md-4 col-lg-4 item">
                <figure class="project-img">
                    <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/img5.jpg">
                </figure>
                <div class="project-info">
                    <h4>Henry Couture Website</h4>
                    <ul class="list-inline project-categories">
                        <li class="list-inline-item">Web Design</li>
                        <li class="list-inline-item">Web Development</li>
                        <li class="list-inline-item">ECommerce</li>
                        <li class="list-inline-item">WordPress</li>
                    </ul>

                    <div class="project-button">
                        <button class="btn btn-primary btn-project">View Project</button>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- container-->
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

<section id="blog-section" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class=" heading mb-5">
            <h3>Recent Blog Articles</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis quia soluta.</p>
            <hr class="heading-divider">
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <article class="blog-single">
                    <figure>
                        <img class="w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project4.jpg">
                        <ul class="list-inline blog-categories">
                            <li class="list-inline-item category-list"><a href="#">Small Business</a></li>
                            <li class="list-inline-item category-list"><a href="#">Freelance</a></li>
                            <li class="list-inline-item category-list"><a href="#">PHP7</a></li>
                        </ul>
                    </figure>

                    <div class="blog-single-content">
                        <ul class="list-inline blog-info">
                            <li class="list-inline-item category-list"><i class="fas fa-user"></i>By: <a href="#">Aj Jardiah Jr</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-calendar"></i><a href="#">July 29, 2018</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-comment"></i><a href="#">23</a></li>
                        </ul>
                        <h4><a href="#">Why Small Business need a website</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias at atque debitis dicta eveniet harum in, inventore ipsa ipsum iure </p>

                    </div>
                </article>
            </div>

            <div class="col-sm-6 col-md-4">
                <article class="blog-single">
                    <figure>
                        <img class="w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project4.jpg">
                        <ul class="list-inline blog-categories">
                            <li class="list-inline-item category-list"><a href="#">Small Business</a></li>
                            <li class="list-inline-item category-list"><a href="#">Freelance</a></li>
                            <li class="list-inline-item category-list"><a href="#">PHP7</a></li>
                        </ul>
                    </figure>

                    <div class="blog-single-content">
                        <ul class="list-inline blog-info">
                            <li class="list-inline-item category-list"><i class="fas fa-user"></i>By: <a href="#">Aj Jardiah Jr</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-calendar"></i><a href="#">July 29, 2018</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-comment"></i><a href="#">23</a></li>
                        </ul>
                        <h4><a href="#">Why Small Business need a website</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias at atque debitis dicta eveniet harum in, inventore ipsa ipsum iure </p>

                    </div>
                </article>
            </div>

            <div class="col-sm-6 col-md-4">
                <article class="blog-single">
                    <figure>
                        <img class="w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project4.jpg">
                        <ul class="list-inline blog-categories">
                            <li class="list-inline-item category-list"><a href="#">Small Business</a></li>
                            <li class="list-inline-item category-list"><a href="#">Freelance</a></li>
                            <li class="list-inline-item category-list"><a href="#">PHP7</a></li>
                        </ul>
                    </figure>

                    <div class="blog-single-content">
                        <ul class="list-inline blog-info">
                            <li class="list-inline-item category-list"><i class="fas fa-user"></i>By: <a href="#">Aj Jardiah Jr</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-calendar"></i><a href="#">July 29, 2018</a></li>
                            <li class="list-inline-item category-list"><i class="fas fa-comment"></i><a href="#">23</a></li>
                        </ul>
                        <h4><a href="#">Why Small Business need a website</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias at atque debitis dicta eveniet harum in, inventore ipsa ipsum iure </p>

                    </div>
                </article>
            </div>
        </div>

    </div>
</section>


 <?php get_footer(); ?>