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
<section id="myquote" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="col-md-12">
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto beatae blanditiis culpa, cum cumque esse eveniet fuga harum minus nemo, non nostrum pariatur perferendis sequi similique soluta suscipit totam?</p>
            </blockquote>
            <cite> Aj Jardiah jr </cite>
        </div>
    </div>
</section>
<section id="process" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="header-section text-center">
            <h3>Project Process</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            <hr class="header-divider">
        </div>
        <div class="row">
            <div class="col-md-3">
                <span class="number">1</span>
                <h5 class="steps">Planning</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae impedit in magnam maiores pariatur tempore.</p>
            </div>
            <div class="col-md-3">
                <span class="number">1</span>
                <h5 class="steps">Planning</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae impedit in magnam maiores pariatur tempore.</p>
            </div>
            <div class="col-md-3">
                <span class="number">1</span>
                <h5 class="steps">Planning</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae impedit in magnam maiores pariatur tempore.</p>
            </div>
            <div class="col-md-3">
                <span class="number">1</span>
                <h5 class="steps">Planning</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae impedit in magnam maiores pariatur tempore.</p>
            </div>
        </div>

    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
