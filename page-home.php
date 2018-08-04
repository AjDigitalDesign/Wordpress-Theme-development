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

<section id="aboutMe" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <?php
            // WP_query to display content from the about me page
            $args = array(
                'pagename'  => 'about'
            );
            ?>
            <?php $aboutUs = new WP_Query($args); while($aboutUs->have_posts()): $aboutUs->the_post(); ?>

            <div class="col-md-7 g-mb-30 about-content-area">

                <div class="g-mb-20 header-inner">
                    <?php
                    //store the subtitle and developer's name in a variable
                    $substile = get_field('page_greeting_title');
                    $developer_name = get_field('developers_name');
                    ?>
                    <?php if($substile) : ?>
                        <span class="subTitle"><?php echo $substile; ?></span>
                    <?php endif; ?>

                    <?php if($developer_name) : ?>
                        <h3 class="about-title"><?php echo $developer_name; ?></h3>
                    <?php endif; ?>
                    <p class=""><?php the_excerpt(); ?></p>

                    <div class="skills">
                        <div class="skill-section">
                            <div class="skill-name">
                                <span class="skillsets">Html5/CSS</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 90%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                        </div>
                        <div class="skill-section">
                            <div class="skill-name">
                                <span class="skillsets">WordPress</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                        </div>
                        <div class="skill-section">
                            <div class="skill-name">
                                <span class="skillsets">PHP</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="skill-section">
                            <div class="skill-name">
                                <span class="skillsets">Javascript/Jquery</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-animated bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-5 g-mb-30">
                <div class="image-container">
                <?php
                    $developer_headshot = get_field('developer_headshot');
                    $developer_headshot_size = 'full';
                    ?>
                    <?php if(!empty($developer_headshot)) : ?>
                        <img class=" mb-4" src="<?php echo $developer_headshot['url'] ?>" alt="place holder">
                    <?php else: ?>
                        <img class=" mb-4" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/img1.png" alt="place holder">
                <?php endif; ?>
                    <div class="text-center">
                        <span class="more-info-arrow">
                            Learn more:
                            <a class="-g-links" href="<?php the_permalink(); ?>">about me
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </span>
                    </div>
                </div>

            </div><!--col-md-5-->
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- START WORK DESIGN AREA -->
<section id="work" class="work section-groups-top section-groups-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="project-section-title">
                    <h2>featured works.</h2>
                    <hr class="section-divider">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at cum deleniti est necessitatibus officiis quisquam tempore! Expedita, fugiat.</p>
                </div>
            </div>
        </div>
        <div class="work-inner">
            <div class="row work-posts grid no-gutters">
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->

                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->

                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->

                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->

                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="col-md-4 col-sm-6 mix webdesign">
                    <div class="item">
                        <a href="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" class="work-popup">
                            <figure class="effect-ruby">
                                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/images/project4.jpg" alt="image">
                                <figcaption>
                                    <h5>web development</h5>
                                    <p>project one</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- END SINGLE WORK DESIGN AREA -->

            </div>
        </div>
    </div>
</section>
<!-- / END START WORK DESIGN AREA -->

<!-- START CALL TO ACTION DESIGN AREA -->
<section id="download" class="call-to-area" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-area-text text-center">
                    <h2>we can help you to grow up your online business</h2>
                    <p>We offer a wide range of procedures to help you get the perfect smile</p>
                    <a class="Naila-scroll btn btn-lg" href="#appoinment">contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / END CALL TO ACTION DESIGN AREA -->

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