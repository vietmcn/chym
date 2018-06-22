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
         * @import /wc/product-cat.php;
         * @since 1.0
         */
        import_commp( 'product-cat', 'wc' );
        import_commp( 'product', 'wc' );
        __render(
            chym_product_cat().
            chym_product_content( [
                'posts_per_page' => 10,
                'orderby' => 'date',
                'order'   => 'DESC',
            ] )
        );
    }

    __render( '</section>' );

} );