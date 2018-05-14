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

	<div class="entry-content">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

		<p>
		<?php
		/**
		* Custom Excerpt Length WordPress using wp_trim_excerpt()
		* Use directly in template
		*/

		$content = get_the_content();
		echo wp_trim_words( $content , '20' ); 
		?>
		</p>
		<a class="more hvr-sweep-to-right" href="<?php the_permalink( ) ?>" title="Read More">Read More</a>
	</div><!--
	--><div class="entry-image">
		<?php ayth_post_thumbnail(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
