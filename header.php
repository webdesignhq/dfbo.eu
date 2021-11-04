<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Webdesignhq
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<?php wp_head(); ?>	
	<div class="se-pre-con" style="display: none;"></div>
</head>

<body>
	<header class="header p-4">
			<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-sm-6 text-center">
					<div class="custom_logo">
						<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								 the_custom_logo();
								}
							?>
					</div> 
				</div>
				<div class="col-lg-8 col-sm-6 text-right pe-5 d-flex flex-row align-items-center" id="menu">
					<button class="menu-toggle btn"><i class="fas fa-bars"></i></button>
					<nav id="site-navigation" class="main-navigation me-4">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
					<div id="weglot_here"></div>
				</div>
			</div>
			</div>
			<div class="mobile__menu--container d-lg-none d-block">
				<div class="relative">
					<nav id="mobile-site-navigation" class="main-navigation absolute d-block d-lg-none">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav>
				</div>
			</div>		
	</header>

	<div id="diensten__overlay--container" class="d-flex flex-column justify-content-center">
		<div class="container-xxl ">
			<div class="row d-flex flex-wrap mx-auto">

				<?php  
					$args = array(
						'post_type'      => 'vakgebied',
						'posts_per_page' => 8,
						'orderby' => 'rand',
					);

					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php global $post; ?>
						<div class="dienst d-flex flex-column justify-content-between">
							<h2><?php echo $post->post_title; ?></h2>
							<p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
							<a href="<?php echo get_permalink(); ?>">Lees meer</a>
						</div>

					<?php endwhile;
					wp_reset_query();
					?>
			</div>
		</div>
	</div>
	
	<?php if(!is_page(5) && !is_category()) { ?>
		<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
		<div id="bannerindex" class="d-flex flex-column justify-content-center" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; height: 575px;">
			<div class="container-xxl">
				<div class="product__container col-12 d-lg-flex d-block flex-row">
					<div class="d-flex flex-column">
						<div class="bannerindexcontent">
							<h1><?php echo get_the_title(); ?></h1>
							<p><?php the_breadcrumb(); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay">
			</div>
	</div>
	<?php } ?>

	<?php if(is_category()) { ?>
		<div id="bannerindex" class="d-flex flex-column justify-content-center" style="background: url('<?php bloginfo('template_directory'); ?>/img/bg-vakgebieden.png') no-repeat; background-size: cover; height: 575px;">
			<div class="container-xxl">
				<div class="product__container col-12 d-lg-flex d-block flex-row">
					<div class="d-flex flex-column justify-content-center">
						<div class="bannerindexcontent">
							<p><?php the_breadcrumb(); ?></p>
							<h1><?php echo single_term_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="overlay">
			</div>
		</div>
	<?php } ?>




