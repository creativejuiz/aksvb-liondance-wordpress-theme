<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'AKSVB_THEME_VERSION', '1.0' );
define( 'AKSVB_DIR_URI'      , get_stylesheet_directory_uri()        );
define( 'AKSVB_THEME_ASSETS' , AKSVB_DIR_URI . '/assets/'            );
define( 'AKSVB_THEME_IMGS'   , AKSVB_DIR_URI . '/assets/images/'     );
define( 'AKSVB_THEME_CSS'    , AKSVB_DIR_URI . '/assets/css/'        );
define( 'AKSVB_THEME_JS'     , AKSVB_DIR_URI . '/assets/javascript/' );
define( 'AKSVB_OPTIONS_SLUG' , 'aksvb_options'                       );

/* Registers (navs, sidebars, etc.) */
require_once( 'inc/registers.php' );

/* Styles & Scripts */
require_once( 'inc/front/enqueue.php' );

/* Pieces of reused code (HTML) */
require_once( 'inc/front/templates.php' );

/* Edit Walkers */
require_once( 'inc/front/walkers.php' );

/* Localization functions */
require_once( 'inc/front/localization.php' );

/* Shortcodes */
require_once( 'inc/front/shortcode-slideshow.php' );
require_once( 'inc/front/shortcode-licornes.php' );
require_once( 'inc/front/shortcode-dragons.php' );

/* Third Party codes (ACF Options Page, Contact Form 7, etc. ) */
require_once( 'inc/third-parties.php' );

if ( is_admin() ) {

	require_once( 'inc/back/rich-editor.php' );

}

?>