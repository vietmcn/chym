<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
import_commp( 'logo', 'global' );
import_commp( 'navbars', 'global' );
import_commp( 'cart', 'wc' );

add_action( 'chym_header', function() {
    /**
     * Render Các Đối Tượng Trong Header
     * 
     * @since 1.0
     * @author Chym Con
     */
    global $mobile, $post;

    $out  = '<div flex id="chym-header" class="header-content">';
    
    if ( $mobile->isMobile() ) {

        $out .= Chym_navbar_m();

        $out .= Chym_logo( [
            'logo' => 'OzoneMienNam.com',
            'logo_title' => 'Máy Lộc Nước Ozone Miền Nam'
        ] );
        
        $out .= Chym_WC_Cart_m();
    }

    $out .= '</div>';
    //Render
    __render( $out );
} );