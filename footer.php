<?php defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' ); ?>

		<div class="maps" id="gmaps"></div>

		<div class="footer" role="contentinfo">
			<div id="contact" class="headline-container">
				<div class="headline">
					<div class="logo-aksvb-w"></div>
					<p class="title">
						<?php _e( 'School of Kung Fu Shaolin Vu Ba', 'aksvb' ); ?>
					</p>
					<p class="subtitle">
						<?php _e( 'Sino-Vietnamese Traditionnal Martial Arts ', 'aksvb' ); ?>
					</p>
				</div>
			</div>

			<div class="contact">

				<div class="grid-container">
					<div class="grid-50">
						<h1 id="contact-title"><?php _e( 'Contact Us', 'aksvb' ); ?></h1>
							<p id="contact-desc">
							Pour toute demande de renseignement concernant les entraînements ou sollicitation pour participation à un événement, merci de remplir le formulaire ci-contre. Pour les demandes de devis, merci de décrire votre structure, d'indiquer le type d'événement - date et horaires compris -, et le nombre de danses, de têtes de licorne ou de dragons souhaités. Nous vous répondrons dans les plus brefs délais.</p>
					</div><!-- .grid-50 -->
					<div class="grid-50 grid-parent">
						
						<?php
						$fr = do_shortcode('[contact-form-7 id="142"]');

						if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
							// show FR contact form for french
							if ( ICL_LANGUAGE_CODE === 'fr' ) {
								echo $fr;
							}
							// show EN contact form for other visitors to encourage them contact
							else {
								echo do_shortcode('[contact-form-7 id="143" title="Contact Form"]');
							}
						} else {
							echo $fr;
						}
						?>
					</div><!-- .grid-50 -->

					<div class="grid-100"><div class="hr-line-2"></div></div>

				</div><!-- .grid-container -->
			</div><!-- .contact -->
				
			
			<div class="informations">
				<noscript>
					<div class="grid-container line acenter">
						<div class="grid-100">
							<?php echo get_aksvb_option( 'training_locations' ); ?>
						</div>
					</div>
				</noscript>
				<div class="grid-container line">
					<div class="grid-25 suffix-5 prefix-20 tablet-grid-35 tablet-suffix-5 tablet-prefix-10">
						<?php echo get_aksvb_option( 'contact_1' ); ?>
					</div>
					<div class="grid-30 prefix-5 suffix-15 tablet-grid-40 tablet-prefix-5 tablet-suffix-5">
						<?php echo get_aksvb_option( 'contact_2' ); ?>
					</div>
				</div><!-- .line -->

				<div class="grid-container line">
					<div class="grid-25 suffix-5 prefix-20 tablet-grid-35 tablet-suffix-5 tablet-prefix-10">
						<?php echo get_aksvb_option( 'hq' ); ?>
					</div>

					<div class="grid-30 prefix-5 suffix-15 tablet-grid-35 tablet-prefix-5 tablet-suffix-10">
						<img src="<?php echo AKSVB_THEME_IMGS; ?>ffkda-logo_2x.png" width="60" height="60" alt="Fédération Française de Karaté et disciplines associées">

						<p class="federation-line"><?php _e( 'Our school is part of French Federation of Karate and related disciplines.', 'aksvb' ); ?></p>
					</div>
				</div><!-- .line -->
			</div><!-- .informations -->

			<div class="credits">
				<div class="grid-container">
					<div class="grid-100">
						<p>Made by <a title="Opla - Studio de communication visuelle" href="http://www.opla-studio.com" class="opla-logo" target="_blank"></a> and <a href="http://www.cubestudio.fr/" class="cubestudio-logo" target="_blank">cubestudio</a><br>WordPress Theme by <a title="WebDesigner et Développeur Web spécialisé dans WordPress" href="http://geoffrey.crofte.fr/" target="_blank">Geoffrey Crofte</a>.</p>

						<a href="#top" class="top">
							<span></span>
							<span class="visuallyhidden"><?php _e( 'Go to top', 'aksvb' ); ?></span>
							<p id="triangle-mot" aria-hidden="true">Justesse</p>
						</a>

					</div>
				</div>
			</div><!-- .credits -->
		</div><!-- .footer -->
	</div><!-- .layout -->

	<?php wp_footer(); ?>

	<script>
		Modernizr.mq('only all') || document.write('<script src="<?php echo AKSVB_THEME_JS; ?>vendor/respond.min.js"><\/script>');
	</script>

	<script>
		Modernizr.input.placeholder || document.write('<script src="<?php echo AKSVB_THEME_JS; ?>vendor/jquery.placeholder.js"><\/script>');
	</script>

</body>
</html>