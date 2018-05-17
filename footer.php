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
			
		</div>
		
	</section>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<p>Company Registration No: 11071144. VAT No: 291 6854 66</p>
			</div>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>
