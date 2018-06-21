<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alan-wp-portfolio
 */

?>

	</div><!-- #content -->

<footer class="content-info">
  <div class="container">
    <h1>Let's Get in Touch</h1>

    <p>saxal28@gmail.com</p>
    <p>618.581.3766</p>
    <div class="social-media-row">

        <img class="down-arrow" src="<? echo get_template_directory_uri()?>/assets/images/facebook-logo.svg">      
        <img class="down-arrow" src="<? echo get_template_directory_uri()?>/assets/images/instagram-logo.svg">    
        <img class="down-arrow"  src="<? echo get_template_directory_uri()?>/assets/images/linkedin-logo.svg">    
        
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
