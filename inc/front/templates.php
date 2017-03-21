<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

/**
 * Prints the logo block (image + texts )
 * 
 * @return void
 * @since  1.0
 * @author Geoffrey Crofte
 */
function aksvb_logo() {
	echo '
		<p class="title">
			' . __( 'Lion Dance<br>Dragon Dance', 'aksvb' ) . '
		</p>
		<p class="subtitle">
			' . __( 'School of Kung Fu Shaolin Vu Ba', 'aksvb' ) . '
		</p>
		<div class="logo-aksvb-danse"></div>
	';
}

/**
 * Prints the lang switcher inside the header
 * @return void
 * @since  1.0
 * @author Geoffrey Crofte
 */
function aksvb_lang_switcher() {
	if ( function_exists( 'icl_get_languages' ) ) {
?>
	<div id="control-lang" class="lang-menu">
		<?php
		$langs = icl_get_languages('skip_missing=0&orderby=id&order=desc');

		$av_langs = $curr_lang = '';

		foreach( $langs as $lang ) {
			if( $lang['active'] ) {
				$curr_lang .= '<p>' . strtoupper( $lang['language_code'] ) . '</p>' . "\n\t";
				$av_langs  .= '<li><a href="' . $lang['url'] . '" class="on href-lang-' . $lang['language_code'] . '" hreflang="' . $lang['language_code'] . '" title="' . $lang['native_name'] . '">' . strtoupper( $lang['language_code'] ) . '</a></li>' . "\n\t";
			} else {
				$av_langs  .= '<li><a href="' . $lang['url'] . '" class="href-lang-' . $lang['language_code'] . '" hreflang="' . $lang['language_code'] . '" title="' . $lang['native_name'] . '">' . strtoupper( $lang['language_code'] ) . '</a></li>' . "\n\t";
			}
		}
		?>
		<?php echo $curr_lang; ?>
		<ul>
			<?php echo $av_langs; ?>
		</ul>
	</div>
<?php
	} // Eo if function exists
}

/**
 * Edit link for a post or page
 * 
 * @return void
 * @since 1.0
 * @author Geoffrey Crofte
 */
function aksvb_edit() {
	if ( is_user_logged_in() && current_user_can( 'edit_pages' ) ) {
?>

	<div class="grid-100 acenter">
		<br>
		<?php edit_post_link(); ?>
		<br>
	</div>

<?php
	}
}

/**
 * Return classes for sections with grid-* and optional prefix-*
 *
 * @param (int) $width The section width
 * @return (string) The classes
 * 
 * @since 1.0
 * @author Geoffrey Crofte
 */
function aksvb_classes_from_width( $width ) {
	$width  = (int) $width;
	$prefix = ( 100 - $width ) / 2;
	$class  = 'grid-' . $width;
	$class .= $width < 100 ? ' prefix-' . $prefix : '';

	return $class;
}

/**
 * Create the content from an ACF system
 * 
 * @return (void) echo content
 * @since 1.0
 * @author Geoffrey Crofte
 */
function aksvb_the_content() {
	if ( ! function_exists( 'get_field' ) ) {
		echo 'You should install ACF';
		return;
	}

	// $nb_layouts = count( get_field( 'layout' ) );
	
	if ( have_rows( 'sections' ) ) {
		// $nb = 0;
		while ( have_rows( 'sections' ) ) {
			the_row();
			// $nb++;
			// $last = $nb >= $nb_layouts ? true : false;
			
?>

		<div class="slice slice-<?php echo get_sub_field('color'); ?>">
			<div class="grid-container">

<?php

			if ( have_rows( 'lines' ) ) {
				while ( have_rows( 'lines' ) ) {	
					the_row();

					switch (get_row_layout()) {
						case 'text_full':
							$class = aksvb_classes_from_width( get_sub_field('content_width') );
?>

	<div id="<?php echo sanitize_key( get_sub_field( 'id' ) ); ?>" class="<?php echo $class; ?>">

		<?php echo get_sub_field('text'); ?>

	</div>

<?php
					//echo ! $last && get_sub_field( 'sep' ) ? get_aksvb_hr() : '';
							break;
						case 'image_full':
							$class = aksvb_classes_from_width( get_sub_field('content_width') );
							$img   = get_sub_field('image');
?>

	<div id="<?php echo sanitize_key( get_sub_field( 'id' ) ); ?>" class="<?php echo $class; ?>">
		<div class="imgs-container">
			<img class="circle" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>">
		</div>
	</div>

<?php
					//echo ! $last && get_sub_field( 'sep' ) ? get_aksvb_hr() : '';
							break;
						case 'image_left_33':
?>

	<div class="grid-40">
		<div class="imgs-container">
			<?php $img = get_sub_field('image'); ?>

			<img class="circle" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" width="<?php echo $img['width']; ?>" height="<?php echo $img['height']; ?>">
		</div>
	</div>

	<div id="<?php echo sanitize_key( get_sub_field( 'id' ) ); ?>" class="grid-55">

		<?php echo get_sub_field('text'); ?>

	</div>

<?php
					//echo ! $last && get_sub_field( 'sep' ) ? get_aksvb_hr() : '';
							break;
						case 'text_text':
?>

	<div id="<?php echo sanitize_key( get_sub_field( 'id' ) ); ?>" class="grid-100 grid-parent">
		<div class="grid-50 tablet-grid-50">

			<?php echo get_sub_field('text_1'); ?>

		</div>
		<div class="grid-50 tablet-grid-50">

			<?php echo get_sub_field('text_2'); ?>

		</div>
	</div>
	

<?php
					//echo ! $last && get_sub_field( 'sep' ) ? get_aksvb_hr() : '';
							break;
					} // Eo Switch template
				} // Eo if while have rows LINES
			} // Eo if have rows LINES
?>

			</div><!-- .grid-container -->
		</div><!-- .slice .slice-<?php echo get_sub_field('color'); ?> -->

<?php
		} // Eo While have rows SECTIONS
	} // Eo if have rows SECTIONS
}
