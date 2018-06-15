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
    $out = '<section id="contentID" flex class="chym-content container">';

    if ( chym_is_woocommerce_activated() ) {

        $out .= import_commp( 'front', 'shop' );

    } else {

        $out .= '<div>Hello baby</div>';
    }

    $out .= '</section>';

    __render( $out );
} );