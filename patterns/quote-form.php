<?php
/**
 * Title: Quote request form
 * Slug: buildora/quote-form
 * Categories: buildora
 * Description: Two-column quote request section with form fields and blueprint photo.
 *
 * @package Buildora
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph -->
			<p><span class="buildora-kicker">Free quotes</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)">Tell us about your project</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6068"}}} -->
			<p class="has-text-color" style="color:#5b6068">Send the details and we'll come out for a site visit. Fixed quote within 48 hours — no obligation.</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"sizeSlug":"large","className":"is-style-steel-frame","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<figure class="wp-block-image size-large is-style-steel-frame" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo buildora_img( 'blueprint.jpg' ); ?>" alt="Reviewing project blueprints"/></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.1rem"},"color":{"text":"#121316"}}} -->
			<p class="has-text-color" style="color:#121316;font-size:1.1rem;font-weight:700">Prefer to talk? 📞 +1 (905) 555-0147</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:group {"className":"buildora-quote-form","style":{"color":{"background":"#f2f3f5"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-quote-form has-background" style="background-color:#f2f3f5;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:html -->
				<form action="#" method="post" onsubmit="return false;">
					<p><label for="bq-name">Full name</label><input id="bq-name" name="name" type="text" required placeholder="Jane Smith" /></p>
					<p><label for="bq-phone">Phone</label><input id="bq-phone" name="phone" type="tel" required placeholder="+1 (___) ___-____" /></p>
					<p><label for="bq-email">Email</label><input id="bq-email" name="email" type="email" required placeholder="jane@email.com" /></p>
					<p><label for="bq-type">Project type</label><select id="bq-type" name="project_type"><option>Custom home</option><option>Renovation</option><option>Addition / Extension</option><option>Commercial build</option><option>Repair / Maintenance</option><option>Something else</option></select></p>
					<p><label for="bq-msg">Project details</label><textarea id="bq-msg" name="message" rows="4" placeholder="Tell us about the site, timeline and budget range…"></textarea></p>
				</form>
				<!-- /wp:html -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:button {"className":"is-style-fill","width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Request My Free Quote</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#8a8f98"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<p class="has-text-align-center has-text-color" style="color:#8a8f98;font-size:0.85rem;margin-top:var(--wp--preset--spacing--30)">We reply within one business day. Your details stay private.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
