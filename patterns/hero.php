<?php
/**
 * Title: Hero
 * Slug: mozis/hero
 * Categories: mozis
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/banner.jpg' ) ); ?>","alt":"Mozis hero image","dimRatio":50,"overlayColor":"white","isUserOverlayColor":true,"focalPoint":{"x":0.56,"y":0.44},"contentPosition":"center center","isDark":false,"metadata":{"name":"Hero"},"align":"center","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover aligncenter is-light"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="Mozis hero image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/banner.jpg' ) ); ?>" style="object-position:56% 44%" data-object-fit="cover" data-object-position="56% 44%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
<h2 class="wp-block-heading" style="font-size:2.5rem;line-height:1"><?php esc_html_e( 'Simplicity Meets Functionality', 'mozis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<p style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Seamlessly blending clean design with efficient code. Every project is crafted for elegance, usability, and performance.', 'mozis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Contact Me', 'mozis') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->