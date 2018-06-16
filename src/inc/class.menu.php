<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
class Custom_Menu
{
    protected $att = array();
    
    private function cart()
    {
        $out  = '<li>';
        $out .= '<a flex class="cart-contents" href="'.esc_url( wc_get_cart_url() ).'" title="'.esc_attr( 'Kiểm tra giỏ hàng của bạn', 'chymcon' ).'">';
        #$out .= wp_kses_post( WC()->cart->get_cart_subtotal() );
        $out .= '<ion-icon name="basket"></ion-icon>';
        $out .= '<span class="cart-count">';
        $out .= wp_kses_data( WC()->cart->get_cart_contents_count() );
        $out .= '</span>';
        $out .= '</a>';
        $out .= '</li>';
        return $out;
    }
    private function item( $att )
    {
        $out = '';
        foreach ($att as $name => $url) {
            $out .= '<li><a flex class="no-current" href="'.$url.'">'.$name.'</a></li>';
        }
        return $out;
    }
    public function menu( $att )
    {
        $out  = '<nav nav-menu id="menu-'.$att['class'].'">';
        $out .= '<ul flex class="ul-menu">';
        $out .= $this->item( $att['item'] );
        if ( isset( $att['cart'] ) === true ) {
            if ( chym_is_woocommerce_activated() ) {
                $out .= $this->cart();
            } else {
                $out .= '<li>Bạn chưa cài đặt Woocommerce</li>';
            }
        }
        $out .= '</ul>';
        $out .= '</nav>';
        return $out;
    }
}
$chym_menu = new Custom_Menu;