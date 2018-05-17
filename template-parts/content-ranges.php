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

	<div class="entry-image">
		<?php the_post_thumbnail(); ?>
	</div><!--
	--><div class="entry-content">
		<?php
		the_title( '<h2 class="entry-title">', '</h2>' );
		the_content( );
		$file = get_field( 'spec_sheet' );
		?>
		<a class="more hvr-sweep-to-right" target='_blank' href="<?php echo $file['url'] ?>" title="Download Data Sheet">Download Data Sheet</a>
	</div>

</article>