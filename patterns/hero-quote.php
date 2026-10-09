<?php
/**
 * Title: Hero with quote CTA
 * Slug: buildora/hero-quote
 * Categories: buildora
 * Description: Full-width industrial hero with headline, trust badges and a Get a Quote call to action.
 *
 * @package Buildora
 */
?>
<!-- wp:cover {"url":"<?php echo buildora_img( 'hero-site.jpg' ); ?>","dimRatio":65,"overlayColor":"ink","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-65 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Construction site with scaffolding and worker" src="<?php echo buildora_img( 'hero-site.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#ffb020"}}} -->
			<p class="has-text-color" style="color:#ffb020;font-size:0.85rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase"><span class="buildora-kicker">Licensed &amp; Insured · Since 2004</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display","textTransform":"uppercase"},"color":{"text":"#ffffff"}}} -->
			<h1 class="wp-block-heading has-text-color" style="color:#ffffff">We build it right.<br>The first time.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem"},"color":{"text":"#dfe2e7"}}} -->
			<p class="has-text-color" style="color:#dfe2e7;font-size:1.2rem">Custom homes, renovations and commercial builds across Ontario — on time, on budget, zero surprises.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">Get a Free Quote</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-safety-outline"} -->
				<div class="wp-block-button is-style-safety-outline"><a class="wp-block-button__link wp-element-button" href="#">📞 +1 (905) 555-0147</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:0.9rem;font-weight:600">✓ 480+ projects delivered</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:0.9rem;font-weight:600">✓ 5-year workmanship warranty</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
				<p class="has-text-color" style="color:#ffffff;font-size:0.9rem;font-weight:600">✓ WSIB covered crew</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
