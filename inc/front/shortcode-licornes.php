<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

add_shortcode( 'licornes', 'aksvb_add_licornes_sc' );
function aksvb_add_licornes_sc( $attr ) {
	
	if ( ! function_exists( 'have_rows' ) ) {
		return 'You should install ACF.';
	}

	$attr = shortcode_atts( array(
		'id' => '6'
	), $attr, 'licornes' );

	$licornes = new WP_Query( array(
		'post_type'      => 'licorne',
		'nopaging'       => true,
		'posts_per_page' => -1,
		'order'          => 'ASC'
	) );

	if ( ! $licornes -> have_posts() ) {
		return;
	}

	$output = '<div id="licornes-list" class="imgs-container">' . "\n\t\t";

	// Populate the slideshow with its slides
	while ( $licornes -> have_posts() ) {
		$licornes -> the_post();

		$img_1   = get_field( 'image'    );
		$img_2   = get_field( 'hover_image' );

		$output .= '<div class="circle-twofaces">' . "\n\t\t\t";

		$output .= '<img width="380" height="380" alt="" src="' . $img_2['url'] . '">' . "\n\t\t\t";
		$output .= '<img width="380" height="380" alt="" src="' . $img_1['url'] . '">' . "\n\t\t\t";

		$output .= '<p>' . get_the_title() . '</p>' . "\n\t\t";
		$output .= '</div><!-- .circle-twofaces -->' . "\n\t\t";
	}

	$output .= '</div><!-- #licornes-list -->';

	wp_reset_postdata();

	return $output;
}
