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
<section id="project-page" class="section-groups-top section-groups-bottom">
    <div class="container">
        <div class="row">
            <?php
                $arg = array(
                    'post_type'       =>  'myportfolio',
                    'post_per_page'  =>  -1,
                    'orderby'       =>  'post_date',
                    'order'         =>  'ASC'
                );?>
            <?php $portfolio = new WP_Query($arg); while($portfolio->have_posts()) : $portfolio->the_post(); ?>
            <div class="col-md-12">
                <figure class="project-main">
                    <a class="project-inner align-items-stretch w-100" href="<?php the_permalink(); ?>">

                        <?php if(has_post_thumbnail()) :  ?>
                            <img class="img-fluid img" src="<?php the_post_thumbnail_url('portfolio_size'); ?>">
                        <?php endif; ?>
                    <div class="project-information">
                        <div class="project-content">
                            <div class="project-logo">
                                <?php $portfoli_logo = get_field('project_logo'); ?>
                                <?php if(!empty($portfoli_logo)) : ?>
                                    <img src="<?php echo $portfoli_logo['url']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="project-title-content">
                                <div class="project-category"><?php the_field('project_type'); ?></div>
                                <h4><?php the_title(); ?></h4>
                            </div>

                        </div>
                    </div>
                    </a>
                </figure>
            </div>
    <?php endwhile; ?>

        </div>
    </div>

</section>

<?php endwhile; ?>

<?php
get_footer();
