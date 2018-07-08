<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'chym_index', function() {
    /**
     * Create Front Page
     * @since 1.0
     * @author chym
     */
    __render( '<section id="contentID" chym-product class="chym-products list-product chym-content container">' );

    if ( chym_is_woocommerce_activated() ) {
        /**
         * @import /wc/product-cat.php
         * @import /wc/product.php
         * @since 1.0
         */
        import_commp( 'product-cat', 'wc' );
        import_commp( 'product', 'wc' );
        __render(
            chym_product_content( [
                'posts_per_page' => 10,
                'orderby' => 'date',
                'order'   => 'DESC',
            ] )
        );
    } else {
        __render( '
            <div class="chym-front-index">
                <h3>Product Cart Chưa Setup</h3>
            </div>
        ');
    }

    __render( '</section>' );

} );