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

<?php
get_footer();
