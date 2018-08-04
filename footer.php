<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AJ_Digital_Design
 */

?>


   <footer id="footer-area">
       <div class="container">
           <div class="row text-center">
               <div class="col-lg-6 col-md-6 float-left">
                   <div class="copy-right">
                       <div class="site-info">
                           <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name') ?> . All rights reserved.</p>

                       </div><!-- .site-info -->
                   </div>
               </div>

               <div class="col-lg-6 col-md-6 float-right">
                   <div class="social-media">
                       <div class="social-links">
                           <ul class="social-icon">
                               <li class="icons-link"><a href="#"><i class="fab fa-facebook"></i></a></li>
                               <li class="icons-link"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                               <li class="icons-link"><a href="#"><i class="fab fa-instagram"></i></a></li>
                               <li class="icons-link"><a href="#"><i class="fab fa-github-square"></i></a></li>
                               <li class="icons-link"><a href="#"><i class="fab fa-codepen"></i></a></li>
                           </ul>
                       </div><!-- .site-info -->
                   </div>
               </div>


           </div>

       </div>
   </footer>


<?php wp_footer(); ?>

</body>
</html>
