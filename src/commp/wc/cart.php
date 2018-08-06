<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !function_exists( 'Chym_WC_Cart_m' ) ) {
    function Chym_WC_Cart_m()
    {
        $out  = '<div class="Chym-WCcart">';
        $out .= '<a class="cart-contents" href="'.esc_url( wc_get_cart_url() ).'" title="'.esc_attr( 'Kiểm Tra Giỏ Hàng Của Bạn', 'chym' ).'">';
        $out .= '<ion-icon name="cart"></ion-icon>';
        if ( WC()->cart->get_cart_contents_count() !== 0 ) {
            $out .= '<span class="count">'.wp_kses_data( WC()->cart->get_cart_contents_count() ).'</span>';
        }
        $out .= '</a>';
        $out .= '</div>';
        return $out;
    }
}