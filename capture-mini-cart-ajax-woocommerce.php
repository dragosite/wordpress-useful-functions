<?php
// Capture mini cart Ajax
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    ?>
    <div id="mini-cart-count" class="cart-badge">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
