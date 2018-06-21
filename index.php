<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alan-wp-portfolio
 */

get_header();
?>


  <div class="home-page-container">

		<div class="jumbotron">
			
			<div class="jumbotron-content container">
			
			<div class="jumbotron-circle">
				<h1 class="main-title">Hello</h1>
				<p class="sub-title">I'm Alan Sax</p>
				<p class="minor-text">Web / Mobile Developer</p>
			</div>

			</div>

			<img class="down-arrow" src="<?php echo get_template_directory_uri()?>/assets/images/down-chevron.svg"/>      

		</div>

		<section class="section-1">
			<div class="container">
				<div class="home-collage">
					<div class="collage-item web-dev-section">
						<h2>Web Projects</h2>
					</div>
					<div class="collage-item web-design-section">
						<h2>Design Projects</h2>                
					</div>
					<div class="collage-item mobile-dev-section">
						<h2>Mobile Projects</h2>                
					</div>
				</div>
			</div>
		</section>

		<section class="section-2">
			<div class="container">
				<div class="project-spotlight">
					<div class="spotlight-item">
						<div class="spotlight-label">
							<h1>Project Spotlight</h1>
						</div>
						<a class="spotlight-action">
							<h1>View More</h1>
						</a>
					</div>
				</div>
			</div>
		</section>


</div>

<?
get_footer();
?>
