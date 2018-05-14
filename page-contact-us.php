<?php
/**
 * The hpmpage template file (static not dynamic)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ayth
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<?php if (have_posts()): ?>
			<div class="row">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
			</div>
			<?php endif ?>

		</main>
	</div>

	<section id="form">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</section>

	<section id="mappy">
		<div class="container">
			<div class="row">
				<?php 
				$location = get_field('location');
				if( !empty($location) ):
				?>
				<div class="map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
