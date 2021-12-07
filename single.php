<?php get_header(); 
/*
Template Name: Single Service
*/
?>

<div id="content single-post">
	<div id="inleiding">
		<div class="container-xxl">
			<div class="col-8 offset-4 inleidingcontent">
				<span>Vakgebieden</span>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>

					<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div id="activiteiten">
		<div class="container-xxl">
			<div class="d-flex flex-row">
				<div class="d-flex flex-column">
					<?php the_content(); ?>
				</div>
			</div>
		</div>	
	</div>
	<div id="contact">
		<div class="container-xxl">
			<div class="d-flex flex-row">
				<div class="d-flex flex-column">
						<h2><?php echo get_field('contact_title', 'option'); ?></h2>
						<h3><?php echo get_field('contact_subtitle', 'option'); ?></h3>
						<p class="pt-4"><?php echo get_field('contact_text', 'option'); ?></p>
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]') ?>
				</div>
			</div>
		</div>	
	</div>

	<div id="single-related" class="p-5 pe-0">
		<h2 class="text-center">Wellicht ook interresant?</h2>
		<?php		$args = array(
						'post_type' => 'vakgebied',
						'category__in' => wp_get_post_categories(get_the_ID()),
						'post__not_in' => array(get_the_ID()),
						'posts_per_page' => -1,
						'orderby' => 'date',
					);
                     $related_query = new WP_Query($args);
					global $post;

                            $posts = get_posts($args);
                            $total;
                            foreach ($posts as $post) {
                                $total = $total + 1;
                            }

                            if($total > 4){
                            ?>
                                <div class="slidervakgebied d-flex">
                                    <?php 
                                    foreach ($posts as $post) {
                                    ?>
                                        <div class="cat__post col-md-3 p-5 d-flex flex-column justify-content-between">
                                            <h3><?php echo get_the_title(); ?></h3>
                                            <p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                                            <a href="<?php echo get_permalink() ?>" class="read-more"> Lees meer</a>
                                        </div>
                                    
                                    <?php 
                                    } 
                                    ?>

                                </div>

                            <?php 
                            } else{ 
                            ?>
							<div class="row p-5">
                                <?php
                                foreach ($posts as $post) {
                                ?>
                                        <div class="cat__post col-md-3 p-5 d-flex flex-column justify-content-between">
                                            <h3><?php echo get_the_title(); ?></h3>
                                            <p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                                            <a href="<?php echo get_permalink() ?>" class="read-more"> Lees meer</a>
                                        </div>
                                <?php 
                                } }
                        ?>
						</div>
            
	</div>
</div>	
	

<?php
get_footer();

?>