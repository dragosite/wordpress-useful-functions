<?php
// Change 'add to cart' text on single product page
function dfm_add_to_cart_text() {
        return __( 'Add to cart', 'primalpictures' );
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'dfm_add_to_cart_text' );

// Change 'add to cart' text on archive product page
function dfm_archive_add_to_cart_text() {
        return __( 'add to cart', 'primalpictures' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'dfm_archive_add_to_cart_text' );
