<?php
/**
 * Represents the homepage
 */
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

get_template_part( 'header' );
?>

	<?php
	/**
	 * Slideshow parts
	 */
	//echo do_shortcode('[slideshow id="8"]');
	?>
	
	<div class="ideogrammes"><hr></div>

	<div class="main" id="main" role="main">
		
		<?php
			// the content should not be used, see layout system (ACF)
			the_content();

			// the AKSVB content, the layout system (ACF)
			aksvb_the_content();
		?>

	</div><!-- #main -->

<?php
get_template_part( 'footer' );
