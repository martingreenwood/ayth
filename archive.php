<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ayth
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row">
				<center>
					<?php $term = get_queried_object(); ?>
					<?php the_field( 'banner_text', $term ); ?>
				</center>
			</div>
			<div class="row">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'ranges' );

					endwhile;

				endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="range">

		<div class="container">

			<div class="row">
				
				<?php 
					$taxonomy = 'range';
					$args = array(
						'orderby'           => 'name', 
						'order'             => 'ASC',
						'hide_empty'        => false, 
						'exclude'           => array(), 
						'exclude_tree'      => array(), 
						'include'           => array(),
						'number'            => '', 
						'fields'            => 'all', 
						'slug'              => '',
						'parent'            => '',
						'hierarchical'      => true, 
						'child_of'          => 0,
						'childless'         => false,
						'get'               => '', 
						'name__like'        => '',
						'description__like' => '',
						'pad_counts'        => false, 
						'offset'            => '', 
						'search'            => '', 
						'cache_domain'      => 'core',
					);
					$terms = get_terms($taxonomy, $args);
				?>

				<?php if (!empty($terms) && !is_wp_error($terms) ): ?>
					<ul><!--
					<?php foreach ($terms as $term): ?>
						--><li>
				  			<a href="<?php echo get_term_link($term); ?>">
				  				<?php echo get_term_thumbnail( $term->term_taxonomy_id, $size = 'full', $attr = '' ); ?>
				  				<div class="text">
					  				<div class="table">
						  				<div class="cell middle">
							  				<h3><?php echo $term->name ?></h3>
							  				<button class="hvr-sweep-to-right" type="button">View Range</button>
						  				</div>
					  				</div>
				  				</div>
			  				</a>
				  		</li><!--
					<?php endforeach; ?>
					--></ul>
				<?php endif; ?>

				<a class="more hvr-sweep-to-right" href="<?php echo home_url( '/products' ); ?>" title="">View Range</a>

			</div>
			
		</div>

	</section>

<?php
get_footer();
