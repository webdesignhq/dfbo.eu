<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div id="category__container" style="background: linear-gradient(
		270deg, rgba(0,0,0,0) 30%, #F8F9FB  20%, #F8F9FB  50%);">
<div class="container-xxl p-5">
    <div class="row">
        <div class="col-7 inleiding">
            <span class="vakgebied">vakgebieden</span>
            <h2 class="mt-3">Vakgebied: <?php echo single_term_title(); ?> </h2>
            <p><?php echo category_description(); ?></p>
        </div>
    </div>
</div>
</div>

<div id="category__container--image">

</div>

<div id="category__posts">
    <div class="container-xxl">
        <div class="row">
            <h2>Onze vakgebieden</h2>
                <?php
                    $category = get_category( get_query_var( 'cat' ) );
                    $cat_id = $category->cat_ID;

                            $args = array(
                            'post_type'                => 'vakgebied',
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => 1,
                            'hierarchical'             => 1,
                            'pad_counts'               => false,
                            'category'                 => $cat_id,
                            'posts_per_page'           => -1
                            
                            );
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
</div>


<div id="services">
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-md-8 offset-md-4 serviceblock">
			<span>Wat we doen</span>
				<h3>Onze vakgebieden</h3>
				<p>Om u inzicht te geven in de werkzaamheden die wij o.a. voor u kunnen uitvoeren en de vakgebieden waarbij wij u kunnen begeleiden treft u onderstaand een uitwerking aan van de 8 hoofdgroepen waar wij intern mee werken. Het is geen limitatieve opsomming. Heeft u een vraagstuk over een onderwerp dat hier niet genoemd is, schroomt u dan niet om ons toch te benaderen. Door de zeer brede ervaring van onze trusted advisors kunnen wij u eigenlijk altijd van dienst zijn.</p>
				<a href="btn btn-primary">Lees meer</a>
			</div>
		</div>
	</div>
</div>

<div id="news">
	<div class="container-xxl">
		<div class="row">
		<span>- informatie </span>
		<h2>Laatste nieuws</h2>
			<div class="slider">
				<?php  
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 10
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					 <div class="newsblock p-4 m-4">
						<?php global $post; ?>
						<span><?php echo get_the_date(); ?></span>
						<h3><a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?></a></h3>
						<p><?php echo the_excerpt(); ?></p>
						<a href="<?php echo get_permalink();?>">Meer info</a>
					</div>
		
				<?php endwhile;

				wp_reset_query();
			?>
			</div>
		</div>
	</div>
<!-- #container -->

<?php get_footer(); ?>