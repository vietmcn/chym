<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'chym_index', function() {

    global $mobile;
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
        import_commp( 'owlcarousel', 'global' );
        import_commp( 'product', 'wc' );
        //Render Owl
        __render( Chym_owl_m([
            'item' => [
                's1' => [ 
                    'img' => 'https://i.imgur.com/KDwAnY7.png',
                    'link' => '#',
                ],
                's2' => [
                    'img' => 'https://i.imgur.com/5sagBRE.png',
                    'link' => '#',
                ],
                's3' => [
                    'img' => 'https://i.imgur.com/FoGbLu6.png',
                    'link' => '#',
                ],
                's4' => [
                    'img' => 'https://i.imgur.com/PgufLke.png',
                    'link' => '#',
                ],
                's5' => [
                    'img' => 'https://i.imgur.com/ParoOaM.png',
                    'link' => '#',
                ],
                's6' => [
                    'img' => 'https://i.imgur.com/j4aAI68.png',
                    'link' => '#',
                ],
                's7' => [
                    'img' => 'https://i.imgur.com/5sagBRE.png',
                    'link' => '#',
                ],
                's8' => [
                    'img' => 'https://i.imgur.com/EgY4mAU.png',
                    'link' => '#',
                ],
                's9' => [
                    'img' => 'https://i.imgur.com/VGyAIDw.png',
                    'link' => '#',
                ]
            ],
        ] ) );
        //BreadCrumb
        import_commp( 'breadcrumb', 'global' );
        __render( chym_breadcrumb() );
        //Render Product List Item
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