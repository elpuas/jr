<?php

/**
 * Title: JR Hero
 * Slug: jr-hero
 * Description: A hero block with image to the left and content to the right.
 * Categories: text
 * Keywords: hero, header, image
 * Block Types: core/post-content
 */

// Path: themes/jr/patterns/jr-hero.php
?>

<!-- wp:group {"tagName":"section","backgroundColor":"black","className":"alignfull","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-black-background-color has-background"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":30,"sizeSlug":"large","linkDestination":"none","className":"is-image-grayscale"} -->
            <figure class="wp-block-image size-large is-image-grayscale"><img src="/wp-content/uploads/2023/01/3b052386-f618-426a-8ed8-4a269f7ac9d5-682x1024.webp" alt="" class="wp-image-30" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textColor":"white"} -->
            <h2 class="wp-block-heading has-white-color has-text-color">Godfather ipsum dolor sit amet. Te salut, Don Corleone. </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"dropCap":true,"textColor":"white"} -->
            <p class="has-drop-cap has-white-color has-text-color">Don't ever give an order like that again. Not while I'm alive. I want your answer and the money by noon tomorrow. And one more thing. Don't you contact me again, ever. </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->