<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !class_exists( 'Chym_WC_Pa' ) ) {
    class Chym_WC_Pa
    {
        protected $att = array();

        public function get_pa( $att )
        {
            $product_term = get_the_terms( $att['post_id'], $att['pa'] );
            if ( $product_term ) {
                foreach( $product_term as $pa ) {
                    return $pa->name;
                }
            }
        }
        public function pa_e( $att )
        {
            $pa = $this->get_pa( [
                'post_id' => $att['post_id'],
                'pa' => $att['pa'],
                ] );
            if ( $pa ) {
                $out .= '<span class="Chym-nhacungcap">';
                $out .= '<strong>'.$pa.'</strong>';
                $out .= '</span>';
                return $out;
            }
        }
        public function get_sku( $att )
        {
            $prodcut_sku = get_post_meta( $att['post_id'], '_sku', true );
            if ( $prodcut_sku ) {
                return '<p class="chym-sku">('.$prodcut_sku.')</p>';
            }
        }
    }
}