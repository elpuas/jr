<?php

/**
 * Title: JR Post Query
 * Slug: jr-post-query
 * Description: A hero block with image to the left and content to the right.
 * Categories: text
 * Keywords: hero, header, image
 * Block Types: core/post-content
 */

// Path: themes/jr/patterns/jr-post-query.php
?>

<!-- wp:group {"tagName":"section","className":"jr-post-patterns","layout":{"type":"constrained"}} -->
<section class="wp-block-group jr-post-patterns"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"primary"} -->
        <div class="wp-block-column has-primary-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40);flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":55,"sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full"><img src="http://jr.local/wp-content/uploads/2023/01/featured-image-1-jpg.webp" alt="" class="wp-image-55" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"textAlign":"center","textColor":"white"} -->
                <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">My father taught me many things here</h2>
                <!-- /wp:heading -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Ver Mas</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":2,"query":{"perPage":"7","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"section","className":"post-patterns"} -->
            <section class="wp-block-query post-patterns"><!-- wp:post-template {"className":"has-grid-layout"} -->
                <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"white"} -->
                <div class="wp-block-columns has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:image {"align":"center","id":42,"sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image aligncenter size-full"><img src="http://jr.local/wp-content/uploads/2023/01/Screenshot-2023-01-08-at-11.20.30-jpg.webp" alt="" class="wp-image-42" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:75%"><!-- wp:post-title {"level":4} /-->

                        <!-- wp:post-excerpt {"moreText":"Leer Mas","fontSize":"size-14"} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </section>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->