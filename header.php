<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ayth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<div id="loader">
		<div id="loading">
			<div id="progstat"></div>
			<div id="progress"></div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<?php the_custom_logo( ); ?>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			
			</div>
		</div>
	</header>

	<?php 
	if (is_home()):
		$bannerimage = get_field( 'banner_image', get_option( 'page_for_posts' ) );
	elseif( is_tax() ):
		$bannerimage = get_field( 'banner_image', 'term_' .get_queried_object()->term_id );
	else: 
		$bannerimage = get_field( 'banner_image' );
	endif;

	if (!$bannerimage): 
		$bannerimage = get_template_directory_uri() . '/assets/img/inner-bg.jpg'; 
	else: 
		$bannerimage = $bannerimage['url']; 
	endif; 
	?>
	<section id="banner" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $bannerimage; ?>">
		<div class="blurb">

			<div class="table">
				<div class="cell middle">

				<?php if ( is_home() ): ?>
					
					<div class="branding">
						<?php the_custom_logo(  ); ?>
					</div>
					<?php if (get_field( 'banner_text', get_option( 'page_for_posts' ) )): ?>
					<div class="text">
						<?php the_field( 'banner_text', get_option( 'page_for_posts' ) ); ?>
					</div>
					<?php endif; ?>

				<?php elseif ( is_singular('product') ): ?>
					
					<div class="branding">
						<?php the_custom_logo(  ); ?>
					</div>

				<?php elseif ( is_tax() ): ?>
					
					<div class="text">
						<div class="wrap">
							<h2><?php echo get_the_archive_title(); ?></h2>
							<?php 
							$product_array = get_posts(
								array(
									'posts_per_page' => -1,
									'post_type' => 'product',
									'tax_query' => array(
										array(
											'taxonomy' => 'range',
											'field' => 'term_id',
											'terms' => get_queried_object()->term_id,
										)
									)
								)
							);
							foreach ($product_array as $product): ?>
								<p><?php echo $product->post_title ?></p>
							<?php endforeach; ?>
						</div>
					</div>

				<?php else: ?>

					<?php if ( is_front_page() & !is_home() || is_page() ): ?>
						<div class="branding">
						<?php the_custom_logo(  ); ?>
						</div>
					<?php endif; ?>

					<?php if (get_field( 'banner_text' )): ?>
					<div class="text">
						<?php the_field( 'banner_text' ); ?>
					</div>
					<?php endif; ?>
					
					<?php if ( is_front_page() ): ?>
						<a class="hvr-sweep-to-right" href="<?php echo home_url( '/products' ); ?>" title="View ranges">View ranges</a>
					<?php endif; ?>

				<?php endif ?>
					
				</div>
			</div>

		</div>
		<i class="fas fa-chevron-down"></i>
	</section>

	<div id="content" class="site-content">
