<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AJ_Digital_Design
 */

?>

<div class="blog-item-one">
    <div class="image-box">
        <?php if(has_post_thumbnail()) { ?>
        <figure>
            <a href="blog-single.html">
                <?php the_post_thumbnail(); ?>
            </a>
        </figure>
        <?php }?>
        <div class="content-text clearfix">

            <a href="blog-single.html">
                <?php
                    if ( is_singular() ) :
                        the_title( '<h5>', '</h1>' );
                    else :
                        the_title( '<h5><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif; ?>
            </a>
            <?php if ( 'post' === get_post_type() ) : ?>
                <ul class="text-left">
                    <li><i class="fa far fa-clock"></i><?php the_date(); ?></li>
                    <li><i class="fa fa-user"></i>By <?php the_author(); ?></li>
                    <li><i class="fa fa-comment"></i>Comment <span><?php comments_number(0, 1, '%'); ?></span></li>
                    <li><i class="fa fa-thumbs-up"></i>Like <span>(53)</span></li>
                </ul>
            <P><?php the_excerpt(); ?></P>
            <?php endif; ?>
            <div class="link-btn">
                <a href="blog-single.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>

</div><!--blog-item-one-->

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				ajdigitaldesign_posted_on();
				ajdigitaldesign_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php ajdigitaldesign_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ajdigitaldesign' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ajdigitaldesign' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ajdigitaldesign_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
