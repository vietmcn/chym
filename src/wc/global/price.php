<?php 
if ( !defined('ABSPATH') ) {
    exit;
}
if ( !class_exists('Chym_WC_Price') ) {
    class Chym_WC_Price
    {
        protected $att = array();
        
        public function get_price( $att )
        {
            $price_sale    = get_post_meta( $att['post_id'], '_sale_price', true );
            $price_regular = get_post_meta( $att['post_id'], '_regular_price', true );
            $price         = get_post_meta( $att['post_id'], '_price', true );
            
            $out  = '<div class="price-all price">';
            if ( !empty( $price_sale ) ) {
                $out .= '<p class="price_light price_sale"><span>'.number_format( $price_sale ).'đ</span></p>';
                $out .= '<p class="price_regular"><span>'.number_format( $price_regular ).'đ</span></p>';
            } else {
                $out .= '<p class="price_light price_old"><span>'.number_format( $price ).'</span></p>';
            }
            $out .= '</div>';
            return $out;
        }
    }
}
