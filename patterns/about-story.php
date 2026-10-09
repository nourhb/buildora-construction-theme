<?php
/**
 * Title: About story
 * Slug: buildora/about-story
 * Categories: buildora
 * Description: Company story with founder photo and crew image.
 *
 * @package Buildora
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-steel-frame"} -->
			<figure class="wp-block-image size-large is-style-steel-frame"><img src="<?php echo buildora_img( 'worker-team.jpg' ); ?>" alt="Buildora construction crew on site"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph -->
			<p><span class="buildora-kicker">Our story</span></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30)">Built on sweat, kept on trust</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6068"}}} -->
			<p class="has-text-color" style="color:#5b6068">Buildora started in 2004 with one pickup truck, two brothers, and a simple rule: treat every home like it's your own. Twenty-two years later we run our own crews — no day labour, no disappearing subcontractors.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"color":{"text":"#5b6068"}}} -->
			<p class="has-text-color" style="color:#5b6068">What hasn't changed: fixed quotes, weekly updates, and a site left cleaner than we found it.</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:image {"sizeSlug":"medium","className":"is-style-steel-frame"} -->
					<figure class="wp-block-image size-medium is-style-steel-frame"><img src="<?php echo buildora_img( 'worker-portrait.jpg' ); ?>" alt="Founder on site wearing hard hat"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
					<p style="font-weight:700">Marco Bianchi</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#8a8f98"}}} -->
					<p class="has-text-color" style="color:#8a8f98;font-size:0.85rem">Founder &amp; Master Builder</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:list -->
					<ul>
						<!-- wp:list-item -->
						<li>✓ Licensed &amp; $5M insured</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li>✓ WSIB-covered in-house crew</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li>✓ 5-year workmanship warranty</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li>✓ 480+ projects across Ontario</li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
