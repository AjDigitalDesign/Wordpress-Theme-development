<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AJ_Digital_Design
 */

get_header(); ?>
<section id="project-single" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!--Images-->
                <img class="img-fluid w-100" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/project3.jpg">
            </div>
            <div class="col-lg-4 project-content">
                <div class="mb-5 mb-1">
                    <h3>Henry Couture Paris</h3>
                    <span class="lead mb-4 project-type">Ecommerce Website</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste laboriosam officiis tenetur voluptas? Alias cupiditate dolores error est, et eveniet harum omnis perferendis porro possimus quibusdam recusandae ut vel velit?</p>
                </div>
                <div class="mb-5 client-info">
                    <!--client infor-->
                    <h5>Client: Henry Couture</h5>
                    <span> Industry: Fashion</span>
                </div>
                <div class="mb-5 developer-info">
                    <h5>Developer: AJ Jardiah Jr</h5>
                </div>
                <div class="tags-info">
                    <h6> Tags:</h6>
                    <ul class="u-list-inline mb-0">
                        <li class="list-inline-item"><a class="" href="#">Design</a></li>
                        <li class="list-inline-item"><a class="" href="#">Wordpress</a></li>
                        <li class="list-inline-item"><a class="" href="#">Web Design</a></li>
                    </ul>
                </div>
                <div class="mb-5">
                    <a class="btn btn-link btn-line">Learn More</a>
                </div>
            </div>
        </div><!-- row-->
    </div>
</section>







<?php get_footer(); ?>
