<?php
/* Template Name: Homepagina */
$headerVideo = get_field('header_video', 'option');
preg_match('/src="(.+?)"/', $headerVideo, $matches);

$src = $matches[1];



get_header();
?>
<?php is_front_page(); ?>
<div id="fullpage">
		<div class="section" id="section-1" style="z-index: 99;">
			<video autoplay muted loop data-autoplay playsinline id="videobg" style="filter: grayscale(100%);">
			<source src="<?php echo $src;?>" type="video/webm">
			</video>
			<script>
    			$("video[autoplay]").each(function(){ this.play(); });
			</script>
			<div id="banner" class="panel">
				<div class="overlay">
				</div>
					<div class="container-xxl">
						<div class="row">
							<div class="col-md-8">
								<div class="bannercontent text-left p-4">
									<h1 class="mb-4">Wij hebben de focus op PRO actief<br>Samenwerking <span> & </span> vertrouwen</h1>
								</div>
							</div>
						</div>
				</div>
				<div class="bannerblocks">
					<div class="container-xxl">
						<div class="row flex-row bannerblocks-slider flex-lg-wrap flex-nowrap">
								<?php
									$args = array(
									'post_type'                => 'post',
									'child_of'                 => 0,
									'parent'                   => '',
									'orderby'                  => 'name',
									'order'                    => 'DESC',
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
											<p class="pt-3"><?php echo wp_trim_words( $category->category_description, 15 ); ?></p>
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
		</div>
		<div class="section" id="section-2" style="position: relative;" >
			<div id="about" class="panel" style="background-position: 100% 400px; width: 100vw; height: 110vh;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 aboutblock" style="top:0px; left:0;" >
							<span class="vakgebied">Voorstellen </span>
							<h2 class="mt-3">De Dutch Family Business Office</h2>
							<p><?php echo the_content(); ?></p>
							<a href="https://dfbo.eu/over-ons/" class="btn btn-primary">Meer over ons</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="normal-scroll section-3">
			<div id="team"class="panel">
				<div class="row col-11 offset-1">
					<span class="vakgebied">Voorstellen </span>
					<h2>Meet the team</h2>
						<div class="sliderteam pt-5 pe-0">
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
										<span><?php echo get_the_title(); ?></span><br><br>
										<?php
											$specialities_rows = get_field('specialities');
												if($specialities_rows)
												{
													echo '<ul>';
													foreach($specialities_rows as $row)
													{
														echo '<li style="font-size: 12px;color: #fff;"> '. $row['name'] .' </li>';
													}
													echo '</ul>';
												}
										?>
									</div>
								</div>
					
							<?php endwhile;

							wp_reset_query();
							?>
					</div>
				</div>
			</div>

		<div id="services">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-10 offset-md-2 serviceblock">
						<span><span class="read-more">Voorstellen</span></span>
						<h3 class="fs-2">Onze vakgebieden</h3>
						<p>Om u inzicht te geven in de werkzaamheden die wij o.a. voor u kunnen uitvoeren en de vakgebieden waarbij wij u kunnen begeleiden treft u onderstaand een uitwerking aan van de 8 hoofdgroepen waar wij intern mee werken. Het is geen limitatieve opsomming. Heeft u een vraagstuk over een onderwerp dat hier niet genoemd is, schroomt u dan niet om ons toch te benaderen. Door de zeer brede ervaring van onze trusted advisors kunnen wij u eigenlijk altijd van dienst zijn.</p>
						<span><a class="btn btn-primary">Lees meer</a></span>
					</div>
				</div>
			</div>
		</div>


		<div id="news">
				<div class="row col-11 offset-1">
				<span class="read-more"> informatie </span>
				<h2>Laatste nieuws</h2>
					<div class="slider">
						<?php  
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 10
						);

						$loop = new WP_Query( $args );

						while ( $loop->have_posts() ) : $loop->the_post(); 
							$authorID=get_the_author_meta('ID');
						?>
							<div class="newsblock p-5 my-5 me-5">
								<?php global $post; ?>
								<?php echo get_avatar( get_the_author_meta( $authorID ) , 16 ); ?>
								<span><?php echo get_the_date(); ?></span>
								<h3><a href="<?php echo get_permalink();?>"> <?php echo get_the_title(); ?></a></h3>
								<p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
								<a href="<?php echo get_permalink();?>">Meer info</a>
							</div>
				
						<?php endwhile;

						wp_reset_query();
					?>
					</div>
			</div>
		</div>
	</div>
	</div>
<?php
get_footer();

?>