<?php 
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !function_exists( 'chym_footer_credit' ) ) {
    function chym_footer_credit()
    {
        return 'quanlegging.com';
    }
}
if ( !function_exists( 'Chym_footer_ht' ) ) {
    function Chym_footer_ht( $att = array() )
    {
        $out  = '<div class="chym-ht hotro-guest" id="chym-support">';
        $out .= '<div class="col-left"><span class="chym-icon icon-support"></span></div>';
        $out .= '<div class="col-right">';
        $out .= '<h3>'.$att['title'].' <span>(8h00 - 22h00)</span></h3>';
        $out .= '<p class="t-ms1">Mua hàng <a href="'.$att['phone']['key-1']['phone'].'">'.$att['phone']['key-1']['phone'].'</a></p>';
        $out .= '<p class="t-ms2">Giao Nhận - Bảo Hành <a href="'.$att['phone']['key-2']['phone'].'">'.$att['phone']['key-2']['phone'].'</a></p>';
        $out .= '</div>';
        $out .= '</div>';
        return $out;
    }
}