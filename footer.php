<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage HQonline
 * @since 1.0.0
 */

$image = get_field('footer_logo', 'option');

?>
<footer id="footer-cont">
<?php if(!is_page('39') && !is_single()) { ?>
<div id="ctabanner">
	<div class="container-xxl">
		<div class="row text-center">
		<h2>Benieuwd naar wat <strong>wij</strong> voor <strong>u</strong> kunnen betekenen?</h2>
		<span><a href="#" class="btn btn-secondary mt-4">Contact opnemen</a></span>
		</div>
	</div>
</div>
<?php } 
elseif(is_single()) { ?>
	<div id="ctabanner " class="banner-secondary">
		<div class="container-xxl">
			<div class="row text-center">
			<h2>Benieuwd naar wat <strong>wij</strong> voor <strong>u</strong> kunnen betekenen?</h2>
			<span><a href="#" class="btn btn-secondary mt-4">Contact opnemen</a></span>
			</div>
		</div>
	</div>
<?php } ?>

	<div id="footer">
		<div class="container-xxl">
			<div class="row pt-5 pb-5">
				<div class="col-md-3 small-12 columns">
					<div class="custom_logo">
						<img src="<?php echo $image; ?>">
					</div>
				</div>
				<div class="col-md-2  offset-lg-1 mt-lg-0 mt-4  small-12 columns">
					<strong>Meer informatie</strong>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_moreinfo' ) ); ?>
				</div>
				<div class="col-md-2 offset-lg-1 small-12 columns">
					<strong>Diensten</strong>
					<?php wp_nav_menu( array( 'theme_location' => 'footer_services' ) ); ?>

	
				</div>
				<div class="col-md-2 offset-lg-1 small-12 columns">
					<strong>Contactgegevens</strong>
					<?php echo get_field('contactdetails','option'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="row">
			<div class="col-md-12 columns">
				<p class="text-white">Copyright &copy; - <?php echo date('Y') ?> - Dutch Family Business Office</p>
			</div>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/fullPage.js-master/src/fullpage.js" > </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/home_slide.js"></script>
</body>

<?php wp_footer(); ?>

