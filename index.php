<?php get_header(); ?>

<div id="content" class="py-5">
	<div class="container-xl">
		<div class="d-flex flex-row">
			<div class="d-flex flex-column">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							 
				<?php the_content(); ?>
				 
				
				<?php endwhile; else: ?>
				 
				<h2>Woops...</h2>
				 
				<p>Deze pagina heeft geen content.</p>
				 
				<?php endif; ?>
				 
				<p align="center"><?php posts_nav_link(); ?></p>
			</div>
		
		</div>
	</div>	
</div>	
	

<?php
get_footer();

?>