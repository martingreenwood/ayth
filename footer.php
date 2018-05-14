<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ayth
 */

?>

	</div><!-- #content -->

	<?php get_template_part( 'template-parts/get', 'signup' ); ?>

	<section id="prefooter">

		<div class="container">

			<div class="row big-three">
				<div class="fast">
					<i class="fas fa-truck"></i>
					<?php the_field( 'delivery', 'options' ); ?>
					
				</div>
				<div class="bespoke">
					<i class="fas fa-mouse-pointer"></i>
					<?php the_field( 'bespoke_service', 'options' ); ?>
				</div>

				<div class="contact">
					<i class="fas fa-phone-volume"></i>
					<?php the_field( 'contact_us', 'options' ); ?>
				</div>
			</div>

			<div class="row">

				<div class="site-branding">
					<?php the_custom_logo(); ?>					
				</div>

				<div class="info">
					<p>Address Town Postcode Area</p>
					<p>Telephone: 01234 56789</p>
					<p>Email: info@emailaddress.co.uk</p>
				</div>

			</div>
		</div>
		
	</section>

	<footer id="colophon" class="site-footer"><!--
	--></footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
