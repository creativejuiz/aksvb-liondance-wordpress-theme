<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

$page_title = get_bloginfo( 'title' ) . ' - ' . get_bloginfo( 'description' );
$lang = get_locale();

?><!DOCTYPE html><!--[if lte IE 8]><html class="no-js ie8 lte-ie9 lte-ie8" lang=""> <![endif]--><!--[if IE 9]><html class="no-js ie9 lte-ie9" lang=""> <![endif]--><!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php
		if ( is_front_page() ) {
			echo $page_title;
		} else {
			echo ( get_the_title() ? get_the_title() . ' - ' . $page_title : $page_title );
		}
	?></title>
	
	<link rel="icon" type="images/png" href="<?php echo AKSVB_DIR_URI; ?>/bookmark.png">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo AKSVB_DIR_URI; ?>/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="<?php echo AKSVB_DIR_URI; ?>/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="<?php echo AKSVB_DIR_URI; ?>/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?php echo AKSVB_DIR_URI; ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo AKSVB_DIR_URI; ?>/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo AKSVB_DIR_URI; ?>/favicon-32x32.png" sizes="32x32">

	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="<?php echo AKSVB_DIR_URI; ?>/mstile-144x144.png">

	<?php wp_head(); ?>
</head>
<body>
<!--[if lt IE 8]>
        <p class="browsehappy">[!] Votre navigateur est périmé. Il contient des failles de sécurité et pourrait ne pas afficher certaines fonctionnalités du site internet. [!]<br /><a href="http://browsehappy.com/">Découvrez comment mettre votre navigateur à jour</a></p><![endif]-->
	<div class="layout" id="top">
		<header class="hero-banner" role="banner">
			<video autoplay loop muted poster="<?php echo AKSVB_DIR_URI; ?>/assets/images/lion-dance.jpg">
				<source src="<?php echo AKSVB_DIR_URI; ?>/assets/videos/lion.mp4" type="video/mp4">
				<source src="<?php echo AKSVB_DIR_URI; ?>/assets/videos/lion.webm" type="video/webm">
				<source src="<?php echo AKSVB_DIR_URI; ?>/assets/videos/lion.ogv" type="video/ogv">
			</video>
			<div class="container">
				<p class="hb-logo">
				
				<?php aksvb_big_logo(); ?>

				</p>
				<?php
				$and = '<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="68" height="58" viewBox="0 0 68 58"><title>&amp;</title><defs><path id="and-b" d="M720.824514,375.692969 C716.742462,378.798453 712.426099,380.351172 707.875295,380.351172 C704.769811,380.351172 702.255187,379.433212 700.33135,377.597266 C698.407512,375.761319 697.445607,373.368765 697.445607,370.419531 C697.445607,364.735909 701.47877,360.019159 709.545217,356.269141 C708.295211,353.105062 707.670217,350.566025 707.670217,348.651953 C707.670217,345.761314 708.661418,343.358994 710.64385,341.444922 C712.626281,339.53085 715.121374,338.573828 718.129201,338.573828 C722.504223,338.573828 724.691701,340.507403 724.691701,344.374609 C724.691701,347.948846 721.185877,351.679277 714.174123,355.566016 C714.388968,356.034768 714.51592,356.317968 714.554982,356.415625 L715.345998,358.026953 C716.010064,359.394147 716.508106,360.3707 716.840139,360.956641 C719.789372,357.851156 724.349873,356.298438 730.521779,356.298438 L734.535451,356.298438 L736.644826,356.269141 C740.101875,356.269141 742.562788,355.84434 744.027639,354.994727 C745.49249,354.145113 746.224904,352.714463 746.224904,350.702734 C746.224904,349.530854 745.648738,348.35899 744.496389,347.187109 L747.748342,343.905859 C748.568658,344.999615 748.978811,346.38632 748.978811,348.066016 C748.978811,351.776972 747.401678,354.735926 744.247365,356.942969 C741.093053,359.150011 736.879227,360.253516 731.605764,360.253516 L731.07842,360.253516 C730.082321,364.843382 727.738595,368.993731 724.04717,372.704688 C726.019836,375.458608 727.84599,376.835547 729.525686,376.835547 C730.873348,376.835547 732.279584,375.819932 733.744436,373.788672 C734.056937,374.062111 734.213186,374.384373 734.213186,374.755469 C734.213186,375.771099 733.378233,376.95761 731.708303,378.315039 C730.038372,379.672468 728.578426,380.351172 727.32842,380.351172 C725.492473,380.351172 723.324526,378.798453 720.824514,375.692969 Z M720.033498,374.696875 L719.330373,373.730078 C716.166295,369.2574 713.314761,364.179325 710.775686,358.495703 L710.277639,357.382422 C705.179957,359.862903 702.631154,363.583569 702.631154,368.544531 C702.631154,371.239857 703.519817,373.456632 705.29717,375.194922 C707.074523,376.933212 709.330359,377.802344 712.064748,377.802344 C714.721011,377.802344 717.377235,376.767198 720.033498,374.696875 Z M713.73467,354.511328 C718.324537,351.816002 720.619436,348.739861 720.619436,345.282813 C720.619436,343.93515 720.15069,342.773052 719.213186,341.796484 C718.275681,340.819917 717.162411,340.331641 715.873342,340.331641 C712.904577,340.331641 711.420217,342.187091 711.420217,345.898047 C711.420217,347.890244 712.191693,350.761309 713.73467,354.511328 Z M723.197561,371.65 C725.814761,367.860919 727.27959,364.062128 727.592092,360.253516 L726.742482,360.253516 C722.543243,360.253516 719.428039,360.810151 717.396779,361.923438 C717.748344,362.567972 717.95342,362.948828 718.012014,363.066016 L720.004201,366.49375 C721.469052,369.013294 722.533495,370.732027 723.197561,371.65 Z"/><filter id="and-a" width="200%" height="200%" x="-50%" y="-50%" filterUnits="objectBoundingBox"><feOffset in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="4"/><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0"/></filter></defs><g fill="none" fill-rule="evenodd" transform="translate(-689 -330)"><use fill="#000" filter="url(#and-a)" xlink:href="#and-b"/><use fill="#FFF" xlink:href="#and-b"/></g></svg>';
				?>

				<p class="hb-catch-phrase">
					<?php if ( $lang == 'fr_FR' ) { ?>
					Licorne <?php echo $and; ?> Dragon <span>au cœur de la tradition</span>
					<?php } else { ?>
					Lion <?php echo $and; ?> Dragon <span>at the heart of tradition</span>
					<?php } ?>
				</p>

				<p class="hb-ctas">
					<a class="hb-button" href="#video" class="fullscreen-video">
						<svg width="37" height="27" viewBox="0 0 37 27"><path fill="#FFF" fill-rule="evenodd" d="M3.87209302,0 C1.73442233,0 0,1.75558677 0,3.91933054 L0,23.0806477 C0,25.2443915 1.73442233,27 3.87209302,27 L33.127907,27 C35.2655777,27 37,25.2443915 37,23.0806477 L37,3.91933054 C37,1.75558677 35.2655777,0 33.127907,0 L3.87209302,0 Z M4.52595889,1.43548359 L32.4740411,1.43548359 C34.0749895,1.43548359 35.3510496,2.72711399 35.3510496,4.34758543 L35.3510496,22.6523938 C35.3510496,24.2728652 34.0749895,25.5645164 32.4740411,25.5645164 L4.52595889,25.5645164 C2.92501054,25.5645164 1.64895043,24.2728652 1.64895043,22.6523938 L1.64895043,4.34758543 C1.64895043,2.72711399 2.92501054,1.43548359 4.52595889,1.43548359 Z M14.3580747,6.0102745 C14.1434073,6.0638877 13.9928369,6.28660579 14.0004553,6.53925169 L14.0004553,20.4793515 C13.9998482,20.4949433 13.9998482,20.5105586 14.0004553,20.5261504 C14.0153339,20.7084281 14.1119901,20.868464 14.2552615,20.9480392 C14.3985329,21.0276144 14.5675374,21.0151305 14.7007933,20.9151291 L25.1760619,13.9450767 C25.3089786,13.8495796 25.3897404,13.6819849 25.3897404,13.5016569 C25.3897404,13.321329 25.3089786,13.1537343 25.1760619,13.0582371 L14.7007933,6.08818972 C14.6001283,6.01072971 14.4767545,5.98273511 14.3580747,6.01042385 L14.3580747,6.0102745 Z M15.4749273,8.17892617 L23.703125,13.4999652 L15.4749273,18.8210521 L15.4749273,8.17892617 Z"/></svg>
						<?php if ( $lang == 'fr_FR' ) { ?>
							Voir la vidéo
						<?php } else { ?>
							Watch the video
						<?php } ?>
					</a>

					<a href="#main" class="hb-button">
						<svg width="24" height="23" viewBox="0 0 24 23"><g fill="#FFF" fill-rule="evenodd"><polygon points="11.6 12.2 21.6 22.2 23.1 20.8 11.6 9.3 .1 20.8 1.6 22.2" transform="rotate(-180 11.6 15.75)"/><polygon points="11.6 2.8 21.6 12.9 23.1 11.4 11.6 0 .1 11.4 1.6 12.9" transform="rotate(-180 11.6 6.45)"/></g></svg>
						<?php if ( $lang == 'fr_FR' ) { ?>
							En apprendre plus
						<?php } else { ?>
							Learn More
						<?php } ?>
					</a>
				</p>

				<a href="#main" class="scroll"><svg width="25" height="59" viewBox="0 0 25 59"><g fill="#FFF" fill-rule="evenodd"><path d="M13.8140162,1.42108547e-14 L11.1859838,1.42108547e-14 C5.05390836,1.42108547e-14 2.13162821e-14,5.05119454 2.13162821e-14,11.331058 L2.13162821e-14,28.668942 C2.13162821e-14,34.8805461 4.98652291,40 11.1859838,40 L13.8140162,40 C19.9460916,40 25,34.9488055 25,28.668942 L25,11.2627986 C25,5.05119454 20.0134771,1.42108547e-14 13.8140162,1.42108547e-14 Z M22.8036466,29.623841 C22.8036466,34.0501545 18.9449104,37.7133106 14.100965,37.7133106 L10.899035,37.7133106 C6.13719033,37.7133106 2.19635338,34.1264703 2.19635338,29.623841 L2.19635338,10.2396402 C2.19635338,5.81332669 6.05508956,2.15017065 10.899035,2.15017065 L14.100965,2.15017065 C18.8628097,2.15017065 22.8036466,5.73701094 22.8036466,10.2396402 L22.8036466,29.623841 Z" transform="rotate(-180 12.5 20)"/><path d="M13,7 C11.8666667,7 11,7.85628743 11,8.9760479 L11,16.0239521 C11,17.1437126 11.8666667,18 13,18 C14.1333333,18 15,17.1437126 15,16.0239521 L15,8.9760479 C15,7.92215569 14.1333333,7 13,7 Z" transform="rotate(-180 13 12.5)"/><polygon points="13 52.023 19.957 59 21 58.023 13 50 5 58.023 6.043 59" transform="rotate(-180 13 54.5)"/><polygon points="13 44.953 19.957 52 21 50.953 13 43 5 50.953 6.043 52" transform="rotate(-180 13 47.5)"/></g></svg><span class="visuallyhidden"><?php _e( 'Main content', 'aksvb-lion' ); ?></span></a>
			</div>
		</header>
		<div class="header" id="header">
			<div class="header-title-container">
				<a class="facebook-logo hide-on-minimobile" href="https://www.facebook.com/pages/AKSVB-Association-Kung-Fu-Shaolin-Vu-Ba-de-Strasbourg/132182993618772" title="Page Facebook de l'AKSVB (s'ouvre dans un nouvel onglet)" target="_blank"><span class="visuallyhidden">Facebook</span></a>

				<span class="title-aksvb">
					<?php aksvb_logo(); ?>
				</span>	
			</div>
			
			<?php
				// main navigation
				$main_nav = array(
					'menu'            => 'main_navigation',
					'container'       => '',
					'theme_location'  => 'main_navigation',
					'menu_id'         => 'header-menu',
					'menu_class'      => 'header-menu'
					//'walker'          => new AKSVB_Walker_Nav_Menu()
				);

				wp_nav_menu( $main_nav );
				
				// language switcher
				aksvb_lang_switcher();
			?>

			<div id="control-menu-mobile" class="control-menu-mobile hide-on-desktop"><span></span></div>
		</div><!-- .header -->

