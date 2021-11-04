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
						<h2> Activiteiten die binnen ons kantoor onder deze hoofdgroep plaatsvinden zijn o.a.: </h2>
						<p class="pt-4">
						* Opstellen van Estate Planning plannen en de daaraan gekoppelde eventuele vermogensoverdracht </br>
						* Het opstellen testamenten en volmachten (levenstestamenten) </br>
						* Het opstellen van huwelijkse voorwaarden en samenlevingsovereenkomsten </br>
						* Nalatenschapsplanning * Afwikkeling nalatenschap c.q. erfenis </br>
						* Berekening erfbelasting </br>
						* Bewindvoering </br>
						* Opzetten van schenkingsstrategie </br>
						* Gebruik levensverzekeringen voor vermogensoverdracht</br>
						</p>
				</div>
			</div>
		</div>	
	</div>
	<div id="contact">
		<div class="container-xxl">
			<div class="d-flex flex-row">
				<div class="d-flex flex-column">
						<h2> Interesse? </h2>
						<h3>Neem direct contact met ons op!</h3>
						<p class="pt-4">
						Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Wat u hier leest is een voorbeeldtekst
						</p>
						[FORM SHORTCODE]
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

                            if($total > 1){
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
	

<?php
get_footer();

?>