<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'chym_page', function() {
    /**
     * Create Front Page
     * @since 1.0
     * @author chym
     */
    __render( '<section id="contentID" flex chym-product class="chymproducts list-product chym-content container">' );

    if ( chym_is_woocommerce_activated() ) {
        /**
         * @import /shop/front.php;
         * @since 1.0
         */
        import_commp( 'front', 'shop' );
    }

    __render( '</section>' );

} );