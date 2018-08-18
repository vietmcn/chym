<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
require N_EXTEND_FOLDER .'/src/wc/global/price.php'; //import price
require N_EXTEND_FOLDER .'/src/wc/global/product-thumbnail.php'; //import thumbnail
require N_EXTEND_FOLDER .'/src/wc/global/pa.php'; //import thumbnail

add_action( 'woocommerce_before_shop_loop_item', function() {
    /**
     * Custom Link Open
     * 
     * @version 3.4+
     * @author Chym
     * @since 1.0
     */
    global $post;
    __render( '<a flex href="'.esc_url( get_permalink( $post->ID ) ).'" title="'.esc_attr( get_the_title( $post->ID ) ).'">');
}, 10 );

add_action( 'woocommerce_before_shop_loop_item_title', function() {
    /**
     * Custom Template Thumbnail Woocommerce in archive
     * 
     * @version 3.4+
     * @author Chym
     * @since 1.0
     */
    global $post;
    $price = new Chym_WC_Product_thumbnail;
    __render( 
        $price->thumbnail_e ( [
            'post_id' => $post->ID,
            'alt' => get_the_title( $post->ID ),
        ] )
    );
}, 10 );

add_action( 'woocommerce_shop_loop_item_title', function() {
    /**
     * Custom Open Info Product
     * 
     * @version 3.4+
     * @author Chym
     * @since 1.0
     */
    __render( '<div class="chym-product-info">' );
}, 5 );

add_action( 'woocommerce_shop_loop_item_title', function() {
    /**
     * Custom Open Info Product
     * 
     * @version 3.4+
     * @author Chym
     * @since 1.0
     */
    global $post;
    $price = new Chym_WC_Price;
    $pa = new Chym_WC_Pa;
    __render( 
        $price->get_price( [
            'post_id' => $post->ID,
        ] )
    );
    __render( 
        $pa->pa_e( [
            'post_id' => $post->ID,
            'pa' => 'pa_nha-cung-cap',
        ] )
    );
}, 10 );

add_action( 'woocommerce_after_shop_loop_item_title', function() {
    /**
     * Custom After Info Product
     * 
     * @version 3.4+
     * @author Chym
     * @since 1.0
     */
    __render( '</div>' );
}, 15 );
