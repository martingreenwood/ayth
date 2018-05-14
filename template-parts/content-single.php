 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ayth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header id="header" class="">
		<h2><?php the_title(  ); ?></h2>
	</header><!-- /header -->

	<?php ayth_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ayth' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
