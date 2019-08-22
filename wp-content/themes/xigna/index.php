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
 * @package PruebaXigna
 */

get_header();
?>

		<h1>Cepillo Dental Colgate Slim Soft</h1>

		<p>Cerdas 17x m&aacute;s delgadas para una limpieza m&aacute;s profunda.</p>

		<div class="wrapper">
			<div class="video-colgate">
				<img class="ratio" src="http://placehold.it/16x9"/>
				<iframe  src="https://www.youtube.com/embed/lHvEu6RuVOM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

	</div>
	
	<div class="grid-container ">

		<div class="row">
			<input type="text" value="50" class="dial">
		</div>
		
		<div class="row">
			<div class="col-1"></div>
			<div class="col-3">
				<img id="cepillo" class="img-responsive" src="<?php echo get_parent_theme_file_uri('/assets/img/cepillo-normal.png') ?>">
			</div>			
			<div class="col-1"></div>
		</div>
		
		<div class="row">
			<button class="btn" data-percent="50">
				<img src="<?php echo get_parent_theme_file_uri('/assets/img/numero-01.png') ?>">
			</button>
			
			<button class="btn desactive" data-percent="65">
				<img src="<?php echo get_parent_theme_file_uri('/assets/img/numero-02.png') ?>">
			</button>	
		</div>
		
	</div>

<?php
get_footer();
