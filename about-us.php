<?php
/*
Template Name: About Us
*/ get_header(); 

$headerVideo = get_field('about_image');
?>

<div id="contact-page">
	<div class="container-fluid p-0">
		<div class="d-flex flex-row">
			<div class="col-8 contactblock">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							 
				<?php the_content(); ?>
				 
				
				<?php endwhile; else: ?>
				 
				<h2>Woops...</h2>
				 
				<p>Deze pagina heeft geen content.</p>
				 
				<?php endif; ?>
				 
			</div>
			<div class="col-4">
				<img src="<?php echo $headerVideo; ?>" style="width: 100%; height: 100%; object-fit: cover;"/>
			</div>
		</div>
	</div>	

<?php
get_footer();

?>