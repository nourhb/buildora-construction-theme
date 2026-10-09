<?php
/**
 * Title: Stats band
 * Slug: buildora/stats-band
 * Categories: buildora
 * Description: Animated counters over a construction site photo.
 *
 * @package Buildora
 */
?>
<!-- wp:cover {"url":"<?php echo buildora_img( 'site-aerial.jpg' ); ?>","dimRatio":80,"overlayColor":"ink","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Construction site from above" src="<?php echo buildora_img( 'site-aerial.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"3rem","fontWeight":"700"},"color":{"text":"#ffb020"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffb020;font-family:var(--wp--preset--font-family--display);font-size:3rem;font-weight:700"><span class="buildora-count" data-count="480">0</span>+</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Projects delivered</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"3rem","fontWeight":"700"},"color":{"text":"#ffb020"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffb020;font-family:var(--wp--preset--font-family--display);font-size:3rem;font-weight:700"><span class="buildora-count" data-count="22">0</span></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Years in business</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"3rem","fontWeight":"700"},"color":{"text":"#ffb020"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffb020;font-family:var(--wp--preset--font-family--display);font-size:3rem;font-weight:700"><span class="buildora-count" data-count="98">0</span>%</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">On-time completion</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"3rem","fontWeight":"700"},"color":{"text":"#ffb020"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffb020;font-family:var(--wp--preset--font-family--display);font-size:3rem;font-weight:700"><span class="buildora-count" data-count="5">0</span>-yr</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.14em","textTransform":"uppercase"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:0.9rem;letter-spacing:0.14em;text-transform:uppercase">Workmanship warranty</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->
