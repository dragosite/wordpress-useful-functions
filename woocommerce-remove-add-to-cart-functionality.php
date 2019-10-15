/** 
 * Disables Add to cart button and replaced it with Read more.
 **/

add_filter( 'woocommerce_is_purchasable', false );

/**
 * Disable all except specific products
 */

add_filter('woocommerce_is_purchasable', 'myplugin_is_purchasable', 10, 2);

function myplugin_is_purchasable( $is_purchasable, $object ) {
    // Checks to see if the product id is 22 or 23, 
    // returns true if is, false otherwise.  
    return ( 22 === $object->id || 23 === $object->id );
}
