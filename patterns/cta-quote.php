<?php
/**
 * Title: Quote CTA band
 * Slug: buildora/cta-quote
 * Categories: buildora
 * Description: Bold call-to-action band over a worker photo.
 *
 * @package Buildora
 */
?>
<!-- wp:cover {"url":"<?php echo buildora_img( 'worker-action.jpg' ); ?>","dimRatio":75,"overlayColor":"ink","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-75 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Construction worker on site" src="<?php echo buildora_img( 'worker-action.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"textAlign":"center","level":2,"style":{"color":{"text":"#ffffff"}}} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Ready to break ground?</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem"},"color":{"text":"#dfe2e7"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#dfe2e7;font-size:1.15rem">Free site visit. Fixed quote in 48 hours. Let's talk about your project.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">Get My Free Quote</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-safety-outline"} -->
				<div class="wp-block-button is-style-safety-outline"><a class="wp-block-button__link wp-element-button" href="#">📞 +1 (905) 555-0147</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
