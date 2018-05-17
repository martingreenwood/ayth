<?php
/**
 * The hpmpage template file (static not dynamic)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ayth
 */

get_header(); ?>

	<section id="form">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</section>

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

<?php
get_footer();
