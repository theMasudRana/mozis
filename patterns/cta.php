<?php
/**
 * Title: Call to Action
 * Slug: mozis/cta
 * Categories: mozis
 * Keywords: cta, contact, action, link
 * BlockTypes: core/group, core/heading, core/paragraph, core/buttons
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"4px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small)">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Let\'s Work Together', 'mozis' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e( 'Have a project in mind? I\'d love to hear from you. Get in touch to discuss your ideas.', 'mozis' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
        <!-- wp:button -->
        <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Contact Me', 'mozis' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
