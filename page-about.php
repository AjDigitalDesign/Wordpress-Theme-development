<?php
/**
 * Template Name: About Me
 * The template for displaying the About me center
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

get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

<section id="aboutMe" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-7 g-mb-30">
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
                    <p class=""><?php the_content(); ?></p>
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
                </div>

            </div><!--col-md-5-->
        </div>
    </div>
</section>
<section id="myquote" class="section-groups-top section-groups-bottom" data-stellar-background-ratio="0.6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"><i class="fas fa-quote-left"></i>Give a man a fish and you feed him for a day; teach a man to fish and you feed him for a lifetime<i class="fas fa-quote-right"></i></p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>

    </div>
</section>
<section id="skillset" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="project-section-title">
            <h2>My Passion</h2>
            <hr class="section-divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at cum deleniti est necessitatibus officiis quisquam tempore! Expedita, fugiat.</p>
        </div><!--project-section-title-->
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-5 skillset-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab aliquid aut autem beatae cupiditate deserunt dicta dignissimos ducimus eligendi exercitationem fuga harum hic id incidunt molestiae, nobis nostrum optio porro quae quaerat recusandae repudiandae sapiente soluta tempore velit voluptatum. Et ipsam molestiae molestias, nam porro qui quos sunt unde.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <h6>Web Design</h6>
                    <span class="ml-auto">88%</span>
                </div>
                <div class="js-hr-progress-bar progress rounded-0 general-progress-bar">
                    <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <h6>Web Design</h6>
                    <span class="ml-auto">88%</span>
                </div>
                <div class="js-hr-progress-bar progress rounded-0 general-progress-bar">
                    <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <h6>Web Design</h6>
                    <span class="ml-auto">88%</span>
                </div>
                <div class="js-hr-progress-bar progress rounded-0 general-progress-bar">
                    <div class="js-hr-progress-bar-indicator progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div><!--row-->
    </div><!--container-->
</section>
<?php endwhile; ?>
<?php get_footer(); ?>


