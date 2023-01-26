<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Paul_Browde
 */

get_header();
?>

<div class="container-fluid" id="not_found" style="background-image: url('<?php echo get_field('404_image', 7) ?>')">
<div class="container h-100 d-flex justify-content-center align-items-center">
	<div class="row text-white">
		<div class="col-12 text-center">
			<h1 class="bigger">404</h1>
		</div>
		<div class="col-12 text-center">
			<h2>This page could not be found.</h2>
		</div>
	</div>
</div>
</div>

<?php
get_footer();
