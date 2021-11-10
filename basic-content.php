<?php
/*
Template Name: Basis inhoud (twee kolommen)
*/ get_header(); 

$contentimage = get_field('content_image');
?>

<div id="content">
	<div class="container-fluid p-0">
		<div class="d-flex flex-row">
			<div class="col-8 contentblock">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							 
				<?php the_content(); ?>
				 
				
				<?php endwhile; else: ?>
				 
				<h2>Woops...</h2>
				 
				<p>Deze pagina heeft geen content.</p>
				 
				<?php endif; ?>
				 
			</div>
			<div class="col-4">
				<img src="<?php echo $contentimage; ?>" style="width: 100%; height: 100%; object-fit: cover;"/>
			</div>
		</div>
	</div>	

<?php
get_footer();
?>