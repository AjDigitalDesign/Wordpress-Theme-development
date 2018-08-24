<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJ_Digital_Design
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="blog-sidebar">
    <div class="search-box-area">
        <div class="sec-title-four">
            <h6>Find in Site</h6>
        </div>
        <!-- Search -->
        <form method="search" action="blog.html">
            <div class="form-group">
                <input type="search" name="field-name" value="" placeholder="Search" required="">
                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
            </div>
        </form>
    </div>
    <div class="resent-post-area">
        <div class="sec-title-four">
            <h6>Recent Post</h6>
        </div>
        <ul>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Development solutions</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Future design concept</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Stand out venues</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Technology upgraded</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Deliver fresh news</a></li>
        </ul>
    </div>
    <div class="resent-comment-area">
        <div class="sec-title-four">
            <h6>Recent Comment</h6>
        </div>
        <ul>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>Vincent Adams &nbsp;&nbsp;</span>-&nbsp;&nbsp;  Stand out venues</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>Bruce Sutton &nbsp;&nbsp;</span>-&nbsp;&nbsp;  Stand out venues</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>Jena Lambert &nbsp;&nbsp;</span>-&nbsp;&nbsp;  Stand out venues</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>Jena Lambert &nbsp;&nbsp;</span>-&nbsp;&nbsp;  Future design concept</a></li>
            <li><a href="#"><i class="fa fa-arrow-circle-right"></i><span>Vincent Adams &nbsp;&nbsp;</span>-&nbsp;&nbsp;  Future design concept</a></li>
        </ul>
    </div>
    <div class="categories-area">
        <div class="sec-title-four">
            <h6>Categories</h6>
        </div>
        <ul>
            <li><a href="#">Bussiness</a></li>
            <li><a href="#">Future</a></li>
            <li><a href="#">General</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">Uncategorized</a></li>
        </ul>
    </div>
    <div class="meta-area">
        <div class="sec-title-four">
            <h6>Meta</h6>
        </div>
        <ul>
            <li><a href="#">Log in</a></li>
            <li><a href="#">Entries <span>RSS</span></a></li>
            <li><a href="#">Comments <span>RSS</span></a></li>
            <li><a href="#">WordPress.org</a></li>
        </ul>
    </div>
    <div class="tags-area">
        <div class="sec-title-four">
            <h6>tags</h6>
        </div>
        <ul class="tags-list">
            <li><a href="#">Development</a></li>
            <li><a href="#">Experiments</a></li>
            <li><a href="#">Framework</a></li>
            <li><a href="#">General</a></li>
            <li><a href="#">Software</a></li>
            <li><a href="#">Study</a></li>
            <li><a href="#">Technology</a></li>
        </ul>
    </div>
    <div class="social-links-area">
        <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-vine"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</div>
<!--<aside id="secondary" class="widget-area">-->
<!--	--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--</aside><!-- #secondary -->-->

