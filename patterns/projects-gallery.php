<?php
/**
 * Title: Projects gallery
 * Slug: buildora/projects-gallery
 * Categories: buildora
 * Description: Four completed project cards with photos and tags.
 *
 * @package Buildora
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#f2f3f5"},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f2f3f5;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="buildora-kicker">Recent work</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)">Projects we're proud of</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"buildora-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project-card">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo buildora_img( 'home-modern.jpg' ); ?>" alt="Modern custom home exterior"/><span class="buildora-project-tag">Custom Home</span></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"color":{"background":"#121316","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background has-text-color" style="background-color:#121316;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"fontSize":"large","style":{"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-large-font-size has-text-color" style="color:#ffffff">Maple Ridge Residence</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b9bdc4"}}} -->
					<p class="has-text-color" style="color:#b9bdc4;font-size:0.9rem">3,200 sq ft custom build · Burlington · 2025</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"buildora-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project-card">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo buildora_img( 'home-finished.jpg' ); ?>" alt="Finished family home"/><span class="buildora-project-tag">Renovation</span></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"color":{"background":"#121316","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background has-text-color" style="background-color:#121316;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"fontSize":"large","style":{"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-large-font-size has-text-color" style="color:#ffffff">Stoney Creek Revival</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b9bdc4"}}} -->
					<p class="has-text-color" style="color:#b9bdc4;font-size:0.9rem">Full-home renovation · Hamilton · 2025</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"buildora-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project-card">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo buildora_img( 'site-aerial.jpg' ); ?>" alt="Commercial site from above"/><span class="buildora-project-tag">Commercial</span></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"color":{"background":"#121316","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background has-text-color" style="background-color:#121316;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"fontSize":"large","style":{"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-large-font-size has-text-color" style="color:#ffffff">Parkway Business Hub</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b9bdc4"}}} -->
					<p class="has-text-color" style="color:#b9bdc4;font-size:0.9rem">12,000 sq ft office build · Hamilton · 2024</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"buildora-project-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group buildora-project-card">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo buildora_img( 'renovation.jpg' ); ?>" alt="Kitchen renovation"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"color":{"background":"#121316","text":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background has-text-color" style="background-color:#121316;color:#ffffff;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"fontSize":"large","style":{"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-large-font-size has-text-color" style="color:#ffffff">Dundas Kitchen &amp; Bath</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#b9bdc4"}}} -->
					<p class="has-text-color" style="color:#b9bdc4;font-size:0.9rem">Kitchen + 2 baths · Dundas · 2024</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">View All Projects</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
