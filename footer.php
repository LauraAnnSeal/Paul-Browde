<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paul_Browde
 */

?>

<footer>
	<!-- subscribe and website links -->
	<div class="container-fluid bg-light py-xxl-5">
		<div class="container">
			<div class="row bg-light">
				<div class="col-12 col-md-4 pt-5">
					<h2>Subscribe</h2>
					<?php echo do_shortcode('[contact-form-7 id="81" title="Subscribe Form"]'); ?>
					<!-- <form action="">
						<div class="form-group mt-3">
							<label for="exampleInputEmail1" class="sr-only">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
						</div>
						<button class="btn btn-danger my-3">Subscribe</button>
					</form> -->
				</div>
				<div class="col-12 col-md-7 offset-md-1 py-5">
					<div><h2>Website Links</h2></div>
					<?php
					$primaryNav = wp_get_nav_menu_items('2');
					
					foreach ( $primaryNav as $navItem ) {

						if($navItem->title != get_the_title()){
							echo '<a href="'.$navItem->url.'" class="me-2 my-1 btn btn-info btn-sm ">'.$navItem->title.'</a>';
						} else {
							echo '<a href="'.$navItem->url.'" class="me-2 my-1 btn btn-info btn-sm  active">'.$navItem->title.'</a>';
						}
					
					}				

				?>
				</div>
			</div>
		</div>
	</div>

	<!-- Email form -->
	<div class="container my-5 py-xxl-5">
		<div class="row">
				<div class="col-12">
					<h2>Send me an email</h2>
				</div>
				<div class="col-12">
					<?php echo do_shortcode('[contact-form-7 id="82" title="General Email"]'); ?>
					<!-- <form action="">
						<div class="row">
							<div class="col">
								<div class="form-group mt-3">
									<label for="exampleInputEmail1" class="sr-only">Your Name</label>
									<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name">
								</div>
							</div>
							<div class="col">
								<div class="form-group mt-3">
									<label for="exampleInputEmail1" class="sr-only">Your Email</label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group mt-3">
								<label for="exampleFormControlTextarea1" class="sr-only">Example textarea</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
							</div>
						</div>
						<div class="row text-center mt-3">
							<div class="col-6 mx-auto">
								<button class="btn btn-warning">Submit</button>
							</div>
						</div>
					</form> -->
				</div>
			</div>
	</div>

	<!-- copyright and attribution -->
	<div id="footer-bottom" class="container-fluid bg-light">
		<div class="container">
			<div class="row  py-5">
				<div class="col-12">
					<p>Copyright © 2023, Paul Browde. All rights reserved.</p>
				</div>
				<div id="attribution" class="col-12 py-5 row d-flex justify-content-start align-items-center">

					<div>
						<img id="las-logo" src="<?php echo get_template_directory_uri() ?>/assets/LAS-logo.jpg" alt="UX Engineer">
					</div>
					<div>
						<p>Website creation by <br><a href="https://lauraannseal.com/" target="_blank">Laura Ann Seal</a></p>	
					</div>
					
				</div>
			</div>
		</div>
	</div><!-- #colophon -->
</footer>
	


</div><!-- #page -->


<script src="<?php echo get_template_directory_uri() ?>/js/loading.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/menu.js"></script>


<?php wp_footer(); ?>

</body>
</html>
