<?php
/* Template Name: Homepagina */

get_header();
?>
<?php is_front_page(); ?>
<video autoplay muted loop id="videobg">
  <source src="https://ak.picdn.net/shutterstock/videos/1013671835/preview/stock-footage-low-angle-shot-of-a-team-doing-a-hands-in-cheer-before-the-big-game-huddle.mp4" type="video/mp4">
</video>
<div id="banner">
	<div class="overlay">
	</div>
		<div class="container-xxl">
			<div class="row">
				<div class="col-md-8">
					<div class="bannercontent text-left p-4">
						<h1>Wij hebben de focus op PRO actief<br>Samenwerking & vertrouwen</h1>
						<span>Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek.</span>
					</div>
				</div>
			</div>
	</div>
	<div class="bannerblocks">
		<div class="container-xxl">
			<div class="row">
			<?php
						$args = array(
						'post_type'                     => 'post',
						'child_of'                 => 0,
						'parent'                   => '',
						'orderby'                  => 'name',
						'order'                    => 'ASC',
						'hide_empty'               => 1,
						'hierarchical'             => 1,
						'pad_counts'               => false );
						$categories = get_categories($args);
					?>
						<?php 
						foreach ($categories as $category) {
						?>
							 <div class="col-md-3 p-5 d-flex flex-column justify-content-between">
								<span><?php echo $category->name ?></span>
								<p><?php echo wp_trim_words( $category->category_description, 15 ); ?></p>
								<a href="<?php echo get_category_link( $category->term_id ) ?>" class="read-more"> Lees meer</a>
							</div>
							<?php
						}
						?>	
				<div class="col-md-3">
					
				</div>
			</div>
		</div>
	</div>
</div>

<div id="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 aboutblock">
				<span>- Voorstellen </span>
				<h2>De Dutch Family Business Office</h2>
				<p>De Dutch Familiy Business Office is een onafhankelijk toegewijd multidisciplinair Personal Family & Business Office. Wij servicen, in tegenstelling tot de meeste andere offices, niet alleen de individuele relatie ( met eventueel zijn of haar familie) , maar ook de gelieerde onderneming(en). n dit op een zeer persoonlijke, pro actieve en discrete manier. Wj bieden een onderscheidend, compleet en excellent pakket aan van financiële, fiscale, bancaire, juridische en administratieve diensten.</p>
			</div>
		</div>
	</div>
</div>

<div id="team">
	<div class="container-xxl">
		<div class="row">
		<span>- Voorstellen </span>
		<h2>Meet the team</h2>
			<div class="sliderteam">
				<?php  
				$args = array(
					'post_type'      => 'team',
					'posts_per_page' => 10,
					'order' => 'ASC',
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					 <div class="teamblock me-4">
					 <img src="<?php echo $image[0]; ?>">
						<?php global $post; ?>
						<div class="teamcontent">
							<span><?php echo get_the_title(); ?></span>
						</div>
					</div>
		
				<?php endwhile;

				wp_reset_query();
			?>
			</div>
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
</div>
<?php
get_footer();

?>