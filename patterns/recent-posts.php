<?php
/**
 * Title: Recent Posts
 * Slug: mozis/recent-posts
 * Categories: mozis
 */
?>
<!-- wp:group {"metadata":{"name":"Recent Posts"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","sizeSlug":"full","style":{"border":{"radius":"4px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.5px","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|dark"},":hover":{"color":{"text":"var:preset|color|brand"}}}}},"textColor":"dark","fontSize":"extra-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|dark"},":hover":{"color":{"text":"var:preset|color|brand"}}}}},"textColor":"dark","fontSize":"large"} /-->

<!-- wp:post-date {"fontSize":"small"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"align":"center"} -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e( 'No posts found', 'mozis' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
